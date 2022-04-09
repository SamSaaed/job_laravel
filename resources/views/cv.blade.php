<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cv.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"rel="stylesheet" integrity=
"sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"crossorigin="anonymous" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <title>سيرتك الذاتية</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <!-- Brand -->
        
        <button type="button" class="btn btn-success">بتدور على موظفين</button>
        
        
        
          <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-warning" id="myBtn"> سجل كباحث عن عمل</button>
        
          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4><span class="glyphicon glyphicon-lock"></span> تسجيل دخول</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                  <form role="form">
                    <div class="form-group">
                      <label for="usrname"><span class="glyphicon glyphicon-user"></span> اسم المستخدم</label>
                      <input type="text" class="form-control" id="usrname" placeholder="ادخل اسمك">
                    </div>
                    <div class="form-group">
                      <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> كلمة المرور</label>
                      <input type="text" class="form-control" id="psw" placeholder="ادخل كلمة المرور">
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="" checked>هل تذكرني</label>
                    </div>
                      <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> تسجيل دخول</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> اغلاق</button>
                  <p>لست عضو? <a href="#">اشترك</a></p>
                  <p>نسيت <a href="#">كلمة المرور?</a></p>
                </div>
              </div>
              
            </div>
          </div> 
        
         
        <script>
        $(document).ready(function(){
          $("#myBtn").click(function(){
            $("#myModal").modal();
          });
        });
        </script>
        
        
        <a href="log in.html" class="log">تسجيل الدخول      </a>
        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="contact us.html">اتصل بنا</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about us.html">من نحن</a>
          </li>
           
          <li class="nav-item">
            <a class="nav-link" href="company.html">شركائنا</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">خدمات</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="detales.html">تفاصيل وظائف</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            معلومات المستخدم
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="personal.html">معلومات شخصية</a>
              <a class="dropdown-item" href="skills.html">مهارات </a>
              <a class="dropdown-item" href="experince.html">خبرات عملية</a>
              <a class="dropdown-item" href="Ed-quality.html">مؤهلات علمية</a>
              <a class="dropdown-item" href="cources.html">كورسات</a>
              <a class="dropdown-item" href="cv.html">سيرتك الذاتية</a>
            </div>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="jobs.html">بحث وظائف خالية</a>
          </li>
          
        </ul>
        <div class="brand">
        <a class="navbar-brand" href="#">يمن كوم</a>
        <img src="images/1.JPG">
    </div>
      </nav> 
      <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    <span class="font-weight-bold">sam</span><span class="text-black-50">sam@mail.com.my</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">سيرتك الذاتية</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">الاسم</label><input type="text" class="form-control" placeholder="الاسم الاول" value=""></div>
                        <div class="col-md-6"><label class="labels">اللقب</label><input type="text" class="form-control" value="" placeholder="اللقب"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">رقم الهاتف</label><input type="text" class="form-control" placeholder="رقم الهاتف" value=""></div>
                        <div class="col-md-12"><label class="labels"> 1العنوان</label><input type="text" class="form-control" placeholder="العنوان الاول" value=""></div>
                        <div class="col-md-12"><label class="labels"> 2العنوان</label><input type="text" class="form-control" placeholder="العنوان الثاني" value=""></div>
                        <div class="col-md-12"><label class="labels">الرمز البريدي</label><input type="text" class="form-control" placeholder="الرمز البريدي" value=""></div>
                        <div class="col-md-12"><label class="labels">الحاله</label><input type="text" class="form-control" placeholder="الحالة" value=""></div>
                        <div class="col-md-12"><label class="labels">الايميل</label><input type="text" class="form-control" placeholder="ادخل البريد الالكتروني" value=""></div>
                        <div class="col-md-12"><label class="labels">المؤهل التعليمي</label><input type="text" class="form-control" placeholder="المؤهل التعليمي" value=""></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">البلد</label><input type="text" class="form-control" placeholder="البلد" value=""></div>
                        <div class="col-md-6"><label class="labels">الولاية /المنطقة</label><input type="text" class="form-control" value="" placeholder="المنطقة"></div>
                    </div>
                    <div class="mt-5 text-center">
                      <a href="cv4.pdf" download>
                        <button class="btn btn-primary profile-button" >حفظ السيرة الذاتية</button>
                      </a>
                    </div>
                   
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>تعديل الخبرة</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;الخبرة</span></div><br>
                    <div class="col-md-12"><label class="labels">خبرة في التصميم</label><input type="text" class="form-control" placeholder="خبرة" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">اضافة تفاصيل</label><input type="text" class="form-control" placeholder="اضافة تفاصيل" value=""></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
      <hr style="height:2px;border-width:0;color:rgb(90, 102, 98);background-color:rgb(90, 102, 98);width: 100%;">
      <div class="container-fluid mt-3">
        <div class="row">
            <div class="col bg-lavender ">
                <ul>
                    <li><a href="#">وظائف تسويق ومبيعات</a></li>
                    <li><a href="#">وظائف سياحة وضيافة</a></li>
                    <li><a href="#">وظائف صناعة وزراعة</a></li>
                    <li><a href="#">وظائف تكنولوجيا معلومات واتصالات</a></li>
                    <li><a href="#">وظائف طب وصيدلة</a></li>
                    <li><a href="#">وظائف خالية في كل المجالات</a></li>
                </ul>
            </div>
            <div class="col bg-lavender ">
                <ul>
                    <li><a href="#">وظائف تسويق ومبيعات</a></li>
                    <li><a href="#">وظائف سياحة وضيافة</a></li>
                    <li><a href="#">وظائف صناعة وزراعة</a></li>
                    <li><a href="#">وظائف تكنولوجيا معلومات واتصالات</a></li>
                    <li><a href="#">وظائف طب وصيدلة</a></li>
                    <li><a href="#">وظائف خالية في كل المجالات</a></li>
                </ul>
            </div>
            <div class="col bg-lavender ">
                <ul>
                    <li><a href="#">وظائف تسويق ومبيعات</a></li>
                    <li><a href="#">وظائف سياحة وضيافة</a></li>
                    <li><a href="#">وظائف صناعة وزراعة</a></li>
                    <li><a href="#">وظائف تكنولوجيا معلومات واتصالات</a></li>
                    <li><a href="#">وظائف طب وصيدلة</a></li>
                    <li><a href="#">وظائف خالية في كل المجالات</a></li>
                </ul>
            </div>
            <div class="col bg-lavender ">
                <ul>
                    
                    <li class="chance">موقع يمن كوم يوفر فرص عمل ووظائف   <img src="images/1.JPG"></li>
                    <div class="icon">
                        <ul class="chance1">
                          <li><a href="#"><img src="images/social_facebook_fb_35.png"></a></li>
                          <li><a href="#"><img src="images/social_Pinterest_8.png"></a></li>
                          <li><a href="#"><img src="images/social_Twitter_38.png"></a></li>
                          <li><a href="#"><img src="images/mail-black-envelope-symbol_icon-icons.com_56519.svg"></a></li>
                          <li><a href="#"><img src="images/auricular-phone-symbol-in-a-circle_icon-icons.com_56570.svg"></a></li>
                          
                        </ul>
            </div>
          </div>
        </div>
        <div class="copy">
          © جميع الحقوق محفوظة للموقع يمن كوم سنة 2022
        </div>
</body>
</html>