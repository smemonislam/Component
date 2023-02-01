<?php

namespace App\View\Components\backend\form;

use Illuminate\View\Component;

class form extends Component
{
    public $action;
    public $method;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $action=null, $method=null)
    {
        $this->action = $action;
        $this->method = $method;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.backend.form.form');
    }
}
