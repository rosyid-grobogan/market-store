@extends('layouts.app')
@section('title', 'Register Success')

@section('content')
    <div class="page-content page-success">
      <div class="section-success" data-aos="zoom-in">
        <div class="container">
          <div class="row align-items-center row-login justify-content-center">
            <div class="col-lg-6 text-center">
              <img src="/images/success.svg" class="mb-4" alt="" />
              <h2 class="mt-4">Welcome to Store</h2>
              <p>
                Kamu sudah berhasil terdaftar bersama kami. Let’s grow up now.
              </p>
              <div>
                <a href="/dashboard" class="btn btn-success w-50 mt-4 mb-2"
                  >My Dashboard</a
                >
                <a href="/" class="btn btn-signup w-50 mt-2">Go to Shopping</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
