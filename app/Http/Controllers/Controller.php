<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
        return view('web.index');
    }

    public function contact() {
        return view('web.contact');
    }

    public function solution() {
        return view('web.solution');
    }

    public function solutionDetail() {
        return view('web.postDetail');
    }

    public function service() {
        return view('web.service');
    }

    public function serviceDetail() {
        return view('web.postDetail');
    }
}
