<?php

namespace App\View\Components\backend\card;

use Illuminate\View\Component;

class table extends Component
{
    public $headers;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $headers)
    {
        $this->headers = $headers;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.backend.card.table');
    }
}
