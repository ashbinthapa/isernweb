@include('layouts.header')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <ul class="navbar-nav d-flex flex-row flex-wrap align-items-center">
            <li class="nav-item">
                <a class="nav-link fs-6 fs-lg-6" style="color: #01274c;" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <i class="fa fa-angle-right mx-2" aria-hidden="true"></i>
            </li>
            <!-- Check if parent page exists -->
            <li class="nav-item">
                <a class="nav-link fs-6 fs-lg-6" style="color: #01274c;" href="/about-us">About Us</a>
            </li>
            <li class="nav-item">
                <i class="fa fa-angle-right mx-2" aria-hidden="true"></i>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold fs-5 fs-lg-5" style="color: #01274c;">Board Members</a>
            </li>
            <!-- Add more navigation items as needed -->
        </ul>
    </div>
</nav>
<div class="container-fluid text-center">
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1"><img class="d-block w-100" src="../../../images/board-members/Dharma-raj-dangol.jpg"
                        alt="..." /></p>
                <p>Prof. Dr. Dharma Raj Dangol</p>
                <p><strong>CHAIRPERSON</strong></p>
                <p><a style="text-decoration: none;"
                        href="../../../images/board-members/Prof-Dr-Dharma-Raj-Dangol-CV.pdf"><i
                            class="fas fa-file-alt"></i> Cirriculum Viate</a></p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1"><img class="d-block w-100" src="../../../images/board-members/mr-Dipak-Paudel.png"
                        alt="..." /></p>
                <p>Mr. Deepak Paudel</p>
                <p><strong>VICE-CHAIRPERSON</strong></p>
                <p><a style="text-decoration: none;" href="../../../images/board-members/Deepak-Poudel-cv.pdf"><i
                            class="fas fa-file-alt"></i> Cirriculum Viate</a></p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1"><img class="d-block w-100"
                        src="../../../images/board-members/Durga-Prasad-Adhikari.jpg" alt="..." /></p>
                <p>Mr. Durga Prasad Adhikari</p>
                <p><strong>SECRETARY</strong></p>
                <p><a style="text-decoration: none;" href="../../../images/board-members/CV-DPA.pdf"><i
                            class="fas fa-file-alt"></i> Cirriculum Viate</a></p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1"><img class="d-block w-100"
                        src="../../../images/board-members/Mrs.-Yasodha-Nakarmi-Shrestha.png" alt="..." /></p>
                <p>Mrs. Yasoda Nakarmi Shrestha</p>
                <p><strong>TREASURER</strong></p>
                <p><a style="text-decoration: none;"
                        href="../../../images/board-members/Final-updated-CV-Yasodha-Shrestha-16-Dec-2019-converted.pdf"><i
                            class="fas fa-file-alt"></i> Cirriculum Viate</a></p>
            </div>
        </div>
    </div>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1"><img class="d-block w-100"
                        src="../../../images/board-members/Ananta-JIbi-Ghimire-.jpg" alt="..." /></p>
                <p>Mr. Ananta Jibi Ghimire</p>
                <p><strong>MEMBER</strong></p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1"><img class="d-block w-100"
                        src="../../../images/board-members/Mrs-Grishma-Khanal-Adhikari.png" alt="..." /></p>
                <p>Mrs. Grishma Khanal Adhikari</p>
                <p><strong>MEMBER</strong></p>
            </div>
        </div>
        <div class="col p-2">
            <div class="card h-100">
                <p class="p-1"><img class="d-block w-100" src="../../../images/board-members/Shreekumar-Maharjan.jpg"
                        alt="..." /></p>
                <p>Dr. Shreekumar Maharjan</p>
                <p><strong>MEMBER</strong></p>
                <p><a style="text-decoration: none;" href="../../../images/board-members/Shree-CV-2023-Updated.pdf"><i
                            class="fas fa-file-alt"></i> Cirriculum Viate</a></p>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
