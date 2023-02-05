<?php

namespace App\View\Components\backend\card;

use Illuminate\View\Component;

class topHeader extends Component
{
    public $title;
    public $href;
    public $class;
    public $content;
    public $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title=null, $href=null, $class=null, $content=null, $icon=null)
    {
        $this->title    = $title;
        $this->href     = $href;
        $this->class    = $class;
        $this->content  = $content;
        $this->icon     = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.backend.card.top-header');
    }
}
