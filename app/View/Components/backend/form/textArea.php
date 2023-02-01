<?php

namespace App\View\Components\backend\form;

use Illuminate\View\Component;

class textArea extends Component
{
    public $id;
    public $rows;
    public $label;
    public $class;
    public $value;
    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $id=null, $rows=null, $name=null, $label=null, $class=null, $value=null )
    {
        $this->id = $id;
        $this->rows = $rows;
        $this->name = $name;
        $this->label = $label;
        $this->class = $class;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.backend.form.text-area');
    }
}
