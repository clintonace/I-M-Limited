<?php

namespace App\View\Components;

use App\Models\Company;
use App\Models\Department;
use App\Models\Information;
use App\Models\Testimony;
use Illuminate\View\Component;

class Bodylayout extends Component
{
    // public $infos;
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

        $data['infos'] = Information::where('is_active', 1)->latest()->get();
        $data['testimonies'] = Testimony::all();
        $data['companies'] = Company::where('is_active', 1)->latest()->get();
        $data['department'] = Department::all();
        return view('components.bodylayout', $data);
    }
}
