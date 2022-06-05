<title>Kuiz Matematik</title>
<link rel="stylesheet" href="menu.css">

     
     <div class="hero">
         <center>
            <img style=" width: 850px; margin : 18px"  src="kuiz.png">
         </center>
         <div class="form-box">
             <div class="button-box">
                 <div id="btn"></div>
                 <button type="button" class="login-btn" onclick="login()">Log In</button>
                 <button type="button" class="login-btn" onclick="Signup()">Signup</button>
             </div>

             <form id="login" class="input-group" action="login2.php" method =post>
                 <input style=" color: white;" type="text" class="input-field" name="userid" placeholder="idpengguna"  required>
                 <input  style=" color: white;"type="password" class="input-field" name="password" placeholder="password"  required>
                 <button type="submit" class="submit-btn">Log in</button>
             </form>
                <!--Menyediakan form untuk daftar masuk pelajar-->
             <form id="Signup"  class="input-group" action="signup2.php" method=post>
                <input style=" color: white;" type="text" class="input-field" name="idpelajar" placeholder="idpelajar" required>
                <input  style=" color: white;" type="text" class="input-field"  name="namapelajar" placeholder="Namapelajar" required>
                <input style=" color: white;" type="text" class="input-field" name="idkelas" placeholder="idkelas" required>
                <input  style=" color: white;"type="password" class="input-field" name="password" placeholder="password" required>
                <button type="submit" class="submit-btn">Signup</button>
            </form>
         </div>
     </div>

    <style>
        ::placeholder {
        color: white;
        opacity: 1; /* Firefox */
        }
    </style>

    <script>
         var x = document.getElementById("login");
         var y = document.getElementById("Signup");
         var z = document.getElementById("btn");

         function Signup(){
             x.style.left = "-400px"
             y.style.left = "50px"
             z.style.left = "110px"
         }

         
         function login(){
             x.style.left = "50px"
             y.style.left = "450px"
             z.style.left = "0"
         }
    </script>