@extends('store_layouts.master')

<!-- <!-- <body class="hold-transition sidebar-mini"> -->
  <!-- Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper"> -->
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
@section('content') 
    <!-- Main content -->
    <div class="content-wrapper">
      <div class="main-content">
        <div class="row">
          <div class="col-sm-12 col-md-12" style="margin: 20px 0; text-align:center" >
            <h2>顧客リスト</h2> &nbsp;         
          </div>
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="text-center" id="search-moved">
                  <!-- Date range -->
                  <div class="form-group form-inline float-right" id="range-selector">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="far fa-calendar-alt"></i>
                        </span>
                      </div>
                      <input style="width: 400px" onchange="filterData(this)" type="text" class="form-control float-right" id="reservation">
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
      </div>
      <!-- /.row -->
    </div>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->

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
        if (datatable[i].id == data)
        item = datatable[i];
      }

      $('#print-button').attr('href', 'admin/print?id='+item.id);

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
          "sSearch": "",
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
          "sSearch":         "",
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
          "data": function ( d ) {
            var range = $('#reservation').val().replace(/[年月]+/g, '-');
            range = range.replace(/[日]+/g, '');
            return {
              ...d , range
            }
          }
        },
        "order": [[1, 'asc']],
        "columns": [
          {data: "id", class: 'text-center', orderable: false, render: function () {
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
          {data: "name_first", class:'text-center', render: function (obj, index, data) {
            return data.name_first
          }},
          // { data: function ( row, type, set ) {
          //   if ( type === 'display' ) {
          //       return row.name_last;
          //   }
          // }
          {data: "ext_name_surname", class:'text-center', orderable: false},
          {data: "gender", class:'text-center', orderable: false},
          {data: "phone_number", class:'text-center', orderable: false},
          {data: "id", class: 'text-center', render: function (obj, index, data) {
            return `
            <a href="" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-default" onclick="showData('${data.id}')"><i class="fa fa-eye"></i></a>
            <a target="_blank" href="admin/print?id=${data.id}" class="btn btn-sm btn-success"><i class="fa fa-print"></i></a>
            `
          }},
        ],
        "initComplete":function( settings, json){

        }
      });
      
      // datatable.on('xhr.dt', function ( e, settings, json, xhr ) {
      //   // Do some staff here...
      //   $('.select2').select2({
      //           minimumResultsForSearch: -1
      //         }).on('change', function () {
                
      //           var el = $(this).parents('td').find('span.select2')
      //           var option_selected = $(el).find('.select2-selection__rendered').html();
      //           $.get('admin/change-status/'+$(this).attr('data-id')+'?status='+$(this).val(), 
      //           function (response) {
      //             if (option_selected === '可決') {
      //               $(el).find('.select2-selection__rendered').css('color', 'red');
      //             } else if (option_selected === '否決') {
      //               $(el).find('.select2-selection__rendered').css('color', 'green');
      //             }  
      //           })

                  
      //         })
      // })
      
      $('#example1_filter').find('input').attr('placeholder', '検索');
      $('.dataTables_filter').detach().appendTo('#search-moved');
      $('#range-selector').detach().appendTo($('#example1_wrapper').find('.row').eq(0).find('.col-md-6').eq(1))
    });

  </script>
@stop
