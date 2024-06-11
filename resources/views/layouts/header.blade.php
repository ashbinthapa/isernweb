<!DOCTYPE html>
<html lang="en">

<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>

    <title>Institute for Social and Environmental Research Nepal</title>
</head>

<body>
    {{-- div for the main header logo section --}}
    <div class="container-fluid py-4" style="background-color: #05264b;">
        <div class="container">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/isernepal website logo.png') }}" class="img-fluid" alt="ISER-N">
            </a>
        </div>
    </div>
    <header class="container-fluid sticky-top-custom justify-content-center">
        {{-- section for the main header menu nav bar section --}}
        <nav class="navbar navbar-expand-xl justify-content-center fw-bold">
            <div class="container m-3">
                {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav navbar-header-ul me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown hover-dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->is('posts*') ? 'active' : '' }}"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">News &
                                Announcements</a>
                            <ul class="dropdown-menu" style="background-color: #05264b;">
                                <li><a class="dropdown-item {{ request()->is('posts/category/news') ? 'active' : '' }}"
                                        href="/posts/category/news">News</a></li>
                                <li><a class="dropdown-item {{ request()->is('posts/category/announcement') ? 'active' : '' }}"
                                        href="/posts/category/announcement">Announcements</a></li>
                                <li><a class="dropdown-item {{ request()->is('posts/category/events') ? 'active' : '' }}"
                                        href="/posts/category/events">Events</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hover-dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->is('projects*') ? 'active' : '' }}"
                                href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Research</a>
                            <ul class="dropdown-menu" style="background-color: #05264b;">
                                <li><a class="dropdown-item {{ request()->is('projects') ? 'active' : '' }}"
                                        href="/projects">All Research</a></li>
                                <li><a class="dropdown-item {{ request()->is('projects/ongoing') ? 'active' : '' }}"
                                        href="/projects/ongoing">Ongoing Research</a></li>
                                <li><a class="dropdown-item {{ request()->is('projects/completed') ? 'active' : '' }}"
                                        href="/projects/completed">Completed Research</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hover-dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->is('data*') ? 'active' : '' }}"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Data</a>
                            <ul class="dropdown-menu" style="background-color: #05264b;">
                                <li><a class="dropdown-item {{ request()->is('data') ? 'active' : '' }}"
                                        href="/data">Data</a></li>
                                <li><a class="dropdown-item {{ request()->is('data/instruments') ? 'active' : '' }}"
                                        href="/data/instruments">Instruments</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hover-dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->is('publications*') ? 'active' : '' }}"
                                href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Publications</a>
                            <ul class="dropdown-menu" style="background-color: #05264b;">
                                <li><a class="dropdown-item {{ request()->is('publications?type=1&year=all') ? 'active' : '' }}"
                                        href="/publications?type=1&year=all">Journal Articles</a></li>
                                <li><a class="dropdown-item {{ request()->is('publications?type=2&year=all') ? 'active' : '' }}"
                                        href="/publications?type=2&year=all">Book & Book Chapter</a></li>
                                <li><a class="dropdown-item {{ request()->is('publications?type=3&year=all') ? 'active' : '' }}"
                                        href="/publications?type=3&year=all">Dissertation</a></li>
                                <li><a class="dropdown-item {{ request()->is('publications?type=4&year=all') ? 'active' : '' }}"
                                        href="/publications?type=4&year=all">Presentations</a></li>
                                <li><a class="dropdown-item {{ request()->is('publications?type=5&year=all') ? 'active' : '' }}"
                                        href="/publications?type=5&year=all">Policy Brief</a></li>
                                <li><a class="dropdown-item {{ request()->is('publications?type=6&year=all') ? 'active' : '' }}"
                                        href="/publications?type=6&year=all">Report to Respondent</a></li>
                                <li><a class="dropdown-item {{ request()->is('publications?type=7&year=all') ? 'active' : '' }}"
                                        href="/publications?type=7&year=all">Annual Report</a></li>
                                <li><a class="dropdown-item {{ request()->is('publications?type=8&year=all') ? 'active' : '' }}"
                                        href="/publications?type=8&year=all">Other Publications</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hover-dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->is('policy-and-interventions*') ? 'active' : '' }}"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Policy
                                & Interventions</a>
                            <ul class="dropdown-menu" style="background-color: #05264b;">
                                <li><a class="dropdown-item {{ request()->is('policy-and-interventions/Intervention') ? 'active' : '' }}"
                                        href="/policy-and-interventions/Intervention">Intervention</a></li>
                                <li><a class="dropdown-item {{ request()->is('policy-and-interventions/policy-feedback') ? 'active' : '' }}"
                                        href="/policy-and-interventions/policy-feedback">Policy Feedback</a></li>
                                <li><a class="dropdown-item {{ request()->is('dissemination') ? 'active' : '' }}"
                                        href="/dissemination">Dissemination</a></li>
                                <li><a class="dropdown-item {{ request()->is('policy-and-interventions/interaction-program-with-respondents') ? 'active' : '' }}"
                                        href="/policy-and-interventions/interaction-program-with-respondents">Interaction
                                        Program with Respondent</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hover-dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->is('capacity-building*') ? 'active' : '' }}"
                                href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Capacity Building</a>
                            <ul class="dropdown-menu" style="background-color: #05264b;">
                                <li><a class="dropdown-item {{ request()->is('capacity-building') ? 'active' : '' }}"
                                        href="/capacity-building">Capacity Building</a></li>
                                <li><a class="dropdown-item {{ request()->is('capacity-building/community-capacity-building') ? 'active' : '' }}"
                                        href="/capacity-building/community-capacity-building">Community Capacity
                                        Building</a></li>
                                <li><a class="dropdown-item {{ request()->is('capacity-building/trainings-and-workshops') ? 'active' : '' }}"
                                        href="/capacity-building/trainings-and-workshops">Training & Workshops</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hover-dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->is('about-us*') ? 'active' : '' }}"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">About
                                Us</a>
                            <ul class="dropdown-menu" style="background-color: #05264b;">
                                <li><a class="dropdown-item {{ request()->is('about-us') ? 'active' : '' }}"
                                        href="/about-us">Introduction</a></li>
                                <li><a class="dropdown-item {{ request()->is('about-us/working-approach') ? 'active' : '' }}"
                                        href="/about-us/working-approach">Working Approach</a></li>
                                <li><a class="dropdown-item {{ request()->is('about-us/governance') ? 'active' : '' }}"
                                        href="/about-us/governance">Governance</a></li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle {{ request()->is('about-us/human-resources*') ? 'active' : '' }}"
                                        href="#" role="button" aria-expanded="false">Human Resources</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item {{ request()->is('about-us/board-members') ? 'active' : '' }}"
                                                href="/about-us/board-members">Board Members</a></li>
                                        <li><a class="dropdown-item {{ request()->is('about-us/general-members') ? 'active' : '' }}"
                                                href="/about-us/general-members">General Members</a></li>
                                        <li><a class="dropdown-item {{ request()->is('about-us/national-researchers') ? 'active' : '' }}"
                                                href="/about-us/national-researchers">National Researchers</a></li>
                                        <li><a class="dropdown-item {{ request()->is('about-us/international-researchers') ? 'active' : '' }}"
                                                href="/about-us/international-researchers">International
                                                Researchers</a></li>
                                        <li><a class="dropdown-item {{ request()->is('about-us/field-supervisors') ? 'active' : '' }}"
                                                href="/about-us/field-supervisors">Field Supervisors</a></li>
                                        <li><a class="dropdown-item {{ request()->is('about-us/research-associates') ? 'active' : '' }}"
                                                href="/about-us/research-associates">Research Associates</a></li>
                                        <li><a class="dropdown-item {{ request()->is('about-us/research-enumerators') ? 'active' : '' }}"
                                                href="/about-us/research-enumerators">Research Enumerators</a></li>
                                        <li><a class="dropdown-item {{ request()->is('about-us/admin-and-finance') ? 'active' : '' }}"
                                                href="/about-us/admin-and-finance">Admin & Finance</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('contact-us') ? 'active' : '' }}"
                                href="{{ url('/contact-us') }}">Contact Us</a>
                        </li>
                    </ul>
                    <form class="d-flex" id="searchForm">
                        <input class="form-control" id="searchInput" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="header-search-buttton" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
