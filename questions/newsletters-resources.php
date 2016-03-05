<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta name="Keywords" content="williamsville, amhearst, wester new york, buffalo ny elder respite care caring compassion safety security" />
<meta name="Description" content="Good Samaritan is a home care agency licensed by the New York State Department of Health, specializing in helping Seniors.  We provide a variety of services that help Seniors with their Activities of Daily Living, ADLs." />

<title>Newsletters and Resources | Good Samaritan Home Health Agency</title>

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
            <h1>Newsletters &amp; Additional Resources</h1>
            <p>We occasionaly like to collect useful health care information and share it with our clients and friends. Take a look at our free newsletters for some additional tips and guidelines to aid with your home health and senior care needs.</p>
            <div class="row" style="padding-top:.5em;">
                <article class="col-xs-6 col-sm-6">
                    <div class="body-content">
                        <h2>Newsletters</h2>
                        <p>Our newsletters contain Good Sam curated content that we feel is important and useful, so take a look.</p>
                        <ul>
                            <li><a href="/src/newsletters/Newsletter_August_2015.pdf" target="news">The Good Sam News - August 2015</a></li>
                            <li><a href="/src/newsletters/Newsletter_July_2015.pdf" target="news">The Good Sam News - July 2015</a></li>
                            <li><a href="/src/newsletters/Newsletter_May_2015.pdf" target="news">The Good Sam News - May 2015</a></li>
                        </ul>
                    </div>
                </article>
                <article class="col-xs-6 col-sm-6">
                    <div class="body-content">
                        <h2>More Information</h2>
                        <p>Looking for more information? Take a look at the linked website below, or give us a call, 
                            <span itemprop="telephone"><a href="tel:+17167838124">(716)783-8124</a></span>, we'd be happy to talk.</p>
                        <ul>
                            <li><a href="http://alz.org" target="external_link">Alzheimer's Association</a></li>
                            <li><a href="http://networkinaging.com" target="external_link">Network In Aging</a></li>
                            <li><a href="http://www.gcmofwny.com" target="external_link">Geriatric Care Managers of Western New York</a></li>
                            <li><a href="http://www.eldercarewny.com" target="external_link">Elder Care of WNY</a></li>
                        </ul>
                    </div>
                </article>
            </div>

        </div> 
    </div>
    
    <div class="col-xs-12 col-sm-4 col-sm-pull-8">
        <div class="drk-blu-side">
            <aside class="callout">"Helping Seniors maintain their independence and dignity while living in their own homes for as long as possible."</aside>
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
