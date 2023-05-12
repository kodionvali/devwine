<div class="user-main-div">
    <form method="" id="account_credentials" novalidate>
        <div class="user-content-div">
            <h2 class="main-heading-H1">Account Credentials</h2>
            <div class="form-box row">
                <div class="col-md-12">
                    <h4 class="form-heading">Account Credentials</h4>
                </div>
                <input type="hidden" class="form-control" id="user_id" name="id" value="">
                <div class="alert alert-success account_cred" style="display:none;"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">First name<span>*</span></label>
                            <input type="text" class="form-control" id="name" name="first_name" value="" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Last name <span>*</span></label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Display name <span>*</span></label>
                            <input type="text" class="form-control" id="display_name" name="display_name" value="" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Email address<span>*</span></label>
                            <input type="mail" class="form-control" id="email" name="email" value="" required="">
                        </div>
                    </div>
        
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Upload Profile Image</label>
                            <div class="logo-graphic-sec">
                                <div class="row">
                                    <div class="logo-content-flex col-lg-4 col-md-6 mb-3">
                                        <div class="logo-content-flex-inner">
                                            <div class="no-file-choose comon-width" onclick="openCropPopup('user_profile_image',">
                                                <div id="file-upload-filename" class="file-upload-filename user_profile_image">
                                                    <img src="https://devsite.winecountryweekends.ca/images/white_bg.jpg" width="100%">
                                                </div>
                                                <div class="choose-your-file comon-width user_profile_image">
                                                    <div class="form-group">
                                                        <input type="" id="file-upload" class="file-upload" name="user_profile_image" multiple required />
                                                        <label class="form-check-label" for="exampleCheck1">Profile Image<i class="fa fa-camera" aria-hidden="true"></i></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="password_content">
                            <p class="pass" style="font-weight: bold;">Password[Edit]</p>
                        </div>
                        <div class="change_passw" style="display:none"></div>
                    </div>
                </div>
                <div class="role-section">
                    <div class="container">
                        <div class="row">
                            <h2><strong>SYSTEM ADMIN ONLY</strong></h2><br>
                            <label class="form-label">User Roles</label>
                            <div class="form-check col-lg-6">
                                <input class="form-check-input" type="radio" value="5" id="role3" name="role">
                                <label class="form-check-label" for="flexCheckChecked">Member</label>
                            </div>
                            <div class="form-check col-lg-6">
                                <input class="form-check-input" type="radio" value="3" id="role1" name="role">
                                <label class="form-check-label" for="flexCheckChecked">Marketing Team</label>
                            </div>
                            <div class="form-check col-lg-6">
                                <input class="form-check-input" type="radio" value="4" id="role2" name="role">
                                <label class="form-check-label" for="flexCheckChecked"> Travel Services</label>
                            </div>
                            <div class="form-check col-lg-6">
                                <input class="form-check-input" type="radio" value="2" id="role" name="role">
                                <label class="form-check-label" for="flexCheckDefault">System Admin</label>
                            </div>
                            <div class="form-check col-lg-6">
                                <input class="form-check-input" type="radio" value="6" id="role4" name="role">
                                <label class="form-check-label" for="flexCheckChecked">Suspend / Delete</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-box-bx text-center">
                    <button type="submit" id="update_accomodation_data" class="btn wine-btn">Update</button>
                </div>
            </div>
    </form>
</div>
<!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header d-display">         
                    <h4 class="form-heading">Change Password</h4>
                    <button type="button" class="btn btn-default close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div> 
            </div>
        </div>
    </div>


