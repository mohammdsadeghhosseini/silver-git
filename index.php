<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Document</title>
</head>
<body>
    <!-------نام سایت-------->
    <div class="name-site">
  <h3>
    <p class="animate__animated animate__bounceInDown underline-infinite">choice.com</p>
  </h3>
</div>

    <!--------اپلودر سایت--------->
    <div id="loader">
        <h1><p class="animate__animated animate__bounceInDown underline-infinite">choice.com</p></h1>
    </div>

    <!---------اسلایدر--------->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/vecteezy_hands-in-fist-and-victory-symbol_14320357.jpg" class="d-block w-100" alt="..." style="height:350px;">
            </div>
            <div class="carousel-item">
                <img src="img/vecteezy_rock-paper-scissors-banner_14320202.jpg" class="d-block w-100" alt="..." style="height:350px;">
            </div>
            <div class="carousel-item">
                <img src="img/vecteezy_rock-paper-scissors-cartoon-banner-with-hands_14320397.jpg" class="d-block w-100" alt="..." style="height:350px;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<!--------شروع کانتینر------------>
    <div class="container-fluid">
        <!-----------خط اول------------>
        <div class="row row1">
            <div class="col-md-2 "><img src="img/rps.png" alt="" class="img-h" data-bs-target="#modalAbout" data-bs-toggle="modal"></div>
            <div class="col-md-2 "><img src="img/game-time.png" alt="" class="img-col" data-bs-target="#modalGameTime" data-bs-toggle="modal"></div>
            <div class="col-md-2 "><img src="img/add-user.gif" alt="" class="img-col" data-bs-target="#modalRegister" data-bs-toggle="modal"></div>
            <div class="col-md-2 "><img src="img/login.gif" alt="" class="img-col" data-bs-target="#modalLogin" data-bs-toggle="modal"></div>
            <div class="col-md-2 "><img src="img/exit.png" alt="" class="img-col" data-bs-target="#modalExit" data-bs-toggle="modal"></div>
            <div class="col-md-2 "><img src="img/open-gift1.gif" alt="" class="img-h" data-bs-target="#modalAccount" data-bs-toggle="modal"></div>
        </div>
<!------------------ تایمرخط دوم------------------->
        <div class="row row2 "> 
            <div class="col timer">
                <div class="time-box">
                    <span id="days">00</span>
                    <label>days</label>
                </div>
                <div class="time-box">
                    <span id="hours">00</span>
                    <label>hours</label>
                </div>
                <div class="time-box">
                    <span id="minutes">00</span>
                    <label>minutes</label>
                </div>
                <div class="time-box">
                    <span id="seconds">00</span>
                    <label>seconds</label>
                </div>
            </div>
        </div>
        
<!-----------------------خط سوم------------------>
        <div class="row row3">
            <div class="col-sm-6 "><img src="img/law-book.gif" alt="" class="img-col"data-bs-target="#modalRules" data-bs-toggle="modal"></div>
            <div class="col-sm-6 "><img src="img/money1.png" alt="" class="img-col"data-bs-target="#modalmoney" data-bs-toggle="modal"></div>
        </div>
        <!-----------footer----------->
        <div class="row-fluid footer">
            <div class="col"><p class="animate__animated animate__bounceInDown underline-infinite">choice.com</p></div>
        </div>
    </div>
<!---------------------------------->
    <!-- Modal About -->
    <div class="modal fade animate__animated animate__fadeInRightBig" id="modalAbout" aria-hidden="true" aria-labelledby="modalAboutLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 underline-infinite" id="modalAboutLabel">درباره ی بازی</h1>
                </div>
                <div class="modal-body">
                    <div><img src="img/timer.gif" alt="" class="img-time-game"></div>
                    <h5>بازی سنگ، کاغذ، قیچی آنلاین:</h5>
                    <p>بازی سنگ، کاغذ، قیچی آنلاین، یک رقابت هیجان‌انگیز و ساده است که به شما این امکان را می‌دهد تا با دوستان یا بازیکنان دیگر از سرتاسر جهان به چالش بپردازید. با هر انتخاب، استراتژی و شانس شما را به اوج می‌برد و لحظات پر از هیجان و سرگرمی را برایتان رقم می‌زند!</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">صفحه اصلی</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Game Time -->
    <div class="modal fade animate__animated animate__fadeInRightBig " id="modalGameTime" aria-hidden="true" aria-labelledby="modalGameTimeLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 underline-infinite" id="modalGameTimeLabel">زمان بازی</h1>
              
                </div>
                <div class="modal-body">
                    <div><img src="img/limited.gif" alt="" class="img-time-game"></div>
                    <h5>بازی سنگ، کاغذ، قیچی آنلاین :</h5>
                    <p>هر<span class="span-time"> یک‌شنبه ساعت ۱۹:۰۰</span>آغاز می‌شود! در این رقابت جذاب، با بازیکنان از سراسر جهان به چالش بپردازید و مهارت و شانس خود را محک بزنید. منتظرتان هستیم تا لحظات پر از هیجان و سرگرمی را با هم تجربه کنیم!</p>
              </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">صفحه اصلی</button>
                  
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Register -->
    <div class="modal fade  animate__animated animate__fadeInRightBig" id="modalRegister" aria-hidden="true" aria-labelledby="modalRegisterLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 underline-infinite" id="modalRegisterLabel">ثبت‌نامی راحت و سریع</h1>
                </div>
                <div class="modal-body ">
                    <div><img src="img/730_generated.jpg" alt="" class="img-time-game"></div>
                    <form action="" method="post">
                      <label for="" class="form-label">نام کاربری</label>
                      <input type="text" class="form-control" name="username" id="username"><br>
                      <span id="err-username" class="err"></span>
                      <label for="" class="form-label">ایمیل</label>
                      <input type="text" class="form-control" name="email" id="email"><br>
                      <span id="err-email" class="err"></span>
                      <label for="" class="form-label">رمزعبور</label>
                      <input type="password" class="form-control" name="password" id="password"><br>
                      <span id="err-password" class="err"></span>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">صفحه اصلی</button>
                <button type="button" class="btn btn-success" id="btn-rigster">ارسال</button>  
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Exit -->
    <div class="modal fade  animate__animated animate__fadeInRightBig" id="modalExit" aria-hidden="true" aria-labelledby="modalExitLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 underline-infinite" id="modalExitLabel">ما همیشه منتظر بازگشت شما هستیم</h1>
                </div>
                <div class="modal-body">
                    <div><img src="img/logout.gif" alt="" class="img-logout"></div>
                    <a href="#" class="btn btn-danger form-control">خروج از حساب کاربری</a>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">صفحه اصلی</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Login -->
    <div class="modal fade  animate__animated animate__fadeInRightBig" id="modalLogin" aria-hidden="true" aria-labelledby="modalLoginLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 underline-infinite" id="modalLoginLabel">ورود</h1>
                </div>
                <div class="modal-body">
                <div><img src="img/Login-01.jpg" alt="" class="img-time-game"></div>
                <form action="" method="post">
                      <label for="" class="form-label">ایمیل</label>
                      <input type="text" class="form-control" name="email" id="email-login"><br>
                      <span id="err-email-login" class="err"></span>
                      <label for="" class="form-label">رمزعبور</label>
                      <input type="password" class="form-control" name="password" id="password-login"><br>
                      <span id="err-password-login" class="err"></span>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">صفحه اصلی</button>
                <button type="button" class="btn btn-success" id="btn-login">ارسال</button>  
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Account -->
    <div class="modal fade  animate__animated animate__fadeInRightBig" id="modalAccount" aria-hidden="true" aria-labelledby="modalAccountLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 underline-infinite" id="modalAccountLabel">برداشت جایزه</h1>
                </div>
                <div class="modal-body">

                <div><img src="img/Project_44-02.jpg" alt="" class="img-time-game"></div>
                 <p>موجودی :</p>
                <form action="" method="post">
                      <span id="err-username-account"  class="err"></span>
                      <label for="" class="form-label">ادرس کیف پول</label>
                      <input type="text" class="form-control" name="walet" id="walet-account"><br>
                      <span id="err-walet-account"  class="err"></span>
                      <label for="" class="form-label">ایمیل</label>
                      <input type="text" class="form-control" name="email" id="email-account"><br>
                      <span id="err-email-account"  class="err"></span>
                      <label for="" class="form-label">رمزعبور</label>
                      <input type="password" class="form-control" name="password" id="password-account"><br>
                      <span id="err-password-account" class="err"></span>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">صفحه اصلی</button>
                <button type="button" class="btn btn-success" id="btn-account">ارسال</button>    
                </div>
            </div>
        </div>
    </div>
<!--------------money---------------->
<div class="modal fade  animate__animated animate__fadeInRightBig" id="modalmoney" aria-hidden="true" aria-labelledby="modalmoneyLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 underline-infinite" id="modalmoneyLabel">مبلغ جایزه</h1>
                </div>
                <div class="modal-body">
                <div><img src="img/vecteezy_vector-money-banknotes-silver-coins-gold-coins-copper-for_6828471.jpg" alt="" class="img-time-game"></div>
                <h5>مبلغ جایزه کاپ سنگ کاغذ قیچی 💰</h5>
                <p  class="span-money" >مبلغ جایزه کلی: ۲۵,۰۰۰ دلار</p>
                <p><span class="span-money">مبلغ جایزه هفتگی:</span> این مبلغ ممکن است هر هفته تغییر کند و به فعالیت و عملکرد بازیکنان بستگی دارد</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">صفحه اصلی</button>
                </div>
            </div>
        </div>
    </div>
    <!----------------Rules------------>
    <div class="modal fade  animate__animated animate__fadeInRightBig" id="modalRules" aria-hidden="true" aria-labelledby="modalRulesLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 underline-infinite" id="modalRulesLabel">قوانین بازی سنگ 🪨، کاغذ 📄، قیچی ✂️</h1>
                </div>
                <div class="modal-body">
                <div><img src="img/helpdesk.gif" alt="" class="img-time-game"></div>
                <h5>قوانین بازی سنگ، کاغذ، قیچی :</h5>
                <p>✊ > ✌️ (سنگ قیچی را می‌شکند)</p>
                <p>✌️ > ✋ (قیچی کاغذ را می‌برد)</p>
                <p>✋ > ✊ (کاغذ سنگ را می‌پوشاند)</p>
                <p>اگر هر دو ✊، ✋ یا ✌️ انتخاب کنند، بازی تساوی است و دوباره بازی می‌کنید!</p>
                <p>بازیکنی که دو دست برنده شود، برنده کلی بازی است! 🏆</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">صفحه اصلی</button>
                </div>
            </div>
        </div>
    </div>
    <!------------------------------------>
    <script src="bootstrap.min.js"></script>
    <script src="jquery-3.7.1.min.js"></script>
    <script src="js.js"></script>
    <script src="sweetalert2.all.min.js"></script>
   <script>
   $(document).ready(function(){
    ////اعتبار سنجی فرم ثبت نام
    // اعتبار سنجی فرم ثبت نام
    $('#btn-rigster').click(function() {
        let username = $('#username').val().trim();
        let email = $('#email').val().trim();
        let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        let password = $('#password').val().trim();
        let hasError = false; // متغیر برای بررسی وجود خطا

        // اعتبارسنجی username
        if (username == '') {
            $('#username').css('border', '1px solid #b81414');
            $('#err-username').html('لطفا نام کاربری خود را وارد کنید');
            hasError = true; // وجود خطا
        } else if (/\d/.test(username)) {
            $('#username').css('border', '1px solid #b81414');
            $('#err-username').html('نام کاربری نباید شامل عدد باشد');
            hasError = true; // وجود خطا
        } else {
            $('#username').css('border', '1px solid #337745');
            $('#err-username').html('');
        }

        // اعتبارسنجی ایمیل
        if (email == '') {
            $('#email').css('border', '1px solid #b81414');
            $('#err-email').html('لطفا ایمیل خود را وارد کنید');
            hasError = true; // وجود خطا
        } else if (!emailPattern.test(email)) {
            $('#email').css('border', '1px solid #b81414');
            $('#err-email').html('لطفا یک ایمیل معتبر وارد کنید');
            hasError = true; // وجود خطا
        } else {
            $('#email').css('border', '1px solid #337745');
            $('#err-email').html('');
        }

        // اعتبار سنجی رمز عبور
        if (password == '') {
            $('#password').css('border', '1px solid #b81414');
            $('#err-password').html('رمز عبور نباید خالی باشد');
            hasError = true; // وجود خطا
        } else if (password.length < 8) {
            $('#password').css('border', '1px solid red');
            $('#err-password').html('رمز عبور نباید از 8 کاراکتر کمتر باشد');
            hasError = true; // وجود خطا
        } else {
            $('#password').css('border', '1px solid #337745');
            $('#err-password').html('');
        }

        // اگر خطایی وجود نداشت، ارسال داده‌ها
        if (!hasError) {
            $.ajax({
                url: 'insert.php',
                method: 'post',
                data: { username: username, email: email, password: password },
                dataType: 'json', // تعیین نوع داده دریافتی
                success: function(response) {
                    if (response.status === 'success') {
                        swal.fire('کاربر گرامی', response.message, 'success').then(() => {
                            // بارگذاری مجدد لیست کاربران بدون رفرش صفحه
                            loadUsers();
                            $('#modalRegister').modal('hide'); // بستن مودال ثبت‌نام
                        });
                    } else {
                        // اگر ایمیل تکراری بود
                        swal.fire('کاربر گرامی', 'این ایمیل قبلا ثبت نام شده', 'error');
                    }
                },
                error: function() {
                    swal.fire('خطا', 'خطا در ارسال داده‌ها', 'error');
                }
            });
        } else {
            // نمایش پیام خطا در صورت وجود خطا
            swal.fire('کاربر', 'لطفا تمام فیلدها را به درستی پر کنید', 'error');
        }
    });

    // تابع بارگذاری کاربران
    function loadUsers() {
        $.ajax({
            url: 'fetch.php', // آدرس فایل PHP برای بارگذاری کاربران
            method: 'post',
            success: function(data) {
                $('#list-user').html(data); // قرار دادن داده‌ها در tbody
            }
        });
    }

    // بارگذاری کاربران در زمان بارگذاری صفحه
    loadUsers();
    // اعتبار سنجی فرم ورود
    $('#btn-login').click(function() {
        let email_login = $('#email-login').val().trim();
        let password_login = $('#password-login').val().trim();
        let emailPattern_login = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        let isValid = true;
        let errorMessage = '';

        // اعتبارسنجی ایمیل
        if (email_login === '') {
            $('#email-login').css('border', '1px solid #b81414');
            $('#err-email-login').html('ایمیل نباید خالی باشد');
            isValid = false;
            errorMessage = 'ایمیل نباید خالی باشد';
        } else if (!emailPattern_login.test(email_login)) {
            $('#email-login').css('border', '1px solid #b81414');
            $('#err-email-login').html('فرمت ایمیل نامعتبر است');
            isValid = false;
            errorMessage = 'فرمت ایمیل نامعتبر است';
        } else {
            $('#email-login').css('border', '1px solid #337745');
            $('#err-email-login').html('');
        }

        // اعتبارسنجی رمز عبور
        if (password_login === '') {
            $('#password-login').css('border', '1px solid #b81414');
            $('#err-password-login').html('رمز عبور نباید خالی باشد');
            isValid = false;
            errorMessage = 'رمز عبور نباید خالی باشد';
        } else if (password_login.length < 8) { // بررسی طول رمز عبور
            $('#password-login').css('border', '1px solid #b81414');
            $('#err-password-login').html('رمز عبور باید حداقل ۸ کاراکتر باشد');
            isValid = false;
            errorMessage = 'رمز عبور باید حداقل ۸ کاراکتر باشد';
        } else {
            $('#password-login').css('border', '1px solid #337745');
            $('#err-password-login').html('');
        }

        // اگر اعتبارسنجی ناموفق بود، SweetAlert نمایش داده شود
        if (!isValid) {
            Swal.fire({
                icon: 'error',
                title: 'کاربر گرامی',
                text: errorMessage,
                confirmButtonText: 'باشه'
            });
            return; // اجرای کد متوقف شود
        }

        // اگر اعتبارسنجی موفق بود، درخواست AJAX ارسال شود
        $.ajax({
            url: 'login.php', // آدرس فایل PHP
            type: 'POST',
            data: {
                email: email_login,
                password: password_login
            },
            success: function(response) {
                let result = JSON.parse(response);
                if (result.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'خوش آمدید',
                        text: result.message,
                        confirmButtonText: 'باشه'
                    }).then(() => {
                        // در صورت موفقیت، کاربر را به صفحه دیگری هدایت کنید
                        window.location.href = 'index.php';
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'کاربر گرامی',
                        text: result.message,
                        confirmButtonText: 'باشه'
                    });
                }
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    icon: 'error',
                    title: 'خطا',
                    text: 'خطا در ارتباط با سرور',
                    confirmButtonText: 'باشه'
                });
            }
        });
        
    });

     //////////////////////////////////////////////
     //////////اعتبار سنجی برداشت////////////////////////////
     $('#btn-account').click(function() {
            let walletAddress = $('#walet-account').val().trim();
            let email_account = $('#email-account').val().trim();
            let password_account = $('#password-account').val().trim();
            let isValid = true;

            // اعتبارسنجی کیف پول
            let tetherTRC20Regex = /^T[a-zA-Z0-9]{33}$/;
            if (walletAddress === '') {
                $('#walet-account').css('border', '1px solid #b81414');
                $('#err-walet-account').html('لطفا آدرس کیف پول را وارد کنید');
                isValid = false;
            } else if (!tetherTRC20Regex.test(walletAddress)) {
                $('#walet-account').css('border', '1px solid #b81414');
                $('#err-walet-account').html('ادرس کیف پول را درست وارد کنید');
                isValid = false;
            } else {
                $('#walet-account').css('border', '1px solid #337745');
                $('#err-walet-account').html('');
            }

            // اعتبارسنجی ایمیل
            let emailPattern_account = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email_account === '') {
                $('#email-account').css('border', '1px solid #b81414');
                $('#err-email-account').html('ایمیل نباید خالی باشد');
                isValid = false;
            } else if (!emailPattern_account.test(email_account)) {
                $('#email-account').css('border', '1px solid #b81414');
                $('#err-email-account').html('فرمت ایمیل نامعتبر است');
                isValid = false;
            } else {
                $('#email-account').css('border', '1px solid #337745');
                $('#err-email-account').html('');
            }

            // اعتبارسنجی رمز عبور
            if (password_account === '') {
                $('#password-account').css('border', '1px solid #b81414');
                $('#err-password-account').html('رمز عبور نباید خالی باشد');
                isValid = false;
            } else if (password_account.length < 8) {
                $('#password-account').css('border', '1px solid red');
                $('#err-password-account').html('رمز عبور باید حداقل ۸ کاراکتر باشد');
                isValid = false;
            } else {
                $('#password-account').css('border', '1px solid #337745');
                $('#err-password-account').html('');
            }

            // اگر خطایی وجود نداشت، ارسال داده‌ها
            if (isValid) {
                $.ajax({
                    url: 'insert-award.php',
                    method: 'post',
                    data: { walletAddress: walletAddress, email: email_account, password: password_account },
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire('کاربر گرامی', response.message, 'success').then(() => {
                                $('#withdraw-form')[0].reset(); // ریست کردن فرم برداشت
                            });
                        } else {
                            Swal.fire('کاربر گرامی', response.message, 'error');
                        }
                    },
                    error: function() {
                        Swal.fire('خطا', 'خطا در ارسال داده‌ها', 'error');
                    }
                });
            } else {
                Swal.fire('کاربر', 'لطفا تمام فیلدها را به درستی پر کنید', 'error');
            }
        });

});
   </script>
    
</body>
</html>