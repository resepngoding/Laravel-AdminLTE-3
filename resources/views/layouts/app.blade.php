<!DOCTYPE html>
<html lang="en">
<head>
<x-partials.head/>
 <livewire:styles/>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-dark">
    <x-partials.navbar/>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <x-partials.sidebar/>
  </aside>

  <div class="content-wrapper">
    @yield('content-header')
    <section class="content">
      <div class="container-fluid">
        {{ $slot }}
      </div>
    </section>

  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <x-partials.footer/>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<x-partials.required-scripts/>

@stack('js')

<livewire:scripts>
</body>
</html>
