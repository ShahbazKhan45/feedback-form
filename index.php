<!doctype html>
<html lang="en">

<head>
    <?php include("./include/header-scripts.php"); ?>
    <title>Reach Us - Standard Charter</title>
</head>

<body>
    <div class="logo">
        <div class="imglogo">
            <img src="<?php echo $siteurl?>/assets/images/logo.jpg" alt="">
        </div>
    </div>
    <section class="banner">
        <div class="container">
            <div class="row">
                <h2>Reach Us</h2>
            </div>
        </div>
    </section>
    <section class="popupform">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post" class="validate-popupform">
                        <p class="feed">Please tell us about your complaint or feedback</p>
                       <span class="field-parent">
                           <label for="name" class="label-text f-name">Full name</label>
                           <input type="text" class="required form-control" required="" id="cn" name="cn" onchange="CalculatePercentage()" placeholder="Full name" />
                       </span>
                        
                       <span class="field-parent">
                           <label for="name" class="label-text email">Email</label>
                           <input type="email" class="required form-control email" required name="em" id="em" onchange="CalculatePercentage()" placeholder="Email" /> 
                       </span>
                        
                       <span class="field-parent">
                           <label for="name" class="label-text p-num">Mobile Number</label>
                           <input type="tel" class="required form-control phone" required name="pn" id="pn" onchange="CalculatePercentage()" placeholder="Mobile Number" />
                       </span>
                        
                       <span class="field-parent">
                           <label for="name" class="label-text f-back">What is the nature of your complaint or feedback?</label>
                           <select name="feedback" class="selection required" required="" id="s-op" onchange="CalculatePercentage()">
                               <option value="What is the nature of your complaint or feedback?" selected>What is the nature of your complaint or feedback?</option>
                               <option value="Complaint">Complaint</option>
                               <option value="Feedback">Feedback</option>
                            </select> 
                        </span>
                        
                        <span class="field-parent">
                            <label for="name" class="label-text comp">Your complaint or feedback</label>
                            <input type="text" class="required form-control" required="" id="comp" onchange="CalculatePercentage()" placeholder="Your complaint or feedback">
                        </span>

                        <div class="alt-icon" data-fancybox="" data-src="#popup" name="0">
                            <h3>By clicking "OK, next" you agree that it is OK to contact you</h3>
                            <span><i class="fal fa-info-circle"></i></span>
                        </div>
                        <input type="submit" class="btn btn_black" name="send_data" value="Ok, next"  />
                    </form> 
                </div>
            </div>
        </div>
       
    </section>
    <!-- progress bar -->
    <div class="progress progress-striped">
        <div class="progress-bar progress-bar-success"></div>
    </div>
    <!-- Popup -->
    <section class="popup" id="popup" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>It is OK to contact you.</h1>
                    <p>Standard Chartered or our appointed agents and/or representatives may contact you via e-mail and/or telephone. By clicking "OK, finish", you consent to us using your information above and contacting you via email and/or telephone.</p>
                </div>
            </div>
        </div>
    </section>
    <?php include("./include/footer-scripts.php"); ?>
</body>

</html>
