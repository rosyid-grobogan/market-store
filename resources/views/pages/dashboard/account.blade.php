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
                    <form action="{{ route('dashboard.account.update', Auth::user()->id) }}" id="locations" method="post">
                        @csrf
                        @method('PUT')
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
                                  name="address_one"
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
                                  name="address_two"
                                  id="addressTwo"
                                  value="{{ $user->address_two }}"
                                />
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="province">Province</label>
                                <select
                                v-if="provinces"
                                v-model="provinces_id"
                                  name="provinces_id"
                                  id="provinces_id"
                                  class="form-control"
                                >
                                  <option disabled>Pilih</option>
                                  <option
                                  v-for="province in provinces"
                                  :value="province.id"
                                  >@{{ province.name }}</option>
                                </select>
                                <select v-else class="form-control"></select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="city">City</label>
                                <select
                                v-if="regencies"
                                v-model="regencies_id"
                                  name="regencies_id"
                                  id="regencies_id"
                                  class="form-control"
                                >
                                  <option disabled>Pilih</option>
                                  <option
                                  v-for="regency in regencies"
                                  :value="regency.id">@{{ regency.name }}</option>
                                </select>
                                <select v-else class="form-control"></select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="postalCode">Postal Code</label>
                                <input
                                  type="text"
                                  name="zip_code"
                                  class="form-control"
                                  value="{{ $user->zip_code }}"
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
                                  value="{{ $user->country }}"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input
                                  type="text"
                                  name="phone_number"
                                  id="mobile"
                                  class="form-control"
                                  value="{{ $user->phone_number }}"
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
<script src="{{ asset('/vendor/vue/vue.js') }}"></script>
    <script src="/vendor/vue-toasted/dist/vue-toasted.js"></script>
    <script src="/vendor/axios/axios.min.js"></script>
    <script>
      AOS.init();
      //   Show-Hide Menu
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
<script>
var locations = new Vue({
    el: '#locations',
    data: {
        provinces: null,
        regencies: null,
        provinces_id: null,
        regencies_id: null,
    },
    methods: {
        getProvinces() {
            var self = this;
            axios.get('{{ route('api.provinces') }}')
                .then(function(response) {
                    self.provinces = response.data;
                })
        },
        getRegencies() {
            var self = this;
            axios.get('{{ url('api/regencies') }}/' + self.provinces_id)
                .then(function(response) {
                    self.regencies = response.data;
                })
        }
    },
    mounted(){
        this.getProvinces();
        AOS.init();
    },
    watch: {
        provinces_id: function(val, olVal) {
            this.regencies_id = null;
            this.getRegencies();
        }
    }
})
</script>
@endpush
