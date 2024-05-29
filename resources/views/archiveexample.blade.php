<div>
    <a href={{ route('posts.show', ['slug' => $post->slug]) }}>
        <h2>{{ $post->title }}</h2>
    </a>
    <p>{{ $post->content }}</p>
</div>
<div class="rounded-sm h-[70px] w-[70px] flex-shrink-0 bg-white p-3">
    @if ($post->getFirstMediaUrl())
        <img src="{{ $post->getFirstMediaUrl() }}" alt="" class="object-contain" />
    @endif
</div>


{{--  backup code for human resource --}}
<div class="container-fluid text-center">
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/mrs adina gurung.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mrs. Adina Gurung
                </P>
                <p><a style="text-decoration: none;" href="/images/board-members/Adina-Gurung-cv.pdf">Cirriculum
                        Viate</a>
                </P>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/Dr-Anuja-Dangol.png" class="d-block w-100" alt="...">
                </P>
                <p>Mrs. Anuja Dangol
                </P>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/Bamdev-Adhikari.png" class="d-block w-100" alt="...">
                </P>
                <p>Mr. Bamdev Adhikari
                </P>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/Basanta-Ranabhat_edited.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mr. Basanta Rana Bhat
                </P>
                <p><a style="text-decoration: none;"
                        href="/images/general-members/CV_Basanta-Rana-Bhat-2023.pdf">Cirriculum
                        Viate</a>
                </P>
            </div>
        </div>
    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/bishnu-adhikari.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mr. Bishnu Prasad Adhikari
                </P>
                <p><a style="text-decoration: none;" href="/images/general-members/Bishnu-Adhikari.pdf">Cirriculum
                        Viate</a>
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/Deb-Prasad-Pandey.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Dr. Deb Prasad Pandey
                </P>
                <p><a style="text-decoration: none;" href="/images/general-members/Deb-Prasad-Pandey.pdf">Cirriculum
                        Viate</a>
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/dirgha-j-ghimire.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Prof. Dr. Dirgha J. Ghimire
                </P>
                <p><a style="text-decoration: none;" href="/images/general-members/Dirgha-Ghimire.pdf">Cirriculum
                        Viate</a>
                </P>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/Gita-subedi.jpeg" class="d-block w-100" alt="...">
                </P>
                <p>Mrs. Gita Subedi
                </P>
                <p><a style="text-decoration: none;" href="/images/general-members/Deb-Prasad-Pandey.pdf">Cirriculum
                        Viate</a>
                </P>
            </div>
        </div>

    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/Humnath-Bhandari_Edited2.jpg" class="d-block w-100"
                        alt="...">
                </P>
                <p>Dr. Humnath Bhandari
                </P>
                <p><a style="text-decoration: none;" href="/images/general-members/CV_Humnath-Bhandari.pdf">Cirriculum
                        Viate</a>
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/Indra-Kumari-Chaudhary.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mrs. Indra Kumari Chaudhary
                </P>
                <p><a style="text-decoration: none;" href="/images/general-members/Indra-Chaudhary.pdf">Cirriculum
                        Viate</a>
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/Keshav-kumar-sharma.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mr. Keshav Kumar Sharma
                </P>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/Krishna-Shrestha.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mr. Krishna Shrestha
                </P>
                <p><a style="text-decoration: none;" href="/images/general-members/Krishna-Shrestha.pdf">Cirriculum
                        Viate</a>
                </P>
            </div>
        </div>

    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/Mr-Madhab-Sharma-Ghimire.png" class="d-block w-100"
                        alt="...">
                </P>
                <p>Mr. Madhav Ghimire
                </P>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/Mangal-Raj-Darai.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mr. Mangal Raj Darai
                </P>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/Manjeshwori-Singh.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Dr. Manjeshwori Singh
                </P>
                <p><a style="text-decoration: none;" href="/images/general-members/Manjeshwori-Singh.pdf">Cirriculum
                        Viate</a>
                </P>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/Mr-Lok-Nath-Paudel.png" class="d-block w-100" alt="...">
                </P>
                <p>Mr. Lok Nath Poudel
                </P>
            </div>
        </div>

    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/Naba-Raj-Devkota.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Prof. Dr. Nabaraj Devkota
                </P>
                <p><a style="text-decoration: none;"
                        href="/images/general-members/cv-naba-January-10-2021-Brief-converted-1.pdf">Cirriculum
                        Viate</a>
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/Pashupati-chaudhary.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Dr. Pashupati Chaudhary
                </P>
                <p><a style="text-decoration: none;" href="/images/general-members/Pashupati-Chaudhary.pdf">Cirriculum
                        Viate</a>
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/prem-p-pandit.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mr. Prem Prakash Pandit
                </P>
                <p><a style="text-decoration: none;" href="/images/general-members/Prem-Pandit.pdf">Cirriculum
                        Viate</a>
                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/Rajendra-Ghimire.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mr. Rajendra Ghimire
                </P>
                <p><a style="text-decoration: none;" href="/images/general-members/Rajendra-Ghimire.pdf">Cirriculum
                        Viate</a>
                </P>
            </div>
        </div>

    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/Ram_Photo1.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mr. Ram Prasad Luetel
                </P>
                <p><a style="text-decoration: none;" href="/images/general-members/Ram-Prasad-Luetel.pdf">Cirriculum
                        Viate</a>
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/rija-manandhar.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mrs. Rija Manandhar
                </P>
                <p><a style="text-decoration: none;"
                        href="/images/general-members/CV_Rija_manandhar_April2023.pdf">Cirriculum
                        Viate</a>
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/subodh-khanal.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mr. Subodh Khanal
                </P>
                <p><a style="text-decoration: none;" href="/images/general-members/subodh-khanal-cv.pdf">Cirriculum
                        Viate</a>
                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/Yogendra-Man-Shrestha.jpg" class="d-block w-100"
                        alt="...">
                </P>
                <p>Dr. Yogendra Man Shrestha
                </P>
            </div>
        </div>

    </div>
</div>

{{-- backup code for human resources ends --}}



{{--  backup for national researchers --}}




<div class="container-fluid my-4">
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/Dr-dirgha-ghimire.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Prof. Dr. Dirgha J. Ghimire</h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Director</p>
                    <p class="card-text" style="font-size: 14px;">Institute for Social and Environmental
                        Research-Nepal
                        (ISER-N), Nepal</p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Research Professor</p>
                    <p class="card-text" style="font-size: 14px;">Population Studies Center, University Of Michigan
                        (UM), USA</p>
                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="https://dirghaghimire.isernepal.org/" style="text-decoration:none;"><i
                                class="fa fa-globe"></i> Website</a>
                        <a href="/images/national researchers/GhimireCV_7.8.2021.pdf" style="text-decoration:none;"><i
                                class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/dr-prem-bahadur-bhandari.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Dr. Prem Bahadur Bhandari
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Senior Research Scientist
                    </p>
                    <p class="card-text" style="font-size: 14px;">Institute for Social and Environmental
                        Research-Nepal
                        (ISER-N), Nepal

                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Social Researcher
                    </p>
                    <p class="card-text" style="font-size: 14px;">Population Studies Center, University of Michigan
                        (UM), USA
                    </p>
                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="https://sites.psu.edu/demography/alumni/rural-sociology/prem-bhandari-2006/"
                            style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="/images/national researchers/Prem-Bhandari.docx" style="text-decoration:none;"><i
                                class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/Dharma-raj-dangol.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Prof. Dr. Dharma Raj Dangol
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">President & Senior Research
                        Scientist</p>
                    <p class="card-text" style="font-size: 14px;">Institute for Social and Environmental
                        Research-Nepal
                        (ISER-N), Nepal</p>

                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="/images/national researchers/Prof-Dr-Dharma-Raj-Dangol-CV.pdf"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/Uttam-Sharma.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Dr. Uttam Sharma</h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Senior Research Scientist
                    </p>
                    <p class="card-text" style="font-size: 14px;">Institute for Social and Environmental
                        Research-Nepal
                        (ISER-N), Nepal</p>
                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="/images/national researchers/CV_sharma_sept_2020_updated-1.pdf"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/Keshav Pokhrel.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Dr. Keshav Pokhrel
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Assistant Professor of
                        Statistics
                    </p>
                    <p class="card-text" style="font-size: 14px;">College of Arts, Sciences & Letters, University of
                        Michigan, Dearborn, USA

                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Research Affiliate
                    </p>
                    <p class="card-text" style="font-size: 14px;">Population Studies Center, University of Michigan,
                        USA
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/Dr-Naba.jpg" class="img-fluid rounded-start index-image-size"
                    alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Prof. Dr. Naba Raj Devkota
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Vice-Chancellor
                    </p>
                    <p class="card-text" style="font-size: 14px;">Gandaki University, Kaski, Pokhara, Nepal

                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Professor
                    </p>
                    <p class="card-text" style="font-size: 14px;">Department of Animal Nutrition and Fodder
                        Production, Agriculture and Forestry University, Nepal
                    </p>
                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="#" style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="public/images/national researchers/Naba Raj Devkota cv.pdf"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/Dr-Sachet-Prabhat-Shrestha.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Prof. Dr. Sachet Prabhat Shrestha
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Professor
                    </p>
                    <p class="card-text" style="font-size: 14px;">Department of Opthalmology, Manipal College of
                        Medical Science, Nepal

                    </p>
                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="/images/national researchers/CV-Sachet-Shrestha.pdf" style="text-decoration:none;"><i
                                class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/Pratik-Adhikary.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Dr. Pratik Adhikary
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Postdoctoral Fellow
                    </p>
                    <p class="card-text" style="font-size: 14px;">Global Health Equity Scholars Program

                    </p>
                    <p class="card-text" style="font-size: 14px;">Institute for Social and Environmental
                        Research-Nepal and School of Public Health, UC Berkeley
                    </p>
                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="#" style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="/images/national researchers/CV.Dr_.Pratik-Adhikary.docx"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/Abha-pic.jpg" class="img-fluid rounded-start index-image-size"
                    alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Dr. Abha Sharma
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Post Doctoral Fellow
                    </p>
                    <p class="card-text" style="font-size: 14px;">Institute for Social and Environmental
                        Research-Nepal
                        (ISER-N), Nepal</p>

                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="#" style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="/images/national researchers/Abha-CV-1.pdf" style="text-decoration:none;"><i
                                class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/Mr-Deba-Prasad-Pandey.png"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Dr. Deb Prasad Pandey
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Research Associate
                    </p>
                    <p class="card-text" style="font-size: 14px;">Institute for Social and Environmental
                        Research-Nepal
                        (ISER-N), Nepal</p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Adjunct Professor
                    </p>
                    <p class="card-text" style="font-size: 14px;">Agriculture and Forestry University, Nepal
                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Adjunct Professor
                    </p>
                    <p class="card-text" style="font-size: 14px;">The University of Newcastle, Australia
                    </p>
                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="#" style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="/images/national researchers/Deb-Prasad-Pandey.pdf" style="text-decoration:none;"><i
                                class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/dr-kapil-dev-upadhyaya.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Dr. Kapil Dev Upadhyaya
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Senior Consultant
                        Psychiatrist
                    </p>
                    <p class="card-text" style="font-size: 14px;">Kathmandu Model Hospital, Nepal

                    </p>

                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="#" style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="/images/national researchers/CV-Dr-Kapil-Dev-Upadhyaya.pdf"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/dr-humnath-bhandari-1.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Dr. Humnath Bhandari
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Country Representative
                    </p>
                    <p class="card-text" style="font-size: 14px;">International Rice Research Institute (IRRI),
                        Bangladesh

                    </p>

                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="https://www.irri.org/about-us/our-people/humnath-bhandari"
                            style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="/images/national researchers/Dr.Humnath-Bhandari.docx"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/dr-hridaya-devkota.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Dr. Hridaya Raj Devkota
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Research Associate
                    </p>
                    <p class="card-text" style="font-size: 14px;">Institute for Social and Environmental
                        Research-Nepal
                        (ISER-N), Nepal</p>

                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="#" style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="/images/national researchers/CV_Hridaya_Updated.pdf" style="text-decoration:none;"><i
                                class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/dr-harish-chandra-neupane.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Prof. Dr. Harish Chandra Neupane
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Professor, Surgery
                    </p>
                    <p class="card-text" style="font-size: 14px;">Chitwan Medical College (CMC), Nepal

                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Chairman and Managing
                        Director
                    </p>
                    <p class="card-text" style="font-size: 14px;">Chitwan Medical College (CMC), Nepal
                    </p>
                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="#" style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="#" style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/Chandra-Prasad-Sedai.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Dr. Chandra Prasad Sedai
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Professor</p>
                    <p class="card-text" style="font-size: 14px;">Chitwan Medical College (CMC), Nepal

                    </p>

                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="#" style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="/images/national researchers/CV-Dr-CP-Sedain.pdf" style="text-decoration:none;"><i
                                class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/Dr-Sharat-Chandra-Verma.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Dr. Sharat Chandra Verma
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">MD - General Medicine
                    </p>
                    <p class="card-text" style="font-size: 14px;">General Physician, Nepal

                    </p>

                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="#" style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="/images/national researchers/CV-Dr-Sharat-C-Verma.pdf"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/Dr-yubraj.jpg" class="img-fluid rounded-start index-image-size"
                    alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Dr. Yubraj Acharya
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Assistant Professor
                    </p>
                    <p class="card-text" style="font-size: 14px;">Health Policy and Administration - HPA, The
                        Pennsylvania State University (PSU), USA

                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Research Professor</p>
                    <p class="card-text" style="font-size: 14px;">Population Studies Center, University Of Michigan
                        (UM), USA</p>
                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="https://hhd.psu.edu/contact/yubraj-acharya" style="text-decoration:none;"><i
                                class="fa fa-globe"></i> Website</a>
                        <a href="#" style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/Pashupati.jpg" class="img-fluid rounded-start index-image-size"
                    alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Dr. Pashupati Chaudhary
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Research Scientist
                    </p>
                    <p class="card-text" style="font-size: 14px;">Institute for Social and Environmental
                        Research-Nepal
                        (ISER-N), Nepal</p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Adjunct Professor
                    </p>
                    <p class="card-text" style="font-size: 14px;">Agriculture and Forestry University, Nepal
                    </p>
                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="#" style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="/images/national researchers/CV_Pashupati-Chaudhary_Sep-2017.pdf"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/dr-meeta-sainju-pradhan.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Dr. Meeta Sainju Pradhan
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Senior Research Scientist
                    </p>
                    <p class="card-text" style="font-size: 14px;">Institute for Social and Environmental
                        Research-Nepal
                        (ISER-N), Nepal</p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">TMI Senior Fellow
                    </p>
                    <p class="card-text" style="font-size: 14px;">Himalayan Program, Mountain Institute, USA
                    </p>
                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="#" style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="/images/national researchers/Feb-2022_CV_Meeta S Pradhan.pdf"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/VAIDYA-Yashas.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Dr. Yashas Vaidya
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Data Scientist
                    </p>
                    <p class="card-text" style="font-size: 14px;">Dataiku, USA

                    </p>

                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="#" style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="#" style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/Mr-Ram-Prasad-Luitel.png"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Mr. Ram Prasad Luitel
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Natural Resources Management
                    </p>
                    <p class="card-text" style="font-size: 14px;">Food and Agriculture Organization(FAO), Nepal

                    </p>

                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="#" style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="#" style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/Dr-V-M-Alurkar.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Dr. VM Alurkar
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Professor & Head and
                        Director Academics
                    </p>
                    <p class="card-text" style="font-size: 14px;">Manipal College of Medical Science, Nepal

                    </p>

                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="#" style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="#" style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/binoj-kumar-shrestha.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Mr. Binoj Shrestha
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Research Associate
                    </p>
                    <p class="card-text" style="font-size: 14px;">Biodiversity and Environmental Management, Canada

                    </p>

                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="#" style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="#" style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/national researchers/Shristi-Shrestha.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Dr. Shristi Shrestha
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Lecturer
                    </p>
                    <p class="card-text" style="font-size: 14px;">Department of Ophthalmology, Manipal College Of
                        Medical Science, Nepal

                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Research Professor</p>
                    <p class="card-text" style="font-size: 14px;">Population Studies Center, University Of Michigan
                        (UM), USA</p>
                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="#" style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="/images/national researchers/CV-Dr-Shristi-Shrestha.pdf"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- backup fr international researchers --}}

<div class="container-fluid my-4">
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/international researchers/abigail-york.png"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Prof. Dr. Abigail York</h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Professor and Director of
                        Graduate Studies
                    </p>
                    <p class="card-text" style="font-size: 14px;">School of Human Evolution and Social Change, Arizona
                        State University, USA

                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Senior Global Futures
                        Scientist
                    </p>
                    <p class="card-text" style="font-size: 14px;">Julie Ann Wrigley Global Futures Laboratory, Arizona
                        State University, USA
                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Professor

                    </p>
                    <p class="card-text" style="font-size: 14px;">Earth System Science for the Anthropocene, Arizona
                        State University, USA

                    </p>
                    <p class="card-text" style="font-size: 14px;">The Melikan Center: Russian, Eurasian and Eastern
                        Euopean Studies, Arizona State University, USA

                    </p>
                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="https://www.mcgill.ca/sociology/contact-us/faculty/brauner-otto"
                            style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="#" style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/international researchers/thornton_arland.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Prof. Dr. Arland Thornton

                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Research Professor

                    </p>
                    <p class="card-text" style="font-size: 14px;">Survey Research/Population Studies, University of
                        Michigan, USA
                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Social ResearcherProfessor

                    </p>
                    <p class="card-text" style="font-size: 14px;">Department of Sociology, University of Michigan, USA

                    </p>
                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="https://ii.umich.edu/ii/people/all/a/arlandt.html" style="text-decoration:none;"><i
                                class="fa fa-globe"></i> Website</a>
                        <a href="/images/international researchers/Arland-Thornton-CV-4-29-2021.pdf"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/international researchers/rowan-brian.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Prof. Dr. Brian Rowan

                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Burke A. Hinsdale Collegiate
                        Professor in Education
                    </p>

                    <p class="card-text" style="font-size: 14px;">University of Michigan,USA



                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Professor of Sociology


                    </p>
                    <p class="card-text" style="font-size: 14px;">University of Michigan, USA


                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Research Professor



                    </p>
                    <p class="card-text" style="font-size: 14px;">Survey Research Center, Institute for Social
                        Research, University of Michigan, USA



                    </p>

                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="https://marsal.umich.edu/directory/faculty-staff/brian-rowan"
                            style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="/images/international researchers/cv_rowan.pdf" style="text-decoration:none;"><i
                                class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/international researchers/emily-mckendry-smith.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Prof. Dr. Emily McKendry-Smith
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Associate Professor

                    </p>
                    <p class="card-text" style="font-size: 14px;">Department of Sociology, University of West Georgia,
                        USA

                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Head of Sociology Graduate
                        Studies


                    </p>
                    <p class="card-text" style="font-size: 14px;">University of West Georgia, USA


                    </p>
                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="https://www.westga.edu/profile.php?emp_id=90566" style="text-decoration:none;"><i
                                class="fa fa-globe"></i> Website</a>
                        <a href="/images/international researchers/Emily.pdf" style="text-decoration:none;"><i
                                class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/international researchers/Emily-Treleaven.jpeg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Dr. Emily Treleaven

                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Research Assistant Professor

                    </p>
                    <p class="card-text" style="font-size: 14px;">Survey Research Center, Institute for Social
                        Research, University of Michigan, USA


                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Faculty Associate

                    </p>
                    <p class="card-text" style="font-size: 14px;">Population Studies Center, Institute for Social
                        Research, University of Michigan, USA

                    </p>
                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="https://src.isr.umich.edu/people/emily-treleaven/" style="text-decoration:none;"><i
                                class="fa fa-globe"></i> Website</a>
                        <a href="/images/international researchers/Emily-Treleaven-CV.pdf"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/international researchers/jennifer-glich.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Prof. Dr. Jennifer Glick

                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Arnold S. and Bette G.
                        Hoffman Professor in Sociology

                    </p>
                    <p class="card-text" style="font-size: 14px;">Pennsylvania State University, USA



                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Director
                    </p>
                    <p class="card-text" style="font-size: 14px;">Population Research Institute, Pennsylvania State
                        University, USA

                    </p>
                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="https://sociology.la.psu.edu/people/jeg115/" style="text-decoration:none;"><i
                                class="fa fa-globe"></i> Website</a>
                        <a href="/images/international researchers/Jennifer-Glick.pdf"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/international researchers/jennifer-s-barber.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Prof. Dr. Jennifer S. Barber

                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Professor
                    </p>
                    <p class="card-text" style="font-size: 14px;">Department of Sociology, Indiana University, USA



                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Senior Scientist

                    </p>
                    <p class="card-text" style="font-size: 14px;">Kinsey Institute, Indiana University, USA

                    </p>
                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="https://sociology.indiana.edu/about/faculty/barber-jennifer.html"
                            style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="/images/international researchers/Barber CV_January2023.pdf"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/international researchers/dr li an.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Prof. Dr. Li An

                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Professor
                    </p>
                    <p class="card-text" style="font-size: 14px;">Department of Geography, San Diego State
                        University,
                        USA
                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Founding director

                    </p>
                    <p class="card-text" style="font-size: 14px;">Center for Complex Human-Environment Systems
                        (CHES),
                        San Diego State University, USA

                    </p>

                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="https://geography.sdsu.edu/people/bios/an" style="text-decoration:none;"><i
                                class="fa fa-globe"></i> Website</a>
                        <a href="/images/international researchers/li an-cv-202209.pdf"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/international researchers/Lisa pearce.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Prof. Dr. Lisa D. Pearce

                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Zachary Taylor Smith
                        Distinguished Term Professor

                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Director of Undergraduate
                        Studies

                    </p>

                    <p class="card-text" style="font-size: 14px;">Department of Sociology, University of North
                        Carolina at Chapel Hill, USA

                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Faculty Fellow


                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Population Science
                        Training
                        Program Director


                    </p>

                    <p class="card-text" style="font-size: 14px;">Carolina Population Center, University of North
                        Carolina at Chapel Hill, USA

                    </p>

                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="https://lisapearce.web.unc.edu/" style="text-decoration:none;"><i
                                class="fa fa-globe"></i> Website</a>
                        <a href="/images/international researchers/Pearce-CV-070121.pdf"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/international researchers/dr michael bates.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Dr. Michael N. Bates

                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Research Professor,
                        Emeritus

                    </p>
                    <p class="card-text" style="font-size: 14px;">Epidemiology and Environmental Health Sciences,
                        School of Public Health, University of California, Berkeley, USA

                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Associate Director, Global
                        &
                        Environment Program

                    </p>
                    <p class="card-text" style="font-size: 14px;">School of Public Health, University of California,
                        Berkeley, USA

                    </p>

                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="https://publichealth.berkeley.edu/people/michael-bates"
                            style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="/images/international researchers/Michael-Bates-CV-SPH-version.pdf"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/international researchers/prof dr natalie d eggum.png"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Prof. Dr. Natalie D. Eggum

                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Associate Professor

                    </p>
                    <p class="card-text" style="font-size: 14px;">T. Denny Sanford School of Social and Family
                        Dynamics, Arizona State University, USA



                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Director

                    </p>
                    <p class="card-text" style="font-size: 14px;">The ECLiPSE Lab, Arizona State University, USA

                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Coordinator

                    </p>
                    <p class="card-text" style="font-size: 14px;">The Sanford School's Quantitative Methodology
                        Group

                    </p>

                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="https://search.asu.edu/profile/243959" style="text-decoration:none;"><i
                                class="fa fa-globe"></i> Website</a>
                        <a href="/images/international researchers/Natalie-Eggum.pdf"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/international researchers/nathalie williams.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Prof. Dr. Nathalie Williams

                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Associate Professor

                    </p>
                    <p class="card-text" style="font-size: 14px;">The Henry M. Jackson School of International
                        Studies
                        and Department of Sociology, University of Washington, USA


                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Adjunct Professor


                    </p>
                    <p class="card-text" style="font-size: 14px;">Department of Global Health and Law School,
                        University of Washington, USA

                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Associate Director


                    </p>
                    <p class="card-text" style="font-size: 14px;">Jackson School of International Studies,
                        University
                        of Washington, USA

                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Associate Chair

                    </p>
                    <p class="card-text" style="font-size: 14px;">Department of Sociology, University of Washington,
                        USA

                    </p>

                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="https://soc.washington.edu/people/nathalie-williams"
                            style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="/images/international researchers/nathalie e williams.pdf"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/international researchers/sarah_brauner-otto.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Prof. Dr. Sarah Brauner-Otto

                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Associate Professor

                    </p>
                    <p class="card-text" style="font-size: 14px;">Department of Sociology, McGill University, Canada

                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Director

                    </p>
                    <p class="card-text" style="font-size: 14px;">Centre on Population Dynamics, McGill University,
                        Canada

                    </p>

                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="https://www.mcgill.ca/sociology/contact-us/faculty/brauner-otto"
                            style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="#" style="text-decoration:none;"><i class="fa fa-street-view"></i>
                            Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/international researchers/sarah-j-hayford.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Prof. Dr. Sarah R. Hayford

                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Professor
                    </p>
                    <p class="card-text" style="font-size: 14px;">Department of Sociology, Ohio State University
                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Director
                    </p>
                    <p class="card-text" style="font-size: 14px;">Institute for Population Research, Ohio State
                        University

                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Communication Core Lead

                    </p>
                    <p class="card-text" style="font-size: 14px;">Ohio Policy Evaluation Network, USA

                    </p>
                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="https://sociology.osu.edu/people/hayford.10" style="text-decoration:none;"><i
                                class="fa fa-globe"></i> Website</a>
                        <a href="/images/international researchers/sarah Hayford.pdf"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/international researchers/scott-t-yakibu.png"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Prof. Dr. Scott T. Yabiku

                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Professor, Sociology and
                        Demography
                    </p>
                    <p class="card-text" style="font-size: 14px;">Department of Sociology and Criminology,
                        Pennsylvania State University, USA


                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Research Associate

                    </p>
                    <p class="card-text" style="font-size: 14px;">Population Research Institute, Pennsylvania State
                        University, USA

                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Programming Director

                    </p>
                    <p class="card-text" style="font-size: 14px;">Computational and Spatial Analysis (CSA) Core,
                        Pennsylvania State University, USA

                    </p>

                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="http://sociology.la.psu.edu/people/sty105" style="text-decoration:none;"><i
                                class="fa fa-globe"></i> Website</a>
                        <a href="/images/international researchers/Scott-Yabiku-CV.pdf"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/international researchers/sean-t-murphy.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Dr. Sean T. Murphy


                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Global Scientific Advisor,
                        IPM and Modelling

                    </p>
                    <p class="card-text" style="font-size: 14px;">Centre for Agriculture and Bioscience
                        International
                        (CABI), UK
                    </p>

                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="https://www.cabi.org/about-cabi/staff/Sean-Murphy" style="text-decoration:none;"><i
                                class="fa fa-globe"></i> Website</a>
                        <a href="#" style="text-decoration:none;"><i class="fa fa-street-view"></i>
                            Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/international researchers/dr sharon j hall.png"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Prof. Dr. Sharon J. Hall

                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">President's Professor and
                        Associate Dean

                    </p>
                    <p class="card-text" style="font-size: 14px;">School of Life Sciences, Arizona State University
                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Associate Dean and
                        President's Professor</p>
                    <p class="card-text" style="font-size: 14px;">College of Global Futures Leadership, Arizona
                        State
                        University</p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Senior Global Futures
                        Scientist
                    </p>
                    <p class="card-text" style="font-size: 14px;">Global Futures Scientists and Scholars, USA
                    </p>
                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="https://search.asu.edu/profile/808339" style="text-decoration:none;"><i
                                class="fa fa-globe"></i> Website</a>
                        <a href="/images/international researchers/Sharon jae hall.pdf"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/international researchers/thornton_rebecca.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Prof. Dr. Rebecca L. Thornton
                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Professor
                    </p>
                    <p class="card-text" style="font-size: 14px;">Hankamer School of Business, Baylor University,
                        USA
                    </p>

                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="https://www.rebeccathornton.net/" style="text-decoration:none;"><i
                                class="fa fa-globe"></i> Website</a>
                        <a href="/images/international researchers/rebecca l Thornton_CV.pdf"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/international researchers/prof dr willian g axinn.png"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Prof. Dr. William G. Axinn

                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Professor
                    </p>
                    <p class="card-text" style="font-size: 14px;">Gerald R. Ford School of Public Policy, University
                        of Michigan, USA</p>
                    <p class="card-text" style="font-size: 14px;">Department of Sociology, University of Michigan,
                        USA
                    </p>

                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Director
                    </p>
                    <p class="card-text" style="font-size: 14px;">Program in Society, Population, and the
                        Environment,
                        Institute for Social Research, University of Michigan, USA
                    </p>
                    <p class="card-text" style="font-size: 14px;">Population and Ecology Research Laboratory-Nepal

                    </p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Research Professor

                    </p>
                    <p class="card-text" style="font-size: 14px;">Population Studies Center and Survey Research
                        Center, University of Michigan, USA</p>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Faculty Member

                    </p>
                    <p class="card-text" style="font-size: 14px;">Center for South and Southeast Asian Studies,
                        University of Michigan, USA
                    </p>
                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="https://psc.isr.umich.edu/profile/axinn-william-g/"
                            style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="/images/international researchers/willian g axinn.pdf"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/images/international researchers/nick-nash.jpg"
                    class="img-fluid rounded-start index-image-size" alt="Profile Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p style="color: #05264b; font-size: 13px;" class="fw-bold"><i class="fa fa-user"></i>DETAILS
                        <hr>
                    </p>
                    <h5 class="card-title fw-bold" style="color: #05264b;">Dr Nicholas Nash

                    </h5>
                    <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">Research Fellow

                    </p>
                    <p class="card-text" style="font-size: 14px;">Department of Psychology, University of Bath, UK


                    </p>

                    <p class="card-text fw-bold" style="font-size: 14px;">
                        <a href="https://researchportal.bath.ac.uk/en/persons/n-c-nash"
                            style="text-decoration:none;"><i class="fa fa-globe"></i> Website</a>
                        <a href="/images/national researchers/CV_Pashupati-Chaudhary_Sep-2017.pdf"
                            style="text-decoration:none;"><i class="fa fa-street-view"></i> Curriculum
                            Vitae</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

{{-- international researchers section ends --}}


{{-- international collaboration section for main site code starts --}}
<div class="container my-5">
    <p class="mb-4 fw-bold fs-4">{{ $page->title }}</p>

    <div class="row">
        <div class="col-md-12"> <!-- Increased width to 9 columns -->
            <p class="lead">{!! $page->content !!}</p>
        </div>

        <div class="col-md-3"> <!-- Decreased width to 3 columns -->
            <div class="rounded-sm h-[200px] bg-white p-3 mb-4">
                @if ($page->getFirstMediaUrl())
                    <img src="{{ $page->getFirstMediaUrl() }}" alt="" class="img-fluid rounded" />
                @endif
            </div>
        </div>
    </div>
</div>



<!-- collaboration section starts -->
<div class="container text-center p-4">
    <div class="row">
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/150px-Massachusetts_General_Hospital_logo.svg_.png"
                class="img-fluid" alt="1">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/1200px-University_of_Chicago_shield.svg_.png"
                class="img-fluid" alt="2">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/1200px-University_of_Illinois_seal.svg_.png"
                class="img-fluid" alt="3">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/2015-Penn-State-University-logo-design-2.png"
                class="img-fluid" alt="4">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/a35b71804f6dd902d19458d830536185-university-michigan-u-of-m.jpg"
                class="img-fluid" alt="5">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/brown-300x149.png" class="img-fluid" alt="6">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/CABI_Logo_Accessible_RGB2.png" class="img-fluid"
                alt="7">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/Cardiff_University-9A1akwptkym-MgziUdThDSRllCG-i_mH.jpg"
                class="img-fluid" alt="8">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/CAS_logo_2.png" class="img-fluid" alt="9">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/chester_zoo_8.png" class="img-fluid" alt="10">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/Chpel_hill.jpg" class="img-fluid" alt="11">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/d93fa4942488ae36649b5c0caf8bf804.jpg" class="img-fluid"
                alt="12">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/download_1.png" class="img-fluid" alt="13">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/download_2.png" class="img-fluid" alt="14">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/download.png" class="img-fluid" alt="15">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/EvK2CNRo-co1.jpg" class="img-fluid" alt="16">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/hard.jpg" class="img-fluid" alt="17">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/Kansas_State_University_Logo_copy.png" class="img-fluid"
                alt="18">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/logo-ESRC-213x120.jpg" class="img-fluid" alt="19">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/logo-ucberkeley.png" class="img-fluid" alt="20">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/mcgill.jpg" class="img-fluid" alt="21">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/MIDS.jpg" class="img-fluid" alt="22">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/R5WJI2Z5_400x400.jpg" class="img-fluid" alt="23">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/Seal_of_the_Ohio_State_University.png" class="img-fluid"
                alt="24">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/University-of-West-Georgia1.jpg" class="img-fluid"
                alt="25">
        </div>
        <div class="col-6 col-md-3 col-lg-2 p-2">
            <img src="/images/international collaboration/UW_Seal2.png" class="img-fluid" alt="26">
        </div>
    </div>
</div>
<!-- collaboration section ends -->




{{-- international collaboration section for main site code ends --}}



{{--  backup code for human resource --}}
<div class="container-fluid text-center">
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/dirgha-j-ghimire.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Prof. Dr. Dirgha J. Ghimire
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">EXECUTIVE DIRECTOR</p>
                <p><a style="text-decoration: none;" href="https://dirghaghimire.isernepal.org/">Website</a>
                </P>
                <p><a style="text-decoration: none;"
                        href="/images/general-members/Dirgha-Ghimire.pdf">mailto:nepdjg@umich.edu</a>
                </P>
                <p><a style="text-decoration: none;" href="/images/general-members/Dirgha-Ghimire.pdf">Cirriculum
                        Viate</a>
                </P>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/Indra-Kumari-Chaudhary.jpg" class="d-block w-100"
                        alt="...">
                </P>
                <p>Mrs. Indra Kumari Chaudhary
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">PROGRAM COORDINATOR</p>

                <p><a style="text-decoration: none;" href="mailto:indraiser@outlook.com">Email</a>
                </p>
                <p><a style="text-decoration: none;" href="/images/general-members/Indra-Chaudhary.pdf">Cirriculum
                        Viate</a>
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/prem-p-pandit.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mr. Prem Prakash Pandit
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">STUDY MANAGER</p>
                <p><a style="text-decoration: none;" href="mailto:premiser@outlook.com">Email</a>
                </p>
                <p><a style="text-decoration: none;" href="/images/general-members/Prem-Pandit.pdf">Cirriculum
                        Viate</a>
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/mrs adina gurung.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mrs. Adina Gurung
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">DATA MANAGER</p>
                <p><a style="text-decoration: none;" href="mailto:nabinadkiser@outlook.com">Email</a>
                </p>
                <p><a style="text-decoration: none;" href="/images/board-members/Adina-Gurung-cv.pdf">Cirriculum
                        Viate</a>
                </P>
            </div>
        </div>

    </div>

    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Nabin Adhikari.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Nabin Adhikari
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">PROJECT MANAGER</p>
                <p><a style="text-decoration: none;" href="mailto:nabinadkiser@outlook.com">Email</a>
                </p>
                <p><a style="text-decoration: none;" href="/images/staff/Nabin-Adhikari.pdf">Cirriculum
                        Viate</a>
                </P>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/Rajendra-Ghimire.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mr. Rajendra Ghimire
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">RESEARCH OFFICER</p>
                <p><a style="text-decoration: none;" href="mailto:rajendraiser@outlook.com">Email</a>
                </p>
                <p><a style="text-decoration: none;" href="/images/general-members/Rajendra-Ghimire.pdf">Cirriculum
                        Viate</a>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/Krishna-Shrestha.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mr. Krishna Shrestha
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">RESEARCH OFFICER</p>
                <p><a style="text-decoration: none;" href="mailto:kshresthatiser@outlook.com">Email</a>
                </p>
                <p><a style="text-decoration: none;" href="/images/general-members/Krishna-Shrestha.pdf">Cirriculum
                        Viate</a>
                </P>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/Gita-subedi.jpeg" class="d-block w-100" alt="...">
                </P>
                <p>Mrs. Gita Subedi
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">FINANCE OFFICER</p>
                <p><a style="text-decoration: none;" href="mailto:gitaiser@outlook.com">Email</a>
                </p>
                <p><a style="text-decoration: none;" href="/images/general-members/Deb-Prasad-Pandey.pdf">Cirriculum
                        Viate</a>
                </P>
            </div>
        </div>



    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Saujanya-Wagle.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Saujanya Wagle
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">RESEARCH OFFICER - ANALYST</p>
                <p><a style="text-decoration: none;" href="mailto:saujanyaiser@outlook.com">Email</a>
                </p>
                <p><a style="text-decoration: none;" href="/images/staff/Saujanya-Wagle-Resume.pdf">Cirriculum
                        Viate</a>
                </P>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/general-members/Mangal-Raj-Darai.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mr. Mangal Raj Darai
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">ASST. ACCOUNT OFFICER</p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Dil_Bahadur_C K.jpeg" class="d-block w-100" alt="...">
                </P>
                <p>Dil Bahadur C.K.

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">ASST. RESEARCH OFFICER
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/sundari_lama.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Sundari Lama
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">ASST. RESEARCH OFFICER
                </p>
            </div>
        </div>



    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Nira-Gurung.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Nira Gurung
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">ASST. RESEARCH OFFICER
                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Sita-Chaudhary.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Sita Chaudhary
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">ASST. RESEARCH OFFICER
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Gobinda-Lamichhane.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Govinda Lamichhane
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">ASST. RESEARCH OFFICER
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Kamana-Ghimiredv.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Kamana Ghimire
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">ASST. RESEARCH OFFICER
                </p>
            </div>
        </div>




    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Bina_Mahato.jpeg" class="d-block w-100" alt="...">
                </P>
                <p>Bina Mahato
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">TEAM LEADER
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/mina gurung.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mina Gurung
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">SENIOR INTERVIEWER
                </p>
            </div>
        </div>


        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Subhadra-Gyawali.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Subhadra Gyanwali
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">SENIOR INTERVIEWER
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/bhumila_devkota.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Bhumila Devkota
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">SENIOR INTERVIEWER
                </p>
            </div>
        </div>

    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/bishal_adhikari.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Bishal Adhikari
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">SENIOR INTERVIEWER
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Ashish-Gurung.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Ashish Gurung
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Bishal-Pandit.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Bishal Pandit
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/durga-lama.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Durga Lama
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>


    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/shagun_gurung.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Sagun Gurung
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Asmita Adhikari.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Asmita Adhikari
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Bharat-Baral.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Bharat Baral
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/shanti_mahato.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Shanti Mahato
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>


    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/saru_kc.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Saru K.C.
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/tara_mahato.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Tara Mahato
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/tilaknath ghimire.jpeg" class="d-block w-100" alt="...">
                </P>
                <p>Tilaknath Ghimire
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/sanjit_gharti.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Sanjit Gharti
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>


    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/reena_tamang.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Reena Tamang
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/hina chaudhary.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Hina Chaudhary
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Bluvision Subedi.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Bluvision Subedi
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Reena Gurung.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Reena Gurung
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>

    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="public/images/staff/Anjana Darai.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Anjana Darai
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Manita Paudel.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Manita Paudel
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Krishna Adhikari.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Krishna Adhikari
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Bishnu Maya Chaudhary.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Bishnu Maya Chaudhary
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>

        


    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Muna CK.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Muna C.K.
                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Nisha Kumal.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Nisha Kumal

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Nisha Kafle.jpeg" class="d-block w-100" alt="...">
                </P>
                <p>Nisha Kafle

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Ritika Gurung.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Ritika Gurung

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>

        


    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Shova Gurung.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Shova Gurung

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Sujata Gurung.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Sujata Gurung

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="public/images/staff/Baldev Chaudhary.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Baldev Chaudhary

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">DATA ENTRY

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Sharmila-Khanal.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Sarmila Khanal

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">DATA ENTRY

                </p>
            </div>
        </div>

        


    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Bhagawati-Neupane.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Bhagawati Neupane

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">DATA ENTRY

                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Asmita-Adhikari-Koirala.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Asmita Adhikari Koirala

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">DATA ENTRY

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Rishi Ram Neupane.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Rishi Ram Neupane

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">LOGISTIC ASSISTANT

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Niraj Gurung.jpeg" class="d-block w-100" alt="...">
                </P>
                <p>Niraj Gurung

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">OFFICE ASSISTANT

                </p>
            </div>
        </div>
        


    </div>

    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Mohan Ghale.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mohan Ghale


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">NIGHT GUARD


                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Mohan Prasad Ghale.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mohan Prasad Ghale

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">NIGHT GUARD


                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Putali Darai.jpeg" class="d-block w-100" alt="...">
                </P>
                <p>Putali Darai


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">GARDENER


                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Shreemaya Thapa.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Shreemaya Thapa

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">GARDENER

                </p>
            </div>
        </div>

        



    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Bishnu Adhikari.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Bishnu Adhikari

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">DATA MANAGER
                </p>
                <p><a style="text-decoration: none;" href="mailto:bishnuiser@outlook.com">Email</a>
                </p>
                <p><a style="text-decoration: none;" href="/images/staff/Bishnu-Adhikari_CV.docx">Cirriculum
                        Viate</a>
                </P>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/tula ram sijali.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Tula Ram Sijali


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">STUDY MANAGER

                </p>
                <p><a style="text-decoration: none;" href="mailto:tulaiser@outlook.com">Email</a>
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/rija-manandhar.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Rija Manandhar


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">SENIOR RESEARCH OFFICER


                </p>
                <p><a style="text-decoration: none;" href="#">Email</a>
                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Birendra Kunwar.jpeg" class="d-block w-100" alt="...">
                </P>
                <p>Birendra Kunwar

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">RESEARCH OFFICER


                </p>
                <p><a style="text-decoration: none;" href="mailto:briendraiser@outlook.com">Email</a>
                </p>
            </div>
        </div>

        


    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Salina Maharjan.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Salina Maharjan

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">ASST. RESEARCH OFFICER
                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Shuvekshya Tiwari.png" class="d-block w-100" alt="...">
                </P>
                <p>Shuvekshya Tiwari

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">ASST. RESEARCH OFFICER
                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Prakriti Poudel.png" class="d-block w-100" alt="...">
                </P>
                <p>Prakriti Poudel


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">ASST. RESEARCH OFFICER
                </p>
            </div>
        </div>
        
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Surendra BK.jpeg" class="d-block w-100" alt="...">
                </P>
                <p>Surendra B.K.

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">ASST. RESEARCH OFFICER
                </p>
            </div>
        </div>


    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Utpal Devkota.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Utpal Devkota


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">ASST. RESEARCH OFFICER
                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Asmita Thapa.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Asmita Thapa

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">ASST. RESEARCH OFFICER
                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Ambika Baniya.jpeg" class="d-block w-100" alt="...">
                </P>
                <p>Ambika Baniya


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">ASST. RESEARCH OFFICER
                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Nimesh Neupane.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Nimesh Neupane


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">RESEARCH OFFICER
                </p>
            </div>
        </div>


    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Sushil Thapa.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Sushil Thapa

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">WEBMASTER
                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Amrit Dawadi.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Amrit Dawadi


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">ASST. TECHNICIAN

                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Suman Pandit.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Suman Pandit


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">ASST. PROGRAMMER

                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Kabita Kumari Mahato.jpeg" class="d-block w-100" alt="...">
                </P>
                <p>Kabita Kumari Mahato


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">SENIOR INTERVIEWER

                </p>
            </div>
        </div>



    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Jamuna Lama.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Jamuna Lama


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Ajita Adhikari.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Ajita Adhikari


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Manisha Lamichhane.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Manisha Lamichhane


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Pratikshya Subedi.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Pratikshya Subedi


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>


    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Sujata Bhusal.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Sujata Bhusal


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Mebhisha Khadka.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mebhisha Khadka

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Nisha Paudel.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Nisha Paudel


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Nabin Poudel.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Nabin Poudel


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>


    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Bindu Shrestha.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Bindu Shrestha


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Parbati Shrestha.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Parbati Shrestha


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Pramila Chapagain.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Pramila Chapagain

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Merisa B.K..jpg" class="d-block w-100" alt="...">
                </P>
                <p>Merisa B.K.

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>


    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Kusum Rimal.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Kusum Rimal


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Ganga BK.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Ganga B.K.

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Dipesh chan.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Dipesh chan

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Saraswoti Giri.jpeg" class="d-block w-100" alt="...">
                </P>
                <p>Saraswoti Giri

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Samana Gurung.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Samana Gurung

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Sabina Mahato.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Sabina Mahato

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Muna Sapkota.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Muna Sapkota


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Sunita Ale Magar.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Sunita Ale Magar


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>


    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Mina Mahato.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mina Mahato


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Menuka Tuladhar.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Menuka Tuladhar


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Menu Gayak.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Menu Gayak


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Manita Gurung.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Manita Gurung


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Mamata Shrestha.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mamata Shrestha


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Mahadev Subedi.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Mahadev Subedi


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Krishna Bhandari.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Krishna Bhandari


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Kopila Bhandari.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Kopila Bhandari


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>



    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Kalpana Tamang.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Kalpana Tamang


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Gayatri Gurung.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Gayatri Gurung


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Shanta Adhikari.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Shanta Adhikari


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Abshek Adhikari.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Abshek Adhikari


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>


    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Ganga Ale Magar.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Ganga Ale Magar

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Bishal Paudel.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Bishal Paudel


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Binod Adhikari.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Binod Adhikari



                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Sangita Dhungana.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Sangita Dhungana



                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>



    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Dipendra Raj Dhungana.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Dipendra Raj Dhungana


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Deepa Dawadi.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Deepa Dawadi



                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Sudha Chaulagain.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Sudha Chaulagain



                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Shusila Kafle.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Shusila Kafle



                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>


    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Shanti Darai.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Shanti Darai



                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Sushanta Upreti.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Sushanta Upreti



                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Ramu P. Dawadi.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Ramu P. Dawadi



                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">EXAMINER


                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Sanjaya Poudel.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Sanjaya Poudel



                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">EXAMINER


                </p>
            </div>
        </div>

    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">


        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Saroj Lamichhane.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Saroj Lamichhane



                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">EXAMINER


                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Sapana Kafle.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Sapana Kafle



                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">EXAMINER


                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Saraswati Bhujel.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Saraswati Bhujel



                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">EXAMINER


                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Bindu Darai.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Bindu Darai


                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">EXAMINER


                </p>
            </div>
        </div>
    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Sushmita Subedi.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Sushmita Subedi



                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">EXAMINER


                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Manoj Poudel.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Manoj Poudel



                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">EXAMINER


                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Anil Sunar.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Anil Sunar



                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Sandesh Parajuli.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Sandesh Parajuli



                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">


        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Sahadev Acharya.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Sahadev Acharya



                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">INTERVIEWER

                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Bimal Darai.jpeg" class="d-block w-100" alt="...">
                </P>
                <p>Bimal Darai



                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">OFFICE ASSISTANT


                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Manoj Darai.jpg" class="d-block w-100" alt="...">
                </P>
                <p>Manoj Darai



                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">OFFICE ASSISTANT


                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Devaki Darai.jpeg" class="d-block w-100" alt="...">
                </P>
                <p>Devaki Darai



                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">GARDENER


                </p>
            </div>
        </div>
    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Nar B. Gurung.jpeg" class="d-block w-100" alt="...">
                </P>
                <p>Nar B. Gurung




                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">NIGHT GUARD



                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Dambar B. Ghale.jpeg" class="d-block w-100" alt="...">
                </P>
                <p>Dambar B. Ghale




                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">NIGHT GUARD



                </p>
            </div>
        </div>

        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Brikha B. Ghale.jpeg" class="d-block w-100" alt="...">
                </P>
                <p>Brikha B. Ghale




                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">NIGHT GUARD



                </p>
            </div>
        </div>


        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1">
                    <img src="/images/staff/Gopal Thapa.jpeg" class="d-block w-100" alt="...">
                </P>
                <p>Gopal Thapa

                </P>
                <p class="card-text fw-bold" style="color: #05264b; font-size: 18px;">DRIVER



                </p>
            </div>
        </div>

    </div>

</div>

{{-- backup code for human resources ends --}}
