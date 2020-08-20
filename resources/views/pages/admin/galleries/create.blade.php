@extends('layouts.admin')
@section('title', 'Galleries')
@section('Galleries', 'active')
@push('addon-style')
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/DataTables/datatables.min.css') }}"/>
@endpush
@section('content')
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Admin Galleries</h2>
                <p class="dashboard-subtitle">Create New Gallery</p>
              </div>
              <div class="dashboard-content">
                <div class="row mt-3">
                    <div class="col-md-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nama Produk</label>
                                                <select name="products_id" class="form-control">
                                                    @foreach ($products as $product)
                                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Photo</label>
                                                <input type="file" name="photo" class="form-control" required>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col text-right">
                                            <button type="submit" class="btn btn-success btn-lg px-5 mt-4">
                                                Create Now
                                            </button>
                                        </div>
                                    </div>
                                </form>
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
