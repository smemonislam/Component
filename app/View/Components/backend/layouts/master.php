<?php

namespace App\View\Components\backend\layouts;

use Illuminate\View\Component;

class master extends Component
{
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $title = null )
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.backend.layouts.master');
    }
}
