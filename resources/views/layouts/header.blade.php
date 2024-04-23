<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>

    <title>Institute for Social and Environmental Research Nepal</title>
</head>

<body>
    {{-- div for the main header logo section --}}
    <div class="grid text-center" style="background-color: #05264b;">
        <div class="container py-4">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/isernepal website logo.png') }}" class="img-fluid" alt="ISER-N">
            </a>
        </div>
    </div>
    <header class="sticky-md-top justify-content-center">
        {{-- section for the main header menu nav bar section --}}
        <nav class="navbar navbar-expand-xl px-5 justify-content-center fw-bold" style="background-color: #5b79b9;">
            <div class="container-fluid px-5">
                {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav navbar-header-ul me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown hover-dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                News & Announcements
                            </a>
                            <ul class="dropdown-menu" style="background-color: #05264b;">
                                <li><a class="dropdown-item" href="/posts/category/news">News</a></li>
                                <li><a class="dropdown-item" href="/posts/category/announcement">Announcements</a></li>
                                <li><a class="dropdown-item" href="/posts/category/events">Events</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hover-dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ asset('/projects') }}" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Research
                            </a>
                            <ul class="dropdown-menu" style="background-color: #05264b;">
                                <li><a class="dropdown-item" href="{{ asset('/projects/ongoing') }}">Ongoing
                                        Research</a></li>
                                <li><a class="dropdown-item" href="{{ asset('/projects/completed') }}">Completed
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
                            <a class="nav-link dropdown-toggle" href="{{ asset('/publications') }}" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Publications
                            </a>
                            <ul class="dropdown-menu" style="background-color: #05264b;">
                                <li><a class="dropdown-item" href="{{ asset('/publications') }}">Journal
                                        Articles</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ asset('/publications') }}">Book & Book
                                        Chapter</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ asset('/publications') }}">Dissertation</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ asset('/publications') }}">Presentations</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ asset('/publications') }}">Policy Brief</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ asset('/publications') }}">Report to
                                        Respondent</a></li>
                                <li><a class="dropdown-item" href="{{ asset('/publications') }}">Annual Report</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Other Publications</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hover-dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Policy & Intervations
                            </a>
                            <ul class="dropdown-menu" style="background-color: #05264b;">
                                <li><a class="dropdown-item" href="#">Intervation</a></li>
                                <li><a class="dropdown-item" href="/policy-and-interventions/policy-feedback">Policy
                                        Feedback</a></li>
                                <li><a class="dropdown-item" href="#">Dissemination</a></li>
                                <li><a class="dropdown-item" href="#">Interaction Program with
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
                                <li><a class="dropdown-item" href="#">Comminity Capacity Building</a></li>
                                <li><a class="dropdown-item" href="#">Training & Workshops</a></li>
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
                                        <li><a class="dropdown-item" href="#">Board Members</a></li>
                                        <li><a class="dropdown-item" href="#">General Members</a></li>
                                        <li><a class="dropdown-item" href="#">National Researchers</a></li>
                                        <li><a class="dropdown-item" href="#">International Researchers</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Scholars</a></li>
                                        <li><a class="dropdown-item" href="#">Staff</a></li>
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
                                    <a class="dropdown-item dropdown-toggle" href="/about-us/work-with-us"
                                        role="button" aria-expanded="false">Work With Us</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/work-with-us/career-at-isern">Career @
                                                Iser-N</a></li>
                                        <li><a class="dropdown-item" href="/work-with-us/training-at-isern">Training @
                                                ISER-N</a></li>
                                        <li><a class="dropdown-item" href="/work-with-us/as-a-respondent">As a
                                                Respondent</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="#">Gallery</a></li>
                                <li><a class="dropdown-item" href="{{ asset('/contact') }}">Contact</a></li>
                            </ul>
                        </li>



                    </ul>
                    <form class="d-flex" id="searchForm">
                        <input class="form-control me-2" id="searchInput" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="custom-button" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
