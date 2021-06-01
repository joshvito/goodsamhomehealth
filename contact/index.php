<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

<meta name="Keywords" content="employment, resources, contact us, compassionate caregivers" />
<meta name="Description" content="Want to get in touch with Good Samaritan Home Health Agency? We offer the most comprehensive home, senior, service menu." />

<title>Contact Us | Good Samaritan Home Health Agency</title>

<?php @include('../src/includes/css.php'); ?>

<style type="text/css">
/***  page specific styles ****/
.main-image{
    background:transparent url(../src/img/int-contact-bg.jpg) 95% -1% no-repeat; 
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
            <h1>Get in Touch with Us</h1>
            <h3 class="med-blu">We are ready to help</h3>
            <section name="contact infromation" class="col-xs-12 col-sm-6">
                <p>Call us at <span itemprop="telephone" content="+17167838124"><a href="tel:+17167838124">(716)783-8124</a></span><br />
                   Or send us an email to <a href="mailto:info@goodsamhomehealth.com" class="squishy body-copy" itemprop="email">info@GoodSamHomeHealth.com</a>
                </p>
            </section>    
            <section name="employment details" class="col-xs-12 col-sm-6">
                <h4>Employment Resources</h4>
                <p>Information on how to join our team of caring and compassionate caregivers.</p>
                <ul>
                    <li><a href="../jobs/">Job Opportunities</a></li>
                    <!-- <li><a href="../jobs/pca-training-program.php">PCA Training Program</a></li> -->
                    <li><a href="../home/our-caregivers.php">Our Caregivers</a></li>
                    <li><a href="../src/downloads/Application_for_Employment.doc" target="new">Employment Application</a></li>                               
                </ul>
            </section>
            <div style="clear:both;"></div>
        </div> 
    </div>
    
    <div class="col-xs-12 col-sm-4 col-sm-pull-8">
        <div class="drk-blu-side">
            <aside class="callout">"We offer the most comprehensive, cost-effective service menu."</aside>
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
