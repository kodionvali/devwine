<title>Wine Country Weekends - User Dashboard</title>
@include('includes.header')
    <section class="dashbord-sec testing">
        <div class="container">
            <div class="col-sm-12">
                <div class="bar-btn">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <div class="row system_admin">
                    <div class="col-sm-3 tabs-data">
                        <div class="side-bar-logo">
                            <a href="/">
                                <img height="90" src="https://devsite.winecountryweekends.ca/images/wine-count.png" class="custom-logo" alt="Wine Country Weekends">
                            </a>
                        </div>
                        <button class="sidebar-toggle" style="display: none;">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="bar-btn">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                        <div class="align-items-start userNav" style="background-color: #fff;">
                            <ul class="nav nav-pills">
                                <li class="active-class">
                                    <a class="nav-data{{isset($tab) == 'user_dashboard' ? 'active' : ''}}" href="javascript:;" data-tab="userDashboard">User Dashboard</a>
                                </li>
                                <li class="">
                                    <a class="nav-data" href="javascript:;" data-tab="userProfile">My Profile</a>
                                </li>
                                <li class="">
                                    <a class="nav-data" href="javascript:;" data-tab="accountCredentials_edit">Account Credentials [Edit]</a>
                                </li>
                                <li class="">
                                    <a class="nav-data" href="javascript:;" data-tab="guestRegistry">Guest Registry (Edit)</a>
                                </li>
                                <li class="">
                                    <a class="nav-data" href="javascript:;" data-tab="localDelivery">Local Delievery (Edit) </a>
                                </li>
                                <li class="">
                                    <a class="nav-data" href="javascript:;" data-tab="supportLocal">Support Local</a>
                                </li>
                                <li class="">
                                    <a class="nav-data" href="javascript:;" data-tab="submitReview">Submit Review</a>
                                </li>
                                <li class="">
                                    <a class="nav-data" href="javascript:;" data-tab="myTransaction">My Transactions</a>
                                </li>
                                <li class="">
                                    <a class="nav-data" href="javascript:;" data-tab="faq">FAQ</a>
                                </li>
                                <li class="">
                                    <a class="dropdown-item" href="http://devwine.winecountryweekends.ca/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-9" id="tab_content"></div>
                </div>
            </div>
        </div>
    </section>
@include('includes.footer')