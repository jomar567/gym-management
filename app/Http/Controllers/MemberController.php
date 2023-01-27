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

    //Show Member
    public function show($id)
    {
        $member = Member::findOrFail($id);
        return view('functions.member.showMember')->with('member', $member);
    }

    //New Member Form
    public function create() {
        $trainers = Trainer::all();
        $memberships = Membership::all();
        return view('functions.member.createMember')
            ->with('trainers', $trainers)
            ->with('memberships', $memberships);
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

    //Edit Form
    public function edit($id)
    {
        $member = Member::findOrFail($id);
        $trainers = Trainer::all();
        $memberships = Membership::all();
        return view('functions.member.editMember')->with('member', $member)
            ->with('trainers', $trainers)
            ->with('memberships', $memberships);;
    }

    //Update Member
    public function update(Request $request)
    {
        $member = Member::findOrFail($request->id);
        $member->name = $request->name;
        $member->email = $request->email;
        $member->membership_expiration = $request->membership_expiration;
        $member->trainer_id = $request->trainer_id;
        $member->membership_id = $request->membership_id;
        $member->save();

        return redirect()->route('index')->with('success', 'Member ' . $request->name . ' has been updated');
    }

    //Delete Member
    public function destroy(Request $request)
    {
        $member = Member::findOrFail($request->id);
        $member->delete();

        return redirect()->route('index')->with('success-delete', 'Member has been deleted');
    }

}
