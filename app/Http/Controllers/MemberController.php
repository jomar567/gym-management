<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Trainer;
use App\Models\Membership;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index() {
        $members = Member::latest()->get();
        $trainers = Trainer::all();
        $membership = Membership::all();
        return view('index')->with('members', $members)
        ->with('trainers', $trainers)
        ->with('memberships', $membership);
    }
}
