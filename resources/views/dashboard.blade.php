@extends('backLayout.app')
@section('title','Tableau de bord')
@section('breadcrumbs')
 Tableau de bord
@stop
@section('content')


                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-right dropdown ml-2">
                                            <a class="text-muted dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                            </a>


                                        </div>
                                        <div>
                                            <div class="mb-4 mr-3">
                                                <i class="mdi mdi-account-circle text-primary h1"></i>
                                            </div>

                                            <div>
                                                <h5>{!! auth()->user()->first_name !!} {!! auth()->user()->last_name !!} </h5>
                                                <p class="text-muted mb-1">{!! auth()->user()->email !!}</p>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-right">
                                            <select class="custom-select custom-select-sm ml-2">
                                                <option value="1" selected>March</option>
                                                <option value="2">February</option>
                                                <option value="3">January</option>
                                                <option value="4">December</option>
                                            </select>
                                        </div>
                                        <h4 class="card-title mb-3">Wallet Balance</h4>

                                        <div class="row mb-4">
                                            <div class="col-lg-4">
                                                <div class="mt-4">
                                                    <p>Available Balance</p>
                                                    <h4>$ 6134.39</h4>

                                                    <p class="text-muted mb-4"> + 0.0012.23 ( 0.2 % ) <i class="mdi mdi-arrow-up ml-1 text-success"></i></p>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div>
                                                                <p class="mb-2">Income</p>
                                                                <h5>$ 2632.46</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div>
                                                                <p class="mb-2">Expense</p>
                                                                <h5>$ 924.38</h5>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mt-4">
                                                        <a href="#" class="btn btn-primary btn-sm">View more <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6">
                                                <div>
                                                    <div id="wallet-balance-chart" class="apex-charts"></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6 align-self-center">
                                                <div>
                                                    <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 mr-2 text-primary"></i> Ethereum</p>
                                                    <h5>4.5701 ETH = <span class="text-muted font-size-14">$ 1123.64</span></h5>
                                                </div>

                                                <div class="mt-4 pt-2">
                                                    <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 mr-2 text-warning"></i> Bitcoin</p>
                                                    <h5>0.4412 BTC = <span class="text-muted font-size-14">$ 4025.32</span></h5>
                                                </div>

                                                <div class="mt-4 pt-2">
                                                    <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 mr-2 text-info"></i> Litecoin</p>
                                                    <h5>35.3811 LTC = <span class="text-muted font-size-14">$ 2263.09</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- end row -->

                        <div class="row">


                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Messages des visiteurs</h4>

                                        <ul class="list-group" data-simplebar style="max-height: 390px;">
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <div class="avatar-xs mr-3">
                                                        <span class="avatar-title rounded-circle bg-light">
                                                            <img src="assets/images/companies/img-1.png" alt="" height="18">
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="font-size-14">Donec vitae sapien ut</h5>
                                                        <p class="text-muted">If several languages coalesce, the grammar of the resulting language</p>

                                                        <div class="float-right">
                                                            <p class="text-muted mb-0"><i class="mdi mdi-account mr-1"></i> Joseph</p>
                                                        </div>
                                                        <p class="text-muted mb-0">12 Mar, 2020</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <div class="avatar-xs mr-3">
                                                        <span class="avatar-title rounded-circle bg-light">
                                                            <img src="assets/images/companies/img-2.png" alt="" height="18">
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="font-size-14">Cras ultricies mi eu turpis</h5>
                                                        <p class="text-muted">To an English person, it will seem like simplified English, as a skeptical cambridge</p>

                                                        <div class="float-right">
                                                            <p class="text-muted mb-0"><i class="mdi mdi-account mr-1"></i> Jerry</p>
                                                        </div>
                                                        <p class="text-muted mb-0">13 Mar, 2020</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <div class="avatar-xs mr-3">
                                                        <span class="avatar-title rounded-circle bg-light">
                                                            <img src="assets/images/companies/img-3.png" alt="" height="18">
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="font-size-14">Duis arcu tortor suscipit</h5>
                                                        <p class="text-muted">It va esser tam simplic quam occidental in fact, it va esser occidental.</p>

                                                        <div class="float-right">
                                                            <p class="text-muted mb-0"><i class="mdi mdi-account mr-1"></i> Calvin</p>
                                                        </div>
                                                        <p class="text-muted mb-0">14 Mar, 2020</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <div class="avatar-xs mr-3">
                                                        <span class="avatar-title rounded-circle bg-light">
                                                            <img src="assets/images/companies/img-1.png" alt="" height="18">
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="font-size-14">Donec vitae sapien ut</h5>
                                                        <p class="text-muted">If several languages coalesce, the grammar of the resulting language</p>

                                                        <div class="float-right">
                                                            <p class="text-muted mb-0"><i class="mdi mdi-account mr-1"></i> Joseph</p>
                                                        </div>
                                                        <p class="text-muted mb-0">12 Mar, 2020</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>


@endsection
