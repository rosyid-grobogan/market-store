@extends('layouts.dashboard')
@section('title', 'Transactions')
@section('Transactions', 'active')

@section('content')
<div
            class="section-content section-dashboard-home"
            data-aos="fade-up">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Transaction</h2>
                <p class="dashboard-subtitle">
                  Big result start from the small one
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12 mt-2">
                    <ul
                      class="nav nav-pills mb-3"
                      id="pills-tab"
                      role="tablist"
                    >
                      <li class="nav-item" role="presentation">
                        <a
                          class="nav-link active"
                          id="pills-home-tab"
                          data-toggle="pill"
                          href="#pills-home"
                          role="tab"
                          aria-controls="pills-home"
                          aria-selected="true"
                          >Sell Product</a
                        >
                      </li>
                      <li class="nav-item" role="presentation">
                        <a
                          class="nav-link"
                          id="pills-profile-tab"
                          data-toggle="pill"
                          href="#pills-profile"
                          role="tab"
                          aria-controls="pills-profile"
                          aria-selected="false"
                          >Buy Product</a
                        >
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div
                        class="tab-pane fade show active"
                        id="pills-home"
                        role="tabpanel"
                        aria-labelledby="pills-home-tab"
                      >
                        <a
                          href="/dashboard-transactions-details.html"
                          class="card card-list d-block"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img
                                  src="/images/dashboard1-44x44.jpg"
                                  alt=""
                                />
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
                                <img
                                  src="/images/dashboard2-44x44.jpg"
                                  alt=""
                                />
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
                                <img
                                  src="/images/dashboard3-44x44.jpg"
                                  alt=""
                                />
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
                      <div
                        class="tab-pane fade"
                        id="pills-profile"
                        role="tabpanel"
                        aria-labelledby="pills-profile-tab"
                      >
                        <a
                          href="/dashboard-transactions-details.html"
                          class="card card-list d-block"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img
                                  src="/images/dashboard1-44x44.jpg"
                                  alt=""
                                />
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
                      </div>
                    </div>
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
