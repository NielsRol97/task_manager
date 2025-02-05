<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormField extends Component
{
    public $fieldClass;
    public $labelClass;
    public $inputClass;
    public $inputId; 
    public $inputName;
    public $inputValue;
    public $inputType;
    public $labelValue;

    /**
     * Create a new component instance.
     *
     * @param  string  $fieldClass
     * @param  string  $labelClass
     * @param  string  $inputClass
     * @param  string  $inputId
     * @param  string  $inputName
     * @param  string  $inputValue
     * @param  string  $inputType
     * @param  string  $labelValue
     */
    public function __construct(
        $fieldClass = 'form_field', 
        $labelClass = 'form_label',
        $labelValue = '',  
        $inputClass = 'form_input',  
        $inputId    = '',              
        $inputName  = '',            
        $inputValue = '',           
        $inputType  = 'text'       
    )
    {
        // Set default values if not provided
        $this->fieldClass   = $fieldClass;
        $this->labelClass   = $labelClass;
        $this->inputClass   = $inputClass;       
        $this->inputId      = $inputId;
        $this->inputName    = $inputName;
        $this->inputValue   = $inputValue;
        $this->inputType    = $inputType;
        $this->labelValue   = $labelValue;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-field');
    }
}
