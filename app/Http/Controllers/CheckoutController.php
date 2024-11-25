<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Item;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $checkouts = Checkout::with('item')->get();
        return view('checkouts.index', compact('checkouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $items = Item::all(); // Contoh penggunaan model Item
        return view('checkouts.create', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'item_id' => 'required|exists:items,id',
            'quantity' => 'required|integer|min:1',
            'total_price' => 'required|numeric|min:0', // Menambahkan validasi untuk total_price
        ]);

        // Temukan item berdasarkan item_id
        $item = Item::findOrFail($validated['item_id']);

        // Pastikan kuantitas yang diminta tidak melebihi jumlah yang tersedia
        if ($validated['quantity'] > $item->quantity) {
            return back()->withErrors(['quantity' => 'Quantity exceeds available stock.']);
        }

        // Update jumlah barang yang tersedia
        $item->update(['quantity' => $item->quantity - $validated['quantity']]);

        // Menyimpan data checkout
        Checkout::create([
            'item_id' => $validated['item_id'],
            'quantity' => $validated['quantity'],
            'total_price' => $validated['total_price'], // Simpan total_price yang dikirim dari frontend
        ]);

        return redirect()->route('checkouts.index')->with('success', 'Checkout successful.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $checkout = Checkout::findOrFail($id);
    $checkout->delete();
    return redirect()->route('checkouts.index')->with('success', 'Checkout deleted successfully.');
}
}
