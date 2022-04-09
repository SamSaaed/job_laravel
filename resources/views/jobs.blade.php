<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"rel="stylesheet" integrity=
"sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"crossorigin="anonymous" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <title>يمن كوم</title>
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
        
        
        <a href="{{ url('/login_user')}}" class="log">تسجيل الدخول      </a>
        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/add_contact')}}">اتصل بنا</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/add_about')}}">من نحن</a>
          </li>
           
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/add_comp')}}">شركائنا</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/create_services')}}">خدمات</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="detales.html">تفاصيل وظائف</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            معلومات المستخدم
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ url('/create_personal')}}">معلومات شخصية</a>
              <a class="dropdown-item" href="skills.html">مهارات </a>
              <a class="dropdown-item" href="experince.html">خبرات عملية</a>
              <a class="dropdown-item" href="Ed-quality.html">مؤهلات علمية</a>
              <a class="dropdown-item" href="{{ url('/courses')}}">كورسات</a>
              <a class="dropdown-item" href="cv.html">سيرتك الذاتية</a>
            </div>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/jobs')}}">بحث وظائف خالية</a>
          </li>
          
        </ul>
        <div class="brand">
        <a class="navbar-brand" href="#">يمن كوم</a>
        <img src="images/1.JPG">
    </div>
      </nav> 
     
      
      <div class="container">
        <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
      
            <div class="item active">
              <img src="images/home-office-programming-programmer-laptop-macbook-mockup-computer-web-design-office.jpg" alt="Chania" width="100%" height="200">
              <div class="carousel-caption">
                <h3>الموقع رقم 1 للوظائف في اليمن</h3>
                <p>فرصنا هتوصلك بوظائف خالية وفرص عمل في أكبر شركات اليمن، مهما كانت مهاراتك،
                    خبراتك أو مستوى تعليمك</p>
              </div>
            </div>
      
            <div class="item">
              <img src="images/pexels-photo-1181677-1666x1112.jpeg" alt="Chania" width="100%" height="200">
              <div class="carousel-caption">
                <h3>الموقع رقم 1 للوظائف في اليمن</h3>
                <p>فرصنا هتوصلك بوظائف خالية وفرص عمل في أكبر شركات اليمن، مهما كانت مهاراتك،
                    خبراتك أو مستوى تعليمك</p>
              </div>
            </div>
          
            <div class="item">
              <img src="images/صور-برمجة12.jpg" alt="Flower" width="100%" height="200">
              <div class="carousel-caption">
                <h3>الموقع رقم 1 للوظائف في اليمن</h3>
                <p>فرصنا هتوصلك بوظائف خالية وفرص عمل في أكبر شركات اليمن، مهما كانت مهاراتك،
                    خبراتك أو مستوى تعليمك</p>
              </div>
            </div>
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="container">
        <h1>وظائف خالية فى كل محافظات</h1>
        </div>
       
        <div class="container mt-3">
           
            
<div class="container-fluid">
   
    <div class="row">
      <div class="col" ><h2>وظائف صنعاء</h2></div>
      <div class="col" ><h2>وظائف تعز</h2></div>
      <div class="col" ><h2>وظائف حضرموت</h2></div>
    </div>
  </div>
  
            <div class="container-fluid">
                <div class="row">
                  <div class="col bg-lavender">
                      <ul>
                          <h4> وظائف عمارة وهندسة</h4>
                          <li><a href="#">وظائف هندسة ميكانيك</a></li>
                          <li><a href="#">وظائف هندسة عمارة وديكور</a></li>
                          <li><a href="#">وظائف هندسة كهرباء واتصالات</a></li>
                          <li><a href="#">وظائف هندسة مدنية</a></li>
                      </ul>
                  </div>
                  <div class="col  bg-lavender">
                    <ul>
                        <h4> وظائف تسويق ومبيعات</h4>
                        <li><a href="#">وظائف مبيعات خارجية وتوزيع</a></li>
                        <li><a href="#">وظائف مبيعات داخلية</a></li>
                        <li><a href="#">وظائف تسويق إلكترونى/ سوشيال ميديا</a></li>
                        <li><a href="#">وظائف تسويق ومبيعات عقارية</a></li>
                    </ul>
                  </div>
                  <div class="col  bg-lavender">
                    <ul>
                        <h4> وظائف تسويق ومبيعات</h4>
                        <li><a href="#"> وظائف صناعة وزراعة</a></li>
                        <li><a href="#">وظائف فنيين وعمال إنتاج</a></li>
                        <li><a href="#">وظائف جودة</a></li>
                        <li><a href="#">وظائف صيانة الماكينات</a></li>
                    </ul>
                  </div>
                </div>
              </div>
             <hr style="height:2px;border-width:0;color:rgb(90, 102, 98);background-color:rgb(90, 102, 98);width: 100%;">
             <div class="container">
                <div class="row">
               <div class="col-sm-6 col-md-8 col-lg-12">
                        <img src="images/1486564177-finance-finance-calculator_81497.svg"/>
            
                   </div>
               </div>
                <div class="row">
                    <div class="col-sm-3 col-md-4 col-lg-2">
                       <img src="images/1486564180-finance-financial-report_81493.svg" />
                   </div>
                    <div class="col-sm-6 col-md-4 col-lg-8">
                        <h2>أكبر موقع توظيف في اليمن</h2>
                        <p>
                            الموقع رقم 1 للوظائف في اليمن
                            
                            فرصنا هتوصلك بوظائف خالية وفرص عمل في أكبر شركات اليمن، مهما كانت مهاراتك، خبراتك أو مستوى تعليمك
                            </p>
                        <p><a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank" class="btn btn-success">شاهد المزيد&raquo;</a></p>
                    </div>
                  
                    <div class="col-sm-3 col-md-4 col-lg-2">
                    <img src="images/1486564172-finance-loan-money_81492.svg" />
                  </div>
                </div>
                <hr>
                
            </div>
            <div class="container">
              <h1>شركائنا في المحافظة</h1>
              </div>
              <div class="card-deck">
                <div class="card sm-light">
                  <div class="card-body text-center">
                    <a href="#"><img src="images/15.JPG" width="90%"></a>
                  </div>
                </div>
                <div class="card sm-bg-light">
                  <div class="card-body text-center">
                    <a href="#"><img src="images/16.JPG" width="90%"></a>
                  </div>
                </div>
                <div class="card sm-success">
                  <div class="card-body text-center">
                    <a href="#"><img src="images/17.JPG" width="90%"></a>
                  </div>
                </div>
                <div class="card sm-danger">
                  <div class="card-body text-center">
                    <a href="#"><img src="images/18.JPG" width="90%"></a>
                  </div>
                </div>
              </div>
              <div class="card-deck">
                <div class="card sm-light">
                  <div class="card-body text-center" width="90%">
                    <a href="#"><img src="images/15.JPG"></a>
                  </div>
                </div>
                <div class="card sm-bg-light">
                  <div class="card-body text-center">
                    <a href="#"><img src="images/16.JPG" width="90%"></a>
                  </div>
                </div>
                <div class="card sm-success">
                  <div class="card-body text-center">
                    <a href="#"><img src="images/17.JPG" width="90%"></a>
                  </div>
                </div>
                <div class="card sm-danger">
                  <div class="card-body text-center">
                    <a href="#"><img src="images/18.JPG" width="90%"></a>
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