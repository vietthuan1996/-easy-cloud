<?php

namespace App\Http\Controllers;

use App\Information;
use App\RequestAdvisory;
use App\Service;
use App\Solution;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $service = Service::limit(5)->get();
        $information = Information::get()->first();
        View::share(['serviceSetting' => $service, 'informationSetting' => $information]);
    }
    public function index() {
        $service = Service::limit(3)->get();
        return view('web.index', ['service' => $service, 'active' => 'home']);
    }

    public function contact() {
        return view('web.contact', ['active' => 'contact']);
    }

    public function solution() {
        $solution = Solution::get();
        return view('web.solution',['solution' => $solution, 'active' => 'solution']);
    }

    public function solutionDetail($slug) {
        $solution = Solution::where('slug', $slug)->get()->first();
        if(!$solution) {
            throw abort(404);
        }
        return view('web.solutionDetail',['solution' => $solution, 'active' => 'solution']);
    }

    public function service() {
        $service = Service::get();
        return view('web.service',['service' => $service, 'active' => 'service']);
    }

    public function serviceDetail($slug) {
        $service = Service::where('slug', $slug)->get()->first();
        if(!$service) {
            throw abort(404);
        }
        return view('web.serviceDetail',['service' => $service, 'active' => 'service']);
    }

    public function receiveContact(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'name' => 'required',
            'content' => 'required',
        ]);
        $contact = new RequestAdvisory();
        $contact->email = $request->email;
        $contact->name = $request->name;
        $contact->content = $request->content;
        $contact->save();
        return redirect()->back()->with('success', "Gửi liên hệ thành công, xin cảm ơn !");
    }

}
