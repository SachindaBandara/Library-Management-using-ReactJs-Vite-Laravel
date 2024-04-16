@extends('layouts.adminLayout')

@section('title')
  <title>Admin - Add Book</title>
@endsection

@section('main')
<div class="pagetitle">
    <h1>Add Books</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin_books')}}">Books</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admin_addBook')}}">Add Book</a></li>
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
                    <form method="POST" action="{{route('admin_store_book')}}">
                        @csrf
                        @method('post')
                        <div class="row mb-3">
                            <label for="bookTitle" class="col-sm-2 col-form-label">Book Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="bookTitle" name='title'>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="author" class="col-sm-2 col-form-label">Book Author</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="bookAuthor" name='author'>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="isbn" class="col-sm-2 col-form-label">ISBN</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="isbn" name='ISBN'>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="genre" class="col-sm-2 col-form-label">Book Genre</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="bookGenre" name='genre'>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="publicationYear" class="col-sm-2 col-form-label">Publication Year</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="publicationYear" name="publicationYear">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="description" name='description'>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="shelfLocation" class="col-sm-2 col-form-label">Shelf Location</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="shelfLocation" name='shelfLocation'>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Add</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                    <!-- End Add Book Form -->
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
        </div>
    </div>
</section>

@endsection
