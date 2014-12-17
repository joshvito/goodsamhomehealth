<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

<meta name="Keywords" content="employment, resources, contact us, compassionate caregivers" />
<meta name="Description" content="Want to get in touch with Good Samaritan Home Health Agency? We offer the most comprehensive service menu." />

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
            <h3 class="med-blu">Complete the small form below to send us a message.</h3>
            <section name="contact form" class="col-xs-12 col-sm-6">
                <?php @include('../src/includes/contact-form.php'); ?>
            </section>    
            <section name="employment details" class="col-xs-12 col-sm-6">
                <h4>Employment Resources</h4>
                <p>Information on how to join our team of caring and compassionate caregivers.</p>
                <ul>
                    <li><a href="../jobs/">Job Opportunities</a></li>
                    <li><a href="../home/our-caregivers.php">Our Caregivers</a></li>
                    <li><a href="../src/downloads/GSHHA-app-extended.pdf" target="new">Employment Application</a></li>                               
                </ul>
            </section>    
            <div style="clear:both;"></div>
        </div> 
    </div>
    
    <div class="col-xs-12 col-sm-4 col-sm-pull-8">
        <div class="drk-blu-side">
            <p class="callout">"We offer the most comprehensive, cost-effective service menu."</p>
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


    /*$("form[name='contact-form']").on("submit", function(e){
        e.preventDefault();
        formSubmit.go("form[name='contact-form']");
        return false;
    });*/

});<!-- end doc ready -->

var formSubmit = (function (){
    var formId;
    function go(FormId){
        formId = $(FormId);
        var url = formId.attr("action"),
            formMethod = formId.attr("method");
        $.ajax({
            type: formMethod,
            data: formId.serialize(),
            url: url
        })
        .done(function(data, textStatus, jqXHR){
            console.log(jqXHR);
        })
        .fail(function(){
            console.log(error);
        });
    }    
    return {
        go:go
    };
}());

</script>
</body>
</html>




