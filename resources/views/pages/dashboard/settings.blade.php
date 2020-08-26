@extends('layouts.dashboard')
@section('title', 'Settings')
@section('Settings', 'active')

@section('content')
<div
            class="section-content section-dashboard-home"
            data-aos="fade-up">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Store Settings</h2>
                <p class="dashboard-subtitle">Make store that profitable</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    <form action="{{ route('dashboard.settings.update', Auth::user()->id ) }}" method="POST">
                      @csrf
                       @method('PUT')
                        <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Store Name</label>
                                <input
                                  type="text"
                                  name="store_name"
                                  class="form-control"
                                  value="{{ $user->store_name }}"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Kategori</label>
                                <select
                                  name="category"
                                  id=""
                                  class="form-control"
                                >
                                  <option value="{{ $user->categories_id }}">Tidak diganti</option>
                                  @foreach ($categories as $category)
                                     <option value="{{ $category->id }}">{{ $category->name }}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Store Status</label>
                                <p class="text-muted">
                                  Apakah saat ini toko Anda buka?
                                </p>
                                <div
                                  class="custom-control custom-radio custom-control-inline"
                                >
                                  <input
                                    type="radio"
                                    name="store_status"
                                    id="openStoreTrue"
                                    class="custom-control-input"
                                    value="1"
                                    {{ $user->store_status == 1 ? 'checked': '' }}
                                  />
                                  <label
                                    for="openStoreTrue"
                                    class="custom-control-label"
                                    >Buka</label
                                  >
                                </div>
                                <div
                                  class="custom-control custom-radio custom-control-inline"
                                >
                                  <input
                                    type="radio"
                                    name="store_status"
                                    id="openStoreFalse"
                                    class="custom-control-input"
                                    value="0"
                                    {{ $user->store_status == 0 || $user->store_status == NULL ? 'checked' : '' }}
                                  />
                                  <label
                                    for="openStoreFalse"
                                    class="custom-control-label"
                                    >Sementara Tutup</label
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
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
