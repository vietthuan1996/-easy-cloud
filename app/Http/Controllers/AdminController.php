<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Information;
use App\RequestAdvisory;
use App\Service;
use App\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Mail\MailAccount;
use View;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function dashboard() {
        if (!Auth::check())
        {
            return redirect()->route('admin.login');
        }
        $information = Information::select('company_name', 'address', 'hotline', 'email', 'website', 'describe', 'logo')->get()->first();
        return view('admin.dashboard', ['information' => $information]);
    }

    public function editInformation(Request $request) {
        $this->validate($request, [
            'company_name' => 'required',
            is_null($request->imageExsit) ? "'image' => 'required|mimes:jpeg,jpg,png'" : null,
            'address' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'website' => 'required',
            'describe' => 'required'
        ]);
        $linkImage = null;
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
            $linkImage = 'uploads/'.$filenametostore;
        }
        $information = Information::select('id', 'company_name', 'address', 'hotline', 'email', 'website', 'describe', 'logo')->get()->first();
        if (is_null($information)) {
            try {
                $insert = new Information();
                $insert->company_name = $request->company_name;
                $insert->address = $request->address;
                $insert->hotline = $request->phone;
                $insert->email = $request->email;
                $insert->website = $request->website;
                $insert->describe = $request->describe;
                $insert->logo = $linkImage;
                $insert->save();
            } catch (Illuminate\Database\QueryException $e) {
                return redirect()->route('admin')->with('fail', "Cập nhật thông tin thất bại !");
            }
        } else {
            try {
            $information->company_name = $request->company_name;
            $information->address = $request->address;
            $information->hotline = $request->phone;
            $information->email = $request->email;
            $information->website = $request->website;
            $information->describe = $request->describe;
            if ($linkImage != null) {
                $information->logo = $linkImage;
            }
            $information->save();
            } catch (Illuminate\Database\QueryException $e) {
                return redirect()->route('admin')->with('fail', "Cập nhật thông tin thất bại !");
            }
        }
        return redirect()->route('admin')->with('success', "Cập nhật thông tin thành công !");
    }

    public function service() {
        $service = Service::paginate(5);
        return view('admin.service', ['services' => $service]);
    }

    public function createService(Request $request) {
        $service = null;
        if (isset($request->id)) {
            $service = Service::find($request->id);
        }
        return view('admin.createService', ['service' => $service]);
    }

    public function saveService(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            is_null($request->imageExist) ? "'image' => 'required|mimes:jpeg,jpg,png'" : '',
            'describe' => 'required',
            'content' => 'required',
            'type_show' => 'required',
            'link' => 'required'
        ]);
        $linkImage = null;
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
            $linkImage = 'uploads/'.$filenametostore;
        }
        if ($request->id) {
            try {
                $service = Service::find($request->id);
                $service->name = $request->name;
                $service->slug = str_slug($request->name);
                $service->describe = $request->describe;
                $service->content = $request->content;
                $service->link = $request->link;
                $service->type_show = $request->type_show;
                if ($linkImage != null) {
                    $service->image = $linkImage;
                }
                $service->save();
            } catch (Illuminate\Database\QueryException $e) {
                return redirect()->back()->with('fail', "Cập nhật thông tin thất bại !");
            }
            return redirect()->back()->with('success', "Cập nhật thành công !");
        }
        try {
            $service = new Service();
            $service->name = $request->name;
            $service->slug = str_slug($request->name);
            $service->describe = $request->describe;
            $service->content = $request->content;
            $service->link = $request->link;
            $service->type_show = $request->type_show;
            $service->image = $linkImage;
            $service->save();
        } catch (Illuminate\Database\QueryException $e) {
            return redirect()->route('admin.createSolution')->with('fail', "Cập nhật thông tin thất bại !");
        }
        return redirect()->route('admin.service')->with('success', "Cập nhật thành công !");
    }

    public function removeService($id) {
        $service = Service::where('id', $id)->first();
        try {
            $service->delete();
        } catch (Illuminate\Database\QueryException $e) {
            return redirect()->route('admin.service')->with('fail', "Cập nhật thông tin thất bại !");
        }
        return redirect()->route('admin.service')->with('success', "Cập nhật thành công !");
    }

    public function solution() {
        $solution = Solution::paginate(5);
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
        $this->validate($request, [
            'name' => 'required',
            is_null($request->imageExist) ? "'image' => 'required|mimes:jpeg,jpg,png'" : " ",
            'describe' => 'required',
            'contentSolution' => 'required',
            'type_show' => 'required',
            'link' => 'required'
        ]);
        $linkImage = null;
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
            $linkImage = 'uploads/'.$filenametostore;
        }
        if ($request->id) {
            try {
                $solution = Solution::find($request->id);
                $solution->name = $request->name;
                $solution->slug = str_slug($request->name);
                $solution->describe = $request->describe;
                $solution->content = $request->contentSolution;
                $solution->link = $request->link;
                $solution->type_show = $request->type_show;
                if ($linkImage != null) {
                    $solution->image = $linkImage;
                }
                $solution->save();
            } catch (Illuminate\Database\QueryException $e) {
                return redirect()->back()->with('fail', "Cập nhật thông tin thất bại !");
            }
            return redirect()->back()->with('success', "Cập nhật thành công !");
        }
        try {
            $solution = new Solution();
            $solution->name = $request->name;
            $solution->slug = str_slug($request->name);
            $solution->describe = $request->describe;
            $solution->content = $request->contentSolution;
            $solution->link = $request->link;
            $solution->type_show = $request->type_show;
            $solution->image = $linkImage;
            $solution->save();
        } catch (Illuminate\Database\QueryException $e) {
            return redirect()->route('admin.createSolution')->with('fail', "Cập nhật thông tin thất bại !");
        }
        return redirect()->route('admin.solution')->with('success', "Cập nhật thành công !");
    }

    public function removeSolution($id) {
        $solution = Solution::where('id', $id)->first();
        try {
        $solution->delete();
        } catch (Illuminate\Database\QueryException $e) {
            return redirect()->route('admin.solution')->with('fail', "Cập nhật thông tin thất bại !");
        }
        return redirect()->route('admin.solution')->with('success', "Cập nhật thành công !");
    }

    public function requestAdvisory() {
        $requestAdvisory = RequestAdvisory::paginate(5);
        return view('admin.requestAdvisory', ['requestAdvisory' => $requestAdvisory]);
    }

    public function removeRequestAdvisory($id) {
        $requestAdvisory = RequestAdvisory::where('id', $id)->first();
        try {
            $requestAdvisory->delete();
        } catch (Illuminate\Database\QueryException $e) {
            return redirect()->route('admin.requestAdvisory')->with('fail', "Cập nhật thông tin thất bại !");
        }
        return redirect()->route('admin.requestAdvisory')->with('success', "Cập nhật thành công !");
    }

    public function adminInformation() {
        return view('admin.adminInformation');
    }

    public function changePassword(Request $request) {
        $admin = Auth::guard('admin')->user();
        $this->validate($request, [
            'currentPassword' => 'required',
            'password' => 'required|min:6|confirmed'
        ]);
        if (!Hash::check($request->currentPassword, $admin->password)) {
            return redirect()->back()->with('error', 'Mật khẩu hiện tại không đúng');
        }
        $admin->password = Hash::make($request->password);
        $admin->save();
        return redirect()->back()->with('success', 'Thay đổi mật khẩu thành công ');
    }

    public function adminManagement() {
        $admin = Admin::get();
        return view('admin.adminManagement', ['admin' => $admin]);
    }

    public function adminAddManagement(Request $request) {
        $this->validate($request, [
            'email' => 'required|email'
        ]);
        $email = Admin::query()->where("email", $request->email)->get()->first();
        if (is_null($email)) {
            $token_register = str_random(50);
            $register = Admin::insert(
                [
                    'email' => $request->email,
                    'token_register' => $token_register,
                    'password' => Hash::make(str_random(20)),
                    'role' => 0
                ]
            );
            if ($register)
            {
                $newAdmin = Admin::query()->where('email', $request->email)->get()->first();
                $url = route('mailregister',['token' => $token_register, 'id' => $newAdmin->id]);
                Mail::to($request->email)->send(new MailAccount($url));
                return back()->withInput(Session::flash('success', 'Success register member !'));
            }
        }
        else
        {
            return back()->withInput(Session::flash('fail', 'Email of member is exsit !'));
        }
    }


    public function adminRemoveManagement($id) {
        $admin = Admin::where('id', $id)->first();
        try {
            $admin->delete();
        } catch (Illuminate\Database\QueryException $e) {
            return redirect()->route('admin.adminAddManagement')->with('fail', "Cập nhật thông tin thất bại !");
        }
        return redirect()->route('admin.adminAddManagement')->with('success', "Cập nhật thành công !");
    }
}
