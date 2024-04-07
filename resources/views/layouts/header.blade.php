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
        <div class="container p-4">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/isernepal website logo.png') }}" class="img-fluid" alt="ISER-N">
            </a>
        </div>
    </div>
    <header class="sticky-md-top">
        {{-- section for the main header menu nav bar section --}}
        <nav class="navbar navbar-expand-lg bg-body-tertiary p-3">
            <div class="container-fluid">
                <!-- <a class="navbar-brand" href="#">
                Navbar</a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                News & Announcements
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">News</a></li>
                                <li><a class="dropdown-item" href="#">Announcements</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Events</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ asset('/projects') }}" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Research
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ asset('/projects/ongoing') }}">Ongoing
                                        Research</a></li>
                                <li><a class="dropdown-item" href="{{ asset('/projects/completed') }}">Completed
                                        Research</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Data
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Data</a></li>
                                <li><a class="dropdown-item" href="#">Instruments</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ asset('/publications') }}" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Publications
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ asset('/publications') }}">Journal Articles</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ asset('/publications') }}">Book & Book
                                        Chapter</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ asset('/publications') }}">Dissertation</a></li>
                                <li><a class="dropdown-item" href="{{ asset('/publications') }}">Presentations</a></li>
                                <li><a class="dropdown-item" href="{{ asset('/publications') }}">Policy Brief</a></li>
                                <li><a class="dropdown-item" href="{{ asset('/publications') }}">Report to
                                        Respondent</a></li>
                                <li><a class="dropdown-item" href="{{ asset('/publications') }}">Annual Report</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Other Publications</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Policy & Intervations
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Intervation</a></li>
                                <li><a class="dropdown-item" href="#">Policy Feedback</a></li>
                                <li><a class="dropdown-item" href="#">Dissemination</a></li>
                                <li><a class="dropdown-item" href="#">Interaction Program with Respondent</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Capacity Building
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Comminity Capacity Building</a></li>
                                <li><a class="dropdown-item" href="#">Training & Workshops</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ asset('/about-us') }}" role="button"
                                data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                                About Us
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Introduction</a></li>
                                <li><a class="dropdown-item" href="#">Working Approach</a></li>
                                <li><a class="dropdown-item" href="#">Governance</a></li>
                                <li class="nav-item dropend">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Human Resources
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Board Members</a></li>
                                        <li><a class="dropdown-item" href="#">General Members</a></li>
                                        <li><a class="dropdown-item" href="#">National Researchers</a></li>
                                        <li><a class="dropdown-item" href="#">International Researchers</a></li>
                                        <li><a class="dropdown-item" href="#">Scholars</a></li>
                                        <li><a class="dropdown-item" href="#">Staff</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="#">Research Infrastructures</a></li>
                                <li class="nav-item dropend">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Finance Management
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Funding Agencies</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropend">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Collaboration
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">National</a></li>
                                        <li><a class="dropdown-item" href="#">International</a></li>
                                        <li><a class="dropdown-item"
                                                href="{{ asset('/collaboration/national-collaboration') }}">Collaborate
                                                With Us</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropend">
                                    <a class="nav-link dropdown-toggle"
                                        href="{{ asset('/collaboration/national-collaboration') }}" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Work With Us
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Career @ Iser-N</a></li>
                                        <li><a class="dropdown-item" href="#">Training @ ISER-N</a></li>
                                        <li><a class="dropdown-item" href="{{ asset('/contact') }}">As a
                                                Respondent</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="#">Gallery</a></li>
                                <li><a class="dropdown-item" href="{{ asset('/contact') }}">Contact</a></li>
                            </ul>
                        </li>
                        <!--
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
            -->
                    </ul>
                    <form class="d-flex" id="searchForm">
                        <input class="form-control me-2" id="searchInput" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
