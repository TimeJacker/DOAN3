@extends('Admin.layouts.master')

@section('title', 'Bảng điều khiển')

@section('content')


 
  <div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">

      <div class="col-lg-4">
        <div class="row">
          <div class="col-lg-12">
            <!-- Monthly Earnings -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-start">
                  <div class="col-8">
                    <h5 class="card-title mb-9 fw-semibold">Sản phẩm</h5>
                    <h4 class="fw-semibold mb-3">{{$products}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-end">
                      <div
                        class="text-white bg-danger rounded-circle p-6 d-flex align-items-center justify-content-center">
                        <i class="ti ti-brand-producthunt fs-6"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="col-lg-4">
        <div class="row">
          <div class="col-lg-12">
            <!-- Monthly Earnings -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-start">
                  <div class="col-8">
                    <h5 class="card-title mb-9 fw-semibold"> Khách hàng </h5>
                    <h4 class="fw-semibold mb-3">{{$user}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-end">
                      <div
                        class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                        <i class="ti ti-user fs-6"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- <div id="earning"></div> --}}
            </div>
          </div>

        </div>
      </div>

    </div>
    <div class="row">

      <div class="col-lg-4">
        <div class="row">
          <div class="col-lg-12">
            <!-- Monthly Earnings -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-start">
                  <div class="col-8">
                
                    <h5 class="card-title mb-9 fw-semibold">Tổng đơn hàng trong ngày</h5>
                    <h4 class="fw-semibold mb-3">{{$orders_by_today}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-end">
                      <div
                        class="text-white bg-danger rounded-circle p-6 d-flex align-items-center justify-content-center">
                        <i class="ti ti-garden-cart fs-6"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="col-lg-4">
        <div class="row">
          <div class="col-lg-12">
            <!-- Monthly Earnings -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-start">
                  <div class="col-8">
                    <h5 class="card-title mb-9 fw-semibold"> Tổng tiền đơn hàng trong ngày </h5>
                    <h4 class="fw-semibold mb-3">{{ number_format($price_by_today, 0, '.', ',') ?? '0' }} VNĐ</h4>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-end">
                      <div
                        class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                        <i class="ti ti-brand-producthunt fs-6"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   
    </div>
    
  </div>

<script src="{{ asset('Admin/') }}/libs/simplebar/dist/simplebar.js"></script>
<script src="{{ asset('Admin/') }}/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="{{ asset('Admin/') }}/js/dashboard.js"></script>
@endsection
