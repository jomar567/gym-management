<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Trainer;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index() {
        $members = Member::latest()->get();
        $trainers = Trainer::all();
        return view('index')->with('members', $members)->with('trainers', $trainers);
    }
}
