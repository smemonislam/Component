<?php

namespace App\View\Components\backend\form;

use Illuminate\View\Component;

class btn extends Component
{
    public $type;
    public $class;
    public $btnText;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $type=null, $class=null, $btnText=null )
    {
        $this->type = $type;
        $this->class = $class;
        $this->btnText = $btnText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.backend.form.btn');
    }
}
