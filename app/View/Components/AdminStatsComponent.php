<?php

namespace App\View\Components;

use App\Models\Booking;
use App\Models\Company;
use App\Models\Request;
use App\Models\User;
use Illuminate\View\Component;

class AdminStatsComponent extends Component
{

 
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {


    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $data['users'] = User::all();
        $data['requests'] = Request::all();
        $data['companies'] = Company::all();
        $data['events'] = Booking::all();
        return view('components.admin-stats-component', $data);
    }
}
