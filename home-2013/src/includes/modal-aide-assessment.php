<!-- Modal -->
<div class="modal fade" id="assessmentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form name="aide-assessment" class="aide-assessment" action="../src/scripts/process-form.php" method="post" accept-charset="utf-8">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">I Need an Aide for My Loved One</h4>
      </div>
      <div class="modal-body">

        <section>
        <p>By completing the brief form below, we will contact you to schedule a No Cost Assessment.</p>
            <input name="required-subject" type="hidden" value="Aide Assessment Form Submitted">
            <fieldset class="textInput">
                <label for="fullname">Contact Name*</label>
                <input name="required-your-name" id="fullname" type="text" placeholder="Contact Name" required  />
            
                <label for="email">Email*</label>
                <input name="required-your-email" id="email" type="email" placeholder="Email" required />
            
                <label for="tel">Telephone</label>
                <input name="tel" id="tel" type="tel" placeholder="555-123-4567" />
            </fieldset>
            
            <fieldset class="chkBoxes">
            <label for="care-for">I am interested in care for:</label>
              <input name="chkSelf" id="chkSelf" type="checkbox" value="Self" />
                <label for="chkSelf">Self</label>
              <input name="chkMother" id="chkMother" type="checkbox" value="Mother" />
                <label for="chkMother">Mother</label>	
              <input name="chkFather" id="chkFather" type="checkbox" value="Father" />
                <label for="chkFather">Father</label>	
              <input name="chkGrandmother" id="chkGrandmother" type="checkbox" value="Grandmother" />
                <label for="chkGrandmother">Grandmother</label>	
              <input name="chkGrandfather" id="chkGrandfather" type="checkbox" value="Grandfather" />
                <label for="chkGrandfather">Grandfather</label>	
              <input name="chkOtherRelative" id="chkOtherRelative" type="checkbox" value="OtherRelative" />
                <label for="chkOtherRelative">Other Relative</label>	
              <input name="chkNeighbor" id="chkNeighbor" type="checkbox" value="Neighbor" />
                <label for="chkNeighbor">Neighbor</label>
              <input name="chkFriend" id="chkFriend" type="checkbox" value="Friend" />
                <label for="chkFriend">Friend</label>    	
            </fieldset>
            
            <fieldset class="chkBoxes">  
            <label for="care-for">Please select type of help needed.</label>
              <input name="chkBathing" id="chkBathing" type="checkbox" value="Bathing" />
                <label for="chkBathing">Bathing</label>
              <input name="chkTransfering" id="chkTransfering" type="checkbox" value="Transfering" />
                <label for="chkTransfering">Transferring</label>
              <input name="chkToileting" id="chkToileting" type="checkbox" value="Toileting" />
                <label for="chkToileting">Toileting</label>
              <input name="chkMealPreparation" id="chkMealPreparation" type="checkbox" value="MealPreparation" />
                <label for="chkMealPreparation">Meal Preparation</label>
              <input name="chkLaundry" id="chkLaundry" type="checkbox" value="LaundryLinen" />
                <label for="chkLaundry">Laundry/Linen</label>
              <input name="chkHousekeeping" id="chkHousekeeping" type="checkbox" value="Housekeeping" />
                <label for="chkHousekeeping">Light Housekeeping</label>
              <input name="chkMedications" id="chkMedications" type="checkbox" value="Medications" />
                <label for="chkMedications">Medications</label>
              <input name="chkMemoryIssues" id="chkMemoryIssues" type="checkbox" value="MemoryIssues" />
                <label for="chkMemoryIssues">Memory Issues</label>
            </fieldset> 


              <label for="bestTime">Best Time to Contact</label>
              <input name="bestTime" id="bestTime" type="time" placeholder="6:00 PM" />
              

              <label for="budget-Monthly">Monthly Budget</label>
              <input name="budget-Monthly" id="budget-Monthly" type="number" placeholder="$USD per month" />
            <fieldset class="chkBoxes">  
            <label for="care-for">Funding</label>
              <input name="chkLong-term-care" id="chkLong-term-care" type="checkbox" value="chkLong-term-care-insurance-policy" />
                <label for="chkLong-term-care">Long Term Care Insurance Policy</label>
              <input name="chkVA-benefits" id="chkVA-benefits" type="checkbox" value="VA Benefits" />
                <label for="chkVA-benefits">VA Benefits</label>
              <input name="chkSelf-funded" id="chkSelf-funded" type="checkbox" value="Self Funded" />
                <label for="chkSelf-funded">Self</label>
            </fieldset>               
        <p class="tiny-text pull-right">*required fields</p>		
            
        </section>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
