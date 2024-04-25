<?php

namespace App\Http\Controllers;
use App\Models\PayMode;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PayModeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paymodes = PayMode::all();

        return view("paymodes.index", ["paymodes" => $paymodes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $paymodes = DB::table('paymodes')
        ->orderBy('name')
        ->get();
    return view("paymodes.create", ["paymodes" =>  $paymodes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $paymode = new Paymode();
        $paymode->name = $request->name;
        $paymode->observation = $request->observation;
        $paymode->save();

        $paymodes = PayMode::all();

        return view("paymodes.index", ["paymodes" => $paymodes]);
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
        $paymode = PayMode::find($id);
        $paymodes = PayMode::all();

        return view("paymodes.index", ['paymode'=>$paymode,"paymodes" => $paymodes]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $paymode = PayMode::find($id);
        $paymode->name = $request->name;
        $paymode->observation = $request->observation;
        $paymode->save();

        $paymodes = PayMode::all();

        return view("paymodes.index", ["paymodes" => $paymodes]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paymode = PayMode::find($id);
        $paymode->delete();
        $paymodes = PayMode::all();

        return view("paymodes.index", ["paymodes" => $paymodes]);
    }
}
