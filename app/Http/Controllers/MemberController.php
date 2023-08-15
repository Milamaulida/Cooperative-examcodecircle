<?php

namespace App\Http\Controllers;

use App\Models\Member;
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
        return view ('Member.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userid = $request->input('user_id');
        $typeloaninterest = $request->input('type_loan_interest');
        $limitloan = $request->input('limit_loan');
        $data = new Member();
        $data->user_id = $userid;
        $data->type_loan_interest = $typeloaninterest;
        $data->limit_loan = $limitloan;
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
        $userid = $request->input('user_id');
        $typeloaninterest = $request->input('type_loan_interest');
        $limitloan = $request->input('limit_loan');
        $data = $members = Member::find($id);
        $data->user_id = $userid;
        $data->type_loan_interest = $typeloaninterest;
        $data->limit_loan = $limitloan;
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
