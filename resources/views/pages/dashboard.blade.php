@extends('layouts.dashboard')
@section('title', 'Dashboard')

@section('content')
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Dashboard</h2>
                <p class="dashboard-subtitle">Look what you have made today</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Customer</div>
                        <div class="dashboard-card-subtitle">15,209</div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Revenue</div>
                        <div class="dashboard-card-subtitle">932,290</div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Transaction</div>
                        <div class="dashboard-card-subtitle">23,500,347</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-12 mt-2">
                    <h5 class="mb-3">Recent Transactions</h5>

                    <a
                      href="/dashboard-transactions-details.html"
                      class="card card-list d-block"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img src="/images/dashboard1-44x44.jpg" alt="" />
                          </div>
                          <div class="col-md-4">
                            Shirup Marzzan
                          </div>
                          <div class="col-md-3">Hanna</div>
                          <div class="col-md-3">3 Agustus, 2020</div>
                          <div class="col-md-1 d-none d-md-block">
                            <img
                              src="/images/dashboard-arraw-right-34x34.svg"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                    </a>

                    <a
                      href="/dashboard-transactions-details.html"
                      class="card card-list d-block"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img src="/images/dashboard2-44x44.jpg" alt="" />
                          </div>
                          <div class="col-md-4">
                            LeBrone X
                          </div>
                          <div class="col-md-3">Masayoshi</div>
                          <div class="col-md-3">1 Agustus, 2020</div>
                          <div class="col-md-1 d-none d-md-block">
                            <img
                              src="/images/dashboard-arraw-right-34x34.svg"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                    </a>

                    <a
                      href="/dashboard-transactions-details.html"
                      class="card card-list d-block"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img src="/images/dashboard3-44x44.jpg" alt="" />
                          </div>
                          <div class="col-md-4">
                            Soffa Lembutte
                          </div>
                          <div class="col-md-3">Shayna</div>
                          <div class="col-md-3">2 Agustus, 2020</div>
                          <div class="col-md-1 d-none d-md-block">
                            <img
                              src="/images/dashboard-arraw-right-34x34.svg"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection

@push('addon-script')
    <script>
      AOS.init();
      //   Show-Hide Menu
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
@endpush
