<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Input extends Component
{
    public $type;
    public $label;
    public $name;
    public $demo;
    /**
     * Create a new component instance.
     */
    public function __construct($type, $name, $label, $demo=0)
    {
        $this->type=$type;
        $this->name=$name;
        $this->label=$label;
        $this->demo=$demo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
