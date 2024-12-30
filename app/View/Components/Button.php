<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $text;
    public $type;
    public $class;
    public function __construct($text, $type , $class='')
    {
        $this->text = $text;
        $this->type = $type;
        $this->class = "border border-white px-4 py-2 rounded-full " .$class; 
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
