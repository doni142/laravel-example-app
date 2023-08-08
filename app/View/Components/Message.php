<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Message extends Component
{
    public string $msg;
    public string $type;
    /**
     * Create a new component instance.
     */
    public function __construct(
        $msg, 
        $type
    )
    {
        $this->msg = $msg;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.message');
    }
}
