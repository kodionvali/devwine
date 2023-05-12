<div class="user-main-div">
   <form id="local_delievery" method="" novalidate="">
      <div class="user-content-div">
         <h4 class="form-heading">Local Delievery</h4>
         <div class="form-box row">
            <div class="alert alert-success local_delievery_alert" style="display: none;"></div>
               <input type="hidden" class="form-control" id="user_id" name="id" value="">
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="form-label">Travel/Check-In Date (Arrival):<span>*</span></label>
                     <input type="date" class="form-control" id="check_in_date" name="check_in_date" value="" required="">
                  </div>
                  <span class="invalid-feedback checkin-err" role="alert">
                     <strong>Check-In date is required</strong>
                  </span>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="form-label">Travel/Check-Out Date (Departure): <span>*</span></label>
                     <input type="date" class="form-control" id="check_out_date" name="check_out_date" value="" required="">
                  </div>
                  <span class="invalid-feedback checkout-err" role="alert">
                     <strong>Check-Out date is required</strong>
                  </span>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="form-label">Local Accommodation (Optional)</label>
                     <input type="text" class="form-control" id="local_accomodation" name="local_accomodation" value="" required="">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="form-label">Accommodation Type (Optional)<span>*</span></label>
                     <input type="text" class="form-control" id="accomodation_type" name="accomodation_type" value="" required="">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="form-label">Hosts Name (Optional):<span>*</span></label>
                     <input type="text" class="form-control" id="hosts_name" name="hosts_name" value="" required="">
                  </div>			    
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="form-label">Contact Ph# (Optional)</label>
                     <input type="text" class="form-control vendorphone"  name="contact_phone" value="">
                  </div>
                  <span class="invalid-feedback phn-err" role="alert">
                     <strong>Phone is required</strong>
                  </span>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="form-label">Local Street Address:</label>
                     <input type="text" class="form-control" id="local_street_address" name="local_street_address" value="" required="">
                  </div>
                  <span class="invalid-feedback street-err" role="alert">
                     <strong>Street Address is required</strong>
                  </span>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="form-label">Unit/Suite#</label>
                     <input type="text" class="form-control" id="unit" name="unit" value="" required="">
                  </div>
                  <span class="invalid-feedback unit-err" role="alert">
                     <strong>Unit/Suite# is required</strong>
                  </span>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="form-label">City/Town:<span>*</span></label>
                     <input type="text" class="form-control" id="city" name="city" value="" required="">
                  </div>
                  <span class="invalid-feedback city-err" role="alert">
                     <strong>City/Town# is required</strong>
                  </span>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="form-label">Province/State:<span>*</span></label>
                     <input type="text" class="form-control" id="province" name="province" value="" required="">
                  </div>
                  <span class="invalid-feedback province-err" role="alert">
                     <strong>Province/State is required</strong>
                  </span>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="form-label">Postal Code/Zip:</label>
                     <input type="text" class="form-control" id="postal_code" name="postal_code" value="" required="">
                  </div>
                  <span class="invalid-feedback postal-err" role="alert">
                     <strong>Postal Code/Zip is required</strong>
                  </span>
               </div>
               <div class="col-lg-12">
                  <div class="btn-box-bx text-center">
                     <button type="submit" id="" class="btn wine-btn">Update</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </form>
</div>
