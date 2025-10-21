<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Select extends Component
{
    public $label;
    public $name;
    public $options;
    public $selected;

    public function __construct($name, $options = [], $label = null, $selected = null)
    {
        $this->name = $name;
        $this->options = $options;
        $this->label = $label;
        $this->selected = old($name, $selected);
    }

    public function render()
    {
        return view('components.select');
    }
}
