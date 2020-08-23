@extends('layouts.app')
@section('title', 'Cart Page')

@section('content')
    <div class="page-content page-cart">
      <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="/">Home</a>
                  </li>
                  <li class="breadcrumb-item active">
                    Cart
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <section class="store-cart">
        <div class="container">
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 table-responsive">
              <table class="table table-borderless table-cart">
                <thead>
                  <tr>
                    <td>Image</td>
                    <td>Name & Seller</td>
                    <td>Price</td>
                    <td>Menu</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($carts as $cart)
                  <tr>
                    <td style="width: 25%;">
                    @if ($cart->product->galleries)
                      <img
                        src="{{ Storage::url($cart->product->galleries->first()->photo) }}"
                        alt=""
                        class="cart-image"
                      />                        
                    @else
                      <img
                        src=""
                        alt="No Image"
                        class="cart-image"
                      />                        
                    @endif
                    </td>
                    <td style="width: 35%;">
                      <div class="product-title">{{ $cart->product->name }}</div>
                      <div class="product-subtitle">{{$cart->product->user->store_name }}</div>
                    </td>
                    <td style="width: 35%;">
                      <div class="product-title">{{ number_format($cart->product->price) }}</div>
                      <div class="product-subtitle">Rp</div>
                    </td>
                    <td style="width: 20%;">
                      <form action="{{ route('cart.destroy', $cart->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" 
                      class="btn btn-remove-cart">Remove</button>
                      </form>
                      
                    </td>
                  </tr>                      
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-12">
              <hr />
            </div>
          </div>
          <div class="row mb-1" data-aos="fade-up" data-aos-delay="200">
            <div class="col-12">
              <h2 class="mb-4">Shipping Detail</h2>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressOne">Address 1</label>
                <input
                  class="form-control"
                  type="text"
                  name="addressOne"
                  id="addressOne"
                  value="Setra Duta Cemara"
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
                  value="Blok B2 No. 34"
                />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="province">Province</label>
                <select name="province" id="province" class="form-control">
                  <option value="West Java">West Java</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="city">City</label>
                <select name="city" id="city" class="form-control">
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
            <div class="col-12">
              <hr />
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="250">
            <div class="col-12">
              <h2 class="mb-4">Payment Informations</h2>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title">Rp10rb</div>
              <div class="product-subtitle">Country Tax</div>
            </div>
            <div class="col-4 col-md-3">
              <div class="product-title">Rp50rb</div>
              <div class="product-subtitle">Product Insurance</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title">Rp50rb</div>
              <div class="product-subtitle">Ship to Jakarta</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title text-success">Rp10jt</div>
              <div class="product-subtitle">Total</div>
            </div>
            <div class="col-8 col-md-3">
              <a
                href="/success.html"
                class="btn btn-success mt-2 px-4 btn-block"
                >Checkout Now</a
              >
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection
