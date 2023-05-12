<div class="user-main-div">
    <div class="user-content-div">
        @php
            $ErrorMessage = "Please complete the <strong>“Guest Registry”</strong> section of your personal profile to satisfy security protocols and thus qualify for direct booking and self-check in with participating vendors.";
        @endphp
        @if($ErrorMessage != "")
            <div class="alert alert-danger">
                {!! $ErrorMessage !!}
            </div>
            <br>
        @endif

        <h5 class="profile-ul-heading mt-3">
            <b>My Profile</b>
            <div class="exit-btn-box">
                <a href="javascript:void(0)" data-href="#" class="profileedit">Edit</a>
            </div>
        </h5>
        <div class="profile-custom">
            <p class="my-1">Upload a "Profile Image" and qualify to leave public reviews of vendor products and services.</p>
            <div class="row">
                <div class="col-lg-6 my-5">
                    <ul class="profile-ul d-flex h-100 flex-column">
                        <li><span class="link-color">Given Name(s)</span>: <b>test name</b></li>
                        <li><span class="link-color">Surname / Last Name</span>: <b>test name</b></li>
                        <li><span class="link-color">Email / Username</span>: <b>test name</b></li>
                        <br>
                        <li><span class="link-color role">User Role</span>: <b style="color: #57cbb2;">test name</b></li>
                    </ul>
                </div>
                <div class="col-lg-6 my-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="profile-pic-view d-flex align-items-center justify-content-center p-2 border">
                                <span>Profile<br> Image</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="verified-check d-flex flex-column justify-content-center text-center">
                                <img src="https://devsite.winecountryweekends.ca/images/check.png" class="custom-logo" alt="verified-check"><span class="text-dark">Submit Review<br>Verified</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <h5 class="profile-ul-heading mt-3">
                        <b>Guest Registry</b>
                        <div class="exit-btn-box">
                            <a href="javascript:void(0)" data-href="#guest_registry_tab" class="profileedit">Edit</a>
                        </div>
                    </h5>
                    <p>Completing the <b>Guest Registry</b> section of your profile will provide details to satisfy our
                        security protocols and allow you to book accommodations directly with our vendor partners saving
                        on third-party fees.
                    </p>
                    <div class="row mt-4 align-items-center">
                        <div class="col-lg-9">
                            <ul class="profile-ul mt-4">
                                <li><span class="link-color"> Home Street Address:</span>
                                    <b>{{ isset($data->street_address) ? $data->street_address : '' }}</b>
                                </li>
                                <li>
                                    <span class="link-color">Unit/Suite#:</span>
                                    <b>test name</b>
                                </li>
                                <li>
                                    <span class="link-color"> Home City/Town:</span>
                                    <b>test name</b>
                                </li>
                                <li>
                                    <span class="link-color"> Home Province/State:</span>
                                    <b>test name></b>
                                </li>
                                <li>
                                    <span class="link-color"> Home Postal Code/Zip:</span>
                                    <b>test name</b>
                                </li>
                                <button data-toggle="collapse" data-target="#demo" class="see-more-custom"><i>See Identification:</i></button>
                            </ul>
                        </div>
                        <div class="col-lg-3 text-right d-flex justify-content-end h-100 flex-column">
                            <div class="verified-check d-flex flex-column justify-content-center text-center"><img
                                    src="https://devsite.winecountryweekends.ca/images/check.png" class="custom-logo"
                                    alt="verified-check"><span class="text-dark">Direct Booking<br> Verified</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-view-content row m-0">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                            <div class="profile-pic-view d-flex align-items-center justify-content-center p-2 border">
                                <span>Image<br> Front</span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="profile-pic-view d-flex align-items-center justify-content-center p-2 border">
                                <span>Image<br>Back</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <ul class="profile-ul add-side-padding">
                        <li class="p-0 mt-3"><span class="link-color"><i>See Emergency Contact</i></span></li>
                        <li><span class="link-color">Emergency Contact Name:
                            </span><b>test name</b>
                        </li>
                        <li><span class="link-color">Emergency Contact Relation:
                            </span><b>test name</b>
                        </li>
                        <li><span class="link-color"> Emergency Contact Phone:
                            </span><b>test name</b>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <h5 class="profile-ul-heading mt-5">
                        <b>Travel Itinerary & Local Delivery</b>
                        <div class="exit-btn-box">
                            <a href="javascript:void(0)" data-href="#" class="profileedit">Edit</a>
                        </div>
                    </h5>
                    <p class="mb-3">The submission of travel details will help facilitate free next day local delivery
                        of online<b> Souvenir Shop</b> purchases.
                    </p>
                </div>

                <div class="col-lg-9">
                    <ul class="profile-ul">
                        <li><span class="link-color"> Travel/Check-In Date (Arrival):</span>
                            <b>test name</b>
                        </li>

                        <li><span class="link-color"> Travel/Check-Out Date (Departure):</span>
                            <b>test name</b>
                        </li>

                        <li><span class="link-color"> Local Accommodation (Optional): </span>
                            <b>test name</b>
                        </li>

                        <li>
                            <span class="link-color"> Accommodation Type (Optional):</span>
                            <b>test name</b>
                        </li>

                        <li>
                            <span class="link-color"> Hosts Name (Optional):</span>
                            <b>test name</b>
                        </li>

                        <li>
                            <span class="link-color"> Contact Ph# (Optional):</span>
                            <b>test name</b>
                        </li>

                        <li>
                            <span class="link-color"> Local Street Address: </span>
                            <b>test name</b>
                        </li>

                        <li>
                            <span class="link-color"> Unit/Suite#: </span>
                            <b>test name</b>
                        </li>

                        <li><span class="link-color"> City/Town: </span>
                            <b>test name</b>
                        </li>

                        <li>
                            <span class="link-color"> Province/State:</span>
                            <b>test name</b>
                        </li>

                        <li>
                            <span class="link-color">Postal Code/Zip:</span>
                            <b>test name</b>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <div class="verified-check d-flex flex-column justify-content-center text-center">
                        <img src="https://devsite.winecountryweekends.ca/images/check.png" class="custom-logo" alt="verified-check">
                        <span class="text-dark">Local Booking<br>Verified</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>