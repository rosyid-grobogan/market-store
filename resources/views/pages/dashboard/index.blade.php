{{-- @php
    dd($transaction_data);
@endphp --}}
@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('Dashboard', 'active')

@section('content')
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Dashboard</h2>
                <p class="dashboard-subtitle">Look what you have made today</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Customer</div>
                        <div class="dashboard-card-subtitle">{{ number_format($customer) }}</div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Revenue</div>
                        <div class="dashboard-card-subtitle">{{ number_format($revenue) }}</div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Transaction</div>
                        <div class="dashboard-card-subtitle">{{ number_format($transaction_count) }}</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-12 mt-2">
                    <h5 class="mb-3">Recent Transactions</h5>
                    @forelse ($transaction_data as $transaction)
                    <a
                      href="{{ route('transactions-detail', $transaction->id) }}"
                      class="card card-list d-block">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img class="w-50" src="{{ Storage::url($transaction->product->galleries->first()->photo ?? '') }}" alt="{{ $transaction->product->name }}" />
                          </div>
                          <div class="col-md-4">
                            {{ $transaction->product->name }}
                          </div>
                          <div class="col-md-3">
                              {{ $transaction->transaction->user->name ?? '' }}
                          </div>
                          <div class="col-md-3">
                              {{ $transaction->created_at }}
                          </div>
                          <div class="col-md-1 d-none d-md-block">
                            <img
                              src="/images/dashboard-arraw-right-34x34.svg"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                    </a>

                    @empty
                        <p>No Transaction</p>
                    @endforelse

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
