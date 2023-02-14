@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <i class="bi bi-check-circle me-1"></i>
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <i class="bi bi-x-circle-fill me-1"></i>
        {{session('error')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
