@extends('layouts.userLayout')

@section('title')
  <title>User - View Reservation</title>
@endsection

@section('main')
<div class="pagetitle">
    <h1>View Reservation</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('user_dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('user_reservations')}}">Reservations</a></li>
            <li class="breadcrumb-item active"><a href="#">View Reservation</a></li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->


<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">View Existing Reservation</h5>
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
                        <div class="col-lg-3 col-md-4 label ">Availability</div>
                        <div class="col-lg-9 col-md-8"> {{ $book -> status}}  </div>
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
</section>

@endsection
