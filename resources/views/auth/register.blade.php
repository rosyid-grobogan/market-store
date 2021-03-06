@extends('layouts.auth')
@section('title', 'Register Page')

@section('content')
    <div class="page-content page-auth" id="register">
      <div class="section-store-auth" data-aos="fade-up">
        <div class="container">
          <div class="row align-items-center row-login justify-content-center">
            <div class="col-lg-5">
              <h2>
                Memulai untuk jual beli <br />
                dengan cara terbaru
              </h2>

              <form method="POST" action="{{ route('register') }}" class="mt-3">
                        @csrf
                <div class="form-group">
                  <label>Full Name</label>
                  <input id="name" v-model="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                </div>
                <div class="form-group">
                  <label>Email Address</label>
                  <input id="email"
                  v-model="email"
                  @change="checkEmail()"
                  :class="{ 'is-invalid' : this.email_unavailable }"
                  type="email"
                  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="password">Password Confirm</label>
                    <input id="password-confirmation" type="password" class="form-control @error('password_confirm') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                    @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label>Store</label>
                  <p class="text-muted">Apakah anda juga ingin membuka toko?</p>
                  <div
                    class="custom-control custom-radio custom-control-inline"
                  >
                    <input
                      type="radio"
                      name="is_store_open"
                      id="openStoreTrue"
                      class="custom-control-input"
                      v-model="is_store_open"
                      :value="1"
                    />
                    <label for="openStoreTrue" class="custom-control-label"
                      >Iya, boleh.</label
                    >
                  </div>
                  <div
                    class="custom-control custom-radio custom-control-inline"
                  >
                    <input
                      type="radio"
                      name="is_store_open"
                      id="openStoreFalse"
                      class="custom-control-input"
                      v-model="is_store_open"
                      :value="0"
                    />
                    <label for="openStoreFalse" class="custom-control-label"
                      >Enggak, makasih.</label
                    >
                  </div>
                </div>
                <div class="form-group" v-if="is_store_open">
                  <label>Nama Toko</label>
                  <input type="text" class="form-control @error('store_name') is-invalid @enderror" name="store_name" v-model="store_name" id="store_name" />
                  @error('store_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group" v-if="is_store_open">
                  <label for="">Category</label>
                  <select name="categories_id" class="form-control">
                    <option disabled selected>Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>
                <button class="btn btn-success btn-block mt-4"
                :disabled="this.email_unavailable"
                  >Sign Up Now</button
                >
                <a href="{{ route('login') }}" class="btn btn-signup btn-block mt-4"
                  >Back to Sign In</a
                >
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Bawaan Laravel --}}
    <div class="container" style="display: none">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-ation" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
    <script src="/vendor/vue/vue.js"></script>
    <script src="/vendor/vue-toasted/dist/vue-toasted.js"></script>
    <script src="/vendor/axios/axios.min.js"></script>
    <script>
      Vue.use(Toasted);

      var register = new Vue({
        el: "#register",
        data() {
            return {
                name: '',
                email: '',
                email_unavailable:false,
                is_store_open: '',
                store_name: ''
            }

        },
        methods: {
          checkEmail: function() {
            var self = this;
            axios.get('{{ route('api-register-check') }}', {
              params: {
                email:this.email
              }
            })
              .then(function (response) {
                if(response.data == 'Available') {
                  self.$toasted.show(
                    "Email tersedia",
                    {
                      position: "top-center",
                      className: "rounded",
                      duration: 2000,
                    }
                  );
                  self.email_unavailable = false;
                }else {
                  self.$toasted.error(
                    "Maaf, Email tidak tersedia",
                    {
                      position: "top-center",
                      className: "rounded",
                      duration: 2000,
                    }
                  );
                  self.email_unavailable = true;
                }
              });
          }
        },
        mounted() {
          AOS.init();
        //   this.$toasted.error(
        //     "Maaf, tampaknya email sudah terdaftar pada sistem kami.",
        //     {
        //       position: "top-center",
        //       className: "rounded",
        //       duration: 1000,
        //     }
        //   );
        },
      });
    </script>
@endpush
