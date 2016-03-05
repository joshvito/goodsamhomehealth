<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

<meta name="Keywords" content="vet, veterans affairs, veterans, va, western new york affordable buffalo ny elder respite care, compensation benefits, pension " />
<meta name="Description" content="Good Samaritan helps eligible Veterans qualify for the VA Aid and Attendance Benefit. We work closely with Care Advisors at the New York State Division of Veterans Affairs at the Amherst Town Hall and in Hamburg, New York." />

<title>Veterans Programs and Services | Good Samaritan Home Health Agency</title>

<?php @include('../src/includes/css.php'); ?>

<style type="text/css">
/***  page specific styles ****/
.main-image{
	background:transparent url(../src/img/slide4-bg.jpg) 95% -1% no-repeat;	
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
            <h1>Veterans Programs and Services</h1>
            <p>
                Good Samaritan helps eligible Veterans qualify for the VA Aid &amp; Attendance Benefit. If you are a veteran or surviving spouse of a veteran requiring in-home care or the assistance of a caregiver in your daily life, you may be eligible to receive benefits from the Veterans Administration.
            </p>
            <p>
                <h4 class="med-blu">The Veterans Administration Aid and Attendance Benefit</h4>
                This is a federally funded program for veterans and their surviving spouses. It's designated to fund in-home care for those who meet established criteria. It may be in addition to a VA Pension or a VA Compensation Benefit.
            </p> 
            <p>
                <h4 class="med-blu">How can Good Samaritan Help?</h4>
                We work closely with Care Advisors at the New York State Division of Veterans Affairs at the Amherst Town Hall and in Hamburg, New York.  These counselors specializes in helping veterans qualify for this benefit. Together, we help veterans and their surviving spouses complete the application and assist you through all phases of the application process. <br><br>
                Good Samaritan can be your solution for quality, in-home care while the application is being processed.
                <br><br>
                These Advisors are experts in qualifying Veterans for this unique benefit. There in NEVER any charge for helping Veterans with applying for this benefit.
            </p>
            <p>
                <h4 class="med-blu">What are the Benefits?</h4>
                <ul>
                    <li>The maximum benefit a Veteran may receive is $1,644 per month.</li>
                    <li>The maximum benefit a surviving spouse may receive is $1,056 per month.</li>
                    <li>The maximum benefit a Veteran with a spouse may receive is $1,949 per month.</li>
                </ul>
            </p>    
            <p>
                <h4 class="med-blu">Do I qualify for the VA Aid &amp; Attendance Benefit?</h4>
                <ul>
                    <li>A Veteran must have been on active duty for 90 days with at least 1 day during a time of war.
                        <ul class="no-marker">
                            <li>World War II</li>
                            <li>Korean Conflict</li>
                            <li>Vietnam Era</li>
                            <li>Persian Gulf War</li>
                        </ul>
                    </li>
                    
                    <li>Must have been honorably discharged</li>
                    <li>The Veteran must be homebound, unable to safely drive a vehicle and not currently driving.</li>
                    <li>Monthly income (less costs for all medical expenses) must be less than $1,644 for a Veteran living alone, $1,056 for a surviving spouse or $1,949 for a Veteran with a spouse.</li>
                    <li>Assets cannot exceed $80,000 (excludes primary home, auto and other personal property)</li>
                    <li>Monthly medical expenses can include the services offered by companies like Good Samaritan.</li>
                    <li>The maximum benefit a Veteran with a spouse may receive is $1,949 per month.</li>
                </ul>
            </p>
            <p>
                For more information go to <a href="http://veterans.ny.gov" target="new">http://veterans.ny.gov</a>
            </p>
        </div> 
    </div>
    
	<div class="col-xs-12 col-sm-4 col-sm-pull-8">
    	<div class="drk-blu-side">
        	<aside class="callout">"Together, we help veterans and their surviving spouses complete the application and assist you through all phases of the application process."</aside>
        </div>
        <?php @include('../src/includes/sidebar_contact.php'); ?>    
        
        
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