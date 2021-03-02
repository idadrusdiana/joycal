@extends('layouts.master')

@section('content') 
    <!-- Main content -->
    <div class="content-wrapper">
      <div class="main-content">
        <div class="row">
            {{-- menampilkan error validasi --}}
            

          <form class="container" id="form-input" method="post" action="/admin/account/create" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row justify-content-center mt-3 r-mt-0 r-mb-1 mb-4">
                
                <div class="col-md-9">                
                        <!-- first name and last name -->
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label>お名前</label>                                
                            </div>

                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" name="first_name" class="form-control rounded" autocomplete="off" placeholder="姓" value="{{ old('first_name') }}">
                                        @if ($errors->has('first_name'))
                                            @foreach ($errors->get('first_name') as $error)
                                                <span class="text-danger">{{ $error }}</span>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="last_name" class="form-control rounded" autocomplete="off" placeholder="名" value="{{ old('last_name') }}">
                                        @if ($errors->has('last_name'))
                                            @foreach ($errors->get('last_name') as $error)
                                                <span class="text-danger">{{ $error }}</span>  
                                            @endforeach                                            
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- username -->
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label>Username</label>                                
                            </div>

                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" name="name" class="form-control rounded" autocomplete="off" placeholder="username" value="{{ old('name') }}">
                                        @if ($errors->has('last_name'))
                                            @foreach ($errors->get('name') as $error)
                                                <span class="text-danger">{{ $error }}</span>  
                                            @endforeach                                            
                                        @endif
                                    </div>                                    
                                </div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label>Password</label>                                
                            </div>

                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="password" name="password" class="form-control rounded" autocomplete="off" placeholder="Password" value="{{ old('password') }}">
                                        @if ($errors->has('password'))
                                            @foreach ($errors->get('password') as $error)
                                                <span class="text-danger">{{ $error }}</span>  
                                            @endforeach                                            
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <input type="password" name="password_confirm" class="form-control rounded" autocomplete="off" placeholder="Confirm Password">
                                        @if ($errors->has('password_confirm'))
                                            @foreach ($errors->get('password_confirm') as $error)
                                                <span class="text-danger">{{ $error }}</span>  
                                            @endforeach                                            
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- gender -->
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label>Merk</label>                              
                            </div>

                            <div class="col-sm-8 form-inline">
                                @foreach (App\Models\StoreType::all() as $store_type)  
                                    <div class="form-check mr-3">
                                        <input class="form-check-input" name="store_type" type="radio" id="type-{{ $store_type->id }}" value="{{ $store_type->id }}" {!! $loop->index === 0 ? 'checked' : '' !!} onchange="changeType({{ $store_type->id }})">
                                        <label class="form-check-label" for="type-{{ $store_type->id }}">
                                            {{ $store_type->store_type }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- birthday -->
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label>Store Name</label>                                
                            </div>

                            <div class="col-sm-8">
                              <div class="row">
                                <div class="col-6">
                                    <select class="form-control" name="store_id">
                                        @foreach (App\Models\Store::all() as $store)
                                        <option store-type="{{ $store->store_type_id }}" value="{{ $store->id }}">{{ $store->store_name }}</option>
                                        @endforeach                       
                                    </select>
                                </div>
                              </div>
                            </div>

                        </div>                       

                        <!-- email -->
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label>メールアドレス</label>                                
                            </div>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="shinsha.kau@kei-ichiman.com" name="email" value="{{ old('email') }}" />
                                @if ($errors->has('email'))
                                    @foreach ($errors->get('email') as $error)
                                        <span class="text-danger">{{ $error }}</span>  
                                    @endforeach                                            
                                @endif
                            </div>
                        </div>                        

                        <div class="form-group text-right">
                          <button type="submit" class="bg-blue shadow text-white " style="border-radius: 5px; width: 100px;">Save</button>                            
                        </div>
                    </div>

                </div>
            </div>
          </form>          
          <!-- /.col -->
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->
  <!-- modal content -->

</div>
<!-- ./wrapper -->
@stop

@section('footer')
  <script>
  var stores = [];

  function changeType(id) {
    var filtered = stores.filter((item, index) => item.store_type_id == id);

    var html = '';

    for (i = 0; i < filtered.length; i++) {
      html += `<option value="${filtered[i].id}">${filtered[i].label}</option>`;
    }

    $("select[name=store_id]").html(html);
  }
  $(function () {
          
      $("select[name=store_id]").find('option').each(function (index, store) {
        stores.push({id: $(store).attr('value'), store_type_id: $(store).attr('store-type'), label: $(store).html()});
      });

      changeType(stores[0].id);
    
    });

  </script>
@stop
