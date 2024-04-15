@extends('layouts.adminLayout')

@section('title')
  <title>Admin - Dashboard</title>
@endsection

@section('main')

<div class="row">
    <!-- Left side columns -->
    <div class="col-lg-8">
        <div class="row">
            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Books <span>| Today</span></h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-book"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $bookCount }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Customers Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Users <span>| Today</span></h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-book"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $userCount }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Customers Card -->
        </div>
    </div>
</div>

@endsection

