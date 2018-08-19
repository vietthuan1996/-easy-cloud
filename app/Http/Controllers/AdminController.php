<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard');
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
