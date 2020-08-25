@extends('layouts.dashboard')
@section('title', 'Create New Product')
@section('Products', 'active')

@section('content')
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Create New Product</h2>
                <p class="dashboard-subtitle">Create your own product</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    <form action="{{ route('dashboard.products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Product Name</label>
                                <input
                                  type="text"
                                  name="name"
                                  class="form-control"

                                />
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Price</label>
                                <input
                                  type="number"
                                  name="price"
                                  class="form-control"

                                />
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Kategori</label>
                                <select name="categories_id" class="form-control">
                                  @foreach ($categories as $category)
                                      <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                  @endforeach

                                </select>
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Description</label>
                                <textarea
                                  name="description"
                                  rows="5"
                                  class="form-control"
                                  id="editor"
                                ></textarea
                                >
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Thumbnails</label>
                                <input
                                  type="file"
                                  name="photo "
                                  class="form-control"
                                />
                                <p class="text-muted">
                                  Kamu dapat memilih lebih dari satu file
                                </p>
                              </div>
                            </div>

                          </div>

                          <div class="row mt-5">
                            <div class="col-12 text-right">
                              <button
                                type="submit"
                                class="btn btn-success px-5"
                              >
                                Create New Product
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
      // Klik
      function thisFileUpload() {
        document.getElementById("file").click();
      }
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script>
    <script>
      ClassicEditor.create(document.querySelector("#editor"))
        .then((editor) => {
          console.log(editor);
        })
        .catch((error) => {
          console.error(error);
        });
    </script>
@endpush
