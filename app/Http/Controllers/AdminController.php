<?php

namespace App\Http\Controllers;

use App\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AdminController extends Controller
{
    public function dashboard() {
        $information = Information::select('company_name', 'address', 'hotline', 'email', 'website', 'describe')->get()->first();
        if (is_null($information)) {
            $noneObject = new Information();
            return view('admin.dashboard', ['information' => $noneObject]);
        }
        return view('admin.dashboard', ['information' => $information]);
    }

    public function editInformation(Request $request) {
        return $request->phone;
        $information = Information::select('company_name', 'address', 'hotline', 'email', 'website', 'describe')->get()->first();
        if (is_null($information)) {
            $insert = new Information();
            $insert->company_name = $request->company_name;
            $insert->address = $request->address;
            $insert->hotline = $request->phone;
            $insert->email = $request->email;
            $insert->website = $request->website;
            $insert->describe = $request->describe;
            $insert->save();
        }
        return redirect()->route('admin');
    }

    public function service() {
        return view('admin.service');
    }

    public function createService() {
        return view('admin.createPost');
    }

    public function editService() {
        return view('admin.editPost');
    }

    public function solution() {
        return view('admin.solution');
    }

    public function createSolution() {
        return view('admin.createPost');
    }

    public function editSolution() {
        return view('admin.editPost');
    }

    public function requestAdvisory() {
        return view('admin.requestAdvisory');
    }

    public function createTab() {
        return view('admin.createTab');
    }
}
