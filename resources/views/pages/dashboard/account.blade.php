@extends('layouts.dashboard')
@section('title', 'Account')
@section('Account', 'active')

@section('content')
 <div
            class="section-content section-dashboard-home"
            data-aos="fade-up">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">My Account</h2>
                <p class="dashboard-subtitle">Update your current profile</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    <form action="">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Your Name</label>
                                <input
                                  type="text"
                                  name="name"
                                  class="form-control"
                                  value="{{ $user->name }}"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <label>Your Email</label>
                              <input
                                type="text"
                                name="email"
                                class="form-control"
                                value="{{ $user->email }}"
                              />
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="addressOne">Address 1</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  name="addressOne"
                                  id="addressOne"
                                  value="{{ $user->address_one }}"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="addressTwo">Address 2</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  name="addressTwo"
                                  id="addressTwo"
                                  value="{{ $user->address_two }}"
                                />
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="province">Province</label>
                                <select
                                  name="province"
                                  id="province"
                                  class="form-control"
                                >
                                  <option value="West Java">West Java</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="city">City</label>
                                <select
                                  name="city"
                                  id="city"
                                  class="form-control"
                                >
                                  <option value="Bandung">Bandung</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="postalCode">Postal Code</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  value="40512"
                                  id="postalCode"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="country">Country</label>
                                <input
                                  type="text"
                                  name="country"
                                  id="country"
                                  class="form-control"
                                  value="Indonesia"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input
                                  type="text"
                                  name="mobile"
                                  id="mobile"
                                  class="form-control"
                                  value="+628120202025"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="row mt-5">
                            <div class="col-12 text-right">
                              <button
                                type="submit"
                                class="btn btn-success px-5"
                              >
                                Save Now
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
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
