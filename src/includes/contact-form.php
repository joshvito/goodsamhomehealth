<form name="contact-form" class="aide-assessment" action="../src/scripts/process-form.php" method="post" accept-charset="utf-8">
    <fieldset class="textInput">
        <label for="fullname">Contact Name</label>
        <input name="required-your-name" id="fullname" type="text" placeholder="Contact Name" required  />
        <br>
        <label for="email">Your Email</label>
        <input name="required-your-email" id="email" type="email" placeholder="Email" required />
        <br>
        <input name="required-subject" type="hidden" value="GSHHA.com Contact Form Message">
        <input name="formname" type="hidden" value="contact-form">
        <textarea name="required-message" rows="5" placeholder="Enter Your Message"></textarea> <br>
    </filedset>
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>