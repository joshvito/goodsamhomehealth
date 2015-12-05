<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

<meta name="Keywords" content="arrival assurance, western New York, wny, buffalo ny elder respite care" />
<meta name="Description" content="Arrival Assurance is our aide log system that confirms our professionalism and committment to providing outstanding care for your loved one." />

<title>Arrival Assurance | Good Samaritan Home Health Agency</title>

<?php @include('../src/includes/css.php'); ?>

<style type="text/css">
/***  page specific styles ****/
.main-image{
	background:transparent url(../src/img/int-aide-couple-couch-bg.jpg) 95% -1% no-repeat;	
}
</style>

</head>
<body>

<div class="container">
<?php @include('../src/includes/nav.php'); ?>
<div class="main-container">    
<section class="row ">
	<div class="col-xs-12 col-sm-8 col-sm-push-4">
    	<div class="main-image"><img alt="hero image elder care" src="../src/img/slide4-bg.png" style="display:none;"/></div>
        <div class="body-content">
            <h1>Arrival Assurance</h1>
            <p>Our eRSP&copy; scheduling software includes Telephony, a web-based system, that allows our Aides to use the Client's phone to call a toll-free phone number to clock-in and clock-out. </p>
            <p>Our Client's families have access to this information to verify the Aide's arrival and departure. We receive a text message and email if the call is not made within 10 minutes of the scheduled arrival. 
                <br><br><br><br><br>
            </p>
		</div> 
    </div>
    
	<div class="col-xs-12 col-sm-4 col-sm-pull-8">
    	<div class="drk-blu-side">
        	<aside class="callout">"Our Aides use the client's phone to call a toll-free system to log their arrival and departure."</aside>
        </div>
    	<?php @include('../src/includes/sidebar_contact.php'); ?>
    </div>
</section>
</div>
    
<?php @include('../src/includes/footer.php'); ?>    

</div><!-- end container-->      
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
