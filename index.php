
<!DOCTYPE html>
<html lang="en"> 

    <head>
        <meta charset="UTF-8">
        <title> Seek coding</title>
        <link rel="stylesheet"    href="style7.css" >

    </head>  
    <body>
          <div class="full-page">
              <div class="navbar">
                  <div>  
                 <a href="'website .html'"> MovieTheatre</a>

             </div> 
             <nav> 
                 <ul id="MenuItems">
                    <li><a href="./real web.html"> MOVIES</a> </li>
                    <li><a href="#"> TRAILER</a> </li>
                    <li><a href="#"> SERVICES</a> </li>
                    <li><a href="#"> FEEDBACK</a> </li>
                    <li>
                        <button class="loginbtn" onclick="openModel();"
                        style="width:auto;">login</button>
                    </li> 
                 </ul>
             </nav>
             </div>
		
               <div  id="login-form" class="login-page">
               <div class="form-box">
                   <div class="button-box">
                   <div id="btn"></div>
                   <button
                   type="button" onclick="login();" class="toggle-btn"> Log in </button>
                   <button
                    type="button" onclick="register();" class="toggle-btn"> Register </button>
                 
                </div>
                <form id="login" class="input-group-login">
                    <div class="form-group">

                        <input type="text" class="input-field" placeholder="Email" required>
                    </div>
                    <div class="form-group">

                        <input type="password" class="input-field" placeholder="Enter password" required>
                    </div>
                    <input type="checkbox" class="check-box"> <span> Remember password </span>
                    <button type="submit" class="submit-btn"> log in </button>
                </form>
                <form id="register" action="./register.php" method="post" class="input-group-login">
                    <div class="form-group">

                        <input type="text" name="fname" class="input-field" placeholder="First name" required>
                    </div>
                    <div class="form-group">

                        <input type="text" name="lname" class="input-field" placeholder="Last name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="input-field" placeholder="Email" required>
                    </div>
                    <div class="form-group">

                        <input type="password" name="password" class="input-field" placeholder="password" required>
                    </div>

                    <input type="checkbox" class="check-box"> <span> I agree to the terms and conditions </span> 
                    <button type="submit" class="submit-btn"> Register</button>
                </form>
                 </div>
           

                 </div>
         
                </div>


                <script>
                    var x=document.getElementById ("login");
                    var y=document.getElementById ("register");
                    var z=document.getElementById ("btn");

                    function register()
                    {
                    x.style.left="-400px";
                     y.style.left="50px";
                     z.style.left="110px";


                    }
                    function login()
                    {
                        x.style.left="50px";
                         y.style.left="450px";
                         z.style.left="0px";
                    }
                    function openModel()
                    {
                        document.getElementById('login-form').style.display= 'block';
                    }
                    



                </script>
                <script>   var modal= document.getElementById("login-form");
                window.onclick=function(event)
                {
                     if (event,target== modal)
                     {
                         modal,style,display="none";
                     }

                }
                </script>
        </body>

</html>
