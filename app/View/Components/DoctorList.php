<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DoctorList extends Component
{
    /**
     * Create a new component instance.
     */
    public $doctors;

    public function __construct($doctors)
    {
        $this->doctors = $doctors;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.doctor-list');
    }
}
