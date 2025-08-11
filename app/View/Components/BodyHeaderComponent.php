<?php

namespace App\View\Components;

use App\Models\Booking;
use App\Models\Company;
use App\Models\Information;
use App\Models\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class BodyHeaderComponent extends Component
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

        $data['users']= User::where('code', 3188)->get();
        $data['infos']= Information::all();
        $data['companies'] = Company::all();
        $data['requests'] = Request::all();
        $data['events'] = Booking::all();
        $data['user'] = Auth::user();
        return view('components.body-header-component', $data);
    }
}
