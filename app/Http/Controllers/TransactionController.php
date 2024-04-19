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

    public function createReturnedBook(){
        return view('admin.returnBook');
    }

    public function getTransactionAdmin(Request $request){
        $request = $request->validate([
            'book_id' => 'required'
        ]);

        $book_id = $request['book_id'];

        $book = Book::find($book_id);

        $transaction = Transaction::where('book_id', $book_id)->get();


        $user_id = $transaction[0]['member_id'];

        $user = User::find($user_id);

        $currentDate = Carbon::now();
        $diffInDays = ceil($currentDate->diffInDays($transaction[0]['due_date']));

        if($diffInDays <= -1){
            $fine= abs($diffInDays) * 100;
        }else{
            $fine=0;
        }

        return redirect(route('admin_return_book'))->with('transaction', $transaction)->with('user', $user)->with('book', $book)->with('fine', $fine);

    }

    public function storeReturnedBookAdmin(Request $request)
    {
        $data = $request->validate([
            'id' => 'required',
            'return_date' => 'required'
        ]);

        $transactionRecord = Transaction::find($data['id']);
        $transactionRecord -> return_date = $data['return_date'];
        $transactionRecord->save();


        return redirect(route('admin_issue_book'))->with('success', 'Transaction updated successfully.');
    }


}
