<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paymentmethods = PaymentMethod::simplePaginate(10);
        return view('paymentmethod.index', compact('paymentmethods'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view ('PaymentMethod.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $account_number = $request->input('account_number');
        $type = $request->input('type');
        $data = new PaymentMethod();
        $data->name = $name;
        $data->account_number = $account_number;
        $data->type = $type;
        $data->save();
        return redirect('/paymentmethod');
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
        $paymentmethods = PaymentMethod::find($id);
        return view('paymentmethod.edit', compact('paymentmethods'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request->input('name');
        $account_number = $request->input('account_number');
        $type = $request->input('type');
        $data = $paymentmethods = PaymentMethod::find($id);
        $data->name = $name;
        $data->account_number = $account_number;
        $data->type = $type;
        $data->save();
        return redirect('/paymentmethod');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paymentmethods = PaymentMethod::find($id);
        $paymentmethods->delete();

        return redirect('/paymentmethod');
    }
}
