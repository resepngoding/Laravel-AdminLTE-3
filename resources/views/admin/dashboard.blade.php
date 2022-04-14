<x-app-layout>

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Card Title</h5>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
              {{-- CARD CONTENT --}}
          </div>
          <!-- /.row -->
        </div>
        <!-- ./card-body -->
        <div class="card-footer">
          <div class="row">
          {{-- CARD FOOTER CONTENT --}}
          </div>
          <!-- /.row -->
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

</x-app-layout>