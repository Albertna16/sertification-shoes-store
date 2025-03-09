<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required',
            'ulasan' => 'nullable'
        ]);

        $product = Product::findOrFail($request->id);
        if(!$product){
            return response()->json([
                'success' => false,
                'message' => 'Gagal memberikan feedback!'
            ]);
        }


        Feedback::create([
            'user_id' => auth()->user()->id,
            'order_id' => $request->order_id,
            'product_id' => $product->id,
            'rating' => $request->rating * 20,
            'ulasan' => $request->ulasan,
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Feedback berhasil dikirimkan!'
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
