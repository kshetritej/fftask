<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $heading;
    public $description;
    public $class;
    public $image;
    public $price;
    public function __construct($heading, $price, $description, $class = '', $image = '')
    {
        $this->heading = $heading;
        $this->description = $description;
        $this->class = "max-w-[420px] " .$class; 
        $this->image = $image;
        $this->price= $price;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.card');
    }
}
