<?php

namespace App\View\Components;

use App\Models\Company;
use App\Models\User;
use Illuminate\View\Component;

class AdminBodyComponent extends Component
{

    // public $users;
    // public $requests;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    //
    }
    // public function __construct( $users, $requests)
    // {
    //     $this->users = $users;
    //     $this->requests = $requests;
    // }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $data['users'] = User::with('info')->latest()->take(4)->get();
        $data['companies'] = Company::latest()->take(4)->get();
        return view('components.admin-body-component', $data);
    }
}
