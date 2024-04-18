@extends('layouts.adminLayout')

@section('title')
  <title>Admin - View Book</title>
@endsection

@section('main')
<div class="pagetitle">
    <h1>View Book</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin_books')}}">Books</a></li>
            <li class="breadcrumb-item active"><a href="#">View Book</a></li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

<section class="section">
    <div class='card-body'>
        <div class="btn-group" role="group">
            <form method="POST" action="{{ route('admin_edit_book',[ 'book'=> $book]) }}">
                @csrf
                @method('GET')
                <button type="submit" class="btn btn-success">Edit</button>
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
                    <h5 class="card-title">View Existing Book</h5>
                    <div class="row mb-3">
                        <div class="col-lg-3 col-md-4 label ">ID</div>
                        <div class="col-lg-9 col-md-8"> {{ $book -> id}} </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3 col-md-4 label ">Title</div>
                        <div class="col-lg-9 col-md-8"> {{ $book -> title}} </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3 col-md-4 label ">Author</div>
                        <div class="col-lg-9 col-md-8"> {{ $book -> author}} </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3 col-md-4 label ">ISBN</div>
                        <div class="col-lg-9 col-md-8"> {{ $book -> ISBN}}  </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3 col-md-4 label ">Genre</div>
                        <div class="col-lg-9 col-md-8"> {{ $book -> genre}} </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3 col-md-4 label ">Publication Year</div>
                        <div class="col-lg-9 col-md-8"> {{ $book -> publicationYear}}  </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3 col-md-4 label ">Description</div>
                        <div class="col-lg-9 col-md-8"> {{ $book -> description}}  </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3 col-md-4 label ">Shelf Location</div>
                        <div class="col-lg-9 col-md-8"> {{ $book -> shelfLocation}}  </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3 col-md-4 label ">Created</div>
                        <div class="col-lg-9 col-md-8"> {{ $book -> created_at}}  </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3 col-md-4 label ">Updated</div>
                        <div class="col-lg-9 col-md-8"> {{ $book -> updated_at}}  </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#issuedHistory">Issued History</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#receivedHistory">Received History</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active" id="issuedHistory">

                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="receivedHistory">
                        <!-- Profile Edit Form -->
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
