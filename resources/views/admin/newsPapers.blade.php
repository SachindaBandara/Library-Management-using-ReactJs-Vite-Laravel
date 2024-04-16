@extends('layouts.adminLayout')

@section('title')
  <title>Admin - News Papers</title>
@endsection

@section('main')
<div class="pagetitle">
    <h1>News Papers</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admin_newsPapers')}}">News Papers</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

<section class="section">
    <div class='card-body'>
        <button type="submit" class="btn btn-success"><a href="{{route('admin_addNewsPaper')}}">Add New</a></button>
        <button type="reset" class="btn btn-danger"><a href="">Print Preview</a></button>
        <button type="reset" class="btn btn-danger"><a href="">Save CSV</a></button>
    </div>
</section>

<section class="section">
    <div class="row">
        <!-- NewsPaper -->
        <div class="col-12">
            <div class="card add-NewsPaper overflow-auto">
                <div class="card-body">
                    <h5 class="card-title">All News Papers <span></span></h5>

                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Publisher</th>
                                <th scope="col">Publication Date</th>
                                <th scope="col">Shelf Location</th>
                                <th scope="col"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($newsPapers as $newsPaper)
                                <tr>
                                    <th scope="row">{{ $newsPaper -> id}}</th>
                                    <td>{{ $newsPaper -> title}}</td>
                                    <td>{{ $newsPaper -> publisher}}</td>
                                    <td>{{ $newsPaper -> publicationDate}}</td>
                                    <td>{{ $newsPaper -> shelfLocation}}</td>
                                    <td>
                                        <div class='text-center'>
                                            <div class="btn-group" role="group">
                                                <form method="POST" action="{{route('admin_edit_newspaper', ['newsPaper'=> $newsPaper])}}">
                                                    @csrf
                                                    @method('GET')
                                                    <button type="submit" class="btn btn-success">Edit</button>
                                                </form>
                                                <form method="POST" action="{{ route('admin_delete_newspaper', $newsPaper->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End NewsPaper  -->
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
</section>

@endsection
