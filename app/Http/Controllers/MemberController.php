<?php

namespace App\Http\Controllers;
use App\Models\Member;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index() {
        return view('index')->with('members', Member::orderByDesc('created_at')->get());
    }
}
