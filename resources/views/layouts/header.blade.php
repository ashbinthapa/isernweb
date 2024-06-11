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
            <div class="container">
                {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav navbar-header-ul me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">
                                Home</a>
                        </li>
                        <li class="nav-item dropdown hover-dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                News & Announcements
                            </a>
                            <ul class="dropdown-menu" style="background-color: #05264b;">
                                {{-- <li><a class="dropdown-item" href="/posts/">All News & Announcements</a></li> --}}
                                <li><a class="dropdown-item" href="/posts/category/news">News</a></li>
                                <li><a class="dropdown-item" href="/posts/category/announcement">Announcements</a></li>
                                <li><a class="dropdown-item" href="/posts/category/events">Events</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hover-dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Research
                            </a>
                            <ul class="dropdown-menu" style="background-color: #05264b;">
                                <li><a class="dropdown-item" href="/projects">All Research</a></li>

                                <li><a class="dropdown-item" href="/projects/ongoing">Ongoing
                                        Research</a></li>
                                <li><a class="dropdown-item" href="/projects/completed">Completed
                                        Research</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hover-dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Data
                            </a>
                            <ul class="dropdown-menu" style="background-color: #05264b;">
                                <li><a class="dropdown-item" href="/data">Data</a></li>
                                <li><a class="dropdown-item" href="/data/instruments">Instruments</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hover-dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Publications
                            </a>
                            <ul class="dropdown-menu" style="background-color: #05264b;">
                                <li><a class="dropdown-item" href="/publications?type=1&year=all">Journal
                                        Articles</a>
                                </li>
                                <li><a class="dropdown-item" href="/publications?type=2&year=all">Book & Book
                                        Chapter</a>
                                </li>
                                <li><a class="dropdown-item" href="/publications?type=3&year=all">Dissertation</a>
                                </li>
                                <li><a class="dropdown-item" href="/publications?type=4&year=all">Presentations</a>
                                </li>
                                <li><a class="dropdown-item" href="/publications?type=5&year=all">Policy Brief</a>
                                </li>
                                <li><a class="dropdown-item" href="/publications?type=6&year=all">Report to
                                        Respondent</a></li>
                                <li><a class="dropdown-item" href="/publications?type=7&year=all">Annual Report</a>
                                </li>
                                <li><a class="dropdown-item" href="/publications?type=8&year=all">Other
                                        Publications</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hover-dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Policy & Intervations
                            </a>
                            <ul class="dropdown-menu" style="background-color: #05264b;">
                                <li><a class="dropdown-item"
                                        href="/policy-and-interventions/Intervention">Intervation</a></li>
                                <li><a class="dropdown-item" href="/policy-and-interventions/policy-feedback">Policy
                                        Feedback</a></li>
                                <li><a class="dropdown-item" href="/dissemination">Dissemination</a></li>
                                <li><a class="dropdown-item"
                                        href="/policy-and-interventions/interaction-program-with-respondents">Interaction
                                        Program with
                                        Respondent</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hover-dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Capacity Building
                            </a>
                            <ul class="dropdown-menu" style="background-color: #05264b;">
                                <li><a class="dropdown-item" href="/capacity-building">Capacity Building</a></li>

                                <li><a class="dropdown-item"
                                        href="/capacity-building/community-capacity-building/">Comminity Capacity
                                        Building</a></li>
                                <li><a class="dropdown-item"
                                        href="/capacity-building/trainings-and-workshops/">Training & Workshops</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hover-dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                About Us
                            </a>
                            <ul class="dropdown-menu" style="background-color: #05264b;">
                                <li><a class="dropdown-item" href="/about-us">Introduction</a></li>
                                <li><a class="dropdown-item" href="/about-us/working-approach">Working Approach</a>
                                </li>
                                <li><a class="dropdown-item" href="/about-us/governance">Governance</a></li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#" role="button"
                                        aria-expanded="false">Human Resources</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/about-us/board-members/">Board Members</a>
                                        </li>
                                        <li><a class="dropdown-item" href="/about-us/general-members/">General
                                                Members</a></li>
                                        <li><a class="dropdown-item" href="/about-us/national-researchers/">National
                                                Researchers</a></li>
                                        <li><a class="dropdown-item"
                                                href="/about-us/international-researchers/">International
                                                Researchers</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Scholars</a></li>
                                        <li><a class="dropdown-item" href="/about-us/staff/">Staff</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="/research-infrastructure">Research
                                        Infrastructures</a></li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#" role="button"
                                        aria-expanded="false">Finance Management</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/funding-agencies">Funding Agencies</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="/collaboration" role="button"
                                        aria-expanded="false"> Collaboration</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="/collaboration/national-collaboration">National</a></li>
                                        <li><a class="dropdown-item"
                                                href="/collaboration/international-collaboration">International</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="/collaboration/collaborate-with-us">Collaborate
                                                With Us</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="/about-us/work with us"
                                        role="button" aria-expanded="false">Work With Us</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/work with us/career-at-isern">Career @
                                                Iser-N</a></li>
                                        <li><a class="dropdown-item" href="/work with us/training-at-isern">Training @
                                                ISER-N</a></li>
                                        <li><a class="dropdown-item" href="/work with us/as-a-respondent">As a
                                                Respondent</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="/about-us/gallery">Gallery</a></li>
                                <li><a class="dropdown-item" href="{{ asset('/contact') }}">Contact</a></li>
                            </ul>
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
