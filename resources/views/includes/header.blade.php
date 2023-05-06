<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">   
<link rel="icon" href="{!! asset('/images/wine-country-icon.png') !!}"/> 
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Open+Sans&family=Playfair+Display+SC:ital,wght@1,700&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="{{ asset('/css/custom.css') }}">

<div class="whole-data">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: white!important;">
        <div class="container-fluid">
            <div class="custom-navbar">
                <div class="logo-make">
                    <a class="navbar-brand logo_text" href="/">
                    <img  height="90" src="https://devsite.winecountryweekends.ca/images/logo.png" class="custom-logo" alt="Wine Country Weekends">
                    </a>
                </div>
                <div class="dropdown notifcation-icon nav-link mobile-notification-view">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell-o" aria-hidden="true"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">You have new Booking Inquiry for Hieberts Guest House</a></li>
                    <li><a class="dropdown-item" href="#">You have received amount for Hieberts Guest House</a></li>
                    <li><a class="dropdown-item" href="#">You have received new message from User 1</a></li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown custom-bg-dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Features
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <ul class="design-drop-down">
                                <li><a class="dropdown-item" href="/manage_sub_regions?n=Niagara%20Falls">Accommodations</a></li>
                                <li><a class="dropdown-item" href="/excursion_type?type=Arts/Culture">Excursions</a></li>
                                <li><a class="dropdown-item" href="/manage_winery_regions?n=Niagara%20Falls">Wineries</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/guest-rewards">Guest Rewards</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown notifcation-icon nav-link">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell-o" aria-hidden="true"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">You have new Booking Inquiry for Hieberts Guest House</a></li>
                                <li><a class="dropdown-item" href="#">You have received amount for Hieberts Guest House</a></li>
                                <li><a class="dropdown-item" href="#">You have received new message from User 1</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown custom-make-dropdown nav-item custom-bg-dropdown">
                            <a href="#" class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Members</a>
                            <ul class="dropdown-menu" aria-labelledby="">
                                <li>
                                    <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    