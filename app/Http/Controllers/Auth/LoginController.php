<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Toon het inlogformulier.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Verwerk een inlogverzoek naar de applicatie.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Valideer de invoer
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        // Haal de gegevens op
        $credentials = $request->only('email', 'password');

        // Probeer in te loggen
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended(route('dashboard.index'))->with('success', __('Je bent succesvol ingelogd.'));
        }

        // Foutmelding bij mislukte poging
        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
    }

    /**
     * Log de gebruiker uit de applicatie.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();

        // Ongeldig maken van de sessie
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('view.login'))->with('success', __('Je bent succesvol uitgelogd.'));
    }
}
