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
        $this->headers = $this->formatheader( $headers );
    }

    public function formatheader( $headers ){
        return array_map( function( $header ){
            $name = is_array( $header ) ? $header['name'] : $header;

            return [
                'name' => $name,
                'clasess' => $this->textAlignClasess( $header['align'] ?? 'left')
            ];
        }, $headers );
    }

    private function textAlignClasess( $align ){
        return [
            'left'  => 'text-left',
            'right'  => 'text-right',
            'center'  => 'text-center',
        ][$align] ?? 'text-left';
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
