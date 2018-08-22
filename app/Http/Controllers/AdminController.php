<?php

namespace App\Http\Controllers;

use App\Image;
use App\Information;
use App\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Intervention\Image\ImageManagerStatic as Images;




class AdminController extends Controller
{
    public function dashboard() {
        $information = Information::select('company_name', 'address', 'hotline', 'email', 'website', 'describe')->get()->first();
        return view('admin.dashboard', ['information' => $information]);
    }

    public function editInformation(Request $request) {
        $information = Information::select('id', 'company_name', 'address', 'hotline', 'email', 'website', 'describe')->get()->first();
        if (is_null($information)) {
            $insert = new Information();
            $insert->company_name = $request->company_name;
            $insert->address = $request->address;
            $insert->hotline = $request->phone;
            $insert->email = $request->email;
            $insert->website = $request->website;
            $insert->describe = $request->describe;
            $insert->save();
        } else {
            $information->company_name = $request->company_name;
            $information->address = $request->address;
            $information->hotline = $request->phone;
            $information->email = $request->email;
            $information->website = $request->website;
            $information->describe = $request->describe;
            $information->save();
        }
        return redirect()->route('admin')->with('success', "Cập nhật thông tin thành công !");
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
        $solution = Solution::get();
        return view('admin.solution', ['solution' => $solution]);
    }

    public function createSolution(Request $request) {
        $solution = null;
        if (isset($request->id)) {
            $solution = Solution::find($request->id);
        }
        return view('admin.createSolution', ['solution' => $solution]);
    }

    public function saveSolution(Request $request) {
        if($request->hasFile('image')) {
            //get filename with extension
            $filenamewithextension = $request->file('image')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('image')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('image')->move(public_path("/uploads"), $filenametostore);

           'uploads/'.$filenametostore;
        }
        if ($request->id) {
            $solution = Solution::find($request->id);
            $solution->name = $request->name;
            $solution->describe = $request->describe;
            $solution->content = $request->contentSolution;
            $solution->link = $request->link;
            $solution->type_show = $request->type_show;

            $solution->save();
            return redirect()->back()->with('success', "Cập nhật thành công !");
        }
        return 0;
    }
    public function editSolution() {
        return view('admin.editPost');
    }

    public function requestAdvisory() {
        return view('admin.requestAdvisory');
    }

}
