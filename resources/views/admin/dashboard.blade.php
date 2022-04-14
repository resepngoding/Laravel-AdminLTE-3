<x-app-layout>
@push('styles')
    
@endpush
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Card Title</h5>
        </div>
        <div class="card-body">
          <div class="row">
              {{-- CARD CONTENT --}}
          </div>
        </div>
        <div class="card-footer">
          <div class="row">
          {{-- CARD FOOTER CONTENT --}}
          </div>
      </div>
    </div>
  </div>

  @push('js')
     
  @endpush

</x-app-layout>