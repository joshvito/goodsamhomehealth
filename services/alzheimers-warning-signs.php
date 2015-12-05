<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

<meta name="Keywords" content="Amherst, Clarence, East Amherst, Depew, Kenmore, Lancaster, Tonawanda and Williamsville areas, Alzheimers Dementia Care, wny, lhcsa, New York, warning signs" />
<meta name="Description" content="Learn the warning signs of alzheimer's disease. Good Samaritan can help if you think your family member needs an aide to assist with the activities of their daily life." />

<title>Alzheimer's Warning Signs | Good Samaritan Home Health Agency</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<?php @include('../src/includes/css.php'); ?>

<style type="text/css">
/***  page specific styles ****/
.main-image{
	background:transparent url(../src/img/slide3-bg.jpg) 95% -1% no-repeat;	
}
</style>

</head>
<body>

<div class="container">
<?php @include('../src/includes/nav.php'); ?>
<div class="main-container">    
<section class="row ">
	<div class="col-xs-12 col-sm-8 col-sm-push-4">
    	<div class="main-image"><img alt="hero image elder care" src="../src/img/slide3-bg.png" style="display:none;"/></div>
        <div class="body-content">
            <h1>Learn the 10 Warning Signs of Alzheimer's Disease</h1>
            <!--<p>Good Samaritan understands that approximately 5.1 million Americans suffer from Alzheimer's disease, a condition that affects the parts of the brain that control thought, memory and language.   Caring for a Senior with Alzheimer's disease can be a challenge in many ways. Simple everyday tasks and activities become progressively more difficult.</p>
            -->
            <div id="accordion">
                <h3 class="med-blu">1. Memory loss that disrupts daily life</h3>
                <div><p>One of the most common signs of Alzheimer's is forgetting <em>recently</em> learned information.  Others include forgetting important dates or events over and over.  Increasing reliance on memory aides like Reminder Notes or relying on family members for things they used to handle on their own.</p></div>
                <h3 class="med-blu">2. Challenges in Planning or Solving Problems</h3>
                <div><p>Some people may experience changes in their ability to develop and follow a plan or work with numbers.  They may have trouble following a familiar recipe or keeping track of monthly bills.  They may have difficulty concentrating and take much longer to do things they did before.</p></div>
                <h3 class="med-blu">3. Difficulty Completing Familiar Tasks at Home, at Work or at Leisure</h3>
                <div><p>People with Alzheimer's often find it hard to complete daily tasks.  Sometimes people have trouble driving to a familiar location, managing a budget at work or remembering the rules of a favorite game.</p></div>
                <h3 class="med-blu">4. Confusion with Time or Place</h3>
                <div><p>People with Alzheimer's can lose track of dates, seasons and the passage of time.  They may have trouble understanding something if it is not happening immediately.  Sometimes they may forget where they are or how they got there.</p></div>
                <h3 class="med-blu">5. Trouble Understanding Visual Images and Spatial Relationships</h3>
                <div><p>For some, having vision problems is a sign of Alzheimer's.  They may have difficulty reading, judging distance and determining color or contrast, which may cause problems with driving.</p></div>
                <h3 class="med-blu">6. New Problems with Words in Speaking or Writing</h3>
                <div><p>People with Alzheimer's may have trouble following or joining a conversation.  They may stop in the middle of a conversation and have no idea how to continue or they repeat themselves.  They may struggle with vocabulary, have problems finding the right word or call things by the wrong name.</p></div>
                <h3 class="med-blu">7. Misplacing Things and Losing the ability to Retrace Steps</h3>
                <div><p>A person with Alzheimer's disease may put things in unusual places.  They may lose things and be unable to go back over their steps to find them again.  Sometimes, they may accuse others of stealing.  This may occur more frequently over time.</p></div>
                <h3 class="med-blu">8. Decreased or Poor Judgment</h3>
                <div><p>People with Alzheimer's may experience changes in judgment or decision making.  For example, they may use poor judgment when dealing with money, giving large amounts to telemarketers.  They may pay less attention to grooming or keeping themselves clean.</p></div>
                <h3 class="med-blu">9. Withdrawal from Work or Social Activities</h3>
                <div><p>A person with Alzheimer's may start to remove themselves from hobbies, social activities, work projects or sports.  They may have trouble keeping up with a favorite sports team or remembering how to complete a favorite hobby.  They may also avoid being social because of the changes they have experienced.</p></div>
                <h3 class="med-blu">10. Changes in Mood and Personality</h3>
                <div><p>The mood and personalities of people with Alzheimer's can change.  They can become confused, suspicious, depressed, fearful or anxious.  They may be easily upset at home, at work, with friends or in places where they are out of their comfort zone.</p></div>
            </div><!-- end accordian -->
            
            <h4 class="med-blu">If these one of these signs describes to your loved one, give us a call, <span itemprop="telephone"><a href="tel:+17167838124">(716)783-8124</a></span>, we can help.</h4>

        </div> 
    </div>
    
	<div class="col-xs-12 col-sm-4 col-sm-pull-8">
    	<div class="drk-blu-side">
        	<aside class="callout">"One of the most common signs of Alzheimer's is forgetting <em>recently</em> learned information."</aside>
        </div>
    	<?php @include('../src/includes/sidebar_contact.php'); ?>
        <div class="lt-blu-side" style="background-color:transparent;">
            <h3><a href="alzheimers-dementia.php">Get More Information About Our Alzheimers &amp; Dementia Care</a></h3>
            <p></p>
        </div>
    </div>
</section>
</div>
    
<?php @include('../src/includes/footer.php'); ?>    

</div><!-- end container-->      
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="../src/js/min/production.min.js"></script>
<script type="text/javascript">
/* trigger when page is ready */
$(document).ready(function (){

$('.squishy.body-copy').squishy({maxWidth: 340, minSize: 12, maxSize:14});
$('#page-title').replaceWith("<span id='page-title'>" + $('title').text().split('|')[0] + "</span>");
$('#accordion').accordion({ heightStyle: "content" });//set up accordian //requires jquery ui
});<!-- end doc ready -->

</script>
</body>
</html>