<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\TbUser;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::simplePaginate(10);
        return view('member.index', compact('members'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $member = TbUser::where ('role','member')->get();
        return view ('Member.create',compact('member'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_id = $request->input('user_id');
        $type_loan_interest = $request->input('type_loan_interest');
        $limit_loan = $request->input('limit_loan');
        $data = new Member();
        $data->user_id = $user_id;
        $data->type_loan_interest = $type_loan_interest;
        $data->limit_loan = $limit_loan;
        $data->save();
        return redirect('/member');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $members = Member::find($id);
        return view('member.edit', compact('members'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user_id = $request->input('user_id');
        $type_loan_interest = $request->input('type_loan_interest');
        $limit_loan = $request->input('limit_loan');
        $data = $members = Member::find($id);
        $data->user_id = $user_id;
        $data->type_loan_interest = $type_loan_interest;
        $data->limit_loan = $limit_loan;
        $data->save();
        return redirect('/member');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $members = Member::find($id);
        $members->delete();
        
        return redirect('/member');
    }
}
