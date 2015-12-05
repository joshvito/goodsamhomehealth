<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

<meta name="Keywords" content="services western new york affordable in-home assistance buffalo ny, menu, meal preparation, faith based, grocery, food, dietary, diet " />
<meta name="Description" content="Licensed and certified professionals are ready to help you and your loved ones with a variety of activities of daily living (ADLs). Check out our service menu." />

<title>Our Services | Good Samaritan Home Health Agency</title>

<?php @include('../src/includes/css.php'); ?>

<style type="text/css">
/***  page specific styles ****/
.main-image{
	background:transparent url(../src/img/int-our-services.jpg) 95% -1% no-repeat;	
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
            <h1>Our Services</h1>
            <p>Licensed and certified professionals are ready to help you and your loved ones with a variety of activities of daily living (ADLs).</p>
            <p>Our goal is to help patients maintain their independence and have them remain in their own home for as long as possible.</p>
            <p>We are a faith-based company guided by the biblical Good Samaritan in our treatment of our clients - to always be "caring and compassionate."</p>
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <h3>Companion Aide Care</h3>
                    
                    <h4>Meal Preparation</h4>
                    <ul>
                        <li>Menu planning</li>
                        <li>Meal preparation</li>
                        <li>Grocery shopping</li>
                        <li>Managing food storage (expired food, etc.)</li>
                        <li>Dietary management</li>
                    </ul>
                    <h4>Errands</h4>
                    <ul>
                        <li>Shopping/personal &amp; hair appointments</li>
                    </ul>
                    <h4>Medication Reminders</h4>
                    <h4>Light Housekeeping</h4>
                    <ul>
                        <li>Dusting, vacuuming</li>
                    </ul>
                    <h4>Laundry</h4>
                    <ul>
                        <li>Change bed linens</li>
                    </ul>
                    <h4>Caring Companionship</h4>
                    <ul>
                        <li>Human interaction/stimulation</li>
                        <li>Reading a good book, Board games</li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <h3>Personal Aide Care</h3>
                    <h4>Personal Hygiene</h4>
                    <ul>
                        <li>Bathing</li>
                        <li>Bed Bath</li>
                        <li>Toileting</li>
                        <li>Transferring</li>
                        <li>Shampoo Hair</li>
                    </ul>
                    <h4>Meal Preparation</h4>
                    <ul>
                        <li>Eating assistance</li>
                    </ul>
                    <h4>Errands</h4>
                    <ul>
                        <li>Shopping/personal &amp; hair appointments</li>
                    </ul>
                    <h4>Medication Reminders</h4>
                    <h4>Light Housekeeping</h4>
                    <ul>
                        <li>Dusting, vacuuming</li>
                    </ul>
                    <h4>Laundry</h4>
                    <ul>
                        <li>Change bed linens</li>
                    </ul>
                    <h4>Caring Companionship</h4>

                </div>
                <div class="col-xs-12 col-sm-4">
                    <h3>Home Health Aide Care</h3>
                    <h4>Matching the most appropriate Aide</h4>
                    <h4>Personal Hygiene</h4> 
                    <ul>
                        <li>Bathing</li>
                        <li>Grooming</li>
                        <li>Dressing</li>
                        <li>Toileting</li>
                        <li>Transferring</li>
                    </ul>
                    <h4>Activities of Daily Living (ADLs)</h4>
                    <h4>Light Housekeeping</h4>
                    <h4>Mobility/Transportation</h4>
                    <h4>Nutritional Issues/Medication Assistance</h4>
                    <h4>Laundry/Linen</h4>
                    <h4>Financial/Budget Planning</h4>
                </div>
            </div> 
        </div>
    </div>

	<div class="col-xs-12 col-sm-4 col-sm-pull-8">
    	<div class="drk-blu-side">
        	<aside class="callout">We are a faith-based company guided by the biblical Good Samaritan in our treatment of our clients – "to always be caring and compassionate."</aside>
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
