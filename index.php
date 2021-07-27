<?php 
ini_set('SMTP', "smtp-relay.sendinblue.com");
ini_set('smtp_port', "587");
ini_set('sendmail_from', "lobheshborade27@gmail.com");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Home</title>
<meta name="description" content="" >
<meta name="keywords" content="" />

<!-- Favicons -->
<link href="img/favicon.png" rel="icon">
 
<!-- Vendor CSS Files -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="css/style.css" rel="stylesheet">
</head>
<body>

  
<main id="main"> 
 <section class="top-banner">
  <div class="container">
    <div class="row">
        <div class="col-md-5">
          <div class="banner-lady">
            <img src="images/banner-woman.png" alt="">
          </div>
        </div>
        <div class="col-md-7">
          <div class="banner-text">
              <h1>How to <span>invest</span> & make mony with</h1>
              <img src="images/amazon-logo.png" alt="">
          </div>
          <div class="form-box">
              <h2>Now this is the timem <br> to invest in Amazon</h2>
              
              <form id="amazon_invest_form" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" name="firstname" id="firstname" aria-describedby="First name" placeholder="First name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="lastname" id="lastname" aria-describedby="Last name" placeholder="Last name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="emailaddress" id="emailaddress" aria-describedby="Email address" placeholder="Email address">
                </div>
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">+1</div>
                  </div>
                  <input type="text" class="form-control"  name="mobilenumber" id="mobilenumber" aria-describedby="Mobile number" placeholder="Mobile number">
                </div>
                <h3>Compliant with GDPR policy</h3>
                <p>You must be at least 18 years old to invest in Amazon.</p>

                <span class="success_msg"></span>
                <span class="text-danger error_msg"></span>

                <!-- <button type="submit" class="btn btn-primary btn-lg btn-block w-100">Submit</button> -->
                <input type="submit" class="btn btn-primary btn-lg btn-block w-100" id="subscribe" name="subscribe" value="Submit">
              </form>
          </div>
        </div>
    </div>
  </div>
 </section>
 <div class="yellow-strip">
 </div>

 <section class="graph-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="graph-box">
            <img src="images/graph.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="graph-content">
            <h1>
              Amazon's shares forecast to rise 119.37%. Here’s 5 pros to buying Amazon stock.
            </h1>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Calculate your potential profit</button>
          </div>
        </div>
      </div>
    </div>
 </section>

 <section class="calculate-section">
   <h1>
    Discover your potential short-term earnings <br>
    (maximum 2 months)
   </h1>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="calculation-box">
          <form>
            <div class="form-row row">
              <div class="col-md-3">
                <div class="investment-title"> Initial investment </div>
              </div>
              <div class="col-md-6">
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                  </div>
                  <input type="text" class="form-control" id="initial_investment" aria-describedby="Mobile number" placeholder="add amount">
                </div>
              </div>
              <div class="col-md-3">
                <button type="button" id="calculate-investment" class="btn btn-primary btn-lg btn-block w-100">Calculate</button>
              </div>
            </div>
            <div class="potencial-earnings">
              <p>Potencial earnings</p>
              <h1 id="total_potencial_earnings" >$ 0</h1>
            </div>
          </form> 
        </div>
      </div>
    </div>
   </div>
 </section>

 <section class="points-section">
  <div class="container">
    <div class="intro">
      <h1>
        It is easy to start. Receive access to
      </h1>
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
      </p>
    </div>
    <div class="row">
      <div class="col-md-3">
          <div class="points-box">
              <img src="images/secure-icon.png" alt="">
              <h3> Secure and <br>
                authorized platform</h3>
          </div>
      </div>
      <div class="col-md-3">
          <div class="points-box">
              <img src="images/earning-icon.png" alt="">
              <h3> Earnings in your <br>
                account in 24 hour</h3>
          </div>
      </div>
      <div class="col-md-3">
          <div class="points-box">
              <img src="images/learning-icon.png" alt="">
              <h3> Simple learning <br>
                tools</h3>
          </div>
      </div>
      <div class="col-md-3">
          <div class="points-box">
              <img src="images/support-icon.png" alt="">
              <h3> Dedicated <br>
                customer support</h3>
          </div>
      </div>
    </div>
    <div class="content-detail">
      <h3> Lorem Ipsum is simply dummy text of the printing </h3>
      <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <h3> Lorem Ipsum is simply dummy text of the printing </h3>
      <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
    </div>

  </div>

 </section>

 
</main>
<!-- End #main --> 

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="container">
    
        <ul>
          <li><a href="privacy-policy.html">Privacy Policy</a></li> |
          <li><a href="contact-us.html">Contact Us</a></li> |
          <li><a href="terms-and-conditions.html">Terms & Conditions </a></li>
        </ul>
       
        <div class="disclaimer">
          Disclaimer* <br>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        <div class="copyright">
          @ Copyright 2021. www.mysite.com
        </div>
      </div>
       
  </div>
</footer>

<!-- End Footer -->


<!-- JS Files --> 
<script src="js/bootstrap.bundle.min.js"></script> 


<!-- Template Main JS File --> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>


<script>
// just for the demos, avoids form submit
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#amazon_invest_form" ).validate({
  
  rules: {
    firstname: {
      required: true,
      digits: false,
      minlength: 3,
      maxlength: 40
    },
    lastname: {
      required: true,
      digits: false,
      minlength: 3,
      maxlength: 40
    },
    emailaddress: {
      required: true,
      email: true,
    },
    mobilenumber: {
      required: true,
      number   : true,
      maxlength: 10,
      minlength: 10,
    }
  },
  messages: {
    firstname: {
      required: "Please specify your first name",
      minlength: " Please enter at least 3 characters."
    },
    lastname: {
      required: "Please specify your last name",
      minlength: " Please enter at least 3 characters."
    },
    emailaddress: {
      required: " We need your email address to contact you",
      email: " Your email address must be in the format of name@domain.com",
    },
    mobilenumber: {
      required: 'Please Enter Phone Number',
      number   : 'Please Enter Only Numeric Value',
      minlength: 'Please Enter Minimum 10 Digits',
      maxlength: 'Please Enter Maximum 10 Digits'
    }
  },
  submitHandler: function() {
  
    var firstname =  $('#firstname').val();
    var lastname  =  $('#lastname').val();
    var emailaddress = $('#emailaddress').val();
    var mobilenumber = $('#mobilenumber').val();
    $.ajax({
      url: "send_mail.php",
      type: 'POST',
      data: {firstname: firstname , lastname: lastname , emailaddress: emailaddress, mobilenumber: mobilenumber},
      cache: false,
      success: function(dataResult){

        var dataResult = JSON.parse(dataResult);
        if(dataResult.statusCode==200){
          $('.success_msg').html('Thank you for contact us.');
          $('.error_msg').html('');
        }
        else {
          $('.success_msg').html('');
          $('.error_msg').html('Mail not send successfully.');
        }
        //alert("dataResult");
      }
    });


 }
});
</script>


<style type="text/css">
  

.error {
    color: red;
}
.success_msg {
    color: green;
    text-align: center;
    display: inline-block;
    width: 100%;
}
.error_msg {
    color: red;
    text-align: center;
    display: inline-block;
    width: 100%;
}

.error_msg {
    color: red;
}
.form-group {
    margin: 0 0 30px;
}
.form-control {
    padding: 10px 15px;
}
label {
    display: unset;
}
.input-group-text {
    padding: 10px 20px;
}
.form-group{position: relative;}
.form-group label{position: absolute; bottom:-26px; font-size:14px}
.form-box .btn {
    margin: 10px 0 0;
}
</style>


<script type="text/javascript">
  
$("#calculate-investment").click(function() {
    var initial_investment_amount = $('#initial_investment').val();;
    var total_amount = initial_investment_amount * 5 ;
    $('#total_potencial_earnings').html('$ ' + total_amount);

});


$('#initial_investment').keyup(function() {
  var value = $(this).val();
  value = value.replace(/\D/g, "").split(/(?:([\d]{4}))/g).filter(s => s.length > 0).join("-");
  $(this).val(value);
});
</script>