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
                    <a class="nav-link" href="/publications">Publications</a>
                </li>
                <!-- Add more navigation items as needed -->
            </ul>
        </div>
    </div>
</nav>

<div class="container p-5">
    <div class="row">
        <div class="col-md-4 mb-3">
            <label for="filterPublicationType" class="form-label">Filter by Publication Type:</label>
            <select id="filterPublicationType" class="form-select">
                <option value="all">All</option>
                <!-- Populate options dynamically based on available publication types -->
                @foreach($publications_data as $type)
                <option value="{{ $type->publicationcategory->id }}">{{ $type->publicationcategory->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4 mb-3">
            <label for="filterPublicationDate" class="form-label">Filter by Publication Date:</label>
            <select id="filterPublicationDate" class="form-select">
                <option value="all">All</option>
                <!-- Populate options dynamically based on available publication dates -->
                @foreach($publications_data as $date)
                <option value="{{ $date->year }}">{{ $date->year }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="table-responsive">
        <table id="example" class="table table-striped table-borderless">
            <thead class="custom-table-header">
                <tr>
                    <th scope="col">Publication Type</th>
                    <th scope="col">Publication</th>
                    <th scope="col">Link</th>
                    <th scope="col">Year</th>
                </tr>
            </thead>
            <tbody>
                @foreach($publications_data as $publication)
                <tr data-type="{{ $publication->publicationcategory->id }}" data-date="{{ $publication->year }}">
                    <td>{{ $publication->publicationcategory->name }}</td>
                    <td>{{ $publication->title }}</td>
                    <td><a href="{{ $publication->link }}" target="_blank">{{ $publication->link }}</a></td>
                    <td>{{ $publication->year }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <!-- Pagination links will be dynamically populated here -->
            </ul>
        </nav>
    </div>
</div>

@include('layouts.footer')