<form name="application-form" method="post" class="form-horizontal" id="application-form" accept-charset="utf-8" action="/src/scripts/process-form.php">
    <fieldset>
        <legend>Personal Information</legend>
        <input name="formname" type="hidden" value="application-form">
        <input name="required-subject" type="hidden" value="Employment Job Application">

        <div class="form-group">
            <label for="fullname" class="col-sm-2 control-label">Full Name</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="required-your-name" id="fullname" required placeholder="First Last" autocomplete="name">
            </div>
            <label for="address1" class="col-xs-2 control-label">Address</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="address" id="address1" required placeholder="123 Any Street" autocomplete="street-address">
            </div>
        </div>

        <div class="form-group">
            <label for="mobile" class="col-xs-2 control-label">Cell Phone</label>
            <div class="col-xs-4">
                <input type="tel" class="form-control" name="phone" id="mobile" required placeholder="+1-716-555-5555" autocomplete="tel">
            </div>

            <label for="address2" class="col-xs-2 control-label sr-only">City</label>
            <div class="col-xs-4">
                <input type="text" class="form-control inline" name="city" id="address2" required placeholder="City" autocomplete="address-level2">
            </div>
        </div>

        <div class="form-group">
            <label for="frmEmailA" class="col-xs-2 control-label">Email</label>
            <div class="col-xs-4">
                <input type="email" class="form-control" name="required-your-email" id="frmEmailA" placeholder="name@example.com" required autocomplete="email">
            </div>
            <label for="address2" class="col-xs-2 control-label sr-only">State</label>
            <div class="col-xs-4">
                <input type="text" class="form-control inline" name="state" id="address3" required placeholder="State" autocomplete="address-level1">
            </div>
        </div>

        <div class="form-group">                                
            <label for="position" class="col-xs-2 control-label">Desired Position</label>
            <div class="col-xs-4">
                <input type="text" class="form-control inline" name="Position" id="position" placeholder="Position Title" >
            </div>

            <label for="address2" class="col-xs-2 control-label sr-only">Zip</label>
            <div class="col-xs-4">
                <input type="text" class="form-control inline" name="zip" id="address4" required placeholder="Zip" autocomplete="postal-code">
            </div>
        </div>

        
    </fieldset> 
    <fieldset>
        <legend>Education</legend>
        <div class="form-group">
            <label for="school1" class="col-xs-2 control-label">School</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="required-education1" id="school1" required placeholder="High School Name" autocomplete="">
            </div>
            <label for="schoolloc1" class="col-xs-2 control-label sr-only" style="display:none;">Location</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="required-education-loc1" id="schoolloc1" required placeholder="Location" autocomplete="">
            </div>
            <div class="col-xs-2">
                <div class="checkbox">
                    <input type="checkbox" name="confirm-completed" id="hs-diploma">
                    <label for="hs-diploma">Graduated</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="school2" class="col-xs-2 control-label">School</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="education2" id="school2" placeholder="College/University Name" autocomplete="">
            </div>
            <label for="schoolloc2" class="col-xs-2 control-label sr-only" style="display:none;">Location</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="education-loc2" id="schoolloc2" placeholder="Location" autocomplete="">
            </div>
            <div class="col-xs-2">
                <div class="checkbox">
                    <input type="checkbox" name="confirm-completed" id="college-degree">
                    <label for="college-degree">Graduated</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="school3" class="col-xs-2 control-label">School</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="education3" id="school3" placeholder="Additional Training Name" autocomplete="">
            </div>
            <label for="schoolloc3" class="col-xs-2 control-label sr-only" style="display:none;">Location</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="education-loc3" id="schoolloc3" placeholder="Location" autocomplete="">
            </div>
            <div class="col-xs-2">
                <div class="checkbox">
                    <input type="checkbox" name="confirm-completed" id="training-completed">
                    <label for="training-completed">Graduated</label>
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>Employment History</legend>
        <div class="form-group">
            <label for="employer1" class="col-xs-2 control-label">Employer</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="employer-1" id="employer1" placeholder="Employer Name" autocomplete="">
            </div>
            <label for="employloc1" class="col-xs-2 control-label sr-only" style="display:none;">Location</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="employer-1-loc" id="employloc1" placeholder="Location" autocomplete="">
            </div>
            <label for="employer1tel" class="col-xs-1 control-label">Telephone</label>
            <div class="col-xs-3">
                <input type="tel" class="form-control" name="employer-1-telephone" id="employer1telephone" placeholder="1234567890">
            </div>
        </div>
        <div class="form-group">
            <label for="employer1startdate" class="col-xs-2 control-label">Start Date</label>
            <div class="col-xs-2">
                <input type="date" class="form-control" name="employer-1-start-date" id="employer1startdate" placeholder="MM/DD/YYYY">
            </div>
            <label for="employer1enddate" class="col-xs-2 control-label sr-only" style="display:none;">End Date</label>
            <div class="col-xs-2">
                <input type="date" class="form-control" name="employer-1-end-date" id="employer1enddate" placeholder="MM/DD/YYYY">
            </div>
            <label for="employer1salary" class="col-xs-2 control-label sr-only" style="display:none;">Salary</label>
            <div class="col-xs-2">
                <input type="text" class="form-control" name="employer-1-salary" id="employer1salary" placeholder="Salary/Hourly Rate">
            </div>
            <label for="employer1title" class="col-xs-1 control-label">Job Title</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="employer-1-title" id="employer1title" placeholder="Job Title" autocomplete="">
            </div>
        </div>
    </fieldset>
    <hr>
    <fieldset>
        <legend class="sr-only">Employment History 2</legend>
        <div class="form-group">
            <label for="employer2" class="col-xs-2 control-label">Employer</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="employer-2" id="employer2" placeholder="Employer Name" autocomplete="">
            </div>
            <label for="employloc1" class="col-xs-2 control-label sr-only" style="display:none;">Location</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="employer-2-loc" id="employloc1" placeholder="Location" autocomplete="">
            </div>
            <label for="employer2tel" class="col-xs-1 control-label">Telephone</label>
            <div class="col-xs-3">
                <input type="tel" class="form-control" name="employer-2-telephone" id="employer2telephone" placeholder="1234567890">
            </div>
        </div>
        <div class="form-group">
            <label for="employer2startdate" class="col-xs-2 control-label">Start Date</label>
            <div class="col-xs-2">
                <input type="date" class="form-control" name="employer-2-start-date" id="employer2startdate" placeholder="MM/DD/YYYY">
            </div>
            <label for="employer2enddate" class="col-xs-2 control-label sr-only" style="display:none;">End Date</label>
            <div class="col-xs-2">
                <input type="date" class="form-control" name="employer-2-end-date" id="employer2enddate" placeholder="MM/DD/YYYY">
            </div>
            <label for="employer2salary" class="col-xs-2 control-label sr-only" style="display:none;">Salary</label>
            <div class="col-xs-2">
                <input type="text" class="form-control" name="employer-2-salary" id="employer2salary" placeholder="Salary/Hourly Rate">
            </div>
            <label for="employer2title" class="col-xs-1 control-label">Job Title</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="employer-2-title" id="employer2title" placeholder="Job Title" autocomplete="">
            </div>
        </div>
    </fieldset>
    <hr>
    <fieldset>
        <legend class="sr-only">Employment History 3</legend>
        <div class="form-group">
            <label for="employer3" class="col-xs-2 control-label">Employer</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="employer-3" id="employer3" placeholder="Employer Name" autocomplete="">
            </div>
            <label for="employloc1" class="col-xs-2 control-label sr-only" style="display:none;">Location</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="employer-3-loc" id="employloc1" placeholder="Location" autocomplete="">
            </div>
            <label for="employer3tel" class="col-xs-1 control-label">Telephone</label>
            <div class="col-xs-3">
                <input type="tel" class="form-control" name="employer-3-telephone" id="employer3telephone" placeholder="1234567890">
            </div>
        </div>
        <div class="form-group">
            <label for="employer3startdate" class="col-xs-2 control-label">Start Date</label>
            <div class="col-xs-2">
                <input type="date" class="form-control" name="employer-3-start-date" id="employer3startdate" placeholder="MM/DD/YYYY">
            </div>
            <label for="employer3enddate" class="col-xs-2 control-label sr-only" style="display:none;">End Date</label>
            <div class="col-xs-2">
                <input type="date" class="form-control" name="employer-3-end-date" id="employer3enddate" placeholder="MM/DD/YYYY">
            </div>
            <label for="employer3salary" class="col-xs-2 control-label sr-only" style="display:none;">Salary</label>
            <div class="col-xs-2">
                <input type="text" class="form-control" name="employer-3-salary" id="employer3salary" placeholder="Salary/Hourly Rate">
            </div>
            <label for="employer3title" class="col-xs-1 control-label">Job Title</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="employer-3-title" id="employer3title" placeholder="Job Title" autocomplete="">
            </div>
        </div>
    </fieldset>

    <fieldset>
        <legend>Confirm and Submit</legend>
        
        <div class="form-group">

            <label for="confirminitials" class="col-xs-2 control-label">Applicant's Initials</label>
            <div class="col-xs-2">
                <input type="text" class="form-control" name="confirm initials" required id="confirminitials">
            </div>
            <label for="todaysdate" class="col-xs-2 control-label">Today's Date</label>
            <div class="col-xs-2">
                <input type="date" class="form-control" name="submit-date" id="todaysdate"  autocomplete="" required>
            </div>
            <div class="col-xs-4">
                <button type="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
        </div>
    </fieldset>
</form> 
