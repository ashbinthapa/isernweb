<!-- resources/views/contact.blade.php -->
@include('layouts.header')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item pt-2">
                <a class="nav-link fw-bold fs-6" style="color: #01274c;">Contact Us</a>
            </li>
            <!-- Add more navigation items as needed -->
        </ul>
    </div>
</nav>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <p class="mb-4 fw-bold fs-2">Send Us A Message</p>
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
                    <label for="name" class="form-label fw-bold">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label fw-bold">Message</label>
                    <textarea name="message" class="form-control" required rows="5"></textarea>
                </div>
                <button type="submit" class="custom-button fw-bold">Submit</button>
            </form>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
            <div class="row text-center">
                <div class="col">
                    <p class="mb-4 fw-bold fs-2">Our Contacts</p>
                </div>
            </div>
            <div class="row mb-4 text-center">
                <div class="col">
                    <i class="fa fa-map-marker fs-1" aria-hidden="true"></i>
                    <p class="fw-bold">Address</p>
                    <p>Bharatpur-15, Fulbari, Chitwan, Nepal</p>
                </div>
            </div>
            <div class="row mb-4 text-center">
                <div class="col">
                    <i class="fa fa-volume-control-phone fs-1" aria-hidden="true"></i>
                    <p class="fw-bold">Telephone</p>
                    <p>+977-56-591054 , +977-56-592406</p>
                </div>
            </div>
            <div class="row mb-4 text-center">
                <div class="col">
                    <i class="fa fa-envelope fs-1" aria-hidden="true"></i>
                    <p class="fw-bold">Email</p>
                    <p>iser.nepal@outlook.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
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
