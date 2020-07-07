<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    	<link rel="stylesheet" href="signup.css">
       <script src="signup.js"></script>
    	<script type="text/javascript">
    <!--
    if (screen.width <= 800) {
    document.location = "index_m.html";
    }
    //-->
    </script>

    <title>Signup</title>
  </head>
  <body>
    <div class="header">
      <h1 class="logo">OBS</h1>
      <input type="checkbox" id="chk">
      <label for="chk" class="show-menu-btn">
        <i class="fas fa-bars" aria-hidden="true"></i>
      </label>

      <ul class="menu">
        <a href="home.html">Home</a>
        <a href="books.html">Books</a>
        <a href="faq.html">FAQ & Help</a>
        <a href="contact.html">Contact</a>
  	  <a href="signup.php" style="border: 2.5px solid #168CC5; border-radius: 7px">Become a Member</a>
  	  <a href="login.php" style="border: 2.5px solid #168CC5; border-radius: 7px">Login</a>
        <label for="chk" class="hide-menu-btn">
          <i class="fas fa-times"></i>
        </label>
      </ul>
  		</div>
  	<br><br><br><br>
     <div class="container">
       <form action="registration_code.php" method="post" enctype="multipart/form-data" autocomplete="off">
       <h1 style="margin-bottom: 6px;">Become a Member</h1>
       <p>Please fill in the membership form to create an account</p>
       <hr>
       <div class="fn">
       <label for="firstname"><b>First Name</b></label>
       <input type="text" placeholder="Enter Your First Name" name="firstname" required>
       </div>
       <div class="ln">
       <label for="lastname"><b>Last Name</b></label>
       <input type="text" placeholder="Enter Your Last Name" name="lastname" required>
       </div>

      <div id="birthday-wrapper" class="clearfix large_form">
        <label for="birthday" class="label"><b>Birthday</b></label>
        <input type="date" value="" name="birthday" id="birthday" size="30">
      </div>
      <div id="gender-wrapper" class="clearfix large_form">
       <label for="gender" class="label"><b>Gender</b></label>
       <select id="gender" name="gender" value="">
         <option value="Male">Male</option>
         <option value="Female">Female</option>
         <option value="Other">Other</option>
       </select>
     </div>

     <div id="division_wrapper" class="division_wrapper">
      <label for="division" class="label"><b>Division</b></label>

      <select id="division" name="division" value="" onchange="dSelectCheck(this);">
        <option id="none" value="none">--Select One--</option>
        <option id="dOption1" value="Dhaka">Dhaka</option>
        <option id="dOption2" value="Chattogram">Chattogram</option>
        <option id="dOption3" value="Mymensingh">Mymensingh</option>
        <option id="dOption4" value="Rajshahi">Rajshahi</option>
        <option id="dOption5" value="Khulna">Khulna</option>
        <option id="dOption6" value="Barishal">Barishal</option>
        <option id="dOption7" value="Sylhet">Sylhet</option>
        <option id="dOption8" value="Rangpur">Rangpur</option>
      </select>
     </div>

     <div id="district_wrapper" class="district_wrapper">
      <label for="district" class="label"><b>District</b></label>

      <select id="district" name="district" value="">
        <option id="none" value="none">--Select One--</option>
        <option id="dOption1Check1" value="Dhaka">Dhaka</option> <option id="dOption1Check2" value="Narayanganj">Narayanganj</option> <option id="dOption1Check3" value="Gazipur">Gazipur</option> <option id="dOption1Check4" value="Kishoreganj">Kishoreganj</option> <option id="dOption1Check5" value="Manikganj">Manikganj</option>
        <option id="dOption1Check6" value="Munshiganj">Munshiganj</option> <option id="dOption1Check7" value="Narsingdi">Narsingdi</option> <option id="dOption1Check8" value="Tangail">Tangail</option> <option id="dOption1Check9" value="Faridpur">Faridpur</option> <option id="dOption1Check10" value="Gopalganj">Gopalganj</option>
        <option id="dOption1Check11" value="Madaripur">Madaripur</option> <option id="dOption1Check12" value="Rajbari">Rajbari</option> <option id="dOption1Check13" value="Shariatpur">Shariatpur</option>

        <option id="dOption2Check1" value="Brahmanbaria">Brahmanbaria</option> <option id="dOption2Check2" value="Comilla">Comilla</option> <option id="dOption2Check3" value="Chandpur">Chandpur</option> <option id="dOption2Check4" value="Lakshmipur">Lakshmipur</option> <option id="dOption2Check5" value="Noakhali">Noakhali</option>
        <option id="dOption2Check6" value="Feni">Feni</option> <option id="dOption2Check7" value="Khagrachhari">Khagrachhari</option> <option id="dOption2Check8" value="Rangamati">Rangamati</option> <option id="dOption2Check9" value="Bandarban">Bandarban</option> <option id="dOption2Check10" value="Chattogram">Chattogram</option>
        <option id="dOption2Check11" value="Cox's Bazar">Cox's Bazar</option>

        <option id="dOption3Check1" value="Mymensingh">Mymensingh</option> <option id="dOption3Check2" value="Netrokona">Netrokona</option> <option id="dOption3Check3" value="Jamalpur">Jamalpur</option> <option id="dOption3Check4" value="Sherpur">Sherpur</option>

        <option id="dOption4Check1" value="Bogra">Bogra</option> <option id="dOption4Check2" value="Chapainawabganj">Chapainawabganj</option> <option id="dOption4Check3" value="Joypurhat">Joypurhat</option> <option id="dOption4Check4" value="Naogaon">Naogaon</option> <option id="dOption4Check5" value="Natore">Natore</option>
        <option id="dOption4Check6" value="Pabna">Pabna</option> <option id="dOption4Check7" value="Rajshahi">Rajshahi</option> <option id="dOption4Check8" value="Sirajganj">Sirajganj</option>

        <option id="dOption5Check1" value="Bagerhat">Bagerhat</option> <option id="dOption5Check2" value="Chuadanga">Chuadanga</option> <option id="dOption5Check3" value="Jashore">Jashore</option> <option id="dOption5Check4" value="Jhenaidah">Jhenaidah</option> <option id="dOption5Check5" value="Khulna">Khulna</option>
        <option id="dOption5Check6" value="Kushtia">Kushtia</option> <option id="dOption5Check7" value="Magura">Magura</option> <option id="dOption5Check8" value="Meherpur">Meherpur</option> <option id="dOption5Check9" value="Satkhira">Satkhira</option> <option id="dOption5Check10" value="Narail">Narail</option>

        <option id="dOption6Check1" value="Barishal">Barishal</option> <option id="dOption6Check2" value="Barguna">Barguna</option> <option id="dOption6Check3" value="Bhola">Bhola</option> <option id="dOption6Check4" value="Jhalokati">Jhalokati</option> <option id="dOption6Check5" value="Patuakhali">Patuakhali</option>
        <option id="dOption6Check6" value="Pirojpur">Pirojpur</option>

        <option id="dOption7Check1" value="Habiganj">Habiganj</option> <option id="dOption7Check2" value="Moulvibazar">Moulvibazar</option> <option id="dOption7Check3" value="Sunamganj">Sunamganj</option> <option id="dOption7Check4" value="Sylhet">Sylhet</option>

        <option id="dOption8Check1" value="Panchagarh">Panchagarh</option> <option id="dOption8Check2" value="Thakurgaon">Thakurgaon</option> <option id="dOption8Check3" value="Dinajpur">Dinajpur</option> <option id="dOption8Check4" value="Nilphamari">Nilphamari</option> <option id="dOption8Check5" value="Lalmonirhat">Lalmonirhat</option>
        <option id="dOption8Check6" value="Kurigram">Kurigram</option> <option id="dOption8Check7" value="Rangpur">Rangpur</option> <option id="dOption8Check8" value="Gaibandha">Gaibandha</option>

      </select>
    </div>
    <div class="full">
    <label for="phone"><b>Phone</b></label>
    <input type="text" name="phone" placeholder="Enter Your Phone Number" required>
    </div>
       <div class="full">
       <label for="email"><b>Email</b></label>
       <input type="text" name="email" placeholder="Enter Your Email" required>
       </div>
       <div class="p">
       <label for="password"><b>Password</b></label>
       <input type="password" placeholder="Enter an Password" name="password" required>
     </div>
       <div class="full">
       </div>
       <label>
     <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px" required> I agree to the <a href="#">Terms</a> & <a href="#">Privacy Policy</a>
   </label>
       <div class="clearfix">
         <button type="submit" name="create" class="signupbtn"><b>Sign Up</b></button>
       </div>
       </form>
     </div>
  </body>
</html>
