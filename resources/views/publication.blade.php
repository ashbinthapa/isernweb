@include('layouts.header')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <p class="fw-bold fs-4 mt-4">Publications</p>
        <ul class="navbar-nav d-flex flex-row flex-wrap align-items-center">
            <li class="nav-item">
                <a class="nav-link fs-6 fs-lg-6" style="color: #01274c;" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <i class="fa fa-angle-right mx-2" aria-hidden="true"></i>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold fs-5 fs-lg-5" style="color: #01274c;">Publications</a>
            </li>
            <!-- Add more navigation items as needed -->
        </ul>
    </div>
</nav>
<div class="container p-5">
    <form id="filterForm" method="GET" action="{{ route('publications.archive') }}">
        <div class="row">
            <div class="col-md-4 mb-3 p-1">
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
            <div class="col-md-4 mb-3 p-1">
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
            <div>
                <a href="/publications">
                    <button class="custom-button fw-bold">CLEAR ALL FLITERS</button>
                </a>
            </div>
        </div>
    </form>

    <div class="card table-responsive mt-4 text-left">
        <table id="example" class="table table-striped table-borderless">
            <thead class="fw-bold custom-table-header">
                <tr>
                    @php
                        $sortOrderNext = request('sortOrder') == 'asc' ? 'desc' : 'asc';
                    @endphp
                    <th scope="col" class="col-3">
                        <a
                            href="{{ route('publications.archive', array_merge(request()->query(), ['sortBy' => 'publicationcategory_id', 'sortOrder' => $sortOrderNext])) }}">
                            Publication Type
                            @if (request('sortBy') == 'publicationcategory_id')
                                <i class="fa fa-sort-{{ request('sortOrder') == 'asc' ? 'up' : 'down' }}"></i>
                            @else
                                <i class="fa fa-sort"></i>
                            @endif
                        </a>
                    </th>
                    <th scope="col" class="col-6">
                        <a
                            href="{{ route('publications.archive', array_merge(request()->query(), ['sortBy' => 'title', 'sortOrder' => $sortOrderNext])) }}">
                            Publication
                            @if (request('sortBy') == 'title')
                                <i class="fa fa-sort-{{ request('sortOrder') == 'asc' ? 'up' : 'down' }}"></i>
                            @else
                                <i class="fa fa-sort"></i>
                            @endif
                        </a>
                    </th>
                    <th scope="col" class="col-1">Link</th>
                    <th scope="col" class="col-2">
                        <a
                            href="{{ route('publications.archive', array_merge(request()->query(), ['sortBy' => 'year', 'sortOrder' => $sortOrderNext])) }}">
                            Year
                            @if (request('sortBy') == 'year')
                                <i class="fa fa-sort-{{ request('sortOrder') == 'asc' ? 'up' : 'down' }}"></i>
                            @else
                                <i class="fa fa-sort"></i>
                            @endif
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($publications_data['publications'] as $publication)
                    <tr>
                        <td>{{ $publication->publicationcategory->name }}</td>
                        <td>{{ $publication->title }}</td>
                        @if (!empty($publication->link))
                            <td>
                                <a href="{{ $publication->link }}" target="_blank" class="fw-bold"
                                    style="text-decoration: none; color: #01274c;">
                                    <button class="publication-doi-button">DOI</button>
                                </a>
                            </td>
                        @else
                            <td>

                            </td>
                        @endif
                        <td>{{ $publication->year }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center pt-2">
        {{ $publications_data['publications']->appends(['type' => request('type'), 'year' => request('year'), 'sortBy' => request('sortBy'), 'sortOrder' => request('sortOrder')])->links('vendor.pagination.bootstrap-5') }}
    </div>
</div>



@include('layouts.footer')
