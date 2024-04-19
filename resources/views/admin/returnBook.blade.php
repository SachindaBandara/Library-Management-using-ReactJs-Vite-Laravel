@extends('layouts.adminLayout')

@section('title')
  <title>Admin - Return Book</title>
@endsection

@section('main')
<div class="pagetitle">
    <h1>Return Book</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin_transactions')}}">Transactions</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admin_return_book')}}">Return Book</a></li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Return Book</h5>

                    @if (!session('transaction'))
                        <form action="{{route('admin_get_transaction')}}" method="POST">
                            @csrf
                            @method('POST')
                                <div class="input-group mb-3">
                                        <label for="bookID" class="col-sm-2 col-form-label">Book ID</label>
                                        <input type="text" class="form-control" id="book_id" name='book_id'>
                                    <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"> Search</i></button>
                                    </div>
                                </div>
                        </form>
                    @endif

                    <!-- Return book Form -->
                    <form method="POST" action="{{route('admin_store_return_book')}}">
                        @csrf
                        @method('post')

                        @if (session('book'))
                            <div class="row mb-3">
                                <label for="transaction_id" class="col-sm-2 col-form-label">Transaction ID</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="{{session('transaction')[0] -> id}}" name="id" id="id">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="bookID" class="col-sm-2 col-form-label">Book ID</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="{{session('book') -> id}}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="bookTitle" class="col-sm-2 col-form-label">Book Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="{{session('book') -> title}}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="bookAuthor" class="col-sm-2 col-form-label">Book Author</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="{{session('book') -> author}}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="bookISBN" class="col-sm-2 col-form-label">ISBN</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="{{session('book') -> ISBN}}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="bookGenre" class="col-sm-2 col-form-label">Book Genre</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="{{session('book') -> genre}}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="memberID" class="col-sm-2 col-form-label">Member ID</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="member_id" name='member_id' value="{{session('transaction')[0] -> member_id}}" readonly>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="memberName" class="col-sm-2 col-form-label">Member Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="{{session('user') -> name}}" disabled>
                                </div>
                            </div>
                        @endif

                        @if (session('fine'))
                            @if (session('fine') <> 0)
                                <div class="alert alert-warning" role="alert">
                                    Overdue book. Rs.{{ session('fine') }} Required!
                                </div>
                            @else
                                <h6>no</h6>
                                <div class="alert alert-info" role="alert">
                                    No Fine required.
                                </div>
                            @endif
                        @endif

                        <div class="row mb-3">
                            <label for="returnDate	" class="col-sm-2 col-form-label">Return Date</label>
                            <div class="col-sm-10">
                              <input type="date" class="form-control" id="return_date" name='return_date'>
                            </div>
                        </div>

                        <div class="text-center">
                            @if (session('book'))
                                <button type="submit" class="btn btn-success">Add</button>
                                <a href="{{route('admin_return_book')}}" class="btn btn-secondary">Reset</a>
                            @else
                                <button type="submit" class="btn btn-success">Add</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            @endif
                        </div>
                    </form>
                    <!-- End return Book Form -->
                </div>
            </div>
        </div>
        <div class="col-12">
            @if ($errors -> any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-circle"></i>
                        {{$error}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            @endif

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('due_date'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle"></i>
                        Book should be returned on {{ session('due_date') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

        </div>
    </div>
</section>


@endsection
