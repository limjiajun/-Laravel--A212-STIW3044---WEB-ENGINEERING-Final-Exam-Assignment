<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

   

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   
    
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
   
        *{
    margin: 0;
    padding: 0;
}

.main{
    width: 100%;
    background: linear-gradient(to top, rgba(107, 79, 183, 0.5)50%,rgba(107, 79, 183, 0.5)50%), url(1.jpg);
   
    background-position: center;
    background-size: cover;
    height: 120vh;
}

.navbar{
    width: 1500px;
    height: 75px;
    margin: auto;
}

.icon{
    width: 200px;
    float: left;
    height: 70px;
}

.logo{
    color: #ff7200;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 10px;
    margin-top: 5px
}

.menu{
    width: 400px;
    float: left;
    height: 70px;
}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
}

ul li a{
    text-decoration: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

ul li a:hover{
    color: #ff7200;
}

.search{
    width: 330px;
    float: left;
    margin-left: 270px;
}

.srch{
    font-family: 'Times New Roman';
    width: 200px;
    height: 40px;
    background: transparent;
    border: 1px solid #dce807;
    margin-top: 13px;
    color: #fff;
    border-right: none;
    font-size: 16px;
    float: left;
    padding: 10px;
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
}

.btn{
    width: 100px;
    height: 40px;
    background: #dce807;
    border: 2px solid #dce807;
    margin-top: 13px;
    color: #fff;
    font-size: 15px;
    border-bottom-right-radius: 5px;
    border-bottom-right-radius: 5px;
    transition: 0.2s ease;
    cursor: pointer;
}
.btn:hover{
    color: #000;
}

.btn:focus{
    outline: none;
}

.srch:focus{
    outline: none;
}

.content{
    width: 1200px;
    height: auto;
    margin: auto;
    color: #fff;
    position: relative;
}

.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
}

.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}

.content .cn{
    width: 160px;
    height: 40px;
    background: #00c3ff;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: .4s ease;
    
}

.content .cn a{
    text-decoration: none;
    color: #000;
    transition: .3s ease;
}

.cn:hover{
    background-color: rgb(171, 60, 60);
}

.content span{
    color: #ff7200;
    font-size: 65px
}

.form{
    width: 400px;
    height: 400px;
    background: linear-gradient(to top, rgba(182, 179, 179, 0.8)50%,rgba(182, 179, 179, 0.8)50%);
    position: absolute;
    top: 210px;
    left: 800px;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
}

.form h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: #ff7200;
    font-size: 22px;
    background-color: #fff;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
}

.form input{
    width: 240px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid #ff7200;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
}

.form input:focus{
    outline: none;
}

::placeholder{
    color: #fff;
    font-family: Arial;
}

.btnn{
    width: 200px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-top: 10px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btnn:hover{
    background: #fff;
    color: #ff7200;
}
.btnn a{
    text-decoration: none;
    color: #000;
    font-weight: bold;
}
.form .link{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
}
.form .link a{
    text-decoration: none;
    color: #ff7200;
}
.liw{
    padding-top: 15px;
    padding-bottom: 10px;
    text-align: center;
}
.icons a{
    text-decoration: none;
    color: #fff;
}
.icons ion-icon{
    color: #fff;
    font-size: 30px;
    padding-left: 14px;
    padding-top: 5px;
    transition: 0.3s ease;
}
.icons ion-icon:hover{
    color: #ff7200;
}
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        @media screen and (max-width: 768px) {
            .w3-container {
                width: 100%;
            }
        }
        @media screen and (min-width: 768px) {
            .w3-container {
                width: 700px;
                margin: 0 auto;
            }
        }
    </style>
</head>

<body class="antialiased">
    @if (session('save'))
    <script>
        alert("Success");
    </script>
    @endif
    @if (session('error'))
    <script>
        alert("Failed");
    </script>
    @endif

    <!-- navbar -->
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Mytutor</h2>
            </div>

            <div class="menu">
                
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICE</a></li>
                    
                    <li><a href="#">CONTACT</a></li>
                    </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="">
                <a href="#"> <button class="btn">Search</button></a>
            </div>
            <!-- login / register button -->
            <div class="w3-right w3-hide-small w3-white">
                <a href="{{ url('login') }}" class="w3-bar-item w3-button">Login</a>
                <a href="{{ url('register') }}" class="w3-bar-item w3-button">Register</a>
              </div>
         </div> 
         
         <!-- content -->
        <div class="content">
            <h1>My Tutor <br><span>Website</span> </h1>
            <p class="par">Welcome to MyTutor</p>

            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
             Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br>
             
        </p>

                <button class="cn"><a href="#">JOIN US</a></button>
        </div>
        
       <!-- login page-->
    <div style="display:flex; justify-content: right">
     
        <div class="w3-container w3-card w3-padding w3-margin" style="width:600px;margin:auto;text-align:left;">
        
            <div class="w3-padding ">
                <form action="{{route('login.post')}}" method="post" accept-charset="UTF-8">
                    {{csrf_field()}}

            <div class="w3-center">    
            <h3>Login Page</h3>
</div>
            <div>
                <p>
                    <label for="email">Email</label>
                        <p><input id="email" class="w3-input w3-round-large w3-border" type="email" name="email" required></p>
                        @if ($errors->has('email'))
                        <span class="w3-red">{{ $errors->first('email') }}</span>
                        @endif
                  
                </p>

                <p>
                    <label for="pass">Password</label>
                        <p><input id="pass" class="w3-input w3-round w3-border" type="password" name="password" required></p>
                        @if ($errors->has('password'))
                        <span class="w3-red">{{ $errors->first('password') }}</span>
                        @endif
                </p>

                
                <p>
                <label>RememberMe</label>
                
                <input class="w3-check" name="rememberme" type="checkbox" onclick="rememberMe()">
                
                   
                </p>
                <p>
                    <input class=" w3- container w3-button w3-white w3-border w3-border-red w3-round-large  " type="submit" name="submit" 
                   >
                </p>
              
                
                <div class="container signin">
    <p>Already have an account? <a href="{{ url('register') }}">Sign in</a>.</p>
  </div>
               
            </form>
        </div>
        </div>
    </div>
    </div>  
    
    <!-- footer -->
    <footer class="w3-footer w3-center w3-dark-gray    w3-padding-32">
        <p>&copy;  Copyright @2022 MyTutor. Designed By LIM JIA JUN</p>
        <div class="social-icon">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google-plus"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-youtube"></a>
        </div>
    </footer>

</body>


</html>