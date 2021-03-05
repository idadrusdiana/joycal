 <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i class="fas fa-th-large"></i></a>
    </li>          
  </ul>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto" style="margin-right: 20px; width:200px">
    <!-- <label>顧客リスト</label>       -->
    @if (auth()->user()->role === 'superadmin')
    <select class="form-control" onchange="window.location.href = '{{ url('/admin') }}?cluster=' + event.target.value">
      <option value="">Honsha</option>
      @foreach (App\Models\Store::all() as $store)
      <option {!! request()->cluster == $store->id ? 'selected' : '' !!} value="{{ $store->id }}">{{ $store->store_name }}</option>        
      @endforeach
    </select> 
    @endif
  </ul>      
</nav>
  <!-- /.navbar -->