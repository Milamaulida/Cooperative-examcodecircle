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
    public function store(Request $request)
    {
        $noloan = $request->input('no_loan');
        $memberid = $request->input('member_id'); 
        $paymentmethodid = $request->input('payment_method_id');
        $description = $request->input('description');
        $loanamount = $request->input('loan_amount'); 
        $loaninterest = $request->input('loan_interest');
        $adminfee = $request->input('admin_fee');
        $totalloan = $request->input('total_loan');
        $totalinstallment = $request->input('total_installment'); 
        $tenor = $request->input('tenor');
        $startat = $request->input('start_at');
        $endat = $request->input('end_at'); 
        $data = new Loan();
        $data->no_loan = $noloan;
        $data->member_id = $memberid;
        $data->payment_method_id = $paymentmethodid;
        $data->description = $description;
        $data->loan_amount = $loanamount;
        $data->loan_interest = $loaninterest;
        $data->admin_fee = $adminfee;
        $data->total_loan= $totalloan;
        $data->total_installment = $totalinstallment;
        $data->tenor = $tenor;
        $data->start_at = $startat;
        $data->end_at = $endat;
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
    public function update(Request $request, $id)
    {
        $noloan = $request->input('no_loan');
        $memberid = $request->input('member_id');
        $paymentmethodid = $request->input('payment_method_id');
        $description = $request->input('description');
        $loanamount = $request->input('loan_amount'); 
        $loaninterest = $request->input('loan_interest');
        $adminfee = $request->input('admin_fee');
        $totalloan = $request->input('total_loan');
        $totalinstallment = $request->input('total_installment'); 
        $tenor = $request->input('tenor');
        $startat = $request->input('start_at');
        $endat = $request->input('end_at');
        $data = $loans = Loan::find($id);
        $data->no_loan = $noloan;
        $data->member_id = $memberid;
        $data->payment_method_id = $paymentmethodid;
        $data->description = $description;
        $data->loan_amount = $loanamount;
        $data->loan_interest = $loaninterest;
        $data->admin_fee = $adminfee;
        $data->total_loan= $totalloan;
        $data->total_installment = $totalinstallment;
        $data->tenor = $tenor;
        $data->start_at = $startat;
        $data->end_at = $endat;
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
    public function calculateLoanData($loanId)
    {
        $loan = Loan::find($loanId);
        if (!$loan) {
            return "Pinjaman tidak ditemukan.";
        }
    
        $member = Member::find($loan->member_id);
        if (!$member) {
            return "Anggota tidak ditemukan.";
        }
    
        $loanInterest = $member->type_loan_interest * $loan->loan_amount;
        $totalLoan = $loan->loan_amount + $loanInterest;
        $totalInstallment = $totalLoan + $loan->admin_fee;
    
        return [
            'loan_interest' => $loanInterest,
            'total_loan' => $totalLoan,
            'total_installment' => $totalInstallment,
        ];
    }
}
