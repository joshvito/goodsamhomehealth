<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

<meta name="Keywords" content="companion care provider western new york affordable in-home assistance companion senior care good Samaritan caregivers buffalo ny elder respite care" />
<meta name="Description" content="Good Samaritan is a leading companion care service provider, specializing in keeping seniors in Western New York, safe and secure in their own homes for as long as possible, while maintaining their independence and dignity and providing peace-of-mind to their loved ones, by providing dependable and affordable care." />

<title>Good Samaritan Home Health Agency | Sitemap</title>


<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/src/includes/css.php";
   include_once($path);
?>


<style type="text/css">
/***  bottom section ****/
.lower-thirds-container h3{
	font-family:'Open Sans',sans-serif;
	font-weight:300;
	color:#0a5184;
	font-size:1.43em;	
	margin:0 0 1em 0;
}

.lower-thirds-container .third{
background-color:#ccc;
min-height:14.5em;	
margin-bottom:2.25em;
}

.lower-thirds-container ul{
	list-style-type:none;
	padding:1em;
}
.lower-thirds-container ul li{
	padding:.5em;
	font-family:Arial, Helvetica, sans-serif;
	line-height:1.25em;
}
.lower-thirds-container ul a, .lower-thirds-container ul a:link{
color:#000;
text-decoration:underline;		
}
.lower-thirds-container ul a:hover{
	color:#0a5385;
}
</style>
</head>
<body>

<div class="container">
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/src/includes/nav.php";
   include_once($path);
?>

<section class="row">
    <div class="col-xs-4">
        <h1>Sitemap</h1>

        <ul>
            <li><a href="/home/" title="">Home</a></li>
            <li><a href="/home/why-choose.php" title="">Why Choose Good Samaritan</a></li>
            <li><a href="/home/our-caregivers.php" title="">Our Caregivers</a></li>
        </ul>
        <ul>
            <li><a href="/services/caring-compassion.php" title="">Caring and Compassion</a></li>
            <li><a href="/services/our-services.php" title="">Our Services</a></li>
            <li><a href="/services/arrival-assurance.php" title="">Arrival Assurance</a></li>
            <li><a href="/services/alzheimers-dementia.php" title="">Alzheimers &amp; Dementia Care</a></li>
            <li><a href="/services/va-aid-attendance.php" title="">Veterans Programs and Services</a></li>
        </ul>
        <ul>
            <li><a href="/assessment/" title="">Assessment Interview</a></li>
            <li><a href="/client-stories/" title="">Client Stories</a></li>
            <li><a href="/questions/" title="">Frequently Asked Questions (FAQ)</a></li>
            <li><a href="/questions/newsletters-resources.php" title="">Newsletters &amp; Resources</a></li>
            <li><a href="/contact/" title="">Contact Us</a></li>
        </ul>
        <ul>
            <li><a href="/jobs/" title="">Job Opportunities</a></li>
            <li><a href="/src/downloads/Application_for_Employment.doc" title="">Employment Application</a></li>
        </ul>
    </div>

</section>
	
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/src/includes/footer.php";
   include_once($path);
?>


</div><!-- end container-->      

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="/src/js/min/production.min.js"></script>
<script type="text/javascript">
/* trigger when page is ready */
$(document).ready(function (){
	//fit copy text to box
	$(".squishy").squishy({maxSize: 14, minSize: 10, maxWidth: 310});
	//add the title to the footer if js is enabled
	$('#page-title').replaceWith("<span id='page-title'>" + $('title').text().split('|')[1] + "</span>");
    

});<!-- end doc ready -->

</script>

</body>
</html>
