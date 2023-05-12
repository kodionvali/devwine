
<div class="user-main-div">
	<form id="guest_registsry" method="" novalidate>
   		<div class="user-content-div">
			<h4 class="form-heading">Guest Registry</h4>
      		<div class="form-box row">
          		<div class="alert alert-success guest" style="display: none;"></div>
         		<input type="hidden" class="form-control" id="user_id" name="id" value="">
      			<div class="col-md-6">
         			<div class="form-group">
            			<label class="form-label">User Contact Ph# <span>*</span></label>
            			<input type="text" class="form-control vendorphone" id="contact_phone" name="contact_phone" value="">
						<span class="invalid-feedback phn-err" role="alert">
							<strong>Phone is required</strong>
						</span>
					</div>
				</div>
      			<div class="col-md-6">
         			<div class="form-group">
						<label class="form-label">Home Street Address<span>*</span></label>
						<input type="text" class="form-control" id="street_address" name="street_address" value="">
						<span class="invalid-feedback street-err" role="alert">
							<strong>Street Address is required</strong>
						</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Unit/Suite#</label>
						<input type="text" class="form-control" id="unit" name="unit" value="">
						<span class="invalid-feedback unit-err" role="alert">
							<strong>Unit/Suite# is required</strong>
						</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Home City/Town<span>*</span></label>
						<input type="text" class="form-control" id="city" name="city" value="">
						<span class="invalid-feedback city-err" role="alert">
							<strong>Home City/Town is required</strong>
						</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Home Province/State<span>*</span></label>
						<input type="text" class="form-control" id="province" name="province" value="">
						<span class="invalid-feedback province-err" role="alert">
							<strong>Province/State is required</strong>
						</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Home Postal Code/Zip<span>*</span></label>
						<input type="text" class="form-control" id="postal" name="postal" value="">
						<span class="invalid-feedback postal-err" role="alert">
							<strong>Postal Code/Zip is required</strong>
						</span>
					</div>
				</div>
       			<div class="logo-graphic-sec mt-3">
      				<div class="row">
						<div class="logo-content-flex col-lg-4 col-md-6 mb-3">
							<div class="logo-content-flex-inner">
								<div class="choose-your-file comon-width">
										<div class="form-group">
											<input type="file" id="file-upload" class="file-upload" name="front_image" multiple />
											<label class="form-check-label" for="exampleCheck1">Upload Drivers License - Front*<i class="fa fa-camera" aria-hidden="true"></i></label>
										</div>
									</div>
									<div class="no-file-choose comon-width">
										<div id="file-upload-filename" class="file-upload-filename logo_thumbnail">
											<img src="" width="100%">
										</div>
									</div>
								</div>
							</div>
							<div class="logo-content-flex col-lg-4 col-md-6 mb-3">
								<div class="logo-content-flex-inner">
									<div class="choose-your-file comon-width">
										<div class="form-group">
											<input type="file" id="file-upload" class="file-upload" name="back_image" multiple required />
											<label class="form-check-label" for="exampleCheck1">Upload Drivers License - Back*<i class="fa fa-camera" aria-hidden="true"></i></label>
										</div>
									</div>
									<div class="no-file-choose comon-width">
										<div id="file-upload-filename" class="file-upload-filename logo_thumbnail">
											<img src="" width="100%">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group mb-2">
									<label class="form-label">Gender</label>
									<input type="text" class="form-control" id="age" name="age" value="" >
								</div>
							</div>
						</div>
						<div class="row row pe-0">
							<div class="col-lg-6">
								<div class="form-group mb-2">
									<label class="form-label">Date of Birth</label>
									<input type="text" class="form-control" id="dateofbirth" name="dateofbirth" value="" >
		 						</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group mb-2">
									<label class="form-label">Age</label>
									<input type="text" class="form-control" id="age" name="age" value="" >
								</div>
							</div>
							<div class="col-lg-12 pe-0"> 
								<div class="form-group">
									<label class="form-label">Medical/phyical Concerns</label>
									<textarea name="physical" class="form-control"></textarea>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Emergency Contact Name<span>*</span></label>
								<input type="text" class="form-control" id="emergency_contact_name" name="emergency_contact_name" value="" >
								<span class="invalid-feedback emergency-name-err" role="alert">
									<strong>Emergency Contact Name is required</strong>
								</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Emergency Contact Relation<span>*</span></label>
								<input type="text" class="form-control" id="emergency_contact_relation" name="emergency_contact_relation" value="">
								<span class="invalid-feedback emergency-relation-err" role="alert">
									<strong>Emergency Contact Relation is required</strong>
								</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Emergency Contact Ph<span>*</span></label>
								<input type="text" class="form-control vendorphone" id="emergency_contact_phone" name="emergency_contact_phone" value="">
								<span class="invalid-feedback emergency-contact-err" role="alert">
									<strong>Emergency Contact Ph is required</strong>
								</span>	
							</div>
						</div>
						<div class="col-lg-12">
							<div class="btn-box-bx text-center">
								<button type="submit" id="" class="btn wine-btn">Update</button>
							</div>
						</div>
      				</div>
      			</div>
			</div>
		</div>
	</form>


