<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

<meta name="Keywords" content="Medical issues, Personal care needs, Bathing, Toileting, Transferring,Activities of Daily Living (ADLs), Medication issues, Nutritional issues, Home cleaning needs, Transportation needs, Costs of service" />
<meta name="Description" content="As a licensed home care agency, we are required to complete a nurse assessment on every prospective client before we begin providing services. Our goal is to provide a level of care that is needed to help our clients, especially Seniors, remain independent in their home for as long as possible while maintaining their dignity." />

<title>Assessment Interview | Good Samaritan Home Health Agency</title>

<?php @include('../src/includes/css.php'); ?>

<style type="text/css">
/***  page specific styles ****/
.main-image{
	background:transparent url(../src/img/int-taking-meds-bg.jpg) 95% -1% no-repeat;	
}

.body-content h4{
    margin-top:1em;
}
</style>

</head>
<body>

<div class="container">
<?php @include('../src/includes/nav.php'); ?>
<div class="main-container">    
<section class="row ">
	<div class="col-xs-12 col-sm-8 col-sm-push-4">
    	<div class="main-image"><img alt="hero image elder care" src="../src/img/slide1-bg.png" style="display:none;"/></div>
        <div class="body-content">
            <h1>Assessment Interview</h1>
            <p>
                As a licensed home care agency, we are required to complete a Nurse Assessment on every prospective client or patient before we begin providing services.
            </p>
            <p>
                We start the assessment process by conducting an in-depth assessment of you or your loved one's medical conditions and diagnosis's, current medical status, diet and dietary concerns, goals for improving health status and patient expectations.
            </p>
            <p>
                Our goal is to provide a level of care that is needed to help our clients, especially Seniors, remain independent in their home for as long as possible while maintaining their dignity.
            </p>
            <p>
                During the meeting, which takes about an hour, we fully explain the services available, answer any additional questions you may have and help with the important care decisions faced by the family with a loved one in need. 
            </p>
            <p>
                Topics covered include:
                <ul>
                    <li>Medical issues</li>
                    <li>Personal care needs (Bathing, Toileting, Transferring)</li>         
                    <li>The assistance needed with Activities of Daily Living (ADLs)</li>                    
                    <li>Medication issues</li>
                    <li>Nutritional issues</li>        
                    <li>Matching the most appropriate Caregiver</li>
                    <li>Home cleaning needs</li>
                    <li>Transportation needs</li>                                        
                    <li>Costs of service</li>
                </ul>
            </p>
            <p>
                <h4 class="med-blu">Care Plan</h4>
                Once the Assessment is completed the Registered Nurse who completed the Assessment will write an individualized Plan of Care for the client.
            </p>
            <p>
                With each step - Service Inquiry, Assessment and care Plan - we try to learn as much as possible about you and your loved one so we may assemble the "Building Blocks" to fully develop a highly personalized and individualized Care Plan.
            </p>
            <p>
                Our "Safety Net of Services" will utilize some or all of our services provided by - Companion Aides, Personal Care Aides or Home Health Aides - to match the unique needs of our clients and their families.  This blending of services to ensure the safety and well-being of our clients is always mindful of family finances.  We try very hard to create a Care Plan that meets almost everyone's budget.
            </p>
        </div> 
    </div>
    
	<div class="col-xs-12 col-sm-4 col-sm-pull-8">
    	<div class="drk-blu-side">
        	<aside class="callout">"We try to learn as much as possible about you and your loved one so we may assemble a highly personalized Care Plan."</aside>
        </div>
        <?php @include('../src/includes/sidebar_contact.php'); ?>    
        <div class="lt-blu-side" style="background-color:transparent;">
            <h3>Schedule a No Cost Assessment</h3>
            <p><a href="#assessment-page-form" data-toggle="modal" data-target="#assessmentModal">Complete this short form, and we will contact you to schedule a No Cost Assessment.</a></p>
        </div>
        
    </div>
</section>
</div>
    
<?php @include('../src/includes/footer.php'); ?>    
<?php @include('../src/includes/modal-aide-assessment.php'); ?>

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