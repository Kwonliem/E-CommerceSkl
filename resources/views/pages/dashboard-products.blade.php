@extends('layouts.dashboard')


@section('title')
      Dashboard Products Page
@endsection


@section('content')
  <!--Section Content -->
  <div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">My Products</h2>
      <p class="dashboard-subtitle">Manage it well and get money</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <a
            href="/dashboard-products-create.html"
            class="btn btn-warning text-white"
          >
            Add New Product
          </a>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a
            href="/dashboard-products-details.html"
            class="card card-dashboard-product d-block"
          >
            <div class="card-body">
              <img
                src="/images/productcard1.png"
                alt=""
                class="w-100 mb-2"
              />
              <div class="product-title">JBL Medium</div>
              <div class="product-category">Headset</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a
            href="/dashboard-products-details.html"
            class="card card-dashboard-product d-block"
          >
            <div class="card-body">
              <img
                src="/images/productcard2.png"
                alt=""
                class="w-100 mb-2"
              />
              <div class="product-title">Consol Ps4</div>
              <div class="product-category">Console</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a
            href="/dashboard-products-details.html"
            class="card card-dashboard-product d-block"
          >
            <div class="card-body">
              <img
                src="/images/productcard3.png"
                alt=""
                class="w-100 mb-2"
              />
              <div class="product-title">Cyberpunk Razer Yellow</div>
              <div class="product-category">Mouse</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a
            href="/dashboard-products-details.html"
            class="card card-dashboard-product d-block"
          >
            <div class="card-body">
              <img
                src="/images/productcard4.png"
                alt=""
                class="w-100 mb-2"
              />
              <div class="product-title">Black Razer Series</div>
              <div class="product-category">Mouse</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a
            href="/dashboard-products-details.html"
            class="card card-dashboard-product d-block"
          >
            <div class="card-body">
              <img
                src="/images/productcard5.png"
                alt=""
                class="w-100 mb-2"
              />
              <div class="product-title">JBL Level 3</div>
              <div class="product-category">Headset</div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection