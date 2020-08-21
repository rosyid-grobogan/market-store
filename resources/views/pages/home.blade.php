@extends('layouts.app')
@section('title','Home Page')

@section('content')
    <div class="page-content page-home">
      <section class="store-carousel">
        <div class="container">
          <div class="row">
            <div class="col-lg-12" data-aos="zoom-in">
              <div
                id="storeCarousel"
                class="carousel slide"
                data-ride="carousel"
              >
                <ol class="carousel-indicators">
                  <li
                    class="active"
                    data-target="#storeCarousel"
                    data-slide-to="0"
                  ></li>
                  <li data-target="#storeCarousel" data-slide-to="1"></li>
                  <li data-target="#storeCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      src="/images/banner.jpg"
                      class="d-block w-100"
                      alt="..."
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="/images/banner.jpg"
                      class="d-block w-100"
                      alt="..."
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="/images/banner.jpg"
                      class="d-block w-100"
                      alt="..."
                    />
                  </div>
                </div>
                <a
                  class="carousel-control-prev"
                  href="#storeCarousel"
                  role="button"
                  data-slide="prev"
                >
                  <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a
                  class="carousel-control-next"
                  href="#storeCarousel"
                  role="button"
                  data-slide="next"
                >
                  <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Trend Categories</h5>
            </div>
          </div>
          <div class="row">
              @php
                  $incrementCategory = 0
              @endphp
              @forelse ($categories as $category)
                    <div
                    class="col-6 col-md-3 col-lg-2"
                    data-aos="fade-up"
                    data-aos-delay="{{ $incrementCategory+= 100 }}"
                    >
                    <a href="{{ route('categories-detail', $category->slug) }}" class="component-categories d-block">
                        <div class="categories-image">
                        <img src="{{ Storage::url($category->icon) }}" alt="" class="w-100" />
                        </div>
                        <p class="categories-text">
                        {{ $category->name }}
                        </p>
                    </a>
                    </div>
              @empty
                    <div class="col-md-12 text-center py-5">
                        No Category found. :(
                    </div>

              @endforelse
          </div>
        </div>
      </section>

      <section class="store-new-products">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>New Products</h5>
            </div>
            <div class="row">
              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="100"
              >
                <a href="/details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div
                      class="products-image"
                      style="background-image: url(/images/apple-watch.jpg);"
                    ></div>
                  </div>
                  <div class="products-text">
                    Apple Watch 4
                  </div>
                  <div class="products-price">
                    Rp5jt
                  </div>
                </a>
              </div>

              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="200"
              >
                <a href="/details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div
                      class="products-image"
                      style="background-image: url(/images/bubuk-maketti.jpg);"
                    ></div>
                  </div>
                  <div class="products-text">
                    Bubuk Maketti
                  </div>
                  <div class="products-price">
                    Rp5jt
                  </div>
                </a>
              </div>

              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="300"
              >
                <a href="/details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div
                      class="products-image"
                      style="background-image: url(/images/sofa.jpg);"
                    ></div>
                  </div>
                  <div class="products-text">
                    Sofa Modern
                  </div>
                  <div class="products-price">
                    Rp5jt
                  </div>
                </a>
              </div>

              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="400"
              >
                <a href="/details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div
                      class="products-image"
                      style="background-image: url(/images/tatakan-gelas.png);"
                    ></div>
                  </div>
                  <div class="products-text">
                    Tatakan Gelas
                  </div>
                  <div class="products-price">
                    Rp20rb
                  </div>
                </a>
              </div>

              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="500"
              >
                <a href="/details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div
                      class="products-image"
                      style="background-image: url(/images/nike.jpg);"
                    ></div>
                  </div>
                  <div class="products-text">
                    Nike Black Edirion
                  </div>
                  <div class="products-price">
                    Rp7jt
                  </div>
                </a>
              </div>

              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="600"
              >
                <a href="/details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div
                      class="products-image"
                      style="background-image: url(/images/bogotta.jpg);"
                    ></div>
                  </div>
                  <div class="products-text">
                    Orange Bogotta
                  </div>
                  <div class="products-price">
                    Rp5jt
                  </div>
                </a>
              </div>

              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="700"
              >
                <a href="/details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div
                      class="products-image"
                      style="background-image: url(/images/doll.jpg);"
                    ></div>
                  </div>
                  <div class="products-text">
                    Boneka Lucu
                  </div>
                  <div class="products-price">
                    Rp700rb
                  </div>
                </a>
              </div>

              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="800"
              >
                <a href="/details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div
                      class="products-image"
                      style="background-image: url(/images/mavic.jpg);"
                    ></div>
                  </div>
                  <div class="products-text">
                    Mavic
                  </div>
                  <div class="products-price">
                    Rp1jt
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

@endsection
