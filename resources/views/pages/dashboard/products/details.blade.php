@extends('layouts.dashboard')
@section('title', 'Product Detail')
@section('Products', 'active')

@section('content')
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Shirup Marzzan</h2>
                <p class="dashboard-subtitle">Product Details</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                      @if ($errors->any())
                          <ul>
                              @foreach ($errors as $erros)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      @endif
                    <form action="{{ route('dashboard.products.update', $product->id) }}" method="post">
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
                                  value="{{ $product->name }}"
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
                                  value="{{ $product->price }}"
                                />
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Kategori</label>
                                <select name="categories_id" class="form-control">
                                    <option value="{{ $product->categories_id }}" selected>Tidak diganti</option>
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
                                >{!! $product->description !!}</textarea
                                >
                              </div>
                            </div>
                          </div>
                          <div class="row mt-5">
                            <div class="col-12">
                              <button
                                type="submit"
                                class="btn btn-success px-5 btn-block"
                              >
                                Update Product
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <div class="row mt-4">
                @foreach ($product->galleries as $gallery)
                  <div class="col-md-4 mb-2">
                    <div class="card">
                      <div class="card-body">
                        <div class="gallery-container">
                          <img
                            src="{{ Storage::url($gallery->photo ?? '') }}"
                            alt=""
                            class="w-100"
                          />
                          <a href="{{ route('dashboard.galleries.destroy', $gallery->id) }}" class="delete-gallery">
                            <img src="/images/icon-delete-28x28.svg" alt="" />
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach


                  <div class="col-12 mb-4 mt-4">
                    <form action="{{ route('dashboard.galleries.upload') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="products_id" value="{{ $product->id }}">
                        <input
                      type="file"
                      name="photos"
                      id="file"
                      style="display: none;"
                      onchange="form.submit()"
                    />
                    <button
                    type="button"
                      class="btn btn-secondary btn-block"
                      onclick="thisFileUpload()"
                    >
                      Add Photo
                    </button>
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
