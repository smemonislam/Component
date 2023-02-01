<?php

namespace App\View\Components\backend\form;

use Illuminate\View\Component;

class inputText extends Component
{
    public $id;
    public $type;
    public $name;
    public $value;
    public $class;
    public $label;
    public $placeholder;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $id=null, $name=null, $type=null, $value=null, $class=null, $label=null, $placeholder=null )
    {
        $this->id           = $id;
        $this->type         = $type;
        $this->name         = $name;
        $this->value        = $value;
        $this->class        = $class;
        $this->label        = $label;
        $this->placeholder  = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.backend.form.input-text');
    }
}
