<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

<meta name="Keywords" content="home health care provider western new york affordable in-home assistance senior care good Samaritan buffalo ny elder respite care" />
<meta name="Description" content="Good Samaritan Home Health Agency is now accepting applications, apply today!" />

<title>Job Application | Good Samaritan Home Health Agency</title>

<?php @include('../src/includes/css.php'); ?>

<style type="text/css">
/***  page specific styles ****/
.main-image{
	background:transparent url(../src/img/int-job-opp-bg.jpg) 96% -2% no-repeat;
    background-size: cover;	
}

</style>
</head>
<body>

<div class="container">
<?php @include('../src/includes/nav.php'); ?>
<div class="main-container" style="display:block">    
<section class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="main-image"></div>
        <div class="body-content no-sidebar">
            <h1 class="squishy">Apply Today</h1>
            <h3 class="med-blu">Tell us about yourself by filling out the infromation below.</h3>
            <div class="row">
                <?php @include('../src/includes/application.php'); ?>
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
