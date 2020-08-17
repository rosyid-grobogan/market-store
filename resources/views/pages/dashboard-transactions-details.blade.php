@extends('layouts.dashboard')
@section('title', 'Transactions Detail')
@section('Transactions', 'active')

@section('content')
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">#STORE0839</h2>
                <p class="dashboard-subtitle">Look what you have made today</p>
              </div>
              <div class="dashboard-content" id="transactionDetails">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12 col-md-4">
                            <img
                              src="/images/dashboard-transactions-details-product-230x230.jpg"
                              alt=""
                              class="product-medium w-100 mb-3"
                            />
                          </div>
                          <div class="col-12 col-md-8">
                            <div class="row">
                              <div class="col-12 col-md-6">
                                <div class="product-title">Customer Name</div>
                                <div class="product-subtitle">Angga Risky</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Product Name</div>
                                <div class="product-subtitle">
                                  Shirup Marzzan
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">
                                  Date of Transaction
                                </div>
                                <div class="product-subtitle">
                                  4 Agustus, 2020
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Status</div>
                                <div class="product-subtitle text-danger">
                                  Pending
                                </div>
                              </div>

                              <div class="col-12 col-md-6">
                                <div class="product-title">Total Amount</div>
                                <div class="product-subtitle">Rp 497.000</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Mobile</div>
                                <div class="product-subtitle">
                                  +628 2020 1234
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 mt-4 mb-4">
                            <h5>Shipping Information</h5>
                            <hr />
                          </div>
                          <div class="col-12">
                            <div class="row">
                              <div class="col-12 col-md-6">
                                <div class="product-title">Address 1</div>
                                <div class="product-subtitle">
                                  Setra Duta Cemara
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Address 2</div>
                                <div class="product-subtitle">
                                  Blok B2 No. 34
                                </div>
                              </div>

                              <div class="col-12 col-md-6">
                                <div class="product-title">Province</div>
                                <div class="product-subtitle">
                                  West Java
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">City</div>
                                <div class="product-subtitle">
                                  Bandung
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Postal Code</div>
                                <div class="product-subtitle">
                                  524442
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Country</div>
                                <div class="product-subtitle">
                                  Indonesia
                                </div>
                              </div>

                              <div class="col-12 col-md-4">
                                <div class="product-title">Shipping Status</div>

                                <select
                                  name="status"
                                  id="status"
                                  class="form-control product-subtitle"
                                  v-model="status"
                                >
                                  <option value="UNPAID">Unpaid</option>
                                  <option value="PENDING">Pending</option>
                                  <option value="SHIPPING">Shipping</option>
                                  <option value="SUCCESS">Success</option>
                                </select>
                              </div>
                              <template v-if="status == 'SHIPPING'">
                                <div class="col-12 col-md-4">
                                  <div class="product-title">Input Resi</div>
                                  <input
                                    type="text"
                                    class="form-control product-subtitle"
                                    name="resi"
                                    v-model="resi"
                                  />
                                </div>
                                <div class="col-12 col-md-4">
                                  <button
                                    type="submit"
                                    class="btn btn-success mt-4"
                                  >
                                    Update Resi
                                  </button>
                                </div>
                              </template>
                            </div>
                            <div class="row mt-4">
                              <div class="col-12 text-right">
                                <button
                                  type="submit"
                                  class="btn btn-success btn-lg mt-4"
                                >
                                  Save Now
                                </button>
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
    <script src="/vendor/vue/vue.js"></script>
    <script>
      var transactionDetails = new Vue({
        el: "#transactionDetails",
        data: {
          status: "SHIPPING",
          resi: "JNE20839149021029301231",
        },
      });
    </script>
@endpush
