<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Book;
use App\Models\User;
use Carbon\Carbon;


class TransactionController extends Controller
{
    //
    public function getAllTransactionsAdmin()
    {
        $transactions = Transaction::with('book')->get();

        return view('admin.transactions', ['transactions' => $transactions]);
    }

    public function createIssueBook(){
        return view('admin.issueBook');
    }

    public function getBook(Request $request){
        $request = $request->validate([
            'book_id' => 'required'
        ]);

        $book_id = $request['book_id'];
        $book = Book::find($book_id);

        return redirect(route('admin_issue_book'))->with('book', $book);

    }

    public function storeIssueBookAdmin(Request $request)
    {
        $data = $request->validate([
            'book_id' => 'required',
            'member_id' => 'required',
            'transaction_date' => 'required'
        ]);

        $carbonDate = Carbon::parse($data['transaction_date']);

        $due_date = $carbonDate->addDays(7)->toDateString();

        $data['due_date'] = $due_date;

        $newTransaction = Transaction::create($data);

        return redirect(route('admin_issue_book'))->with('success', 'Transaction created successfully.')->with('due_date', $due_date);
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
