<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use Illuminate\Support\Facades\DB;
class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details = Detail::all();

        return view("category.index", ["details" => $details]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $details = DB::table('details')
            ->orderBy('quantity')
            ->get();
        return view("details.create", ["details" => $details]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $detail = new Detail();
        $detail->invoice_id = $request->id_invoices;
        $detail->product_id = $request->id_products;
        $detail->quantity = $request->quantity;
        $detail->price = $request->price;

        $detail->save();

        $details = Detail::all();

        return view("category.index", ["details" => $details]);
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
        $detail = Detail::find($id);
        $details = Detail::all();

        return view("detail.index", ['detail'=>$detail,"details" => $details]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $detail = Detail::find($id);
        $detail->invoice_id = $request->id_invoices;
        $detail->product_id = $request->id_products;
        $detail->quantity = $request->quantity;
        $detail->price = $request->price;

        $detail->save();

        $details = Detail::all();

        return view("category.index", ["details" => $details]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detail = Detail::find($id);
        $detail->delete();

        $details = Detail::all();
        return view("category.index", ["details" => $details]);
    }
}
