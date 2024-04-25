<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoices = Invoice::all();

        return view("invoices.index", ["invoices" => $invoices]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $invoices = DB::table('invoices')
            ->orderBy('number')
            ->get();
        return view("invoices.create", ["invoices" =>  $invoices]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $invoice = new Invoice();
        $invoice->number = $request->number;
        $invoice->id_customers = $request->id_customers;
        $invoice->id_paymode = $request->id_paymode;
        $invoice->save();

        $invoices = Invoice::all();

        return view("invoices.index", ["invoices" => $invoices]);
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
        $invoice = Invoice::find($id);
        $invoices = Invoice::all();

        return view("invoices.index", ['invoice'=>$invoice,"invoices" => $invoices]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $invoice = Invoice::find($id);
        $invoice->number = $request->number;
        $invoice->id_customers = $request->id_customers;
        $invoice->id_paymode = $request->id_paymode;
        $invoice->save();

        $invoices = Invoice::all();

        return view("invoices.index", ["invoices" => $invoices]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $invoice = Invoice::find($id);
        $invoice->delete();
        $invoices = Invoice::all();

        return view("invoices.index", ["invoices" => $invoices]);
    }
}
