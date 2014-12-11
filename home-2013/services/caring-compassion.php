<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

<meta name="Keywords" content="williamsville, amhearst, wester new york, buffalo ny elder respite care caring compassion safety security" />
<meta name="Description" content="Good Samaritan is a home care agency licensed by the New York State Department of Health, specializing in helping Seniors.  We provide a variety of services that help Seniors with their Activities of Daily Living, ADLs." />

<title>Caring and Compassion | Good Samaritan Home Health Agency</title>

<?php @include('../src/includes/css.php'); ?>

<style type="text/css">
/***  page specific styles ****/
.main-image{
	background:transparent url(../src/img/slide1-bg.jpg) 95% -1% no-repeat;	
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
            <h1>Caring and Compassion</h1>
            <p>Good Samaritan is a home care agency licensed by the New York State Department of Health, specializing in helping Seniors.  We provide a variety of services that help Seniors with their Activities of Daily Living (ADLs) so they may maintain their independence and dignity while remaining in their own homes for as long as possible.  We are experts in Seniors Care and are committed to assisting the families of Seniors by relieving their caregiving burdens so they may enjoy more relaxed and meaningful family time with their Senior Loved Ones. </p>
            <p>Working men and women trust Good Samaritan since 2007 to assist their aging parents and loved ones with their ADLs, so they can focus on their own careers and families. Families can feel the Peace-of-Mind that comes with leaving Mom and Dad in the Trusted Hands of a Good Samaritan.</p>
            <p>We provide care and compassion to Seniors by emulating the characteristics of the Biblical GOOD SAMARITAN. <span class="med-blu">"We provide Safety and Security to Seniors and Peace of Mind to their loved ones."</span></p>
        </div> 
    </div>
    
	<div class="col-xs-12 col-sm-4 col-sm-pull-8">
    	<div class="drk-blu-side">
        	<p class="callout">“We provide Safety and Security to Seniors and Peace of Mind to their loved ones.”</p>
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
