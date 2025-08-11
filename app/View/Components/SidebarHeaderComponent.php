<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SidebarHeaderComponent extends Component
{

    public $users;
    public $requests;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($users, $requests)
    {
        $this->users = $users;
        $this->requests = $requests;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar-header-component');
    }
}
