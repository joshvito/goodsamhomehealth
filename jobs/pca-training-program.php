<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

<meta name="Keywords" content="home health care provider western new york affordable in-home assistance senior care good Samaritan buffalo elder respite care" />
<meta name="Description" content="Become a highly respected healthcare professional today. Enroll in the FREE Good Samaritan Personal Care Aide Training Program." />

<title>PCA Training Program | Good Samaritan Home Health Agency</title>

<?php @include('../src/includes/css.php'); ?>

<style type="text/css">
/***  page specific styles ****/
.main-image{
	background:transparent url(../src/img/int-job-opp-bg.jpg) 96% -2% no-repeat;	
}


</style>

</head>
<body>

<div class="container">
<?php @include('../src/includes/nav.php'); ?>
<div class="main-container">    
<section class="row">
	<div class="col-xs-12">
    	<div class="main-image"><img alt="hero image elder care" src="../src/img/slide4-bg.png" style="display:none;"/></div>
        <div class="body-content no-sidebar">
            <h1>Personal Care Aide Training Program</h1>
            <h3 class="med-blu">Begin an Exciting healthcare career: Register below.</h3>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <p>Become a highly respected healthcare professional today. Enroll in the <span class="bold">FREE</span> Good Samaritan Personal Care Aide Training Program.
                    <br><br>Classes are forming continuously. New classes start every 4-6 weeks.
                    <br><br>Earn your PCA Certificate in <span class="bold">8 short days!</span> Classes are limited to 10 students, so enroll today.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <form action=""  class="form-horizontal" id="pca-training-form">
                        <div class="form-group">
                            <label for="fullname" class="col-sm-3 control-label">Full Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="full-name" id="fullname" required placeholder="First Last" autocomplete="name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address1" class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="address" id="address1" required placeholder="123 Any Street" autocomplete="street-address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address2" class="col-sm-3 control-label sr-only">City State Zip</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control inline" name="city" id="address2" required placeholder="City" autocomplete="locality">
                                <input type="text" class="form-control inline" name="state" id="address3" required placeholder="State" autocomplete="region">
                                <input type="text" class="form-control inline" name="zip" id="address4" required placeholder="Zip" autocomplete="postal-code">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mobile" class="col-sm-3 control-label">Cell Phone</label>
                            <div class="col-sm-9">
                                <input type="tel" class="form-control" name="phone" id="mobile" required placeholder="+1-716-555-5555" autocomplete="tel">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="frmEmailA" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" id="frmEmailA" placeholder="name@example.com" required autocomplete="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-9 col-sm-push-3">
                                <div class="checkbox">
                                    <input type="checkbox" name="confirm-contact" id="more-info">
                                    <label for="more-info">Yes, Contact me with more info.</label>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>        
            </div>
                
		</div> 
    </div>
    

</section>
</div>
    
<?php @include('../src/includes/footer.php'); ?>    

</div><!-- end container-->      
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="../src/js/min/production.min.js"></script>
<script type="text/javascript">
/* trigger when page is ready */
$(document).ready(function (){

$('.squishy.body-copy').squishy({maxWidth: 340, minSize: 12, maxSize:14});
$('#page-title').replaceWith("<span id='page-title'>" + $('title').text().split('|')[0] + "</span>");

});<!-- end doc ready -->

</script>
</body>
</html>
