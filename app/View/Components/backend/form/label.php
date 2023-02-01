<?php

namespace App\View\Components\backend\form;

use Illuminate\View\Component;

class label extends Component
{

    public $for;
    public $class;
    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $for=null, $class=null, $label=null)
    {
        $this->for = $for;
        $this->class = $class;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.backend.form.label');
    }
}
