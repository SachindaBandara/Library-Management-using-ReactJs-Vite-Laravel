<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    //
    public function getAllTransactionsAdmin()
    {
        $transactions = Transaction::all();

        return view('admin.transactions', ['transactions' => $transactions]);
    }

    public function create()
    {
        // Return view for creating a new transaction
        return view('transactions.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'book_id' => 'required',
            'member_id' => 'required',
            'transaction_date' => 'required|date',
            'due_date' => 'required|date',
            // Add other validation rules here
        ]);

        // Create a new transaction
        Transaction::create($request->all());

        // Redirect to the index page with success message
        return redirect()->route('transactions.index')->with('success', 'Transaction created successfully.');
    }

    public function show(Transaction $transaction)
    {
        // Return view with transaction details
        return view('transactions.show', compact('transaction'));
    }

    public function edit(Transaction $transaction)
    {
        // Return view for editing the transaction
        return view('transactions.edit', compact('transaction'));
    }

    public function update(Request $request, Transaction $transaction)
    {
        // Validate the request data
        $request->validate([
            'book_id' => 'required',
            'member_id' => 'required',
            'transaction_date' => 'required|date',
            'due_date' => 'required|date',
            // Add other validation rules here
        ]);

        // Update the transaction
        $transaction->update($request->all());

        // Redirect to the index page with success message
        return redirect()->route('transactions.index')->with('success', 'Transaction updated successfully.');
    }

    public function destroy(Transaction $transaction)
    {
        // Delete the transaction
        $transaction->delete();

        // Redirect to the index page with success message
        return redirect()->route('transactions.index')->with('success', 'Transaction deleted successfully.');
    }
}
