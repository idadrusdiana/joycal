@extends('layouts.master')

@section('content') 
    <!-- Main content -->
    <div class="content-wrapper">
      <div class="main-content">
        <div class="row">
          <form class="container" id="form-input" method="post" action="<?= url('send-response') ?>" enctype="multipart/form-data">
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
                                        <input type="text" name="name_first" class="form-control rounded" autocomplete="off" placeholder="姓">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="name_last" class="form-control rounded" autocomplete="off" placeholder="名">
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
                                        <input type="text" name="username" class="form-control rounded" autocomplete="off" placeholder="username">
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
                                      <input type="text" name="password" class="form-control rounded" autocomplete="off" placeholder="Password">
                                  </div>
                                  <div class="col-6">
                                      <input type="text" name="" class="form-control rounded" autocomplete="off" placeholder="konfrmasi">
                                  </div>
                              </div>
                          </div>
                        </div>

                        <!-- gender -->
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label>Merk</label>                              
                            </div>

                            <div class="col-sm-8 row">
                                <div class="col-2">
                                    <div class="form-check">
                                        <input class="form-check-input" name="type" type="radio" id="type-a" value="A" checked>
                                        <label class="form-check-label" for="type-a">
                                            A
                                        </label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-check">
                                        <input class="form-check-input" name="type" type="radio" id="type-b" value="B">
                                        <label class="form-check-label" for="type-b"">
                                            B
                                        </label>
                                    </div>
                                </div>
                                <div class="col-2">
                                  <div class="form-check">
                                      <input class="form-check-input" name="type" type="radio" id="type-c" value="C">
                                      <label class="form-check-label" for="type-c"">
                                          C
                                      </label>
                                  </div>
                              </div>
                            </div>
                        </div>

                        <!-- birthday -->
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label>Store Name</label>                                
                            </div>

                            <div class="col-sm-8 row">
                                <div class="col-sm-4">
                                    <select class="form-control" name="store_name">
                                        <option value="a">A</option>
                                        <option value="b">B</option>
                                        <option value="c">C</option>                                        
                                    </select>
                                </div>
                            </div>
                        </div>                       

                        <!-- email -->
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label>メールアドレス</label>                                
                            </div>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="shinsha.kau@kei-ichiman.com" name="email" />
                            </div>
                        </div>                        

                        <div class="form-group text-center">
                          <button type="submit" class="bg-blue btn-lg text-white ml-4" style="border-radius: 10px; width: 100px;">Save</button>                            
                        </div>
                    </div>

                </div>
            </div>
          </form>
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="float-right" id="search-moved">
                  <!-- Date range -->
                  <div class="form-group" id="range-selector">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="far fa-calendar-alt"></i>
                        </span>
                      </div>
                      <input onchange="filterData(this)" type="text" class="form-control float-right" id="reservation">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-sm">
                  <thead>
                  <tr>
                    <th width="40px" style="text-align: center">No</th>                    
                    <th width="100px" style="text-align: center">Nama Lengkap</th>
                    <th width="100px" style="text-align: center">Username</th>
                    <th width="40px" style="text-align: center">Password</th>
                    <th width="70px" style="text-align: center">Merk</th>
                    <th width="120px" style="text-align: center">Nama Toko</th>
                    <th width="120" style="text-align: center">Email</th>
                    <th width="40px" style="text-align: center">Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  </tbody>                
                </table>
              </div>        
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->
  <!-- modal content -->
  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h6 class=""></h6>
          <h4 class="text-right" >穐山　太郎</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="float-right">
          <button class="btn btn-primary mb-2"><i class="fa fa-print"></i></button>
          </div>
          <table class="table table-bordered table-sm">
            <tr>
              <td>申込日</td>              
              <td><span id="item-created_at"></span></td>
            </tr>
            <tr>
              <td>性別</td>
              <td><span id="item-gender"></span></td>
            </tr>
            <tr>
              <td>電話番号</td>
              <td><span id="item-phone_number"></span></td>
            </tr>
            <tr>
              <td>ご住所</td>
              <td><span id="item-address"></span></td>
            </tr>
            <tr>
              <td>メールアドレス</td>
              <td><span id="item-email"></span></td>
            </tr>
            <tr>
              <td>配偶者の有無</td>
              <td><span id="item-marital_status"></span></td>
            </tr>
            <tr>
              <td>家族構成</td>
              <td><span id="item-family_structure"></span></td>
            </tr>
            <tr>
              <td>世帯主のご氏名</td>
              <td><span id="item-household_name"></span></td>
            </tr>
            <tr>
              <td>世帯主のご連絡先</td>
              <td><span id="item-household"></span></td>
            </tr>
            <tr>
              <td>ご住居</td>
              <td><span id="item-residence"></span></td>
            </tr>
            <tr>
              <td>住居年数</td>
              <td><span id="item-residence_year"></span></td>
            </tr>
            <tr>
              <td>雇用形態</td>
              <td><span id="item-employment_status"></span></td>
            </tr>
            <tr>
              <td>勤務先名</td>
              <td><span id="item-office_name"></span></td>
            </tr>
            <tr>
              <td>勤務先名フリガナ</td>
              <td><span id="item-work_name"></span></td>
            </tr>
            <tr>
              <td>勤務先電話番号</td>
              <td><span id="item-work_phone"></span></td>
            </tr>
            <tr>
              <td>勤続年数</td>
              <td><span id="item-length_of_service"></span></td>
            </tr>
            <tr>
              <td>年収</td>
              <td><span id="item-annual_income"></span></td>
            </tr>
            <tr>
              <td>世帯主の年収</td>
              <td><span id="item-annual_income_of_household"></span></td>
            </tr>
            <tr>
              <td>業種</td>
              <td><span id="item-industry"></span></td>
            </tr>
            <tr>
              <td>職種</td>
              <td><span id="item-occupation"></span></td>
            </tr>
          </table>      
         
        </div>       
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- modal dialog -->
  </div>

</div>
<!-- ./wrapper -->
@stop

@section('footer')
  <script>
  var datatable;
  var params;
  function filterData(that) {
    if (datatable)
      datatable.ajax.reload();
  }
  function showData (data) {
      datatable = datatable.rows().data();    
      var item;
      for (var i = 0; i < datatable.length; i++) {
        if (datatable[i]._id === data)
          item = datatable[i];
      }

      $('#item-created_at').html(item.created_at),
      $('#item-gender').html(item.gender),
      $('#item-phone_number').html(item.phone_number),
      $('#item-address').html(item.address_postcode + ' ' + item.adress_district + ' ' + item.adress_city + ' ' + item.address_street),
      $('#item-email').html(item.email),
      $('#item-marital_status').html(item.marital_status),
      $('#item-family_structure').html(item.family_structure),
      $('#item-household_name').html(item.household_name),
      $('#item-household').html(item.household),
      $('#item-residence').html(item.residence),
      $('#item-residence_year').html(item.residence_year),
      $('#item-employment_status').html(item.employment_status),
      $('#item-office_name').html(item.office_name),
      $('#item-work_name').html(item.work_name),   
      $('#item-work_phone').html(item.work_phone),
      $('#item-length_of_service').html(item.length_of_service),
      $('#item-annual_income').html(item.annual_income),
      $('#item-annual_income_of_household').html(item.annual_income_of_household),
      $('#item-industry').html(item.industry),
      $('#item-occupation').html(item.occupation)   
  }
  function addDays(date, days) {
    var result = new Date(date);
    result.setDate(result.getDate() + days);
    return result;
  }
  $(function () {
    $('#reservation').daterangepicker({
      locale: {
        format: 'YYYY年MM月DD日',
        daysOfWeek: ['日','月','火','水','木','金','土'],
        monthNames: ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'],
        applyLabel: "適用する",
        cancelLabel: "キャンセル"
      },
      startDate: addDays(new Date, -15),
      endDate: addDays(new Date, 15)
    })

      datatable = $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
        "processing": true,
        "serverSide": true,
        "oLanguage": {
          "sSearch": "検索",
          "sEmptyTable":     "データがありません。",
          "sInfo":           " _TOTAL_ 件中 _START_ から _END_ まで表示",
          "searchPlaceholder": "キーワードを入力",
          "sInfoEmpty":      " 0 件中 0 から 0 まで表示",
          "sInfoFiltered":   "（全 _MAX_ 件より抽出）",
          "sInfoPostFix":    "",
          "sInfoThousands":  ",",
          "sLengthMenu":     "_MENU_ 件表示",
          "sLoadingRecords": "読み込み中...",
          "sProcessing":     "処理中...",
          "sZeroRecords":    "一致するレコードがありません",
          "oPaginate": {
            "sFirst":    "先頭",
            "sLast":     "最終",
            "sNext":     "次へ",
            "sPrevious": "前へ"
          },
          "oAria": {
            "sSortAscending":  ": 列を昇順に並べ替えるにはアクティブにする",
            "sSortDescending": ": 列を降順に並べ替えるにはアクティブにする"
          }
        },
        "ajax": {
          "url": 'http://localhost:8000/admin/responses',
          "contentType": "application/json",
          "data": function ( d ) {
            var range = $('#reservation').val().replace(/[年月]+/g, '-');
            range = range.replace(/[日]+/g, '');
            return JSON.stringify( {
              ...d , range
            });
          }
        },     
          
        ],
        
      });       
      
      $('.dataTables_filter').detach().appendTo('#search-moved')
      $('#range-selector').detach().appendTo($('#example1_wrapper').find('.row').eq(0).find('.col-md-6').eq(1))
    });

  </script>
@stop
