<form name="pca-interest-form" method="post" class="form-horizontal" id="pca-interest-form" accept-charset="utf-8" action="/src/scripts/process-form.php">

    <input name="formname" type="hidden" value="pca-interest-form">
    <input name="required-subject" type="hidden" value="Contact Me with PCA Training Information">

    <div class="form-group">
        <label for="fullname" class="col-sm-3 control-label">Full Name</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="required-your-name" id="fullname" required placeholder="First Last" autocomplete="name">
        </div>
    </div>

    <div class="form-group">
        <label for="address1" class="col-sm-3 control-label">Address</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="address" id="address1" required placeholder="123 Any Street" autocomplete="street-address">
        </div>
    </div>
    <div class="form-group">
        <label for="address2" class="col-sm-3 control-label sr-only">City State Zip</label>
        <div class="col-sm-9">
            <input type="text" class="form-control inline" name="city" id="address2" required placeholder="City" autocomplete="address-level2">
            <input type="text" class="form-control inline" name="state" id="address3" required placeholder="State" autocomplete="address-level1">
            <input type="text" class="form-control inline" name="zip" id="address4" required placeholder="Zip" autocomplete="postal-code">
        </div>
    </div>

    <div class="form-group">
        <label for="mobile" class="col-sm-3 control-label">Cell Phone</label>
        <div class="col-sm-9">
            <input type="tel" class="form-control" name="phone" id="mobile" required placeholder="+1-716-555-5555" autocomplete="tel">
        </div>
    </div>

    <div class="form-group">
        <label for="frmEmailA" class="col-sm-3 control-label">Email</label>
        <div class="col-sm-9">
            <input type="email" class="form-control" name="required-your-email" id="frmEmailA" placeholder="name@example.com" required autocomplete="email">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-9 col-sm-push-3">
            <div class="checkbox">
                <input type="checkbox" name="confirm-contact" id="more-info">
                <label for="more-info">Yes, Contact me with more info.</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
        </div>
    </div>
</form>