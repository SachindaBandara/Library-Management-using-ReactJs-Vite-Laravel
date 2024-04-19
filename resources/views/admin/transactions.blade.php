@extends('layouts.adminLayout')

@section('title')
  <title>Admin - Transactions</title>
@endsection

@section('main')
<div class="pagetitle">
    <h1>Transactions</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin_transactions')}}">Transactions</a></li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

<section class="section">
    <div class='card-body'>
        <div class="btn-group" role="group">
            <form method="POST" action="">
                @csrf
                @method('GET')
                <button type="submit" class="btn btn-success">Issue Book</button>
            </form>
            <form method="POST" action="">
                @csrf
                @method('GET')
                <button type="submit" class="btn btn-success">Receive Book</button>
            </form>
            <button type="reset" class="btn btn-primary"><a href="">Print Preview</a></button>
            <button type="reset" class="btn btn-dark"><a href="">Save CSV</a></button>
        </div>
    </div>
</section>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">All Transactions</h5>
                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">ISBN</th>
                                <th scope="col">Author</th>
                                <th scope="col">Genre</th>
                                <th scope="col">Publication Year</th>
                                <th scope="col">Description</th>
                                <th scope="col">Shelf Location</th>
                                <th scope="col"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <th scope="row">{{ $transaction -> id }}</th>
                                    <td>{{ $transaction -> title}}</td>
                                    <td>{{ $transaction -> title}}</td>
                                    <td>{{ $transaction -> title}}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $transactions }}

                </div>
            </div>
        </div>
    </div>

</section>

@endsection
