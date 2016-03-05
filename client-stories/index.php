<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

<meta name="Keywords" content="caregivers, home health agency, williamsville, amherst, NY, New York, professional senior care" />
<meta name="Description" content="Good Samaritan is a leading home health care service provider, specializing in keeping patients in western new york safe and secure in their own homes." />

<title>Client Stories | Good Samaritan Home Health Agency</title>

<?php @include('../src/includes/css.php'); ?>

<style type="text/css">
/***  page specific styles ****/
.main-image{
	background:transparent url(../src/img/int-client-stories.jpg) 95% -1% no-repeat;	
}

.body-content p span{
    display: inline-block;
    margin-left: 80%;
    font-weight: lighter;
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
            <h1>Client Stories</h1>
            <article>
                <p>
                Dear Michelle and Tim,<br>
                You made my day on Sunday.  Thank you so much, but the important thing is you thought of me. Thank you for your caring.<br>
                <span class="med-blu">Margaret K.<br>
                East Amherst, NY</span>
                </p>
            </article>
            <hr>
            <article>
                <p>
                To All of You at Good Samaritan CareGivers,<br>
                Thank you so very much for the wonderful caring that I receive from you! Holiday greetings to all.<br>
                <span class="med-blu">Peggy A.<br>
                Williamsville, NY</span>
                </p>
            </article>
            <hr>
            <article>
                <p>
                Hi Michelle,<br>
                Merry Christmas to you and your family.  Thanks again for all you did to communicate and fill in the missing help my family could not provide.  You certainly have a talent for doing this job with professional acumen that not many provide.<br>
                <span class="med-blu">Best regards.<br>
                Don S.<br>
                Mill Valley, CA</span> 
                </p>
            </article>
                
		</div> 
    </div>
    
	<div class="col-xs-12 col-sm-4 col-sm-pull-8">
    	<div class="drk-blu-side">
        	<aside class="callout">"You certainly have a talent for doing this job with professional acumen that not many provide."</aside>
        </div>
    	<?php @include('../src/includes/sidebar_contact.php'); ?>
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




