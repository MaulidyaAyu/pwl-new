<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;

class bookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = booking::All();
        return view ('form', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Produk;
        $data->phone = $request->phone;
        $data->date = $request->bdate;
        $data->people = $request->people;
        $data->destination = $request->destination;
        $data->save();
        return redirect('produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = booking::find($id);
        return view ('form', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = booking::find($id);
        $model->phone = $request->phone;
        $model->date = $request->date;
        $model->people = $request->people;
        $model->destination = $request->destination;
        $model->save();
        return redirect('isi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = booking::find($id);
        $model->delete();
        return redirect('isi');
    }
}
