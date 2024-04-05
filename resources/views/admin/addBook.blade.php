@extends('layouts.adminLayout')

@section('title')
  <title>Admin - Add Book</title>
@endsection

@section('main')
<div class="pagetitle">
    <h1>Add Books</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin-dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="/admin-all-books">Books</a></li>
            <li class="breadcrumb-item active">Add Book</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add New Book</h5>
                    <!-- Add Book Form -->
                    <form>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Book Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputText">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">ISBN</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Publication Year</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword">
                            </div>
                        </div><div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Quantity Available</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                    <!-- End Add Book Form -->
                </div>
            </div>
        </div>
    </div>

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
                            <th scope="col"></th>
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
</section>

@endsection
