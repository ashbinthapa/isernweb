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
    <form id="filterForm" method="GET" action="{{ route('publications.archive') }}">
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="filterPublicationType" class="form-label">Filter by Publication Type:</label>
                <select id="filterPublicationType" name="type" class="form-select">
                    <option value="all" {{ request('type') == 'all' ? 'selected' : '' }}>All</option>
                    @foreach ($publications_data['publicationsCategory'] as $type)
                        <option value="{{ $type->id }}" {{ request('type') == $type->id ? 'selected' : '' }}>
                            {{ $type->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label for="filterPublicationDate" class="form-label">Filter by Publication Date:</label>
                <select id="filterPublicationDate" name="year" class="form-select">
                    <option value="all" {{ request('year') == 'all' ? 'selected' : '' }}>All</option>
                    @foreach ($publications_data['uniqueYears'] as $year)
                        <option value="{{ $year->year }}" {{ request('year') == $year->year ? 'selected' : '' }}>
                            {{ $year->year }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3 p-4">
                <button id="applyFilterBtn" type="submit" class="btn btn-primary">Apply Filters</button>
            </div>
        </div>
    </form>

    <div class="card table-responsive mt-4 text-center">
        <table id="example" class="table table-striped table-borderless">
            <thead class="fw-bold custom-table-header">
                <tr>
                    <th scope="col" class="col-3">Publication Type</th>
                    <th scope="col" class="col-6">Publication</th>
                    <th scope="col" class="col-1">Link</th>
                    <th scope="col" class="col-2">Year</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($publications_data['publications'] as $publication)
                    <tr>
                        <td>{{ $publication->publicationcategory->name }}</td>
                        <td>{{ $publication->title }}</td>
                        <td><a href="{{ $publication->link }}" target="_blank">View</a></td>
                        <td>{{ $publication->year }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center">
        {{ $publications_data['publications']->links('vendor.pagination.bootstrap-5') }}
    </div>
</div>

@include('layouts.footer')
