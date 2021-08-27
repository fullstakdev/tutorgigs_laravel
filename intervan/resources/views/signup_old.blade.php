<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tutor SignUp-Tutorgigs</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

   
    <link href="{{asset('assets/landing-page.min.css')}}" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js"></script>
<script>
  window.onload = function() {
    var $recaptcha = document.querySelector('#g-recaptcha-response');

    if($recaptcha) {
        $recaptcha.setAttribute("required", "required");
    }
};
$(document).ready(function(){
  $('#msg_section').hide();
  $("form").submit(function(){
    //alert("Submitted R"); return false;
  var confirm1= $('#signup_email').val();
  var confirm2= $('#confirm_signup_email').val();
     var msg='Error-<br/>';

  if(confirm1!=confirm2){
    $('#msg_section').show();
     msg='Email not matched';  
    // msg_section
    $('#msg_section').html(msg);
    return false;
  }else return true;
    //OK
    
  });
});


$(document).ready(function () {
  //called when key is pressed in textbox
  $("#phone").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
             return false;
    }
   });
});
</script>
    <style>
    .register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
    font-size: 1.75rem;
}

.h3, h3 {
    font-size: 1.75rem;
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    margin-bottom: .5rem;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.2;
    color: inherit;
}
</style>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand pull-left" style="width:5px;" href="/" ><img src="{{asset('assets/img/logo.png')}}"></a> 
        
         <div class="pull-right" >
        <a class="btn btn-primary" href="{{url('login')}}">Sign In</a>
        <a class="btn btn-primary" href="{{url('signup')}}#signup_section">Sign Up</a>
        </div>

      </div>
    </nav>

    

<section class="features-icons text-center" style="padding-top:2rem;padding-bottom: 1.5rem">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-screen-desktop m-auto text-primary"></i>
              </div>
              <h3 style="font-size:1.5rem">Step 1: Qualify</h3>
              <p class="lead mb-0" style="font-size:1rem">Choose your subject and pass our qualification exam.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-layers m-auto text-primary"></i>
              </div>
              <h3 style="font-size:1.5rem">Step 2: Accept Jobs</h3>
              <p class="lead mb-0" style="font-size:1rem">Based on your availability, we'll notify you when a tutoring gig that matches your qualifications is scheduled</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div>
              <h3 style="font-size:1.5rem">Step 3: Cash Out</h3>
              <p class="lead mb-0" style="font-size:1rem">Get paid for your weekly tutoring sessions</p>
            </div>
          </div>
        </div>
      </div>
    </section>

   
<section   class=" text-center bg-light" id="signup_section">
<div class="register">
                <div class="row">
                    <div class="col-md-2 register-left">
                       <img src="book_icon.png" style="width:80px" alt=""/>
                        <h4 style="font-size:15px">Welcome To</h4>
                       <h3>Interven Tutor</h3>
                        
                    </div>
                    <div class="col-md-10 register-right">
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Signup as Tutor</h3>
                                
                                     
     
     
      
       <?php
       echo (isset($_SESSION['suspended']))?$_SESSION['suspended']:NULL;
       
       if(isset($_SESSION['suspended'])&&!empty($_SESSION['suspended'])) 
       $_SESSION['suspended']=NULL;
       ?>
                                      <?php 
      
      //  echo $sql;
        
          if(isset($_SESSION["MESSAGE_STATE"])){
            ?>
            <div class="row message-board">
              <div class="col-sm-12">
                <div class="alert <?php echo $_SESSION["MESSAGE_STATE"]["TYP"]; ?>"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <p><?php echo $_SESSION["MESSAGE_STATE"]["MSG"]; ?></p>
                </div>
                

              </div>
            </div>
            <?php
            unset($_SESSION["MESSAGE_STATE"]);
            }
           // $_SESSION["MESSAGE_STATE"]=NULL;
         
          ?>
                                 <form class="form-signup" id="form-signup" method="POST">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           <input type="text" name="f_name"  class="form-control" value="<?=@$_POST['f_name']?>" placeholder="First Name" required>
                                        </div>
                                        <div class="form-group">
                                           <input type="email" name="email" id="signup_email" value="<?=@$_POST['email']?>"  class="form-control" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                             <input type="text" name="phone" id="phone" value="<?=@$_POST['phone']?>"  class="form-control" placeholder="Mobile" required>
                                        </div>
                                        <div class="form-group">
						<label for="captcha" class="text-info">
						<?php if(@$message) { ?>
                                                    <div class="alert alert-danger" role="alert" style="text-align:center"><strong><?php echo @$message; ?></strong></div>
						<?php } ?>	
						</label><br>
                                                <input type="text" name="securityCode" id="securityCode" class="form-control" required="" placeholder="Enter Security Code">
					</div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="lname"  class="form-control" value="<?=@$_POST['lname']?>" placeholder="Last Name" required>
                                        </div>
                                        <div class="form-group">
                                           <input type="email" name="confirm_email"  id="confirm_signup_email" value="<?=@$_POST['confirm_email']?>" class="form-control" placeholder="Confirm Email" required>
                                        </div>
                                        <div class="form-group">
                                           <input type="password" name="password" id="inputPassword" class="form-control" value="<?=@$_POST['password']?>" placeholder="Password" required>
                                        </div>
                                       
                                        
                                    </div>
                                    <div class="col-md-12">
                                         
                                        <div class="form-group">							
						<img src="get_captcha.php?rand=<?php echo rand(); ?>" id='captcha'>
						<br>
						<p><br>Need another security code? <a href="javascript:void(0)" id="reloadCaptcha">click</a></p>
                                                <button id="signup-submit" name="signup_submit" style="margin-top:10px"
         class="btn btn-lg btn-primary" type="submit" >Submit</button>
					</div>	
                                    </div>
                                </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
</section>
    

  

    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="/terms_tutorgigs.php">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="/privacy_tutorgigs.php">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; Intervene, LLC 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
<div class="modal fade" tabindex="-1" role="dialog" id="notification_modal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">&nbsp;</h4>
      </div>
        <div class="modal-body" style="text-align: center">
        <p>Tutorgigs will be down for planned upgrades Feb 11 – Feb 14. If you login at this time system will not work as designed and may not save your work. </p>
      <p>&nbsp;</p>
      <p>We timed our maintenance to align with students being out of school.</p>
      <p>&nbsp;</p>
      <p>Have a great weekend!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('assets/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript">
//    $(window).on('load', function() {
//        $('#notification_modal').modal('show');
//    });
</script>
  </body>

</html>
