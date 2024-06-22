@extends('layouts.adminLayout')

@section('title')
  <title>Admin - Dashboard</title>
@endsection

@section('main')

<div class="container">
    <div class="row">
        <!-- Customers Card -->
        <div class="col-2">
            <div class="card">
                <img class="card-img-top" src="assets/img/user.jpg" alt="Card image cap" >
                <div class="card-body">
                <h5 class="card-title">Total Registered Users <span>| Today</span></h5>
                <p class="card-text">{{$userCount}}</p>
                <a href="{{route('admin_users')}}" class="btn btn-primary"><i class="bi bi-eye"> See More</i></a>
                </div>
            </div>
        </div>

        <div class="col-2">
            <div class="card">
                <img class="card-img-top" src="assets/img/book.jpg" alt="Card image cap" >
                <div class="card-body">
                <h5 class="card-title">Total Books <span>| Today</span></h5>
                <p class="card-text">{{$bookCount}}</p>
                <a href="{{route('admin_books')}}" class="btn btn-primary"><i class="bi bi-eye"> See More</i></a>
                </div>
            </div>
        </div>

        <div class="col-2">
            <div class="card">
                <img class="card-img-top" src="assets/img/newspaper.png" alt="Card image cap" >
                <div class="card-body">
                <h5 class="card-title">Total Newspapers <span>| Today</span></h5>
                <p class="card-text">{{$newsPaperCount}}</p>
                <a href="{{route('admin_newsPapers')}}" class="btn btn-primary"><i class="bi bi-eye"> See More</i></a>
                </div>
            </div>
        </div>


        <div class="col-2">
            <div class="card">
                <img class="card-img-top" src="assets/img/magazine.png" alt="Card image cap" >
                <div class="card-body">
                <h5 class="card-title">Total Magazines <span>| Today</span></h5>
                <p class="card-text">{{$magazineCount}}</p>
                <a href="{{route('admin_magazines')}}" class="btn btn-primary"><i class="bi bi-eye"> See More</i></a>
                </div>
            </div>
        </div>

        <div class="col-2">
            <div class="card">
                <img class="card-img-top" src="assets/img/magazine.png" alt="Card image cap" >
                <div class="card-body">
                <h5 class="card-title">Total Issued Books <span>| Today</span></h5>
                <p class="card-text">{{$magazineCount}}</p>
                <a href="{{route('admin_magazines')}}" class="btn btn-primary"><i class="bi bi-eye"> See More</i></a>
                </div>
            </div>
        </div>


        <div class="col-2">
            <div class="card">
                <img class="card-img-top" src="assets/img/magazine.png" alt="Card image cap" >
                <div class="card-body">
                <h5 class="card-title">Total Returned Books <span>| Today</span></h5>
                <p class="card-text">{{$magazineCount}}</p>
                <a href="{{route('admin_magazines')}}" class="btn btn-primary"><i class="bi bi-eye"> See More</i></a>
                </div>
            </div>
        </div>

        <div class="col-2">
            <div class="card">
                <img class="card-img-top" src="assets/img/magazine.png" alt="Card image cap" >
                <div class="card-body">
                <h5 class="card-title">Not Returned Books <span>| Today</span></h5>
                <p class="card-text">{{$magazineCount}}</p>
                <a href="{{route('admin_magazines')}}" class="btn btn-primary"><i class="bi bi-eye"> See More</i></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

