@extends('layouts.app')

@section('header')

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="/" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home Page</span></a></li>
        {{-- <li><a href="#senate" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Senetorial</span></a></li>
        <li><a href="#reps" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>House of Reps</span></a></li> --}}
      </ul>
    </nav>
    <!-- .nav-menu -->

  </header>
  <!-- End Header -->
@endsection

@section('content')
    <main id="main">
        <section id="senate" class="section d-flex about flex-column justify-content-center">
            <div class="container" data-aos="zoom-in" data-aos-delay="100">
                <h1 class="mb-4">Search Results - ({{count($results)}}) </h1>
                <div class="row my-5 card-row">
                    @foreach ($results as $candidate)
                        <div class="card shadow px-4 mb-3">
                            <h5 class="card-title"><i class="bi bi-filter"></i> {{$candidate->name}} - ({{$candidate->party}})</h5>
                            <small class="mb-2">Candidate Details:</small>

                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="state">State:</label><br>
                                    <div>{{$candidate->state}}</div>
                                </div>
                                <div class="col-md-3">
                                    <label for="constituency">Constituency:</label><br>
                                    <div>{{$candidate->constituency}}</div>
                                </div>
                                <div class="col-md-3">
                                    <label for="party">Party:</label><br>
                                    <div>{{$candidate->party}}</div>
                                </div>
                                <div class="col-md-3">
                                    <label for="office">Office:</label><br>
                                    <div class="text-primary"><b>{{$candidate->office}}</b></div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between qualifications mb-3">
                                <span class="badge bg-success">EDUCATION - {{$candidate->educational_check}}</span>
                                <span class="badge bg-success">AGE - {{$candidate->age_check}}</span>
                                <span class="badge bg-success">HEALTH - {{$candidate->health_check}}</span>
                                <span class="badge bg-success">CREDIBILITY - {{$candidate->credibility_check}}</span>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    </main>
@endsection
