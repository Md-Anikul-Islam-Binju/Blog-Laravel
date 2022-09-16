@extends('admin.index')
@section('content')

<div class="sl-pagebody">
    <div class="row row-sm">
        <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
                <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Post</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">5</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
                <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Week's Post</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">10</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
                <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month's Sales</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">100</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
                <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's Post</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">500</h3>
                </div>
            </div>
        </div>
    </div> 
</div>

@endsection