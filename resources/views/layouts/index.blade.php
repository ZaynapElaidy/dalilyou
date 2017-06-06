<!DOCTYPE html>
<html>
<head>
	<title> company</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
        body{
 background-color: #aadd44;

}

.header{
 background: url("{{ asset('img/image.JPG') }}") ;
   background-repeat: no-repeat;
      background-size: cover;
    
    height: 300px; 
  color: #fdfdfd;
  font: 12px/17px 'HelveticaNeue-UltraLight', Helvetica, Arial, sans-serif;
  padding: 18px 28px 20px;
  border-radius:2px 2px 0 0;
}


ul{
  list-style: none;
}


       .add{
        text-align: center;
        margin-left:350px;
        margin-top: 70px;
        margin-bottom: :500px;
       
        width: 150PX;
           color: white;
            font-size: 18px;
        

       font-family: 'Teko', sans-serif;
       }
       #all{
        text-align: center;
        margin-left:320px;
        margin-top: 70px;
        margin-bottom: :500px;
       
        width: 150PX;
        color: white;
        font-size: 18px;
        

       font-family: 'Teko', sans-serif;
       }
       .order{
         color: white;
            font-size: 20px;
        

       font-family: 'Teko', sans-serif;
       }
       
       button {

    background-color: #4CAF50; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
   
    font-family: 'Teko', sans-serif;
 
}
   a{
     font-family: 'Teko', sans-serif;
     font-size: 20px;
     text-align: center;


  }
  label{
    float: right;
  }
   table {
    
    border-collapse: collapse;
    background-color:  #29352a ;
}
th, td {
    border: solid 1px #313531;
    padding: 10px;
    color: #29352a;
    font-family: 'Teko', sans-serif; 
    background-color: #66ff66;
    text-align: center;
    font-size: 20px;
   
}
.fixed {
    max-width:150px;
    min-width: 150px;
    text-align: center;
}
.fluid {
        width: 50%;
        text-align: center;
}



   
.content-header{
  font-family: 'Oleo Script', cursive;
  color:#fcc500;
  font-size: 45px;
}

.section-content{
  text-align: center; 

}
#contact{
    
    font-family: 'Teko', sans-serif;
  padding-top: 60px;
  width: 100%;
  width: 100vw;
  height: 550px;
  background: #2cdb91; /* fallback for old browsers */
  background: -webkit-linear-gradient(to left, #2cdb91 , #1b2d06); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to left, #2cdb91 , #1b2d06); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color : #fff;    
}
.contact-section{
  padding-top: 40px;
}
.contact-section .col-md-6{
  width: 50%;
}

.form-line{
  border-right: 1px solid #B29999;
}

.form-group{
  margin-top: 10px;
}
label{
  font-size: 1.3em;
  line-height: 1em;
  font-weight: normal;
}
.form-control{
  font-size: 1.3em;
  color: #080808;
}
textarea.form-control {
    height: 135px;
   /* margin-top: px;*/
}

.submit{
  font-size: 1.1em;
  float: right;
  width: 150px;
  background-color: transparent;
  color: #fff;

}

    </style>
</head>
<body style="background-color: #7c996d">
 <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="background-color: #aadd44;">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}" style="font-weight: bold; font-size: 25px; color: rgb(74, 178, 78);">
                        {{ config('دليلليو', 'دليليو') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}" style="font-weight: bold; font-size: 18px; color: rgb(74, 178, 78);">تسجيل الدخول </a></li>
                            <li><a href="{{ route('register') }}" style="font-weight: bold; font-size: 18px; color: rgb(74, 178, 78);">إنضم إلينا</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="font-weight: bold; font-size: 18px; color: rgb(74, 178, 78);">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}" style="font-weight: bold; font-size: 18px; color: rgb(74, 178, 78);"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                          تسجيل الخروج
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    <header class="header">
    	<div>
    	    
            <hr>
            <h1 style="margin: 0 auto; text-align: center;  font-family: 'Teko', sans-serif;">دليليو هو فكر جديد في صناعه الدواجن اهلا بك معنا</h1>
    	
    	<hr>
    	<h3 style="color: #ffcc33; margin: 0 auto; text-align: center;  font-family: 'Teko', sans-serif;">استمتـــع بالتصفــــح هنـــــا</h3>
        </div>
    </header>

    <div class="content" >
        <div class="container">
           <h2 style="text-align: center; color: #64de13; font-size: 40px;">بورصه الدواجن</h2>
           <p style="text-align: center; color: #d7f300; font-size: 40px;">يمكنك إضافه منتجك هنا </p>
           @if (!Auth::guest())
           <div class="row">
                    <div class="col-md-4" >
            
                     <form method="post" action="#">
                        {{ csrf_field() }}
                      

                        <button  type="button" style="margin-left: 500px; width: 150px; margin-top: 80px;"  class="addm" data-toggle="modal" data-target="#btn1">
                            إضافه منتج
                        </button>
           
                        </form>
                    </div> 
                    </div>   
           
                    <div class="row">
                    <div class="col-md-4" style="float: left;margin-left: 180px;">
                        <a href="/allproducts"><button type="button" id="all" >
                           كل المنتجات
                        </button></a>
                    </div>
            </div>
           
             @endif            
                        

                        <br>
                        @yield('content')
                    
                </div>
            </div>

         

    <div id="btn1" class="modal fade modal-example" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title" style="float: right; text-align: center;">إضافه منتج</h4>
                </div>
                <form action="/home" method="post" >
                 
                  {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="type" style="float: right;">النوع</label>
                            <input id="1" type="text" class="form-control type" name="type">
                        </div>
                        <div class="form-group">
                            <label for="num" style="float: right;">العدد</label>
                            <input id="2" type="text" class="form-control num" name="num"/>
                        </div>
                        <div class="form-group">
                            <label for="wight"  style="float: right;">الوزن</label>
                            <input id="3"  type="text" class="form-control wight" name="wight"/><br><br>
                        </div>
                        <div class="form-group">
                            <label for="price"  style="float: right;">السعر للكيلو</label>
                            <input id="4" type="number" class="form-control price" name="price"/><br><br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default addm"  style="float: right;">إضافه</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

  

   
        <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
<section id="contact">
            <div class="section-content">
                <h1 class="section-header">كن علي <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> إتصال بنا</span></h1>
                <h3>دليليو دليلك لبورصه الدواجن</h3>
            </div>
            <div class="contact-section">
            <div class="container">
                <form>
                    <div class="col-md-6 form-line">
                        <div class="form-group">
                            <label for="exampleInputUsername" style="float: right;">الإسم</label>
                            <input type="text" class="form-control" id="" placeholder=" أدخل إسمك">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail" style="float: right;">الإيميل</label>
                            <input type="email" class="form-control" id="exampleInputEmail" placeholder=" أدخل ايميلك">
                        </div>  
                        <div class="form-group">
                            <label for="telephone" style="float: right;">رقم الموبايل</label>
                            <input type="tel" class="form-control" id="telephone" placeholder=" أدخل رقم تليفونك">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for ="description" style="float: right;"> رسالتك</label>
                            <textarea  class="form-control" id="description" placeholder="أدخل رسالتك"></textarea>
                        </div>
                        <div>

                            <button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true" style="float: right;"></i>  ارسال</button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
</body>
</html>