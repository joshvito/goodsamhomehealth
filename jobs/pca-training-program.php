<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

<meta name="Keywords" content="home health care provider western new york affordable in-home assistance senior care good Samaritan buffalo elder respite care" />
<meta name="Description" content="Become a highly respected healthcare professional today. Enroll in the FREE Good Samaritan Personal Care Aide Training Program." />

<title>PCA Training Program | Good Samaritan Home Health Agency</title>

<?php @include('../src/includes/css.php'); ?>

<style type="text/css">
/***  page specific styles ****/
.main-image{
	background:transparent url(../src/img/int-job-opp-bg.jpg) 96% -2% no-repeat;	
}


</style>

</head>
<body>

<div class="container">
<?php @include('../src/includes/nav.php'); ?>
<div class="main-container">    
<section class="row">
	<div class="col-xs-12">
    	<div class="main-image"></div>
        <div class="body-content no-sidebar">
            <h1>Personal Care Aide Training Program</h1>
            <h3 class="med-blu">Begin an Exciting healthcare career: Register below.</h3>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <p>Become a highly respected healthcare professional today. Enroll in the <span class="bold">FREE</span> Good Samaritan Personal Care Aide Training Program.
                    <br><br>Classes are forming continuously. New classes start every 4-6 weeks.
                    <br><br>Earn your PCA Certificate in <span class="bold">8 short days!</span> Classes are limited to 10 students, so enroll today.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <?php @include('../src/includes/pca-interest-form.php'); ?>
                </div>        
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
    
    // $("form[name='pca-interest-form']").on("submit", function(e){
    //     e.preventDefault();
    //     formSubmit.go("form[name='pca-interest-form']");
    //     return false;
    // });
});

var formSubmit = (function (){
    var formId;
    function go(FormId){
        formId = $(FormId);
        var url = formId.attr("action"),
            formMethod = formId.attr("method");
            console.log(formId.serialize());
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
