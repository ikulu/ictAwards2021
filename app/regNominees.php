<?php 
require 'action.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>Tanzania ICT Awards : Index</title>
      <!-- Favicon-->
      <link rel="icon" href="../assets/fevicon.png" />
      <!-- Bootstrap Icons-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
      <!-- Google fonts-->
      <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
      <!-- SimpleLightbox plugin CSS-->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
      <!-- Core theme CSS (includes Bootstrap)-->
      <link href="../css/styles.css" rel="stylesheet" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <style type="text/css" >
            .errorMsg{border:1px solid red; }
            .message{color: red; font-weight:bold; }

            /* The Modal (background) */
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  -webkit-animation-name: fadeIn; /* Fade in the background */
  -webkit-animation-duration: 0.4s;
  animation-name: fadeIn;
  animation-duration: 0.4s
}

/* Modal Content */
.modal-content {
  position: fixed;
  bottom: 0;
  background-color: white;
  width: 100%;
  -webkit-animation-name: slideIn;
  -webkit-animation-duration: 0.4s;
  animation-name: slideIn;
  animation-duration: 0.4s
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #ED8E7C;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #ED8E7C;
  color: white;
}

/* Add Animation */
@-webkit-keyframes slideIn {
  from {bottom: -300px; opacity: 0} 
  to {bottom: 0; opacity: 1}
}

@keyframes slideIn {
  from {bottom: -300px; opacity: 0}
  to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}

@keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}
        </style>
        <script>
$(document).ready(function(){
	$("#Form1").hide();
    $("#Form2").hide();
    $("#Form3").hide();
    $("#Form4").hide();
    $("#Form5").hide();
    $("#Form6").hide();
    $("#Form7").hide();
    $("#Form8").hide();
    $("#Form9").hide();
    $("#Form10").hide();
    $("#Form11").hide();
    $("#Form12").hide();
    $("#Form13").hide();

  $("#btn1").click(function(){
    $("#Form1").show();
    $("#btn1").hide();
  });
  
  $("#btn2").click(function(){
    $("#Form2").show();
    $("#btn2").hide();
  });

  $("#btn3").click(function(){
    $("#Form3").show();
    $("#btn3").hide();
  });

  $("#btn4").click(function(){
    $("#Form4").show();
    $("#btn4").hide();
  });

  $("#btn5").click(function(){
    $("#Form5").show();
    $("#btn5").hide();
  });

  $("#btn6").click(function(){
    $("#Form6").show();
    $("#btn6").hide();
  });

  $("#btn7").click(function(){
    $("#Form7").show();
    $("#btn7").hide();
  });

  $("#btn8").click(function(){
    $("#Form8").show();
    $("#btn8").hide();
  });

  $("#btn9").click(function(){
    $("#Form9").show();
    $("#btn9").hide();
  });

  $("#btn10").click(function(){
    $("#Form10").show();
    $("#btn10").hide();
  });

  $("#btn11").click(function(){
    $("#Form11").show();
    $("#btn11").hide();
  });

  $("#btn12").click(function(){
    $("#Form12").show();
    $("#btn12").hide();
  });

  $("#btn13").click(function(){
    $("#Form13").show();
    $("#btn13").hide();
  });


  $("#btn21").click(function(){
    $("#Form1").hide();
    $("#btn1").show();
  });

  $("#btn22").click(function(){
    $("#Form2").hide();
    $("#btn2").show();
  });

  $("#btn23").click(function(){
    $("#Form3").hide();
    $("#btn3").show();
  });

  $("#btn24").click(function(){
    $("#Form4").hide();
    $("#btn4").show();
  });

  $("#btn25").click(function(){
    $("#Form5").hide();
    $("#btn5").show();
  });

  $("#btn26").click(function(){
    $("#Form6").hide();
    $("#btn6").show();
  });

  $("#btn27").click(function(){
    $("#Form7").hide();
    $("#btn7").show();
  });

  $("#btn28").click(function(){
    $("#Form8").hide();
    $("#btn8").show();
  });

  $("#btn29").click(function(){
    $("#Form9").hide();
    $("#btn9").show();
  });

  $("#btn210").click(function(){
    $("#Form10").hide();
    $("#btn10").show();
  });

  $("#btn211").click(function(){
    $("#Form11").hide();
    $("#btn11").show();
  });

  $("#btn212").click(function(){
    $("#Form12").hide();
    $("#btn12").show();
  });

  $("#btn213").click(function(){
    $("#Form13").hide();
    $("#btn13").show();
  });
});
</script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
          <div class="container px-4 px-lg-5">
              <a class="navbar-brand" href="../index.php" style="color: black;">ICTAwards2021</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ms-auto my-2 my-lg-0">
                      <li class="nav-item"><a class="nav-link" href="../index.php" style="color:black">Continue Browsing</a></li>
                  </ul>
              </div>
          </div>
        </nav>
        
       
        
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Choose Nominee!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Tell us little about you and choose who to receive award this year!</p>
                    </div>
                    <?php if (isset($errorMsg)) { echo "<p class='message'>" .$errorMsg. "</p>" ;} ?>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <form action="action.php" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" name="name" placeholder="Enter your name..." data-sb-validations="required" required/>
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" name="email" placeholder="name@example.com" data-sb-validations="required,email" required/>
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="submit" name="verification" class="btn btn-primary" value="Request Verifiation code"></input><span style="margin-left:6px; color:green" id="alert"></span>
                                <input class="form-control" id="email" type="text" name="codes" placeholder="" data-sb-validations="required,code"/>
                                <div class="invalid-feedback" data-sb-feedback="code:required">Verification code is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="code:email">code is not valid.</div>
                            </div>
                           <br>
                            <h6>Choose your Normination</h6>
                            <br>
                            <div class="form-floating mb-3">
                                <div class="row">
                                    <div class="col">
                                        <h4 style="font-weight:bold">BEST ICT SECTOR AWARDS</h4>
                                        <div class="row">
                                            <div class="col">
                                                <h5>Internet Service Provider</h5>
                                                <div>
                                                    <!-- Name input-->
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="name" type="text" name="bisISPInput" placeholder="Enter your name..." data-sb-validations="required" />
                                                        <label for="name">Full Organization name</label>
                                                        <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                                    </div>
                                                    <!-- site input-->
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="name" type="text" name="bisISPInputWeb" placeholder="Enter your name..." data-sb-validations="required" />
                                                        <label for="name">Organization Website link</label>
                                                        <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                                    </div>
                                                </div>
                                                <!--<select class="form-control" name="bisISP"> 
                                                    <option value="">Internet Service Provider </option>
                                                    <?php
                                                        $records = mysqli_query($con, "SELECT * From wapendekezwa WHERE type IN(1)");  // Use select query here 
                                                        while($data = mysqli_fetch_array($records)){
                                                        echo "<option value='". $data['id'] ."'>" .$data['companyName'] ."</option>";  // displaying data in option menu
                                                        }	
                                                    ?> 
                                                </select>-->
                                            </div>
                                            <div class="col">
                                            <h5>Infrastructure Service</h5>
                                            <div>
                                                    <!-- Name input-->
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="name" type="text" name="bisISInput" placeholder="Enter your name..." data-sb-validations="required" />
                                                        <label for="name">Full Organization name</label>
                                                        <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                                    </div>
                                                    <!-- site input-->
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="name" type="text" name="bisISInputWeb" placeholder="Enter your name..." data-sb-validations="required" />
                                                        <label for="name">Organization Website link</label>
                                                        <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                                    </div>
                                            </div>
                                            </div>
                                        <br>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <h5>Application Service</h5>
                                                <div>
                                                    <!-- Name input-->
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="name" type="text" name="bisASInput" placeholder="Enter your name..." data-sb-validations="required" />
                                                        <label for="name">Full Organization name</label>
                                                        <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                                    </div>
                                                    <!-- site input-->
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="name" type="text" name="bisASInputWeb" placeholder="Enter your name..." data-sb-validations="required" />
                                                        <label for="name">Organization Website link</label>
                                                        <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                                    </div>
                                                 </div>   
                                            </div>
                                            
                                            <div class="col">
                                            <h5>Hardware Solution</h5>
                                            <div>
                                                    <!-- Name input-->
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="name" type="text" name="bisHSInput" placeholder="Enter your name..." data-sb-validations="required" />
                                                        <label for="name">Full Organization name</label>
                                                        <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                                    </div>
                                                    <!-- site input-->
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="name" type="text" name="bisHSInputWeb" placeholder="Enter your name..." data-sb-validations="required" />
                                                        <label for="name">Organization Website link</label>
                                                        <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                                    </div>
                                            </div>
                                            </div>

                                        </div>
                                       
                                        <br>
                                        <div class="row">
                                           <div class="col">
                                           <h5>Software Development</h5>
                                           <div>
                                                    <!-- Name input-->
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="name" type="text" name="bisSDInput" placeholder="Enter your name..." data-sb-validations="required" />
                                                        <label for="name">Full Organization name</label>
                                                        <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                                    </div>
                                                    <!-- site input-->
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="name" type="text" name="bisSDInputWeb" placeholder="Enter your name..." data-sb-validations="required" />
                                                        <label for="name">Organization Website link</label>
                                                        <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                                    </div>
                                                    
                                                </div>
                                           </div>
                                    
                                        <div class="col">
                                        <h5> </h5>
                                        

                                        </div>
                                </div>
                                <hr />
                                
                                <br>
                                <div class="row">
                                <h4>FINANCIAL SECTOR AWARDS</h4>
                                <div class="col">
                                    <h5>Best Digitised Financial Institution</h5>
                                    <div>
                                        <!-- Name input-->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="name" type="text" name="fsaInput" placeholder="Enter your name..." data-sb-validations="required" />
                                            <label for="name">Full Organization name</label>
                                            <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                        </div>
                                        <!-- site input-->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="name" type="text" name="fsaInputWeb" placeholder="Enter your name..." data-sb-validations="required" />
                                            <label for="name">Organization Website link</label>
                                            <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <hr />

                                <br>
                                <div class="row">
                                    <h4>INSURANCE SECTOR AWARDS</h4>
                                    <div class="col">
                                    <h5>Best Digitised Insurance Agency</h5>
                                    <div>
                                            <!-- Name input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" type="text" name="isaInput" placeholder="Enter your name..." data-sb-validations="required" />
                                                <label for="name">Full Organization name</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                            </div>
                                            <!-- site input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" type="text" name="isaInputWeb" placeholder="Enter your name..." data-sb-validations="required" />
                                                <label for="name">Organization Website link</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr />

                                <br>
                                <div class="row">
                                <h4>AGRICULTURAL SECTOR AWARDS</h4>
                                <div class="col">
                                <h5<>Best Digitised Agricultural Institution</h5>
                                    <div>
                                        <!-- Name input-->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="name" type="text" name="asaInput" placeholder="Enter your name..." data-sb-validations="required" />
                                            <label for="name">Full Organization name</label>
                                            <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                        </div>
                                        <!-- site input-->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="name" type="text" name="asaInputWeb" placeholder="Enter your name..." data-sb-validations="required" />
                                            <label for="name">Organization Website link</label>
                                            <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <hr />

                                <br>
                                <div class="row">
                                <h4>HEALTH SECTOR AWARDS</h4>
                                    <div class="col">
                                    <h5>Best Digitised Health Centre/Institution</h5>
                                        <div>
                                            <!-- Name input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" type="text" name="hsaInput" placeholder="Enter your name..." data-sb-validations="required" />
                                                <label for="name">Full Organization name</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                            </div>
                                            <!-- site input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" type="text" name="hsaInputWeb" placeholder="Enter your name..." data-sb-validations="required" />
                                                <label for="name">Organization Website link</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr />

                                <br>
                                <div class="row">
                                <h4>EDUCATION SECTOR AWARDS</h4>
                                <div class="col">
                                <h5>Best Digitised Training Institution</h5>
                                        <div>
                                            <!-- Name input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" type="text" name="esaInput" placeholder="Enter your name..." data-sb-validations="required" />
                                                <label for="name">Full Organization name</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                            </div>
                                            <!-- site input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" type="text" name="esaInputWeb" placeholder="Enter your name..." data-sb-validations="required" />
                                                <label for="name">Organization Website link</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                            </div>
                                        </div>
                                </div>
                                </div>
                                <hr />

                                <br>
                                <div class="row">
                                <h4>REGULATORY AWARDS</h4>
                                    <div class="col">
                                    <h5>Best Digitised Service Regulatory Body</h5>
                                        <div>
                                            <!-- Name input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" type="text" name="raInput" placeholder="Enter your name..." data-sb-validations="required" />
                                                <label for="name">Full Organization name</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                            </div>
                                            <!-- site input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" type="text" name="raInputWeb" placeholder="Enter your name..." data-sb-validations="required" />
                                                <label for="name">Organization Website link</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr />

                                <br>
                                <div class="row">
                                <h4>LOCAL GOVERNMENT AUTHORITY AWARDS</h4>
                                    <div class="col">
                                    <h5>Best Digitised Local Government Authority</h5>
                                        <div>
                                            <!-- Name input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" type="text" name="laaInput" placeholder="Enter your name..." data-sb-validations="required" />
                                                <label for="name">Full Organization name</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                            </div>
                                            <!-- site input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" type="text" name="laaInputWeb" placeholder="Enter your name..." data-sb-validations="required" />
                                                <label for="name">Organization Website link</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr />

                                <br>
                                <div class="row">
                                <h4>BEST INNOVATOR/STARTUP INSTITUTION OF THE YEAR</h4>
                                    <div class="col">
                                        <div>
                                            <!-- Name input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" type="text" name="byieInput" placeholder="Enter your name..." data-sb-validations="required" />
                                                <label for="name">Full Organization name</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                            </div>
                                            <!-- site input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" type="text" name="byieInputWeb" placeholder="Enter your name..." data-sb-validations="required" />
                                                <label for="name">Organization Website link</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr />

                                <br>
                                <div class="row">
                                <h4>BEST ICT RESEARCH INSTITUTION OF THE YEAR</h4>
                                <div class="col">
                                        <div>
                                            <!-- Name input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" type="text" name="birInput" placeholder="Enter your name..." data-sb-validations="required" />
                                                <label for="name">Full Organization name</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                            </div>
                                            <!-- site input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" type="text" name="birInputWeb" placeholder="Enter your name..." data-sb-validations="required" />
                                                <label for="name">Organization Website link</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <!-- Submit Button-->
                            <div class="d-grid"><input class="btn btn-primary btn-xl" id="submitButton" value="Nominate" name="register" type="submit"></div>
                            <br>
                            <div class="d-grid"><h6><a id="myBtn" href="#">Or See my Normination</a></h6></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

 <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
    </div>
    <div class="modal-body">
      <p>Enter your Email Address</p>
      <form method="post" action="action.php">
      <!-- Email address input-->
        <div class="form-floating mb-3">
        <input class="form-control" id="email" type="email" name="email2" placeholder="name@example.com" data-sb-validations="required,email" required/>
            <label for="email">Email address</label>
            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
        </div>

        <!-- Submit Button-->
        <div class="d-grid"><input class="btn btn-primary btn-xl" id="submitButton" value="Submit" name="getNomination" type="submit"></div>
      </form>
    </div>
    <div class="modal-footer">
    </div>
  </div>

</div>

        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2021 - ICTC. All Rights Reserved</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script>
     // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
        </script>
    </body>
</html>
