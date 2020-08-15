@extends('layouts.app')
@section('title', 'Categories Page')

@section('content')
    <div class="page-content page-home">
      <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>All Categories</h5>
            </div>
          </div>
          <div class="row">
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="{{ asset('/images/icon/gadgets.svg') }}" alt="" class="w-100" />
                </div>
                <p class="categories-text">
                  Gadgets
                </p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="{{ asset('/images/icon/furniture.svg') }}" alt="" class="w-100" />
                </div>
                <p class="categories-text">
                  Funiture
                </p>
              </a>
            </div>

            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="{{ asset('/images/icon/makeup.svg') }}" alt="" class="w-100" />
                </div>
                <p class="categories-text">
                  Make Up
                </p>
              </a>
            </div>

            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="{{ asset('/images/icon/sneaker.svg') }}" alt="" class="w-100" />
                </div>
                <p class="categories-text">
                  Sneaker
                </p>
              </a>
            </div>

            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="{{ asset('/images/icon/tools.svg') }}" alt="" class="w-100" />
                </div>
                <p class="categories-text">
                  Tools
                </p>
              </a>
            </div>

            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="{{ asset('/images/icon/baby.svg') }}" alt="" class="w-100" />
                </div>
                <p class="categories-text">
                  Baby
                </p>
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="store-new-products">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>All Products</h5>
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
                      style="background-image: url(/images/orange-bogotta.png);"
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
