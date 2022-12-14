<?php

namespace App\View\Components;

use Illuminate\View\Component;

class navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $navigations = [
            'Home' => '/',
            'About' => '/about',
            'Contact' => '/contact',
            'Profile' => '/profile',
            'Task' => '/task'

        ];
        return view('layouts.navbar', compact('navigations'));
    }
}
