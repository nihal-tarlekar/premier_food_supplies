<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/contact-form-attachment.html
*/
require_once("./include/fgcontactform.php");
require_once("./include/captcha-creator.php");

$formproc = new FGContactForm();
$captcha = new FGCaptchaCreator('scaptcha');

$formproc->EnableCaptcha($captcha);

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('info@premierfoodsupplies.com.test-google-a.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('XsHVufPpgD9Epwl');

$formproc->AddFileUploadField('photo','',2024);
$formproc->AddFileUploadField('resume','doc,docx,pdf,txt',2024);

if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
      <title>Contact us</title>
	         <link rel="STYLESHEET" type="text/css" href="contact.css" />
      <link rel="stylesheet" href="fonts/stylesheet.css" type="text/css">
	  <link rel="stylesheet" href="asset/bootstrap/bootstrap4.css" type="text/css">
	  <link rel="stylesheet" href="asset/custom.css" type="text/css">
	  <link rel="stylesheet" href="asset/responsive.css" type="text/css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>
</head>
<body>
	
<!--navigation-->
<div class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://premierfoodsupplies.com/"><img src="images/logo-1.png" alt="logo" id="navbar-brand-img" class="img-fluid"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
       <a class="nav-link" href="http://premierfoodsupplies.com">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://premierfoodsupplies.com/#about-us">About Us</a>
      </li>
		 <li class="nav-item">
       <a class="nav-link" href="http://premierfoodsupplies.com/#partner-us">Partner with Us</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="http://premierfoodsupplies.com/#our-brands">Our Brands</a>
      </li>
     
	  <li class="nav-item">
			<a class="nav-link" href="http://premierfoodsupplies.com/contactform.php">Contact Us</a>
		  </li>
    </ul>
  </div>
</div>

<section class="contact" id="contact">

	

<div class="container-fluid">
	<div class="row">

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	 <p class="contact-title">&nbsp;<br></p>	
	</div>

<div class="col-lg-9 col-sm-9 col-md-9 col-xs-9 offset-lg-3 offset-md-3 offset-sm-3 offset-xs-0 no-gutters">
	
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Customer</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Supplier</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Other</button>
</div>

<div id="London" class="tabcontent">
 <!-- Form Code Start -->
<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8' class="needs-validation" novalidate >
<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<!--<div class='short_explanation'>* required fields</div>-->

		<div><br>
         <div class="form-group name-group">
          <div class="palceholder">
            <label for="validationCustom01">First Name</label>
            <span class="star">*</span>
          </div>
          <input type="text" name="name" class="form-control" id="validationCustom01"  required  maxlength="50" />
			<span id='contactus_name_errorloc' class='error'></span>
        <div class="invalid-feedback">
       
        </div>
			 
			 
        </div>
        </div>
	    <div><br>
         <div class="form-group name-group">
          <div class="palceholder">
            <label for="validationCustom02">Last Name</label>
            <span class="star">*</span>
          </div>
          <input type="text" name="lastname" class="form-control" id="validationCustom02"  required  maxlength="50" />
         <span id='contactus_lastname_errorloc' class='error'></span>
		<div class="invalid-feedback">
         
        </div>
        </div>
        </div>
	   <div><br>
         <div class="form-group name-group">
          <div class="palceholder">
            <label for="validationCustom03">Email</label>
            <span class="star">*</span>
          </div>
          <input type="email" name='email' class="form-control" id="validationCustom03"  required  maxlength="50" />
		 <span id='contactus_email_errorloc' class='error'></span>
	    <div class="invalid-feedback">
       
        </div>
        </div>
        </div>
    
 
	   <div><br>
         <div class="form-group name-group">
          <div class="palceholder">
            <label for="validationCustom04">Phone</label>
            <span class="star">*</span>
          </div>
          <input type="tel" name='phone' pattern="[0-9]+[0-9]+[0-9]+[0-9]+[0-9]+[0-9]+[0-9]+[0-9]+[0-9]+[0-9]" class="form-control" id="validationCustom04"  required  maxlength="50" />
		 <span id='contactus_phone_errorloc' class='error'></span>
		<div class="invalid-feedback">
      
        </div>
        </div>
        </div>
	
		<div>
			<br/>
		  <input type='text' name='businessname' id='businessname'  placeholder="Business Name" value='<?php echo $formproc->SafeDisplay('businessname') ?>' maxlength="50" /><br/>
		</div>
		<div>
			<br/>

			  <input type='text' name='businessas' id='businessas'  placeholder="Doing Business As"  value='<?php echo $formproc->SafeDisplay('businessas') ?>' maxlength="10" /><br/>
		</div>
		<div>
			<br/>

			<textarea rows="10" cols="20" name='address' id='address' placeholder="Address"><?php echo $formproc->SafeDisplay('address') ?></textarea>
		</div>

		<div>
			<br>
			<label for='message' >Message</label><br/>
	     <div class="form-group name-group">
          <div class="palceholder">
            <label for="validationCustom05">Opening a new venture? Ask for our advice,<br>
				We are industry veterans and are happy to help</label>
            <span class="star">*</span>
          </div>
			
          <textarea rows="40" cols="20" name='message' class="form-control" id="validationCustom05" id='message' required></textarea>
			 
		<div class="invalid-feedback">
       
		</div>
			 <span id='contactus_message_errorloc' class='error'></span>	 
		<br>
			 
		<label for='attachment' >Attachment:(upload .pdf,.docx,.txt)</label><br/>
			<input type="file" name='attachment' id='attachment' />
		
	    <br>
        </div>
        </div>
		<div>
			<div><img alt='Captcha image' src='show-captcha.php?rand=1' id='scaptcha_img' /></div>
			<label for='scaptcha' >Enter the code:</label>
			<input type='text' name='scaptcha' id='scaptcha' maxlength="10" /><br/>

<!--
			<div class='short_explanation'>Can't read the image?
			<a href='javascript: refresh_captcha_img();'>Click here to refresh</a>.</div>
-->
		</div>


		<div>
		 <br>   <input type='submit' name='Submit' value='Submit' />
		</div>


		</form>
	</div>
<div id="Tokyo" class="tabcontent">
 
 <!-- Form03 Code Start -->
<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8' class="needs-validation" novalidate>




<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />



<div></div>		<div><br>
         <div class="form-group name-group">
          <div class="palceholder">
            <label for="validationCustom01">First Name</label>
            <span class="star">*</span>
          </div>
          <input type="text" name="name" class="form-control" id="validationCustom01"  required  maxlength="50" />
			 	<span id='contactus_name_errorloc' class='error'></span>
       <div class="invalid-feedback">
          Please provide a first name.
        </div>
        </div>
        </div>
	    <div><br>
         <div class="form-group name-group">
          <div class="palceholder">
            <label for="validationCustom02">Last Name</label>
            <span class="star">*</span>
          </div>
          <input type="text" name="lastname" class="form-control" id="validationCustom02"  required  maxlength="50" />
        <span id='contactus_lastname_errorloc' class='error'></span>
		<div class="invalid-feedback">
          Please provide a last name.
        </div>
        </div>
        </div>
	   <div><br>
         <div class="form-group name-group">
          <div class="palceholder">
            <label for="validationCustom03">Email</label>
            <span class="star">*</span>
          </div>
          <input type="email" name='email' class="form-control" id="validationCustom03"  required  maxlength="50" />
		 <span id='contactus_email_errorloc' class='error'></span>
		<div class="invalid-feedback">
          Please provide a valid email ID.
        </div>
        </div>
        </div>
    
 
	   <div><br>
         <div class="form-group name-group">
          <div class="palceholder">
            <label for="validationCustom04">Phone</label>
            <span class="star">*</span>
          </div>
          <input type="tel" name='phone' pattern="[0-9]+[0-9]+[0-9]+[0-9]+[0-9]+[0-9]+[0-9]+[0-9]+[0-9]+[0-9]" class="form-control" id="validationCustom04"  required  maxlength="50" />
			 <span id='contactus_phone_errorloc' class='error'></span>
		<div class="invalid-feedback">
          Please provide a valid phone number.
        </div>
        </div>
        </div>
		<div>
		  <br/>
		  <input type='text' name='businessname' id='businessname' placeholder="Business Name" value='<?php echo $formproc->SafeDisplay('businessname') ?>' maxlength="50" /><br/>
		</div>
		<div>
		  <br/>
		   <input type='text' name='businessas' id='businessas' placeholder="Doing Business As" value='<?php echo $formproc->SafeDisplay('businessas') ?>' maxlength="10" /><br/>
		</div>
		<div>
		  <br/>
		  <textarea rows="10" cols="20" name='address' id='address' placeholder="Address"><?php echo $formproc->SafeDisplay('address') ?></textarea>
		</div>


	     <label for='message' >Message</label><br/>
	     <div class="form-group name-group">
          <div class="palceholder">
            <label for="validationCustom05">Have questions regarding our brands, policies or process? Ask us here.</label>
            <span class="star">*</span>
          </div>
          <textarea rows="40" cols="20" name='phone' class="form-control" id="validationCustom05" id='message' required></textarea>
		<div class="invalid-feedback">
          Please provide a message.
        </div>
			 	
			 <span id='contactus_message_errorloc' class='error'></span>	
			 
        </div>
		<br>
		<div>
			<div><img alt='Captcha image' src='show-captcha.php?rand=1' id='scaptcha_img' /></div>
			<label for='scaptcha' >Enter the code:</label>
			<input type='text' name='scaptcha' id='scaptcha' maxlength="10" /><br/>

<!--
			<div class='short_explanation'>Can't read the image?
			<a href='javascript: refresh_captcha_img();'>Click here to refresh</a>.</div>
-->
		</div>

		<div >
		 <br>   <input type='submit' name='Submit' value='Submit' />
		</div>

		</form>	

</div>
	
<!--	-->
	
<div id="Paris" class="tabcontent">
<!-- Form Code Start -->
<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8' class="needs-validation" novalidate >
<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
<!--<div class='short_explanation'>* required fields</div>-->

		<div><br>
         <div class="form-group name-group">
          <div class="palceholder">
            <label for="validationCustom01">First Name</label>
            <span class="star">*</span>
          </div>
          <input type="text" name="name" class="form-control" id="validationCustom01"  required  maxlength="50" />
        		<span id='contactus_name_errorloc' class='error'></span>
	    <div class="invalid-feedback">
          Please provide a first name.
        </div>
        </div>
        </div>
	    <div><br>
         <div class="form-group name-group">
          <div class="palceholder">
            <label for="validationCustom02">Last Name</label>
            <span class="star">*</span>
          </div>
          <input type="text" name="lastname" class="form-control" id="validationCustom02"  required  maxlength="50" />
   	  <span id='contactus_lastname_errorloc' class='error'></span>
	   <div class="invalid-feedback">
          Please provide a last name.
        </div>
        </div>
        </div>
	   <div><br>
         <div class="form-group name-group">
          <div class="palceholder">
            <label for="validationCustom03">Email</label>
            <span class="star">*</span>
          </div>
          <input type="email" name='email' class="form-control" id="validationCustom03"  required  maxlength="50" />
	     <span id='contactus_email_errorloc' class='error'></span>
			 <div class="invalid-feedback">
          Please provide a valid email ID.
        </div>
        </div>
        </div>
    
 
	   <div><br>
         <div class="form-group name-group">
          <div class="palceholder">
            <label for="validationCustom04">Phone</label>
            <span class="star">*</span>
          </div>
          <input type="tel" name='phone' pattern="[0-9]+[0-9]+[0-9]+[0-9]+[0-9]+[0-9]+[0-9]+[0-9]+[0-9]+[0-9]" class="form-control" id="validationCustom04"  required  maxlength="50" />
			 <span id='contactus_phone_errorloc' class='error'></span>
			 <div class="invalid-feedback">
          Please provide a valid phone number.
        </div>
        </div>
        </div>
	
		<div>
			<br/>
		  <input type='text' name='businessname' id='businessname'  placeholder="Business Name" value='<?php echo $formproc->SafeDisplay('businessname') ?>' maxlength="50" /><br/>
		</div>
		<div>
			<br/>

			  <input type='text' name='businessas' id='businessas'  placeholder="Doing Business As"  value='<?php echo $formproc->SafeDisplay('businessas') ?>' maxlength="10" /><br/>
		</div>
		<div>
			<br/>

			<textarea rows="10" cols="20" name='address' id='address' placeholder="Address"><?php echo $formproc->SafeDisplay('address') ?></textarea>
		</div>
<br>
<!--<div>-->
	<div>
    <input type='text' name='website' id='website'  placeholder="Website" value='<?php echo $formproc->SafeDisplay('website') ?>' maxlength="60" /><br/>
   </div>
		<div>
			<br>
			<label for='message' >Message</label><br/>
	     <div class="form-group name-group">
          <div class="palceholder">
            <label for="validationCustom05">Opening a new venture? Ask for our advice,<br>
				We are industry veterans and are happy to help</label>
            <span class="star">*</span>
          </div>
          <textarea rows="40" cols="20" name='message' class="form-control" id="validationCustom05" id='message' required></textarea>
			 
	<div class="invalid-feedback">
          Please provide a message.
		</div>
				 <span id='contactus_message_errorloc' class='error'></span>	
			<br>
<!--
		<label for='attachment' >Product List:</label><br/>
			<input type="file" name='attachment' id='attachment' />
		
-->
<!--
	  <label for='photo' >Resume:</label><br/>
      <input type="file" name='resume' id='resume' /><br/>
	    <br> 
		<label for='attachment' >Attachment:</label><br/>
			<input type="file" name='attachment1' id='attachment1' />
		
	    <br>
-->
	<label for='attachment' >Product List:(upload .doc,.pdf,.txt)</label><br/>
    <input type="file" name='resume' id='resume' /><br/>
    <span id='contactus_photo_errorloc' class='error'></span>

 <label for='attachment' >Attachment: (upload .doc,.pdf for pricing, about company, etc.)</label><br/>
    
    <input type="file" name='photo' id='photo' /><br/>
    <span id='contactus_resume_errorloc' class='error'></span>

        </div>
        </div>
		<div>
			<div><img alt='Captcha image' src='show-captcha.php?rand=1' id='scaptcha_img' /></div>
			<label for='scaptcha' >Enter the code:</label>
			<input type='text' name='scaptcha' id='scaptcha' maxlength="10" /><br/>

<!--
			<div class='short_explanation'>Can't read the image?
			<a href='javascript: refresh_captcha_img();'>Click here to refresh</a>.</div>
-->
		</div>


		<div>
		 <br>   <input type='submit' name='Submit' value='Submit' />
		</div>


	</form></div>
<!--	-->
	</div>
	</div>
	
</div>

</section>
<!--
<script>
(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
-->
<!---->

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");
    frmvalidator.addValidation("lastname","req","Please provide your last name");
	frmvalidator.addValidation("email","req","Please provide your email address");
    frmvalidator.addValidation("email","email","Please provide a valid email address");
    frmvalidator.addValidation("phone","req","Please provide your phone number");
//	frmvalidator.addValidation("businessname","req","Please provide your businessname");
//	frmvalidator.addValidation("businessas","req","Please provide your phone number");
//	frmvalidator.addValidation("address","req","Please provide your address");
//	frmvalidator.addValidation("website","req","Please provide your website");
    frmvalidator.addValidation("message","req","Please provide a message");

//    frmvalidator.addValidation("productlist","file_extn=jpg;jpeg;gif;png;bmp","Upload images only. Supported file types are: jpg,gif,png,bmp");

    frmvalidator.addValidation("scaptcha","req","Please enter the code in the image above");

    document.forms['contactus'].scaptcha.validator
      = new FG_CaptchaValidator(document.forms['contactus'].scaptcha,
                    document.images['scaptcha_img']);

    function SCaptcha_Validate()
    {
        return document.forms['contactus'].scaptcha.validator.validate();
    }

    frmvalidator.setAddnlValidationFunction("SCaptcha_Validate");

    function refresh_captcha_img()
    {
        var img = document.images['scaptcha_img'];
        img.src = img.src.substring(0,img.src.lastIndexOf("?")) + "?rand="+Math.random()*1000;
    }

// ]]>
</script>


<!--footer-->
<div class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-12">
				<img src="images/footer-logo.png" class="img-fluid img-footer-logo" alt="footer-logo">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-12">
				<img src="images/location.png" class="img-fluid img-location" alt="location">
				<p><strong>Michigan Distribution Center (HQ)</strong><br>
				1783 Thunderbird St, <br>Troy, MI 48084<br>
				<strong>Office: +1 248.275.6621</strong><br>
				<strong>Fax: +1 248.591.9300</strong>
				<a href="mailto=info@premierfoodsupplies.com">info@premierfoodsupplies.com</a><br>
				Territories serviced: MI, OH, IN, KY,  PA</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-12">
				<img src="images/location.png" class="img-fluid img-location" alt="location">
				<p><strong>Illinois Distribution Center</strong><br>
				26W333 St. Charles Rd, <br>Carol Stream, IL 60188<br>
				<strong>Office: +1 630.454.5600 </strong><br>
				<strong>Fax: +1 630.216.6207</strong><br>
				Territories serviced: IL, WI, MN, IA,<br> 
					MO, AR, ND, SD, NE, KS, CO, WY</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-12">
				<img src="images/location.png" class="img-fluid img-location" alt="location">
				<p><strong>Texas Distribution Center</strong><br>
				11309 Indian Trail,<br> Dallas, TX 75229<br>
				<strong>Office: +1 469.473.6655</strong><br>
				<strong>Fax: +1 903.609.1653</strong><br>
				Territories serviced: TX</p>
				<p class="connect">Connects:<a href="https://www.linkedin.com/company/premier-food-supplies-llc" target="_blank"><img src="images/footer-linkedin.png" class="img-fluid social" alt="social-icon"></a></p>
			</div>
		</div>
		<hr>
		
	</div>
	<div class="sub-footer">
			<h6>2020 @ Premier Food Supplies LLC, All rights reserved   |  Design by: <a href="https://www.optimist.co.in/" target="_blank">Optimist Brand Design LLP</a></h6>
		
			<h6 class="update">Last Updated: 02-2020</h6>
	</div>
</div>
<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
 

//    frmvalidator.addValidation("productlist","file_extn=jpg;jpeg;gif;png;bmp","Upload images only. Supported file types are: jpg,gif,png,bmp");

    frmvalidator.addValidation("scaptcha","req","Please enter the code in the image above");

    document.forms['contactus'].scaptcha.validator
      = new FG_CaptchaValidator(document.forms['contactus'].scaptcha,
                    document.images['scaptcha_img']);

    function SCaptcha_Validate()
    {
        return document.forms['contactus'].scaptcha.validator.validate();
    }

    frmvalidator.setAddnlValidationFunction("SCaptcha_Validate");

    function refresh_captcha_img()
    {
        var img = document.images['scaptcha_img'];
        img.src = img.src.substring(0,img.src.lastIndexOf("?")) + "?rand="+Math.random()*1000;
    }

// ]]>

</script>

<script>
	


$('.palceholder').click(function() {
  $(this).siblings('input').focus();
});
$('.form-control').focus(function() {
  $(this).siblings('.palceholder').hide();
});
$('.form-control').blur(function() {
  var $this = $(this);
  if ($this.val().length == 0)
    $(this).siblings('.palceholder').show();
});
$('.form-control').blur();	
	
		
</script>
	<script>
		window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "0.5% 0.5%";
    document.getElementById("navbar-brand-img").style.width = "48%";
	document.getElementById("navbar-brand-img").style.marginLeft = "20%";
	document.getElementById("navbar-brand-img").style.marginTop = "2%";
  } else {
    document.getElementById("navbar").style.padding = "2% 2%";
    document.getElementById("navbar-brand-img").style.width = "75%";
document.getElementById("navbar-brand-img").style.marginTop = "-5%";
  }
}
	</script>
<!--tab -->
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
		
	  <script type="text/javascript" src="scripts/gen_validatorv31.js"></script>
      <script type="text/javascript" src="scripts/fg_captcha_validator.js"></script>

<script src="asset/bootstrap/bootstrap4.js" type="text/javascript"></script>
</body>
</html>
