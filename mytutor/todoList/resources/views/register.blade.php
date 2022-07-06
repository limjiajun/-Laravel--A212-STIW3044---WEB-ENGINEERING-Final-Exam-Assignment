<!DOCTYPE html>
<html lang="en">
<head>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <title>Welcome to Mytutor</title>



    <style>
        @media screen and (max-width: 768px) {
            .w3-container {
                width: 100%;
            }
        }
        @media screen and (min-width: 768px) {
            .w3-container {
                width: 768px;
                margin: 0 auto;
            }
        }
    </style>

</head>
<body>

 <!-- header -->
<div class="w3-container">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-center w3-white w3-border w3-border-red w3-round-large">My Tutor</a>
    <div class="w3-right w3-hide-small">
      <a href="{{ url('login') }}" class="w3-bar-item w3-button w3-center w3-white w3-border w3-border-red w3-round-large">Login</a>
      
    </div>
   
   
   <!-- content -->

    <div class="w3-content w3-padding-32">
        <form class="w3-card w3-padding" action="{{route('register.post') }}"method="post" enctype="multipart/form-data" onsubmit="return confirm('Are you sure?')">
          {{csrf_field()}} 
          <!--Registration Form -->
          <div class="w3-center w3-pale-green ">
              <h3>Registration Form</h3>
            </div>
          <div class="w3-row">
          <p>
               <label for="email">FullName</label>
                <p><input id="email" class="w3-input w3-round w3-border"
                   type="name" name="name" required>
               </p>
             @if ($errors->has('name'))
               <span class="text-danger">{{ $errors->first('name') }}</span>
             @endif
          </p>

                  <p>
                    <label for="email">Email</label>
                    <p><input id="email" class="w3-input w3-round w3-border" type=
                      "email" name="email" required></p>
                      @if ($errors->has('email'))
                      <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                  </p>

                  <p>
                    <label for="pass">Password</label>
                    <p><input id="pass" class="w3-input w3-round w3-border" type=
                      "password" name="password" required></p>

                    @if ($errors->has('password'))
                      <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                  </p>

                  <p>
                    <label for="pass">Repeat-Password</label>
                    <p><input id="pass" class="w3-input w3-round w3-border" type=
                      "password" name="password" required></p>

                    @if ($errors->has('password'))
                      <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                  </p>
                  
                  <p>
                    <label for="phoneNo">Phone Number</label>
                    <p><input id="phoneNo" class="w3-input w3-round w3-border" type=
                      "phoneNo" name="phoneNo" required></p>

                    @if ($errors->has('phoneNo'))
                      <span class="text-danger">{{ $errors->first('phoneNo') }}</span>
                    @endif
                  </p>

            

                  <p> 
                    <label for="address">MailingAddress</label>
                    <p><input id="address" class="w3-input w3-round w3-border" type=
                      "address" name="address" required></p>

                    @if ($errors->has('address'))
                      <span class="text-danger">{{ $errors->first('address') }}</span>
                    @endif
                  </p>
                  <p>
                   
                        <label for="state">State</label>
                        <select class="w3-select w3-border" name="state">
                            <option value="" disabled selected>Choose your state</option>
                            <option value="Johor">Johor</option>
                            <option value="Keah">Kedah</option>
                            <option value="Kelantan">Kelantan</option>
                            <option value="Malacca">Malacca</option>
                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                            <option value="Pahang">Pahang</option>
                            <option value="Penang">Penang</option>
                            <option value="Perak">Perak</option>
                            <option value="Perlis">Perlis</option>
                            <option value="Sabah">Sabah</option>
                            <option value="Sarawak">Sarawak</option>
                            <option value="Selangor">Selangor</option>
                            <option value="Terengganu">Terengganu</option>
                        </select>
                      </p>
                    @if ($errors->has('state'))
                        <span class="w3-red">{{ $errors->first('state') }}</span>
                    @endif

                  <p>
                    By clicking the Sumbit button,you agree to our 
              <a href="">Terms and Condition</a> and <a href="#">Policy Privacy</a>
            </p>
            <div class="w3-center">
                <p>
                  <button class=" w3-button w3-center w3-white w3-border w3-border-red w3-round-large">Sumbit</button>
                </p>
                
            </div>
        </form>
        
        <div >
       
    <a href="{{ url('login') }}" input class="w3-button  w3-white w3-border w3-border-red w3-round-large w3-right">Logout</a>



       
           

          
      </div>
    </div>
  </div>
  
        <!-- Footer -->
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