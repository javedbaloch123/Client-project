<?php

namespace App\View\Components;

use App\Models\Project;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProjectDetail extends Component
{
    /**
     * Create a new component instance.
     */
    // public $data;
    public function __construct()
    {
        //  $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        
        return view('components.project-detail');
    }
}
