<!-- modal content -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h6 class=""></h6>
          <h4 class="text-center" >穐山　太郎</h4>
          <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="float-right">
            <a id="print-button" class="btn btn-secondary mb-2" target="_blank" href="admin/print?id=${data.id}"><i class="fa fa-print"></i></a>
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