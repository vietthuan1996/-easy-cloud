<?php

namespace App\Http\Controllers;

use App\Information;
use App\Service;
use App\Solution;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;

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
        return view('web.index', ['service' => $service]);
    }

    public function contact() {
        return view('web.contact');
    }

    public function solution() {
        $solution = Solution::get();
        return view('web.solution',['solution' => $solution]);
    }

    public function solutionDetail() {
        return view('web.postDetail');
    }

    public function service() {
        $service = Service::get();
        return view('web.service',['service' => $service]);
    }

    public function serviceDetail() {
        return view('web.postDetail');
    }
}
