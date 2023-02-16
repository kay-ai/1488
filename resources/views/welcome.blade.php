@extends('layouts.app')

@section('header')

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Presidential</span></a></li>
        <li><a href="#senate" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Senetorial</span></a></li>
        <li><a href="#reps" class="nav-link scrollto"><i class="bx bxs-key"></i> <span>House of Reps</span></a></li>
        <li><a href="#assembly" class="nav-link scrollto"><i class="bx bx-user-circle"></i> <span>House of Assembly</span></a></li>
      </ul>
    </nav>
    <!-- .nav-menu -->

  </header>
  <!-- End Header -->
@endsection

@section('content')
  @include('includes.messages')
  @include('includes.show-president')
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
                    <span class="party-name">Accord Party</span>
                    <a href="javascript:void(0);" onclick="showPresident('A', 'Accord Party')">
                        <img src="/assets/img/a-logo.jpg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <span class="party-name">Action Alliance</span>
                    <a href="javascript:void(0);" onclick="showPresident('AA', 'Action Alliance')">
                        <img src="/assets/img/aa-logo.jpg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <span class="party-name">African Action Congress</span>
                    <a href="javascript:void(0);" onclick="showPresident('AAC', 'African Action Congress')">
                        <img src="/assets/img/aac-logo.jpeg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <span class="party-name">Action Democratic Party</span>
                    <a href="javascript:void(0);" onclick="showPresident('ADP', 'Action Democratic Party')">
                        <img src="/assets/img/adp-logo.jpg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <span class="party-name">African Democratic Congress</span>
                    <a href="javascript:void(0);" onclick="showPresident('ADC', 'African Democratic Congress')">
                        <img src="/assets/img/adc-logo.jpeg" class="logo">
                    </a>
                </div>

                <div class="item">
                    <span class="party-name">All Progressives Congress</span>
                    <a href="javascript:void(0);" onclick="showPresident('APC', 'All Progressives Congress')">
                        <img src="/assets/img/apc-logo.jpg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <span class="party-name">Allied Peoples Movement</span>
                    <a href="javascript:void(0);" onclick="showPresident('APM', 'Allied Peoples Movement')">
                        <img src="/assets/img/apm-logo.jpeg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <span class="party-name">All Progressives Grand Alliance</span>
                    <a href="javascript:void(0);" onclick="showPresident('APGA', 'All Progressives Grand Alliance')">
                        <img src="/assets/img/apga-logo.jpg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <span class="party-name">Action Peoples Party</span>
                    <a href="javascript:void(0);" onclick="showPresident('APP', 'Action Peoples Party')">
                        <img src="/assets/img/app-logo.png" class="logo">
                    </a>
                </div>
                <div class="item">
                    <span class="party-name">Boot Party</span>
                    <a href="javascript:void(0);" onclick="showPresident('BOOT', 'Boot Party')">
                        <img src="/assets/img/boot-logo.png" class="logo">
                    </a>
                </div>
                <div class="item">
                    <span class="party-name">Labour Party</span>
                    <a href="javascript:void(0);" onclick="showPresident('LP', 'Labour Party')">
                        <img src="/assets/img/lp-logo.jpg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <span class="party-name">New Nigeria Peoples Party</span>
                    <a href="javascript:void(0);" onclick="showPresident('NNPP', 'New Nigeria Peoples Party')">
                        <img src="/assets/img/nnpp-logo.jpeg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <span class="party-name">National Rescue Movement</span>
                    <a href="javascript:void(0);" onclick="showPresident('NRM', 'National Rescue Movement')">
                        <img src="/assets/img/nrm-logo.jpeg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <span class="party-name">Peoples Democratic Party</span>
                    <a href="javascript:void(0);" onclick="showPresident('PDP', 'Peoples Democratic Party')">
                        <img src="/assets/img/pdp-logo.jpeg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <span class="party-name">Peoples Redemption Party</span>
                    <a href="javascript:void(0);" onclick="showPresident('PRP', 'Peoples Redemption Party')">
                        <img src="/assets/img/prp-logo.jpeg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <span class="party-name">Social Democratic Party</span>
                    <a href="javascript:void(0);" onclick="showPresident('SDP', 'Social Democratic Party')">
                        <img src="/assets/img/sdp-logo.jpeg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <span class="party-name">Young Progressive Party</span>
                    <a href="javascript:void(0);" onclick="showPresident('YPP', 'Young Progressive Party')">
                        <img src="/assets/img/ypp-logo.jpeg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <span class="party-name">Zenith Labour Party</span>
                    <a href="javascript:void(0);" onclick="showPresident('ZLP', 'Zenith Labour Party')">
                        <img src="/assets/img/zlp-logo.jpg" class="logo">
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
                    <small class="mb-4">Search for a House of Reps Candidate, Filter by any of the following parameters; Candidate's Name, State, Political Party, or Contituency.</small>
                    <form action="{{route('showCandidate')}}" method="POST">
                        @csrf
                        <div class="row pb-4">
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
                    <div class="row mt-2 pb-4">
                        <form action="/upload-csv" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="col-md-6">
                                <input type="file" name="csv_file" class="form-control">
                            </div>
                            <div class="col-md-6 mt-2">
                                <button type="submit" class="btn btn-primary">Submit <i class="bi bi-filter"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End reps Section -->

    <!-- ======= Senate Section ======= -->
    <section id="assembly" class="section d-flex about flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="mb-4">State House Of Assembly Candidates</h1>
            <div class="row my-5 card-row">
                <div class="card shadow px-4">
                    <h5 class="card-title"><i class="bi bi-filter"></i> Filter House of Assembly list</h5>
                    <small class="mb-4">Search for a House of Assembly Candidate, Filter by any of the following parameters; Candidate's Name, State, Political Party, or Contituency.</small>
                    <form action="{{route('showCandidate')}}" method="POST">
                        @csrf
                        <div class="row pb-4">
                            <div class="form-group col-md-3 mb-4">
                                <label class="control-label" for="name">Candidate Name:</label>
                                <select id="assembly_name" placeholder="hello" class="form-control" style="font-size: 12px;" multiple="multiple" data-tags="true">
                                </select>
                                <input type="hidden" name="name" id="real_assembly_name">
                            </div>
                            <div class="form-group col-md-3 mb-4">
                                <label class="control-label" for="state">State:</label>
                                <select id="assembly_state" class="form-control" style="font-size: 12px;" multiple="multiple" data-tags="true">
                                </select>
                                <input type="hidden" name="state" id="real_assembly_state">
                            </div>
                            <div class="form-group col-md-3 mb-4">
                                <label class="control-label" for="party">Political Party:</label>
                                <select id="assembly_party" class="form-control" style="font-size: 12px;" multiple="multiple" data-tags="true">
                                </select>
                                <input type="hidden" name="party" id="real_assembly_party">
                            </div>
                            <div class="form-group col-md-3 mb-4">
                                <label class="control-label" for="constituency">Constituency:</label>
                                <select id="assembly_constituency" class="form-control" style="font-size: 12px;" name="constituency" multiple="multiple" data-tags="true">
                                </select>
                                <input type="hidden" name="constituency" id="real_assembly_constituency">
                            </div>
                            <div class="col-md-12">
                                <input type="hidden" name="office" value="assembly">
                                <button type="submit" class="btn btn-primary">Search <i class="bi bi-filter"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Assembly Section -->

  </main>
  <!-- End #main -->
@endsection
