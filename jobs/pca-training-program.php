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
	background:transparent url(http://i.istockimg.com/image-zoom/20115652/3/380/253/stock-photo-20115652-medical-staff-seated-in-circle-at-case-meeting.jpg) 0 15% no-repeat;	
    background-size: cover;
}


</style>

</head>
<body>

<div class="container">
<?php @include('../src/includes/nav.php'); ?>
<div class="main-container">    
<section class="row">
	<div class="col-xs-12">
    	<div class="main-image"></div>
        <div class="body-content no-sidebar">
            <h1 class="squishy">Personal Care Aide Training Program</h1>
            
            <div class="row">
                <div class="col-xs-12 col-sm-6" style="padding-top:.5em">
                    <h3 class="med-blu">Begin an Exciting healthcare career:<br>Register below.</h3>
                    <p>Become a highly respected healthcare professional today. Enroll in the <span class="bold">FREE</span> Good Samaritan Personal Care Aide Training Program.
                    <br><br>Classes are forming continuously. New classes start every 4-6 weeks.
                    <br><br>Earn your PCA Certificate in <span class="bold">8 short days!</span> Classes are limited to 10 students, so enroll today.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6" style="padding-top:.5em">
                    <?php @include('../src/includes/pca-interest-form.php'); ?>
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

    $('.squishy').squishy({minSize: 18, maxSize:48});
    $('#page-title').replaceWith("<span id='page-title'>" + $('title').text().split('|')[0] + "</span>");
});


</script>
</body>
</html>
