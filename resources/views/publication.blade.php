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
                @foreach ($publications_data as $type)
                    <option value="{{ $type->publicationcategory->id }}">{{ $type->publicationcategory->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4 mb-3">
            <label for="filterPublicationDate" class="form-label">Filter by Publication Date:</label>
            <select id="filterPublicationDate" class="form-select">
                <option value="all">All</option>
                <!-- Populate options dynamically based on available publication dates -->
                @foreach ($publications_data as $date)
                    <option value="{{ $date->year }}">{{ $date->year }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3 p-4">
            <button id="applyFilterBtn" class="btn btn-primary">Apply Filters</button>
        </div>
    </div>
    <div class="card table-responsive mt-4 text-center">
        <table id="example" class="table table-striped table-borderless">
            <thead class="fw-bold custom-table-header">
                <tr>
                    <th scope="col" data-column="0" class="col-3 sortable">Publication Type <i
                            class="fa fa-sort"></i></th>
                    <th scope="col" data-column="1" class="col-6 sortable">Publication <i class="fa fa-sort"></i>
                    </th>
                    <th scope="col" data-column="2" class="col-1 sortable">Link <i class="fa fa-sort"></i>
                    </th>
                    <th scope="col" data-column="3" class="col-2 sortable">Year <i class="fa fa-sort"></i>
                    </th>
                </tr>
            </thead>
            <tbody id="tableBody">
                <!-- Table rows will be added dynamically using JavaScript -->
            </tbody>
        </table>
    </div>
    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        <nav aria-label="Page navigation example">
            <ul id="pagination" class="pagination justify-content-center">
                <!-- Pagination links will be added dynamically using JavaScript -->
            </ul>
        </nav>
    </div>
</div>

@include('layouts.footer')
