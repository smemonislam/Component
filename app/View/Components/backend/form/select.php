<?php

namespace App\View\Components\backend\form;

use Illuminate\View\Component;

class select extends Component
{
    public $id;
    public $class;
    public $name;
    public $value;
    public $options;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $id=null, $class=null, $name=null, $value=null, $options=null )
    {
        $this->id       = $id;
        $this->class    = $class;
        $this->name     = $name;
        $this->value    = $value;
        $this->options   = $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.backend.form.select');
    }
}
