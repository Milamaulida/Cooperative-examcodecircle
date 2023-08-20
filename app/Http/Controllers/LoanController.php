<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Member;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loans = Loan::simplePaginate(10);
        return view('loan.index', compact('loans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Loan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $members, $loans)
    {
        $no_loan = $request->input('no_loan');
        $member_id = $request->input('member_id'); 
        $payment_method_id = $request->input('payment_method_id');
        $description = $request->input('description');
        $loan_amount = $request->input('loan_amount'); 
        $loan_interest = $members->type_loan_interest * $loans->loan_amount;
        $admin_fee = $request->input('admin_fee');
        $total_loan = $loans->loan_amount + $loan_interest;
        $total_installment = $total_loan + $loans->admin_fee;
        $tenor = $request->input('tenor');
        $start_at = $request->input('start_at');
        $end_at = $request->input('end_at'); 
        $data = new Loan();
        $data->no_loan = $no_loan;
        $data->member_id = $member_id;
        $data->payment_method_id = $payment_method_id;
        $data->description = $description;
        $data->loan_amount = $loan_amount;
        $data->loan_interest = $loan_interest;
        $data->admin_fee = $admin_fee;
        $data->total_loan= $total_loan;
        $data->total_installment = $total_installment;
        $data->tenor = $tenor;
        $data->start_at = $start_at;
        $data->end_at = $end_at;
        $data->save();
        return redirect('/loan');

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
        $loans = Loan::find($id);
        return view('loan.edit', compact('loans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id, $members, $loans)
    {
        $no_loan = $request->input('no_loan');
        $member_id = $request->input('member_id');
        $payment_method_id = $request->input('payment_method_id');
        $description = $request->input('description');
        $loan_amount = $request->input('loan_amount'); 
        $loan_interest = $members->type_loan_interest * $loans->loan_amount;
        $admin_fee = $request->input('admin_fee');
        $total_loan = $loans->loan_amount + $loan_interest;
        $total_installment = $total_loan + $loans->admin_fee;
        $tenor = $request->input('tenor');
        $start_at = $request->input('start_at');
        $end_at = $request->input('end_at');
        $data = $loans = Loan::find($id);
        $data->no_loan = $no_loan;
        $data->member_id = $member_id;
        $data->payment_method_id = $payment_method_id;
        $data->description = $description;
        $data->loan_amount = $loan_amount;
        $data->loan_interest = $loan_interest;
        $data->admin_fee = $admin_fee;
        $data->total_loan= $total_loan;
        $data->total_installment = $total_installment;
        $data->tenor = $tenor;
        $data->start_at = $start_at;
        $data->end_at = $end_at;
        $data->save();
        return redirect('/loan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $loans = Loan::find($id);
        $loans->delete();
        
        return redirect('/loan');
    }
}