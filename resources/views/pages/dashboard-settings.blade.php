@extends('layouts.dashboard')


@section('title')
      Dashboard Setting Page
@endsection


@section('content')
<div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Store Settings</h2>
                <p class="dashboard-subtitle">Make store that profitable</p>
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
                                <label for="">Store Name</label>
                                <input type="text" class="form-control" />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Category</label>
                                <select name="category" class="form-control">
                                  <option value="" disabled>
                                    Select Category
                                  </option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Store</label>
                                <p class="text-muted">
                                  Is your shop currently open?
                                </p>
                                <div
                                  class="custom-control custom-radio custom-control-inline"
                                >
                                  <input
                                    type="radio"
                                    class="custom-control-input"
                                    name="is_store_open"
                                    id="openStoreTrue"
                                    value="true"
                                  />
                                  <label
                                    for="openStoreTrue"
                                    class="custom-control-label"
                                  >
                                    Open
                                  </label>
                                </div>

                                <div
                                  class="custom-control custom-radio custom-control-inline"
                                >
                                  <input
                                    type="radio"
                                    class="custom-control-input"
                                    name="is_store_open"
                                    id="openStoreFalse"
                                    value="false"
                                  />
                                  <label
                                    for="openStoreFalse"
                                    class="custom-control-label"
                                  >
                                    Temporarily Closed
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col text-right">
                              <button
                                type="submit"
                                class="btn btn-warning px-5 text-white"
                              >
                                Save
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