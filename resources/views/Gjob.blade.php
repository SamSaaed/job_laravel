<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/jobs.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"rel="stylesheet" integrity=
"sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"crossorigin="anonymous" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <title>وظائف</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <!-- Brand -->
        
        <button type="button" class="btn btn-success">بتدور على موظفين</button>
        <button type="button" class="btn btn-warning">سجل كباحث عن عمل</button>
        <a href="#" class="log">تسجيل الدخول      </a>
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  وظائف حسب المحافظات
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Link 1</a>
                  <a class="dropdown-item" href="#">Link 2</a>
                  <a class="dropdown-item" href="#">Link 3</a>
                </div>
              </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              وظائف حسب المجال
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Link 1</a>
              <a class="dropdown-item" href="#">Link 2</a>
              <a class="dropdown-item" href="#">Link 3</a>
            </div>
          </li>
      
          <li class="nav-item">
            <a class="nav-link" href="jobs.html">بحث وظائف خالية</a>
          </li>
          
        </ul>
        <div class="brand">
        <a class="navbar-brand" href="#">يمن كوم</a>
        <img src="images/1.JPG">
    
      </nav> 
      <div class="container mt-3">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="ابحث عن وظيفة"  id="myInput"  >
          <button class="btn btn-success" type="submit">ابحث</button> 
        </div>
<br><br>
</div>
<script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myJob").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script>
      <div class="container">
        <h1>وظائف خالية فى كل محافظات</h1>
        </div>
        
          <div class="container p-5 my-5 border" id="myJob">
              <img src="images/4.JPG">
            <h1>محاسب عام</h1>
            <a href="">غرفة التجارة والصناعة</a>
            <p>2 - 3 سنوات خبره  ·  1 وظيفة خالية  ·  ذكور  ·  يوم كامل  ·  مالية وقانونية  ·  حسابات
                الراتب الأساسي: قابل للتفاوض
                مميزات الوظيفة: تأمينات اجتماعية , تأمينات صحية</p>
          </div>
          <div class="container p-5 my-5 border"  id="myJob">
            <img src="images/5.JPG">
          <h1>سكرتيرة تنفيذية</h1>
          <a href="">شركة المحضار</a>
          <p>قل حد 2 سنين خبره  ·  2 وظائف خالية  ·  يوم كامل  ·  اعمال ادارية  ·  سكرتارية واستقبال
            الراتب الأساسي: قابل للتفاوض</p>
        </div>
        <div class="container p-5 my-5 border" id="myJob">
            <img src="images/6.JPG">
          <h1>مندوب مبيعات</h1>
          <a href="">مؤسسة هائل سعيد أنعم</a>
          <p> - 3 سنوات خبره  ·  3 وظائف خالية  ·  ذكور  ·  يوم كامل  ·  تسويق ومبيعات  ·  مبيعات طبية
            الراتب الأساسي: 30000 - 35000
            مميزات الوظيفة: تأمينات اجتماعية</p>
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
                        
                        <li class="chance">موقع يمن.كوم يوفر فرص عمل ووظائف   <img src="images/1.JPG"></li>
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