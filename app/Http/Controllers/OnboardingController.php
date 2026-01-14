<?php

namespace App\Http\Controllers;

use App\Mail\EngagementNotification;
use App\Models\Company;
use App\Models\Department;
use App\Models\Information;
use App\Models\Request as ModelsRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

use function PHPUnit\Framework\returnSelf;

class OnboardingController extends Controller
{
    public function contact_us()
    {

        return view('onboarding.contact-us');
    }

    public function for_talent()
    {

        return view('onboarding.talent-for');
    }

    public function for_company()
    {

        return view('onboarding.company-for');
    }

    public function testimony()
    {

        $testimonies = \App\Models\Testimony::all();

        return view('onboarding.testimonies', compact('testimonies'));
    }

    public function privacy()
    {

        return view('onboarding.privacy');
    }
    public function disclaimer()
    {

        return view('onboarding.disclaimer');
    }
    public function works()
    {

        return view('onboarding.works');
    }
    public function terms()
    {

        return view('onboarding.terms');
    }
    public function about_us()
    {

        return view('onboarding.about-us');
    }
    public function candidates_list()
    {
        $data['infos'] = Information::with('medias')
                    ->where('is_active', 1)
                    ->latest()->get();
        $data['depts'] = Department::all();
        return view('onboarding.candidates-list', $data);
    }
    public function employer_list()
    {

        $data['companies']= Company::where('is_active', 1)->latest()->get();
        $data['depts'] = Department::all();
        return view('onboarding.employer-list', $data);
    }
    public function sectors_list()
    {

        // $data['sectors']= Company::latest()->get();
        $data['department'] = Department::all();
        return view('onboarding.sectors-list', $data);
    }

    public function job_list()
    {

        return view('onboarding.job-list');
    }
    // public function portfolio()
    // {

    //     return view('onboarding.portfolio');
    // }
    public function portfolio()
    {

        return view('onboarding.porty');
    }
    public function portfolio_colors()
    {

        return view('onboarding.portfolio-colors');
    }

    public function candidateDetails($info_email)
    {

        $information = Information::whereEmail($info_email)->first();
        $user = User::where('id', $information->user_id)->get();
        return view('onboarding.candidate.single', compact('user', 'information'));
    }

    public function candidateEngage($user_id, Request $request)
    {


        dd($request->all());

            $user = User::findOrFail($user_id);
            $information = Information::where('user_id', $user->id)->first();

            $messageContent = $request->message;

            $req = new ModelsRequest();
            $req->request_message = $request->message;
            $req->company_email = $request->company_email;
            $req->company_name = $request->company_name;
            $req->user_id = $user->id;
            $req->information_id = $information->id;
            $req->save();

            Mail::to($request->company_email)
                ->cc('clintonace09@gmail.com')
                ->send(new EngagementNotification($messageContent, $information, $user, $req));

                Alert::success('Success', 'Email Sent Successfully to both parties. Hold on for a reply.');

                return back();
    }

    public function candidateSearch(Request $request)
    {

        // dd($request->all());
        $data['infos'] = Information::with('medias')->where('is_active', 1)->where('department','LIKE', '%'.$request->department.'%')->latest()->get();
        $data['depts'] = Department::all();
        return view('onboarding.candidates-list', $data);

    }
    public function companySearch(Request $request)
    {


        $data['companies']= Company::where('company_name', 'LIKE', '%' . $request->company_name . '%')
                                    ->where('company_sector', 'LIKE', '%' . $request->department . '%')
                                    ->latest()->get();  


        $data['depts'] = Department::all();

        return view('onboarding.employer-list', $data);

    }
}
