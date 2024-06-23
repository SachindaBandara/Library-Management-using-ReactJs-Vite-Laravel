@extends('layouts.userLayout')

@section('title')
  <title>User - All Books</title>
@endsection

@section('main')
<div class="pagetitle">
    <h1>All Books</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('user_dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">All Books</li>
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
                                <th scope="col">Shelf Location</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <th scope="row">{{ $book -> id}}</th>
                                    <td>{{ $book -> title}}</td>
                                    <td>{{ $book -> ISBN}}</td>
                                    <td>{{ $book -> author}}</td>
                                    <td>{{ $book -> genre}}</td>
                                    <td>{{ $book -> publicationYear}}</td>
                                    <td>{{ $book -> description}}</td>
                                    <td>{{ $book -> shelfLocation}}</td>
                                    <td>
                                        @if (($book -> status) == 'Available')
                                            <span class="badge rounded-pill bg-success">Available</span>
                                        @elseif (($book -> status) == 'Borrowed')
                                            <span class="badge rounded-pill bg-secondary">Borrowed</span>
                                        @elseif (($book -> status) == 'Reserved')
                                            <span class="badge rounded-pill bg-warning text-dark">Reserved</span>
                                        @endif
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
