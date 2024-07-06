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
                <p class="card-text"></p>
                <a href="{{route('admin_books')}}" class="btn btn-primary"><i class="bi bi-eye"> See More</i></a>
                </div>
            </div>
        </div>

        <div class="col-2">
            <div class="card">

                <div class="card-body">
                <h5 class="card-title">Total Newspapers <span>| Today</span></h5>
                <p class="card-text"></p>
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

<section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
        <div class="col-lg-8">
            <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Registered Users <span>| Today</span></h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <img class="card-img-top" src="assets/img/user.jpg" alt="Card image cap" >
                            </div>
                            <div class="ps-3">
                                <h6>{{ $userCount }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Books <span>| Today</span></h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <img class="card-img-top" src="assets/img/book.jpg" alt="Card image cap" >
                            </div>
                            <div class="ps-3">
                                <h6>{{ $bookCount }}</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Newspapers <span>| Today</span></h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <img class="card-img-top" src="assets/img/newspaper.png" alt="Card image cap" >
                            </div>
                            <div class="ps-3">
                                <h6>{{ $newsPaperCount }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Customers Card -->


            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Magazines <span>| Today</span></h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <img class="card-img-top" src="assets/img/newspaper.png" alt="Card image cap" >
                            </div>
                            <div class="ps-3">
                                <h6>{{ $magazineCount }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Customers Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Magazines <span>| Today</span></h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <img class="card-img-top" src="assets/img/newspaper.png" alt="Card image cap" >
                            </div>
                            <div class="ps-3">
                                <h6>{{ $newsPaperCount }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Customers Card -->


            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Magazines <span>| Today</span></h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <img class="card-img-top" src="assets/img/newspaper.png" alt="Card image cap" >
                            </div>
                            <div class="ps-3">
                                <h6>{{ $newsPaperCount }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Customers Card -->



        </div><!-- End Left side columns -->
    </div>

@endsection

