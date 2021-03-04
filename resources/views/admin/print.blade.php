<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <style>
      body {
      font-family: 'Noto Sans JP', sans-serif;
    }
    </style>
  </head>
<body>
  <header>
    <div id="company">
      <h2 class="name text-center mt-5">顧客リスト</h2> <br>      
    </div>
    </div>
  </header>

<div class="container" style="width: 60%">
    <table class="table mt-5" border="0" cellspacing="0" cellpadding="19">
      <tr>
        <td>申込日</td>              
        <td><span id="item-name"></span></td>
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

    <footer>
      
        <h4 class="name text-center mt-5">Copyright <a href="#">Joycal</a> </h4 >
      
    </footer>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
    async function getData() {
      await fetch("response/{!! request()->id !!}")
        .then(item => item.json())
        .then(item => {
            $('#item-name').html(item.name_first + ' ' + item.name_last),
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
        })

        setTimeout(() => {
            window.print();
            window.onfocus = function() { 
              window.close(); 
            }
        }, 1000);

      }
      
      getData();

    </script>
</body>
</html>