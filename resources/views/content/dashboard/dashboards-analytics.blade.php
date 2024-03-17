@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-success">Bonjour! 🎉</h5>
                            <p class="mb-4">You have done <span class="fw-medium">72%</span> more sales today. Check your
                                new badge in your profile.</p>

                            <form action="{{ url('/import') }}" method="post" enctype="multipart/form-data"
                                class="input-group">
                                @csrf
                                <input type="file" class="form-control" id="file" aria-label="Upload">
                                <button class="btn btn-md btn-success" class="-2" type="submit"
                                    value="import">import</button>
                                <a class="btn btn-md btn-success" href="{{ url('export') }}">export</a>
                            </form>
                            <!-- <a  class="btn btn-md btn-success" value="export">export</a>
                                                                                                                                                            <input type="button"  class="btn btn-md btn-success" value="import"> -->
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="{{ asset('assets/img/illustrations/man-with-laptop-light.png') }}" height="140"
                                alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('assets/img/icons/unicons/chart-success.png') }}" alt="chart success"
                                        class="rounded">
                                </div>

                            </div>
                            <span class="fw-semibold d-block mb-1">Total Op</span>
                            <h3 class="card-title  mb-2">{{ $totalPrice }} Dh</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('assets/img/icons/unicons/wallet-info.png') }}" alt="Credit Card"
                                        class="rounded">
                                </div>

                            </div>
                            <span>Paiements</span>
                            <h3 class="card-title text-nowrap mb-1">{{ $totalRegellementOui }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- test -->
        <!-- col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4 -->
        {{-- <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Order Statistics</h5>
                        <small class="text-muted">42.82k Total Sales</small>
                    </div>

                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-column align-items-center gap-1">
                            <h2 class="mb-2">8,258</h2>
                            <span>Total Orders</span>
                        </div>
                        <div id="orderStatisticsChart"></div>
                    </div>
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-primary"><i
                                        class='bx bx-mobile-alt'></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Electronic</h6>
                                    <small class="text-muted">Mobile, Earbuds, TV</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-medium">82.5k</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-success"><i class='bx bx-closet'></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Fashion</h6>
                                    <small class="text-muted">T-shirt, Jeans, Shoes</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-medium">23.8k</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-info"><i class='bx bx-home-alt'></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Decor</h6>
                                    <small class="text-muted">Fine Art, Dining</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-medium">849k</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-secondary"><i
                                        class='bx bx-football'></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Sports</h6>
                                    <small class="text-muted">Football, Cricket Kit</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-medium">99</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Gestion</h5>
                        <small class="text-muted">{{ $totalPrice }} Total Dh</small>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-column align-items-center gap-1">
                            <h2 class="mb-2">{{ $totalOps }}</h2>
                            <span>Total </span>
                        </div>
                        <div id="orderStatisticsChart"></div>
                    </div>
                    <ul class="p-0 m-0">
                        @foreach ($orderStatistics as $statistic)
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{ asset('assets/img/icons/unicons/chart-success.png') }}"
                                        alt="chart success" class="rounded">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">{{ $statistic->type }}</h6>
                                        <!-- You can customize the text based on your requirement -->
                                        <small class="text-muted">Subtypes: Mobile, Earbuds, TV</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-medium">{{ $statistic->total_orders }}</small>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <!--/ Order Statistics -->
        <!--/test  -->

        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
            <div class="row">
                <div class="col-6 mb-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('assets/img/icons/unicons/paypal.png') }}" alt="Credit Card"
                                        class="rounded">
                                </div>

                            </div>
                            <span class="d-block mb-1">Non Paiments</span>
                            <h3 class="card-title text-nowrap mb-2">{{ $totalRegellementNon }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('assets/img/icons/unicons/cc-primary.png') }}" alt="Credit Card"
                                        class="rounded">
                                </div>

                            </div>
                            <span class="fw-semibold d-block mb-1">Combien Op</span>
                            <h3 class="card-title mb-2">{{ $totalOps }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
    <script>
        const orderStatistics = {!! json_encode($orderStatistics) !!};
        const chartOrderStatistics = document.querySelector('#orderStatisticsChart');
    
        if (typeof chartOrderStatistics !== 'undefined' && chartOrderStatistics !== null) {
            const orderChartConfig = {
                chart: {
                    height: 400,
                    type: 'bar',
                },
                series: [{
                    name: 'Total Orders',
                    data: orderStatistics.map(statistic => statistic.total_orders)
                }],
                xaxis: {
                    categories: orderStatistics.map(statistic => statistic.type)
                }
            };
    
            const statisticsChart = new ApexCharts(chartOrderStatistics, orderChartConfig);
            statisticsChart.render();
        }
    </script>
    
@endsection
