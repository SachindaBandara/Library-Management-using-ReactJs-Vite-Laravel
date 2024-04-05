@extends('layouts.userLayout')

@section('title')
  <title>Admin - All Books</title>
@endsection

@section('main')
<div class="pagetitle">
    <h1>Add Book</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Add Book</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

<section class="section">
    <div class="row">
        <!-- books -->
        <div class="col-12">
            <div class="card add-book overflow-auto">
                <div class="card-body">
                    <h5 class="card-title">All Books <span></span></h5>

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
                                <th scope="col">Quantity Available</th>
                                <th scope="col"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <th scope="row"><a href="#">{{ $book -> id}}</a></th>
                                    <td>{{ $book -> title}}</td>
                                    <td>{{ $book -> ISBN}}</td>
                                    <td>{{ $book -> author}}</td>
                                    <td>{{ $book -> genre}}</td>
                                    <td>{{ $book -> publicationYear}}</td>
                                    <td>{{ $book -> description}}</td>
                                    <td>{{ $book -> quantityAvailable}}</td>
                                    <td>
                                        <div class='text-center'>
                                            <button type="submit" class="btn btn-success">Edit</button>
                                            <button type="reset" class="btn btn-danger">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Book  -->
    </div>
</section>

@endsection
