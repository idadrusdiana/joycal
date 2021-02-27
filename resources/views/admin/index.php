<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ジョイカル花園インター店｜新車の軽 月々1万円専門店<</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets_admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets_admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets_admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <!-- daterange picker -->
  <link rel="stylesheet" href="assets_admin/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="assets_admin/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="assets_admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="assets_admin/dist/css/adminlte.min.css">


  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    .select2-results__options li:nth-child(2) {
      color: red !important;
    }
    
    .select2-results__options li:nth-child(3) {
      color: green !important;
    }

    
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
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
      <select class="form-control" id="exampleFormControlSelect1" >
        <option>全店舗</option>
        <option>全店舗</option>
        <option>全店舗</option>        
      </select> 
    </ul>      
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="assets_admin/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets_admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>
      <!-- sidebar menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->       
          
            <a href="#" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>
                Logout               
              </p>
            </a>            
          
        </ul>
      </nav>

    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- <div class="form-group" style="width: 180px; padding: 15px;" >      
    
      <div class="form-group form-inline" style="width: 180px; margin-top: 10px;" >      
        <select class="form-control" id="exampleFormControlSelect1">
          <option>10</option>
          <option>20</option>
          <option>30</option>        
        </select>
        <label>&nbsp; 件表示</label>
      </div>
    </div> -->

    <!-- Main content -->
    <section class="content">
      
      <div class="row">
        <div class="col-sm-12 col-md-12" style="margin: 20px 0; text-align:center" >
          <h2>顧客リスト</h2> &nbsp;         
        </div>
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
                  <th width="40px">対応</th>
                  <th width="70px">可否</th>
                  <th>申込日</th>
                  <th width="180px">名前</th>
                  <th width="180px">フリガナ</th>
                  <th width="40px">性別</th>
                  <th width="120px">電話番号</th>
                  <th width="70px">処理</th>
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
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
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


  <footer class="main-footer">    
    <strong>Copyright <a href="#">Joycal</a>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets_admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets_admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="assets_admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets_admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets_admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets_admin/plugins/moment/moment.min.js"></script>
<script src="assets_admin/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets_admin/plugins/select2/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="assets_admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets_admin/dist/js/demo.js"></script>
<!-- page script -->
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
      "order": [[1, 'asc']],
      "columns": [
        {data: "_id", class: 'text-center', orderable: false, render: function () {
          return `<input type="checkbox"/>`;
        }},
        {data: "id", orderable: false, render: function (obj, index, data) {
          return `
          <select class="form-control form-control-sm select2" data-id="${data.id}">
            <option value=""></option>
            <option ${data.status === 'accepted' ? 'selected' : ''} value="accepted">可決</option>
            <option ${data.status === 'rejected' ? 'selected' : ''} value="rejected">否決</option>
          </select>
          `
        }},
        {data: "created_at", class:'text-center', render: function (obj, index, data) {
          return moment(data.created_at).format('YYYY年MM月DD日 HH:mm')
        }},
        {data: "name_first" && "name_last", class:'text-center'},
        // { data: function ( row, type, set ) {
        //   if ( type === 'display' ) {
        //       return row.name_last;
        //   }
        // }
        {data: "ext_name_surname", class:'text-center', orderable: false},
        {data: "gender", class:'text-center', orderable: false},
        {data: "phone_number", orderable: false},
        {data: "_id", class: 'text-center', render: function (obj, index, data) {
          return `
          <a href="" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-default" onclick="showData('${data._id}')"><i class="fa fa-eye"></i></a>
          <a target="_blank" href="print.php?id=${data._id}" class="btn btn-sm btn-success"><i class="fa fa-print"></i></a>
          `
        }},
      ],
      "initComplete":function( settings, json){
            $('.select2').select2({
              minimumResultsForSearch: -1
            }).on('change', function () {
              
              var el = $(this).parents('td').find('span.select2')
              var option_selected = $(el).find('.select2-selection__rendered').html();
              $.get('admin/change-status/'+$(this).attr('data-id')+'?status='+$(this).val(), 
              function (response) {
                if (option_selected === '可決') {
                  $(el).find('.select2-selection__rendered').css('color', 'red');
                } else if (option_selected === '否決') {
                  $(el).find('.select2-selection__rendered').css('color', 'green');
                }  
              })

                
            })
        }
    });       
    
    $('.dataTables_filter').detach().appendTo('#search-moved')
    $('#range-selector').detach().appendTo($('#example1_wrapper').find('.row').eq(0).find('.col-md-6').eq(1))
  });

</script>
</body>
</html>
