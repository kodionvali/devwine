@include('includes.header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<div class="login-form comm my-3">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card text-align-center form_data">
                <div class="text-center"><h2>{{ __('Login') }}</h2></div>

                <div class="card-body p-2">
                    <form method="POST" action="{{ route('custom_login') }}">
                        @csrf
                        @if(request()->get('page'))
                            <input type="hidden" name="page" value="{{request()->get('page')}}">
                        @endif
                                @error('email')
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="mb-3">
                            <!--label for="email" class="col-md-12 col-form-label">{{ __('Email Address') }}</label-->

                            <div class="col-md-12">
                                <div class="emaildiv"> <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address" autofocus></div>


                            </div>
                        </div>


                        <div class="mb-3">
                            <!--label for="password" class="col-md-12 col-form-label">{{ __('Password') }}</label-->

                            <div class="col-md-12">
                               <div class="passdiv eye"> <input id="password" type="password" class="form-control @error('password') is-invalid @enderror password" name="password" required autocomplete="current-password" placeholder="Password">
                               <i class="far fa-eye fa-eye-slash" id="togglePassword"></i>
                            </div>

                                @error('password')
                                    <span class="invalid-feedback"  role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                        @if (Route::has('password.request'))
                                    <a class="btn-link " href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="mb-0 su-btn">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="rounded-pill wine-btn">
                                    {{ __('Login') }}
                                </button>

                              
                                    <p class="or mt-2">or</p>
                                   <p  class="btn-link ">Need an account? <a href="/guest-rewards"class="reward-link">Guest Rewards</a></p>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@include('includes.footer')
