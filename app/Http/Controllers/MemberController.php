<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Trainer;
use App\Models\Membership;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index() {
        $members = Member::orderByDesc('created_at')->get();
        $trainers = Trainer::all();
        $membership = Membership::all();
        return view('index')->with('members', $members)
        ->with('trainers', $trainers)
        ->with('memberships', $membership);
    }

    //New Member Form
    public function create() {
        return view('functions.member.createMember');
    }

    //Create New Member
    public function store(Request $request) {

        $member = new Member;
        $member->name = $request->name;
        $member->email = $request->email;
        $member->membership_expiration = $request->membership_expiration;
        $member->trainer_id = $request->trainer_id;
        $member->membership_id = $request->membership_id;
        $member->save();

        return redirect()->route('index')->with('success', 'New Member added!');
    }

}
