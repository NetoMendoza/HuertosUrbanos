@extends('admin.layouts.app')

@section('content')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->


{{-- title page--}}
@include('admin.layouts.page-title')

<div class="container-fluid">

    <div class="page-content-wrapper">


        <div class="row">

            <div class="col-xl-4">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <p class="font-size-16">Orders</p>
                                    <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                        <span class="avatar-title rounded-circle bg-soft-primary">
                                            <i class="mdi mdi-cart-outline text-primary font-size-20"></i>
                                        </span>
                                    </div>
                                    <h5 class="font-size-22">58</h5>

                                    <p class="text-muted">70% Target</p>

                                    <div class="progress mt-3" style="height: 4px;">
                                        <div class="progress-bar progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-xl-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <p class="font-size-16">Users</p>
                                    <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                        <span class="avatar-title rounded-circle bg-soft-success">
                                            <i class="mdi mdi-account-outline text-success font-size-20"></i>
                                        </span>
                                    </div>
                                    <h5 class="font-size-22">136</h5>

                                    <p class="text-muted">80% Target</p>

                                    <div class="progress mt-3" style="height: 4px;">
                                        <div class="progress-bar progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Revenue Stastics</h4>

                        <div class="media">

                            <h4>$14,235 </h4>


                            <div class="media-body ps-3">

                                <div class="dropdown">
                                    <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Today<i class="mdi mdi-chevron-down ms-1"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Yesterday</a>
                                        <a class="dropdown-item" href="#">Last Week</a>
                                        <a class="dropdown-item" href="#">last Month</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="mt-3">
                            <div id="stastics-chart"></div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title mb-4 float-sm-start">Quick Summary</h4>

                        <div class="float-sm-end">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Day</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Week</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Month</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Year</a>
                                </li>
                            </ul>
                        </div>

                        <div class="clearfix"></div>


                        <div class="row align-items-center">
                            <div class="col-xl-9">

                                <div>
                                    <div id="stacked-column-chart" class="apex-charts" dir="ltr"></div>
                                </div>

                            </div>


                            <div class="col-xl-3">
                                <div class="dash-info-widget mt-4 mt-lg-0 py-4 px-3 rounded">



                                    <div class="media dash-main-border pb-2 mt-2">
                                        <div class="avatar-sm mb-3 mt-2">
                                            <span class="avatar-title rounded-circle bg-white shadow">
                                                <i class="mdi mdi-currency-inr text-primary font-size-18"></i>
                                            </span>
                                        </div>
                                        <div class="media-body ps-3">

                                            <h4 class="font-size-20">$2354</h4>
                                            <p class="text-muted">Earning <a href="#" class="text-primary">Withdraw <i class="mdi mdi-arrow-right"></i></a>
                                            </p>

                                        </div>

                                    </div>





                                    <div class="media mt-4 dash-main-border pb-2">
                                        <div class="avatar-sm mb-3 mt-2">
                                            <span class="avatar-title rounded-circle bg-white shadow">
                                                <i class="mdi mdi-credit-card-outline text-primary font-size-18"></i>
                                            </span>
                                        </div>
                                        <div class="media-body ps-3">
                                            <h4 class="font-size-20">$1598</h4>
                                            <p class="text-muted">To Paid <a href="#" class="text-primary">Pay <i class="mdi mdi-arrow-right"></i></a></p>
                                        </div>
                                    </div>



                                    <div class="media mt-4">
                                        <div class="avatar-sm mb-2 mt-2">
                                            <span class="avatar-title rounded-circle bg-white shadow">
                                                <i class="mdi mdi-eye-outline text-primary font-size-18"></i>
                                            </span>
                                        </div>
                                        <div class="media-body ps-3">
                                            <h4 class="font-size-20">1230</h4>
                                            <p class="text-muted mb-0">To Online <a href="#" class="text-primary">View <i class="mdi mdi-arrow-right"></i></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>
            </div>




        </div>

        <div class="row">

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Products of the Month</h4>
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Product</th>

                                        <th>Customer</th>
                                        <th>Price</th>
                                        <th>Invoice</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#2356</td>
                                        <td><img src="assets/images/product/img-7.png" width="42" class="me-3" alt="">Green Chair</td>
                                        <td>Kenneth Gittens</td>
                                        <td>$200.00</td>
                                        <td>42</td>
                                        <td><span class="badge badge-pill badge-soft-primary font-size-13">Pending</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>#2564</td>
                                        <td><img src="assets/images/product/img-8.png" width="42" class="me-3" alt="">Office Chair</td>
                                        <td>Alfred Gordon</td>
                                        <td>$242.00</td>
                                        <td>54</td>
                                        <td><span class="badge badge-pill badge-soft-success font-size-13">Active</span>
                                        </td>
                                    </tr>



                                    <tr>
                                        <td>#2125</td>
                                        <td><img src="assets/images/product/img-10.png" width="42" class="me-3" alt="">Gray Chair</td>
                                        <td>Keena Reyes</td>
                                        <td>$320.00</td>
                                        <td>65</td>
                                        <td><span class="badge badge-pill badge-soft-success font-size-13">Active</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>#8587</td>
                                        <td><img src="assets/images/product/img-11.png" width="42" class="me-3" alt="">Steel Chair</td>
                                        <td>Timothy Zuniga</td>
                                        <td>$342.00</td>
                                        <td>52</td>
                                        <td><span class="badge badge-pill badge-soft-primary font-size-13">Pending</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>#2354</td>
                                        <td><img src="assets/images/product/img-12.png" width="42" class="me-3" alt="">Home Chair</td>
                                        <td>Joann Wiliams</td>
                                        <td>$320.00</td>
                                        <td>25</td>
                                        <td><span class="badge badge-pill badge-soft-primary font-size-13">Pending</span>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Products of the Month</h4>
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Product</th>

                                        <th>Customer</th>
                                        <th>Price</th>
                                        <th>Invoice</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#2356</td>
                                        <td><img src="assets/images/product/img-7.png" width="42" class="me-3" alt="">Green Chair</td>
                                        <td>Kenneth Gittens</td>
                                        <td>$200.00</td>
                                        <td>42</td>
                                        <td><span class="badge badge-pill badge-soft-primary font-size-13">Pending</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>#2564</td>
                                        <td><img src="assets/images/product/img-8.png" width="42" class="me-3" alt="">Office Chair</td>
                                        <td>Alfred Gordon</td>
                                        <td>$242.00</td>
                                        <td>54</td>
                                        <td><span class="badge badge-pill badge-soft-success font-size-13">Active</span>
                                        </td>
                                    </tr>



                                    <tr>
                                        <td>#2125</td>
                                        <td><img src="assets/images/product/img-10.png" width="42" class="me-3" alt="">Gray Chair</td>
                                        <td>Keena Reyes</td>
                                        <td>$320.00</td>
                                        <td>65</td>
                                        <td><span class="badge badge-pill badge-soft-success font-size-13">Active</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>#8587</td>
                                        <td><img src="assets/images/product/img-11.png" width="42" class="me-3" alt="">Steel Chair</td>
                                        <td>Timothy Zuniga</td>
                                        <td>$342.00</td>
                                        <td>52</td>
                                        <td><span class="badge badge-pill badge-soft-primary font-size-13">Pending</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>#2354</td>
                                        <td><img src="assets/images/product/img-12.png" width="42" class="me-3" alt="">Home Chair</td>
                                        <td>Joann Wiliams</td>
                                        <td>$320.00</td>
                                        <td>25</td>
                                        <td><span class="badge badge-pill badge-soft-primary font-size-13">Pending</span>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                </div>
            </div>

        </div>

        


    </div>


</div> <!-- container-fluid -->

@endsection