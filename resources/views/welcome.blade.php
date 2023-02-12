@extends('layouts.app')

@section('header')

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Presidential</span></a></li>
        <li><a href="#senate" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Senetorial</span></a></li>
        <li><a href="#reps" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>House of Reps</span></a></li>
      </ul>
    </nav>
    <!-- .nav-menu -->

  </header>
  <!-- End Header -->
@endsection

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="site-details">
       <h1>1488</h1>
       <h5>A Searchable database of all aspirants for the 2023 General Elections</h5>
    </div>
    <div class="container" data-aos="zoom-in" data-aos-delay="100">

      <h1 class="mb-4">Presidential Candidates</h1>
      <div class="row my-lg-5 card-row">
        <div class="col-md-12">
            <div class="card shadow party-card">
                <div class="item">
                    <a href="">
                        <img src="/assets/img/apc-logo.jpg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="/assets/img/adc-logo.jpeg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="/assets/img/apga-logo.jpg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="/assets/img/nnpp-logo.jpeg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="/assets/img/pdp-logo.jpeg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="/assets/img/prp-logo.jpeg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="/assets/img/sdp-logo.jpeg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="/assets/img/ypp-logo.jpeg" class="logo">
                    </a>
                </div>

            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Senate Section ======= -->
    <section id="senate" class="section d-flex about flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="mb-4">Senatorial Candidates</h1>
            <div class="row my-5 card-row">
                <div class="card shadow px-4">
                    <h5 class="card-title"><i class="bi bi-filter"></i> Filter Senatorial list</h5>
                    <small class="mb-4">Search for a Senatorial Candidate, Filter by any of the following parameters; Candidate's Name, State, Political Party, or Contituency.</small>
                    <form action="{{route('showCandidate')}}" method="POST">
                        @csrf
                        <div class="row pb-4">
                            <div class="form-group col-md-3 mb-4">
                                <label class="control-label" for="name">Candidate Name:</label>
                                <select id="senate_name" placeholder="hello" class="form-control" style="font-size: 12px;" multiple="multiple" data-tags="true">
                                </select>
                                <input type="hidden" name="name" id="real_senate_name">
                            </div>
                            <div class="form-group col-md-3 mb-4">
                                <label class="control-label" for="state">State:</label>
                                <select id="senate_state" class="form-control" style="font-size: 12px;" multiple="multiple" data-tags="true">
                                </select>
                                <input type="hidden" name="state" id="real_senate_state">
                            </div>
                            <div class="form-group col-md-3 mb-4">
                                <label class="control-label" for="party">Political Party:</label>
                                <select id="senate_party" class="form-control" style="font-size: 12px;" multiple="multiple" data-tags="true">
                                </select>
                                <input type="hidden" name="party" id="real_senate_party">
                            </div>
                            <div class="form-group col-md-3 mb-4">
                                <label class="control-label" for="constituency">Constituency:</label>
                                <select id="senate_constituency" class="form-control" style="font-size: 12px;" name="constituency" multiple="multiple" data-tags="true">
                                </select>
                                <input type="hidden" name="constituency" id="real_senate_constituency">
                            </div>
                            <div class="col-md-12">
                                <input type="hidden" name="office" value="senate">
                                <button type="submit" class="btn btn-primary">Search <i class="bi bi-filter"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Senate Section -->

    <!-- ======= reps Section ======= -->
    <section id="reps" class="section d-flex about flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="mb-4">House of Representatives Candidates</h1>
            <div class="row card-row my-5">
                <div class="card shadow mb-5 px-4">
                    <h5 class="card-title"><i class="bi bi-filter"></i> Filter House of Reps list</h5>
                    <small class="mb-4">Search for a Senatorial Candidate, Filter by any of the following parameters; Candidate's Name, State, Political Party, or Contituency.</small>
                    <form action="{{route('showCandidate')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-3 mb-4">
                                <label class="control-label" for="name">Candidate Name:</label>
                                <select id="reps_name" placeholder="hello" class="form-control" style="font-size: 12px;" multiple="multiple" data-tags="true">
                                </select>
                                <input type="hidden" name="name" id="real_reps_name">
                            </div>
                            <div class="form-group col-md-3 mb-4">
                                <label class="control-label" for="state">State:</label>
                                <select id="reps_state" class="form-control" style="font-size: 12px;" multiple="multiple" data-tags="true">
                                </select>
                                <input type="hidden" name="state" id="real_reps_state">
                            </div>
                            <div class="form-group col-md-3 mb-4">
                                <label class="control-label" for="party">Political Party:</label>
                                <select id="reps_party" class="form-control" style="font-size: 12px;" multiple="multiple" data-tags="true">
                                </select>
                                <input type="hidden" name="party" id="real_reps_party">
                            </div>
                            <div class="form-group col-md-3 mb-4">
                                <label class="control-label" for="constituency">Constituency:</label>
                                <select id="reps_constituency" class="form-control" style="font-size: 12px;" multiple="multiple" data-tags="true">
                                </select>
                                <input type="hidden" name="constituency" id="real_reps_constituency">
                            </div>
                            <div class="col-md-12">
                                <input type="hidden" name="office" value="reps">
                                <button type="submit" class="btn btn-primary">Search <i class="bi bi-filter"></i></button>
                            </div>
                        </div>
                    </form>
                    {{-- <div class="row mt-5 pb-4">
                        <form action="/upload-csv" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="col-md-6">
                                <input type="file" name="csv_file" class="form-control">
                            </div>
                            <div class="col-md-6 mt-2">
                                <button type="submit" class="btn btn-primary">Submit <i class="bi bi-filter"></i></button>
                            </div>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- End reps Section -->

  </main>
  <!-- End #main -->
@endsection
