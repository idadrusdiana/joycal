<!DOCTYPE html>
<html>
</style>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ジョイカル花園インター店｜新車の軽 月々1万円専門店</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/component.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets_admin/plugins/fontawesome-free/css/all.min.css">
</head>

<body>
    <div id="controller">
    <div class="container-fluid" id="top">
        <div class="nav-bar-panel-ashikaga display-desktop">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="assets/flat7/flat7.png" class="pointer mt-10 mb-2" width="100%" style="max-width: 300px;">
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="tel:0120-589-322">
                            <img src="assets/flat7/telp-flat7.png" class="pointer mt-10" style="max-width: 200px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-bar-panel display-mobile box-shadow-grey" style="position: fixed;">
            <div class="container">
                <div class="row" style="padding: 5px;">
                    <div class="col-6">
                        <img src="assets/flat7/flat7.png" width="100%" style="margin: 3px 0px 1px 0px;" onclick="window.location.href='../../joycal_hanazono'">
                    </div>
                    <div class="col-6 text-right">
                        <img src="assets/flat7/telp-flat7.png" class="bar" @click="toggleContent(0)">
                    </div> 
                </div>

            </div>
        </div>

        <div class="display-mobile pt-3"></div>
        <div class="" style="background-color: #E6322C; padding: 20px 0;">
            <h4 class="text-center text-white">仮審査用フォーム</h4>
        </div>


        <div class="bg-pink pt-1 pb-4 r-pb-1" id="mailform">
            <!-- carousel -->
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="row justify-content-center mt-3 r-mt-0 r-mb-1 mb-4">
                        <div class="col-md-9">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="assets/flat7/banner/flat7.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/flat7/banner/flat7_2.png" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/flat7/banner/flat7_3.png" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/flat7/banner/flat7_4.png" alt="Fourth slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /carousel -->

            <form class="container" id="form-input" method="post" action="<?= url('send-response-flat7') ?>" enctype="multipart/form-data">
                <div class="row justify-content-center mt-3 r-mt-0 r-mb-1 mb-4">
                    <div class="col-md-9">
                        <div class="bg-white p-4 mb-3" style="border-radius: 20px; display: flex; justify-content: space-between; position: relative;">
                            <div class="line-step">
                                <div class="line-progress" style="height: 10px; background: #004096; width: 0%; transition: width 300ms;"></div>
                            </div>

                            <div class="step-item">
                                <div class="bg-blue step mb-2 step ===1">1</div>
                                <h5>フォームの入力</h5>
                            </div>

                            <div class="step-item">
                                <div :class="step >= 2 ? 'bg-blue' : 'bg-gray'" class="step mb-2">2</div>
                                <h5>入力内容の確認</h5>
                            </div>

                            <div class="step-item">
                                <div :class="step === 3 ? 'bg-blue' : 'bg-gray'" class="step mb-2">3</div>
                                <h5>完了</h5>
                            </div>

                        </div>
                        <div class="mb-4">
                            <strong>
                                リースに関することや、お車のことなど、ご不明な点はお気軽にお問い合せ下さい。<br />
                                翌営業日までに、ご連絡を差し上げます。
                            </strong><br />
                            <span>※水曜日は定休日です。</span><br />
                            <span>※お問い合わせの受付状況によっては翌営業日を超えてのご連絡となってしまう場合もございます。</span>
                        </div>

                        <strong>※記入漏れがございますと仮審査を致しかねますのでご注意下さい。</strong>
                        <div class="bg-blue br-top-15 border-blue h5 r-h4 mb-0 mt-1 p-1 text-bold text-white text-center">
                            フォーム入力
                        </div>

                        <div v-show="step === 1" class="bg-white br-bt-15 border-blue p-3">
                            <!-- first name and last name -->
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>お名前</label>
                                    <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label>
                                </div>

                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" name="name_first" class="form-control text-black rounded" autocomplete="off" placeholder="姓" onkeypress="return event.charCode < 48 || event.charCode >57">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" name="name_last" class="form-control text-black rounded" autocomplete="off" placeholder="名" onkeypress="return event.charCode < 48 || event.charCode >57">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- family name -->
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>フリガナ</label>
                                    <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label>
                                </div>

                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" name="ext_name_surname" class="form-control text-black rounded" autocomplete="off" placeholder="セイ" onkeypress="return event.charCode < 48 || event.charCode  >57">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" name="ext_name_mei" class="form-control text-black rounded" autocomplete="off" placeholder="セイ" onkeypress="return event.charCode < 48 || event.charCode  >57">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- gender -->
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>性別</label>
                                    <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label>
                                </div>

                                <div class="col-sm-8 row">
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" name="gender" type="radio" id="gender-male" value="男">
                                            <label class="form-check-label" for="gender-male">
                                                男
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" name="gender" type="radio" id="gender-female" value="女">
                                            <label class="form-check-label" for="gender-female">
                                                女
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- birthday -->
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>生年月日</label>
                                    <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label>
                                </div>

                                <div class="col-sm-8 row">
                                    <div class="col-sm-4">
                                        <select class="form-control text-black" name="birth_japan_year">
                                            <option value="明治">明治</option>
                                            <option value="昭和">昭和</option>
                                            <option value="平成">平成</option>
                                            <option value="令和">令和</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-8" style="display: flex; flex-direction: row; align-items: center;">
                                        <input type="text" class="form-control text-black ml-3" style="width: 70px;" name="birth_year" onkeypress="return hanyaAngka(event)" maxlength="4"/>&nbsp;年 &nbsp;
                                        <!-- <input type="number" class="form-control text-black ml-3" style="width: 60px;" name="birth_month"/>&nbsp;月 -->
                                        <select class="form-control text-black" style="width: 80px" name="birth_month">
                                            <option value="1">1月</option>
                                            <option value="2">2月</option>
                                            <option value="3">3月</option>
                                            <option value="4">4月</option>
                                            <option value="5">5月</option>
                                            <option value="6">6月</option>
                                            <option value="7">7月</option>
                                            <option value="8">8月</option>
                                            <option value="9">9月</option>
                                            <option value="10">10月</option>
                                            <option value="11">11月</option>
                                            <option value="12">12月</option>
                                        </select>&nbsp
                                        <!-- <input type="number" class="form-control text-black" style="width: 60px;" name="birth_date"/>&nbsp;日 -->
                                        <select class="form-control text-black" style="width: 80px" name="birth_date">
                                            <option value="1">1日</option>
                                            <option value="2">2日</option>
                                            <option value="3">3日</option>
                                            <option value="4">4日</option>
                                            <option value="5">5日</option>
                                            <option value="6">6日</option>
                                            <option value="7">7日</option>
                                            <option value="8">8日</option>
                                            <option value="9">9日</option>
                                            <option value="10">10日</option>
                                            <option value="11">11日</option>
                                            <option value="12">12日</option>
                                            <option value="13">13日</option>
                                            <option value="14">14日</option>
                                            <option value="15">15日</option>
                                            <option value="16">16日</option>
                                            <option value="17">17日</option>
                                            <option value="18">18日</option>
                                            <option value="19">19日</option>
                                            <option value="20">20日</option>
                                            <option value="21">21日</option>
                                            <option value="22">22日</option>
                                            <option value="23">23日</option>
                                            <option value="24">24日</option>
                                            <option value="25">25日</option>
                                            <option value="26">26日</option>
                                            <option value="27">26日</option>
                                            <option value="28">28日</option>
                                            <option value="29">29日</option>
                                            <option value="30">30日</option>
                                            <option value="31">31日</option>
                                        </select>&nbsp;
                                    </div>

                                </div>
                            </div>

                            <!-- phone number -->
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>電話番号</label>
                                    <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label>
                                </div>

                                <div class="col-sm-8 form-inline-input">
                                    <input type="text" class="form-control text-black phone-input" name="phone_number" placeholder="000-000-0000" style="width: 128px;" />
                                </div><br>
                            </div>

                            <!-- email -->
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>メールアドレス</label>
                                    <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label>
                                </div>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control text-black" placeholder="shinsha.kau@kei-ichiman.com" name="email" />
                                </div>
                            </div>

                            <!-- address -->
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>ご住所</label>
                                    <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label>
                                </div>

                                <div class="col-sm-8 form-inline-input">
                                    <div style="display: flex; align-items: center;">
                                    〒&nbsp;<input type="text" class="form-control text-black address-postcode" style="width:100px" placeholder="000-0000" name="address_postcode" onkeypress="return hanyaAngka(event)" maxlength="7" />
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="offset-sm-4 col-sm-3 form-inline-input">
                                    <input type="text" class="form-control text-black mr-2" placeholder="都道府県" name="adress_district" style="width:150px;" />
                                </div>
                                <div class="col-sm-5 form-inline-input">
                                    <input type="text" class="form-control text-black" placeholder="市区群" name="adress_city" />
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="offset-sm-4 col-sm-8">
                                    <input type="text" class="form-control text-black" placeholder="町名番地" name="address_street" />
                                </div>
                            </div>
                            <!-- /address -->

                            <!-- marital status -->
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>配偶者の有無</label>
                                    <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label>
                                </div>

                                <div class="col-sm-8 row">
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" name="marital_status" type="radio" id="marital_yes" value="有り">
                                            <label class="form-check-label" for="marital_yes">
                                                有り
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" name="marital_status" type="radio" id="marital_no" value="無し">
                                            <label class="form-check-label" for="marital_no">
                                                無し
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- family structure -->
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>家族構成</label>
                                    <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label>
                                </div>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control text-black" placeholder="例:子供2人、他家族1人" name="family_structure" />
                                </div>
                            </div>

                            <!-- household -->
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>世帯主のご氏名</label>
                                </div>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control text-black" placeholder="※世帯主ご本人の場合は入力不要" name="household_name" onkeypress="return event.charCode < 48 || event.charCode  >57" />
                                </div>
                            </div>

                            <!-- household contact -->
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>世帯主のご連絡先</label>
                                </div>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control text-black" placeholder="※世帯主ご本人の場合は入力不要" name="household" />
                                </div>
                            </div>

                            <!-- residence -->
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>ご住居</label>
                                    <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label>
                                </div>

                                <div class="col-sm-8 form-inline">
                                    <?php
                                    $options = [
                                        '自己所有', '家族所有', '社宅・官舎', '公営住宅', '分譲マンション', '賃貸マンション', '借家', 'アパート', '寮', 'その他'
                                    ];
                                    ?>

                                    <?php foreach ($options as $key => $option) : ?>
                                        <div class="form-check mr-4">
                                            <input class="form-check-input" name="residence" type="radio" id="residence-<?= $key ?>" value="<?= $option ?>">
                                            <label class="form-check-label" for="residence-<?= $key ?>">
                                                <?= $option ?>
                                            </label>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <!-- residence year -->
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>住居年数</label>
                                    <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label>
                                </div>

                                <div class="col-sm-8 form-inline-input">
                                    <input type="text" class="form-control text-black" placeholder="例：3年" name="residence_year" />
                                </div>
                            </div>

                            <!-- employment status -->
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>雇用形態</label>
                                    <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label>
                                </div>

                                <div class="col-sm-8 form-inline-input">
                                    <select class="form-control text-black mr-2" name="employment_status">
                                        <option value="正社員">正社員</option>
                                        <option value="契約社員">契約社員</option>
                                        <option value="一般派遣社員">一般派遣社員</option>
                                        <option value="パート">パート</option>
                                        <option value="内定者">内定者</option>
                                        <option value="自営業">自営業</option>
                                        <option value="自由業">自由業</option>
                                        <option value="公務員">公務員</option>
                                        <option value="会社役員">会社役員</option>
                                        <option value="その他">その他</option>
                                    </select>
                                </div>
                            </div>

                            <!-- office name -->
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>勤務先名</label>
                                    <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label>
                                </div>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control text-black" placeholder="例:株式会社カークリニックアキヤマ" name="office_name" />
                                </div>
                            </div>

                            <!-- work name -->
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>勤務先名フリガナ</label>
                                    <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label>
                                </div>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control text-black" placeholder="例:カブシキガイシャカークリニックアキヤマ" name="work_name" />
                                </div>
                            </div>

                            <!-- work phone -->
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>電話番号</label>
                                    <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label>
                                </div>

                                <div class="col-sm-8 form-inline-input">
                                    <input type="text" style="width:150px;" class="form-control text-black phone-input" name="work_phone" placeholder="000-000-0000" />
                                </div>
                            </div>

                            <!-- length of service -->
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>勤続年数</label>
                                    <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label>
                                </div>

                                <div class="col-sm-8 form-inline-input">
                                    <input type="text" style="width:150px;" class="form-control text-black" placeholder="例：3年" name="length_of_service" />
                                </div>
                            </div>

                            <!-- annual income -->
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>年収</label>
                                    <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label>
                                </div>

                                <div class="col-sm-8 form-inline-input">
                                    <input type="text" class="form-control text-black" placeholder="例：350万円" name="annual_income" />
                                </div>
                            </div>

                            <!-- annual income of household -->
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>世帯主の年収</label>
                                </div>

                                <div class="col-sm-8 form-inline-input">
                                    <input type="text" class="form-control text-black" placeholder="例：350万円※世帯主ご本人の場合は入力不要" name="annual_income_of_household" />
                                </div>
                            </div>

                            <!-- industry -->
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>業種</label>
                                    <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label>
                                </div>

                                <div class="col-sm-8 form-inline">
                                    <?php
                                    $options = [
                                        '鉱業', '建築業', '製造業', '電気・ガス', '情報・通信', '流通', '教育・医師・看護', '金融・保険', '不動産業', 'サービス業', '運輸', '飲食', '教育機関', '医療機関', '公務', 'その他'
                                    ];
                                    ?>

                                    <?php foreach ($options as $key => $option) : ?>
                                        <div class="form-check mr-4">
                                            <input class="form-check-input" name="industry" type="radio" id="industry-<?= $key ?>" value="<?= $option ?>">
                                            <label class="form-check-label" for="industry-<?= $key ?>">
                                                <?= $option ?>
                                            </label>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <!-- occupation -->
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>職種</label>
                                    <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label>
                                </div>

                                <div class="col-sm-8 form-inline">
                                    <?php
                                    $options = [
                                        '一般事務', '小売・飲食・サービス等の従事者', '工場・現場等従事者', '派遣', '営業', '運転手', '教育・医師・看護', '専業主婦', 'パート・アルバイト', '学生', '国民年金', '厚生年金等', 'その他'
                                    ];
                                    ?>

                                    <?php foreach ($options as $key => $option) : ?>
                                        <div class="form-check mr-4">
                                            <input class="form-check-input" name="occupation" type="radio" id="occupation-<?= $key ?>" value="<?= $option ?>">
                                            <label class="form-check-label" for="occupation-<?= $key ?>">
                                                <?= $option ?>
                                            </label>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <!-- consent for shared use -->
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>共同利用に関する同意</label>
                                    <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label>
                                </div>

                                <div class="col-sm-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="consent_for_shared_use" value="1">
                                        <label class="form-check-label">
                                            下記PDF内容を確認し、<br>同意をしたらチェックを入れてください。
                                        </label>
                                    </div>
                                    <a href="javascript:void(0)" class="text-primary show-pdf" data-src="#pdf1">「個人情報の共同利用」PDFダウンロードはこちら</a>
                                    <embed id="pdf1" src="assets/pdf/test.pdf#toolbar=0&navpanes=0&scrollbar=0" width="100%" style="display: none; height: 600px;" />
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>お申し込みの内容(約款)</label>
                                    <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label>
                                </div>

                                <div class="col-sm-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="details_of_application" value="1">
                                        <label class="form-check-label">
                                            下記PDF内容を確認し、<br>同意をしたらチェックを入れてください。
                                        </label>
                                    </div>
                                    <a href="javascript:void(0)" class="text-primary show-pdf" data-src="#pdf2">「個人情報の共同利用」PDFダウンロードはこちら</a>
                                    <embed id="pdf2" src="assets/pdf/test.pdf#toolbar=0&navpanes=0&scrollbar=0" width="100%" style="display: none; height: 600px;" />
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>個人情報取り扱いに関する同意条項 <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label></label>

                                </div>

                                <div class="col-sm-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="consent_personal_information" value="1">
                                        <label class="form-check-label">
                                        下記PDF内容を確認し、<br>同意をしたらチェックを入れてください。
                                        </label>
                                    </div>
                                    <a href="javascript:void(0)" class="text-primary show-pdf" data-src="#pdf3">「個人情報の共同利用」PDFダウンロードはこちら</a>
                                    <embed id="pdf3" src="assets/pdf/test.pdf#toolbar=0&navpanes=0&scrollbar=0" width="100%" style="display: none; height: 600px;" />
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>代行入力に関する同意条項</label>
                                    <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label>
                                </div>

                                <div class="col-sm-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="consent_proxy_input" value="1">
                                        <label class="form-check-label">
                                            下記PDF内容を確認し、<br>同意をしたらチェックを入れてください。
                                        </label>
                                    </div>
                                    <a href="javascript:void(0)" class="text-primary show-pdf" data-src="#pdf4">「個人情報の共同利用」PDFダウンロードはこちら</a>
                                    <embed id="pdf4" src="assets/pdf/test.pdf#toolbar=0&navpanes=0&scrollbar=0" width="100%" style="display: none; height: 600px;" />
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <label>送信確認</label>
                                    <label class="br-5 btn-xxs bg-red text-white ml-10">必須</label>
                                </div>

                                <div class="col-sm-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="confirmation_transmission" value="1">
                                        <label class="form-check-label">
                                            上記送信内容を確認したら<br />チェックを入れてください。
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="submit"></button>
                            </div>
                        </div>

                        <div v-show="step === 2" class="bg-white br-bt-15 border-blue p-3">
                            <table class="table" border="0px">
                                <tr>
                                    <td>お名前 </td>
                                    <td>{{ result.name_first + ' ' + result.name_last }}</td>
                                </tr>
                                <tr>
                                    <td>フリガナ</td>
                                    <td>{{ result.ext_name_surname + ' ' + result.ext_name_mei  }}</td>
                                </tr>
                                <tr>
                                    <td>性別</td>
                                    <td>{{ result.gender }}</td>
                                </tr>
                                <tr>
                                    <td>生年月日</td>
                                    <td>{{ result.birth_japan_year + ' ' + result.birth_year + ' 年 ' + result.birth_month + ' 月 ' + result.birth_date + ' 日 '}}</td>
                                </tr>
                                <tr>
                                    <td>電話番号</td>
                                    <td>{{ result.phone_number }}</td>
                                </tr>
                                <tr>
                                    <td>メールアドレス</td>
                                    <td>{{ result.email }}</td>
                                </tr>
                                <tr>
                                    <td>ご住所</td>
                                    <td>{{ result.address_postcode +' ' + result.adress_district + ' ' + result.adress_city + ' ' + result.address_street}}
                                </tr>
                                <tr>
                                    <td>配偶者の有無</td>
                                    <td>{{ result.marital_status }}</td>
                                </tr>
                                <tr>
                                    <td>家族構成</td>
                                    <td>{{ result.family_structure }}</td>
                                </tr>
                                <tr>
                                    <td>世帯主のご氏名</td>                                        
                                    <td>{{ result.household_name }}</td>
                                </tr>
                                <tr>
                                    <td>世帯主のご連絡先</td>                                        
                                    <td>{{ result.household }}</td>
                                </tr>
                                <tr>
                                    <td>ご住居</td>                                        
                                    <td>{{ result.residence }}</td>
                                </tr>
                                <tr>
                                    <td>住居年数</td>
                                    <td>{{ result.residence_year }}</td>
                                </tr>
                                <tr>
                                    <td>雇用形態</td>
                                    <td>{{ result.employment_status }}</td>
                                </tr>
                                <tr>
                                    <td>勤務先名</td>
                                    <td>{{ result.office_name }}</td>
                                </tr>
                                <tr>
                                    <td>勤務先名フリガナ</td>
                                    <td>{{ result.work_name }}</td>
                                </tr>
                                <tr>
                                    <td>電話番号</td>
                                    <td>{{ result.work_phone }}</td>
                                </tr>
                                <tr>
                                    <td>勤続年数</td>
                                    <td>{{ result.length_of_service }}</td>
                                </tr>
                                <tr>
                                    <td>年収</td>
                                    <td>{{ result.annual_income }}</td>
                                </tr>
                                <tr>
                                    <td>世帯主の年収</td>
                                    <td>{{ result.annual_income_of_household }}</td>
                                </tr>
                                <tr>
                                    <td>業種</td>
                                    <td>{{ result.industry }}</td>
                                </tr>
                                <tr>
                                    <td>職種</td>
                                    <td>{{ result.occupation }}</td>
                                </tr>
                            </table>
                            <div class="text-center">
                                <button type="button" class="bg-blue btn-lg text-white" style="border-radius: 10px;" @click="step = 1">Cancel</button> &nbsp;
                                <button type="button" class="bg-blue btn-lg text-white" style="border-radius: 10px;" @click="submitResult()">Continue</button>
                            </div>
                                                        
                        </div>

                        <div v-show="step === 3" class="bg-white br-bt-15 border-blue p-3">
                            <!-- <table class="table" border="0px">
                                <tr>
                                    <td>お名前 </td>                                    
                                </tr>                                
                            </table> -->
                            <div class="container">
                                <div class="row justify-content-center r-mt-0 r-mb-1 mb-4">
                                    <img src="assets/flat7/thanks/honjo.thanks.png" alt="honjo.thanks.png" width="100%;">
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="button" class="bg-blue btn-lg text-white" style="border-radius: 10px;" @click="goHome()">OK</button> &nbsp;                                
                            </div>                                                        
                        </div>

                    </div>
                </div>
            </form>
        </div>

        <div class="modal fade" id="modal-terima">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h6 class=""></h6>
                        <h4 class="text-right">穐山　太郎</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Terima kasih
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <!-- <div class="modal fade" id="modal-default"> -->
            <!-- <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h6 class=""></h6>
                        <h4 class="text-right">穐山　太郎</h4>
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
                        <button type="button" data-dismiss="modal" class="btn btn-primary">Cancel</button>
                        <button type="button" id="process-next" class="btn btn-primary">Next</button>
                    </div>
                </div> -->
                <!-- /.modal-content -->
            <!-- </div>

            <div class="bg-blue pt-10 pb-10 text-center">
                <span class="text-white text-xs r-h5">
                    <a href="#" class="text-white" style="text-decoration: none;"><u>個人情報保護方針</u></a>
                    Copyright 2021 カークリニックアキヤマ
                </span>
            </div>

        </div> -->
    </div>
    </div>

    <script src="https://unpkg.com/jquery@3.3.1/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
    <script src="https://www.unpkg.com/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="https://unpkg.com/jquery-mask-plugin@1.14.15/dist/jquery.mask.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
         function hanyaAngka(event) {
            var angka = (event.which) ? event.which : event.keyCode
            if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                return false;
            return true;
        }
    </script>
</body>

</html>