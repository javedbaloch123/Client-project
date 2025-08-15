<?php

namespace App\View\Components;

use App\Models\WhyMe as ModelsWhyMe;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class whyMe extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $data = ModelsWhyMe::first();
        return view('components.why-me',compact('data'));
    }
}
