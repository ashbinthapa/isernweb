<!-- resources/views/contact.blade.php -->

@include('layouts.header')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link">Contact Us</a>
                </li>
                <!-- Add more navigation items as needed -->
            </ul>
        </div>
    </div>
</nav>
<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <h2>Send Us A Message</h2>
            </div>
            <div class="col-mb-3">
                @if (session('success'))
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary d-none" id="successModalButton" data-bs-toggle="modal"
                        data-bs-target="#successModal">
                        Success Modal
                    </button>
                @endif
            </div>

            <form action="{{ route('contact') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea name="message" class="form-control" required rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-4 mx-5">
            <div class="row mb-4">
                <div class="col">
                    <h2>Our Contacts</h2>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                </div>
                <div class="col-10">
                    Address<br>
                    Bharatpur-15, Fulbari, Chitwan, Nepal
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                </div>
                <div class="col-10">
                    Telephone<br>
                    +977-56-591054 , +977-56-592406
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
                <div class="col-10">
                    Email<br>
                    iser.nepal@outlook.com
                </div>
            </div>

        </div>
    </div>
    <div class="row my-5">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3534.128100675908!2d84.36665447613971!3d27.651508127950883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fa3c167e33df%3A0xdc393700902f9460!2sInstitute%20for%20Social%20and%20Environmental%20Research-Nepal!5e0!3m2!1sen!2snp!4v1711619424198!5m2!1sen!2snp"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if (session('success'))
                    {{ session('success') }}
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
