<title>Wine Country Weekends - Guest Rewards Page</title>

<head>

   <style>

      #password-error{

         color: red;

      }

   </style>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

</head>

@include('includes.header')

<section class="guest-rewards py-5 admin-dash">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <h2 class="big-heading-b" style="margin:0px">GUEST REWARDS</h2>
            @guest
               <div class="card text-black border-0" style="border-radius: 25px;">

                  <div class="card-body p-md-5 border-0">

                     <div class="row justify-content-center">

                        <div class="col-lg-7">

                           <div class="form_data">

                              <div class="gust-reward-div">

                              <h1>JOIN OUR GUEST REWARDS PROGRAM</h1>

                              <br>

                              <form method="POST" action="{{ route('register') }}" id="guest_reg">

                                 @csrf

                                 <div class="row mb-3">

                                    <!-- <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> -->

                                    <div class="col-lg-6">

                                       <input type="hidden" name="new_user" value="new_user">

                                       <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" placeholder="First Name" >

                                       <div class="alert alert-danger firstname msg" style="display:none;"></div>

                                       @error('name')

                                       <span class="invalid-feedback" role="alert">

                                       <strong>{{ $message }}</strong>

                                       </span>

                                       @enderror

                                    </div>

                                 <!-- <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> -->

                                    <div class="col-lg-6">

                                       <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}"  autocomplete="lastname" placeholder="Last Name" >

                                       <div class="alert alert-danger lastname msg" style="display:none;"></div>

                                       @error('lastname')

                                       <span class="invalid-feedback" role="alert">

                                       <strong>{{ $message }}</strong>

                                       </span>

                                       @enderror

                                    </div>

                                 </div>

                                 <div class="row mb-3">

                                    <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->

                                    <div class="col-lg-12">

                                       <input id="email" type="email" class="form-control matchedit @error('email') is-invalid @enderror" placeholder="Email Address" name="email" onchange="postinput()" value="{{ old('email') }}"  autocomplete="email">

                                       <div class="alert alert-danger email msg" style="display:none;"></div>

                                       @error('email')

                                       <span class="invalid-feedback" role="alert">

                                       <strong>{{ $message }}</strong>

                                       </span>

                                       @enderror

                                    </div>

                                 </div>

                                 <div class="row mb-3">

                                    <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->

                                    <div class="col-lg-6">

                                       <div class="eye">

                                       <input id="password" type="password" class="form-control @error('password') is-invalid @enderror gpassword" name="password" placeholder="Password"  autocomplete="new-password">

                                       <i class="far fa-eye fa-eye-slash togglePassword3" id="togglePassword1"></i>

                                       <div class="alert alert-danger password msg" style="display:none;"></div>

                                       @error('password')

                                       <span class="invalid-feedback" role="alert">

                                       <strong>{{ $message }}</strong>

                                       </span>

                                       @enderror

                                    </div>

                                 </div>

                                 

                                    <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label> -->

                                    <div class="col-lg-6">

                                       <div class="eye">

                                          <input id="password-confirm" type="password" class="form-control gcpassword" name="password_confirmation" placeholder="Confirm Password"  autocomplete="new-password">

                                          <i class="far fa-eye fa-eye-slash togglePassword2" id="togglePassword1"></i>

                                       </div>

                                    </div>

                                 </div>

                                 <div class="row mb-0">

                                    <div class="col-md-12">

                                       <!--  <button type="submit" class="btn btn-primary">

                                          {{ __('Register') }}

                                          </button> -->

                                    <!--  <ul class="btn-links-box justify-content-center">

                                          <li><a id="stepone" class="wine-btn">Continue</a>

                                       </ul> -->

                                       <div class="btn-box-bx btn-links-box text-right mt-3 text-center">

                                          <button type ="button" id="stepone" class=" rounded-pill wine-btn">Continue</button>

                                       </div>

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>
            @endauth

         </div>
      </div>
   </div>

   <div class="container gusest-c">
      <div class="row">
         <div class="col-lg-12">
            <div class="checkboxes-section" style="margin-top: 60px;margin-bottom: 100px;">

               <p class="mb-3">You won’t be able to experience all that wine country has to offer in a single weekend or even over the course of an entire week, so join our rewards program and indulge yourself whenever time permits.  Registered users may develop their own travel itineraries with our travel services platform and are also free to participate in affiliate programs, contests, giveaways and promotions (i.e.<b> Support Local</b>). </p>

               <p>Some benefits may not be valid in conjunction with other offers.</p>

               <h2 class="small-heading-s">Current Benefits:</h2>

               <ul>

                  <li>Book today and save.  No third-party booking fees are levied on bookings processed via this platform.</li>

                  <li>Get two (2) complimentary excursion activities when booking a minimum of six (6) nights’accommodation with a participating vendor.  Subject to availability.  Not all excursions are applicable.</li>

                  <li>One-time local (Niagara region only) pick-up & drop-off Jeep car service for members with a current accommodation booking at a participating vendor.  Subject to availability.  Four [4] guest maximum.</li>

                  <li>Registrants will also be permitted to join exclusive guest lists for special events and functions.</li>

               </ul>

            </div>

         </div>

      </div>

   </div>

     

</section>

<input type="hidden" name="back_button" id="back_button_val" value="0">

<section class="steptwo py-5" style="display: none;">

   <div class="container">

      <div class="row">

         <div class="col-lg-12">

            

            <div class="user-detail-box">

               <h2 class="big-heading-b text-center mb-5">USER REGISTRATION</h2>

               <div class="row">

                  <div class="col-lg-10 m-auto">

                     <div class="form_data p-4 text-left mt-4">


                        <p class="heading-p text-center mb-4"><b>Please read the following and complete the accompanying skill testing question to qualify for prizes and periodic giveaways.</b></p>

                        <p>The wine country rewards programs and affiliate promotions are administered by the Wine Country Weekends marketing team (hereafter: The WCW Team).  Participants must be 19 years of age or older and must not reside inthe province of Quebec.</p>

                        <p>Initiating a registered user (i.e. member) account will enable participants to access a variety of online utilities, programs and help facilitate direct bookings with vendor partners. Personally identifying information collected will be used to enhance the online and in-person experience of registered users.</p>

                        <p>Registered participants agree to the use of their likeness (i.e. still or video images) in various advertising and promotional content. Participants may also receive periodic email notifications and are free to opt out of receiving said notifications at any time</p>

                        <p>The WCW Team reserves the right to cancel or suspend any program or contest, modify the rules, particularly if there is some factor that interferes with the proper administration of the contest. Additionally, The WCW Team may substitute all or part of a prize, including for cash equal to the stated value of the prize in the rules, if all or part of the prize becomes unavailable for any reason.</p>

                        <input type="checkbox" class="form-check-input" id="agreeterms" name="terms">

                         <label class="form-check-label" for="exampleCheck1"><b>I Agree to the stated Terms of Participation</b></label>

                        <div class="alert alert-danger terms msg" style="display: none;"></div>


                        <p>Please recognize the correct order of operations and complete the following skill testing question to qualify for prizes and periodic giveaways.</p>

                        <div class="pluse-minus-div text-center">

                           <p id="question"><input id="ans" type="text"></p>

                           <div class="alert alert-danger captcha msg" style="display: none;"></div>

                           <div id="message">Please verify.</div>

                           <div id="success">Validation complete :)</div>

                           <div id="fail">Validation failed :(</div>       

                        </div>

                           <p>Upon submitting the correct answer and selecting the “Submit” button, the user is automatically logged in

                           and forwarded to their user dashboard with a confirmation message and administrative access.</p>

                       <div class="co">

					   <div class="btn-links-box  text-right mt-3 text-center">

                                       <button type ="button" id="back_button" class="wine-btn rounded-pill">Back</button>

                                    </div> <ul class="btn-links-box justify-content-center">

                           <li><button type="submit" id="steptwosubmit" class="wine-btn rounded-pill">Register</button></li>

                        </ul>

						

									</div>

                        </form>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </div>

   </div>

</section>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



@include('includes.footer')