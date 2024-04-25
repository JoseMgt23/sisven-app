<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return view("customers.index", ["customers" => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = DB::table('customers')
            ->orderBy('last_name')
            ->get();
        return view("customers.create", ["customers" => $customers])    ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->document_number = $request->document_number;
        $customer->address = $request->address;
        $customer->birthday = $request->birthday;
        $customer->phone_number = $request->phone_number;
        $customer->email = $request->email;
        $customer->save();

        $customers = Customer::all();
        return view("customers.index", ["customers" => $customers]);
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
        $customer = Customer::find($id);
        $customers = Customer::all();

        return view("customers.index", ['customer'=>$customer,"customers" => $customers]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = Customer::find($id);

        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->document_number = $request->document_number;
        $customer->address = $request->address;
        $customer->birthday = $request->birthday;
        $customer->phone_number = $request->phone_number;
        $customer->email = $request->email;

        $customer->save();

        $customers = Customer::all();
        return view("customers.index", ["customers" => $customers]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        $customers = Customer::all();
        return view("customers.index", ["customers" => $customers]);
    }
}