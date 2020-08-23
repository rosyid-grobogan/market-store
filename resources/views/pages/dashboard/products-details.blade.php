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
                    <form action="">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Product Name</label>
                                <input
                                  type="text"
                                  name="product"
                                  class="form-control"
                                  value="Papel La Casa"
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
                                  value="197.000"
                                />
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Kategori</label>
                                <select name="category" class="form-control">
                                  <option value="" selected>Shipping</option>
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
                                >
              The Nike Air Max 720 SE goes bigger than ever before with Nike's tallest Air unit yet for
              unimaginable, all-day comfort. There's super breathable fabrics on the upper, while
              colours add a modern edge. Bring the past into the future with the Nike Air Max 2090,
              a bold look inspired by the DNA of the iconic Air Max 90. Brand-new Nike Air cushioning </textarea
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
                  <div class="col-md-4 mb-2">
                    <div class="card">
                      <div class="card-body">
                        <div class="gallery-container">
                          <img
                            src="/images/product-card-214x160.jpg"
                            alt=""
                            class="w-100"
                          />
                          <a href="#" class="delete-gallery">
                            <img src="/images/icon-delete-28x28.svg" alt="" />
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-2">
                    <div class="card">
                      <div class="card-body">
                        <div class="gallery-container">
                          <img
                            src="/images/product-card-214x160-2.jpg"
                            alt=""
                            class="w-100"
                          />
                          <a href="#" class="delete-gallery">
                            <img src="/images/icon-delete-28x28.svg" alt="" />
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-2">
                    <div class="card">
                      <div class="card-body">
                        <div class="gallery-container">
                          <img
                            src="/images/product-card-214x160-3.jpg"
                            alt=""
                            class="w-100"
                          />
                          <a href="#" class="delete-gallery">
                            <img src="/images/icon-delete-28x28.svg" alt="" />
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 mb-4 mt-4">
                    <input
                      type="file"
                      name="gambar"
                      id="file"
                      style="display: none;"
                      multiple
                    />
                    <button
                      class="btn btn-secondary btn-block"
                      onclick="thisFileUpload()"
                    >
                      Add Photo
                    </button>
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