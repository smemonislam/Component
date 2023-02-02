<?php

namespace App\View\Components\backend\profile;

use Illuminate\View\Component;

class listProfile extends Component
{
    public $user;
    public $class;
    public $headers;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $user=null, $class=null, $headers )
    {
        $this->user = $user;
        $this->class = $class;
        $this->headers = $headers;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.backend.profile.list-profile');
    }
}
