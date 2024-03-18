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
                    <a class="nav-link" href="/projects">Research</a>
                </li>
                <!-- Add more navigation items as needed -->
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center py-4">
    <div class="row justify-content-center">
        <div class="col-md-8"> <!-- Increased width to 9 columns -->
            <p class="p-3">Findings from high quality rigorous scientific research are crucial to identify emerging social and environmental issues, formulating appropriate policies and to make informed decisions for sustainable development. The theoretical motivation of ISE-N’s research programs lies in the investigation of micro – level association to inform our understanding of emerging macro-level social and environmental trends. ISER-N’s research is governed by fundamental principles of democratic values that dignity every human being as equal and strictly adhere to individual rights for privacy. Toward this end, all research programs are mandated to be reviewed and approved by International Review Board (IRB) which is formally designated to approve, monitor, and review biomedical and behavioral research involving humans with the aim of protecting the rights and welfare of every research subject. The data are available in ISER-N office at Fulbari, Chitwan while one can also electronically access them from Inter-university Consortium for Political and Social Research (ICPSR) at the University for Michigan and UK Data Bank through the following link listed below. The publications resulted from these data are available both in publication Tab and Chitwan Valley family Study website (www.cvfs.isr.umich.edu)</p>
        </div>
    </div>  
    <ul class="nav nav-tabs justify-content-center" id="filterTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">All</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="category1-tab" data-bs-toggle="tab" data-bs-target="#category1" type="button" role="tab" aria-controls="category1" aria-selected="false">Ongoing Research</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="category2-tab" data-bs-toggle="tab" data-bs-target="#category2" type="button" role="tab" aria-controls="category2" aria-selected="false">Completed Research</button>
      </li>
    </ul>
    <div class="tab-content" id="filterTabContent">
        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
            <div class="container-fluid">
                <div class="container text-center" style="margin-top: 20px; margin-bottom: 20px;">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                        @foreach($research_data['ongoing_research'] as $ongoing_research)
                            <div class="col p-2">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <a href="/projects/{{ $ongoing_research->research_status }}/{{ $ongoing_research->slug }}" style="text-decoration: none; color: inherit;">
                                            <h5 class="card-title">{{ $ongoing_research->title }}</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @foreach($research_data['completed_research'] as $completed_research)
                            <div class="col p-2">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <a href="/projects/{{ $completed_research->research_status }}/{{ $completed_research->slug }}" style="text-decoration: none; color: inherit;">
                                            <h5 class="card-title">{{ $completed_research->title }}</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="category1" role="tabpanel" aria-labelledby="category1-tab">
            <div class="container-fluid">
                <div class="container text-center" style="margin-top: 20px; margin-bottom: 20px;">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                        @foreach($research_data['ongoing_research'] as $ongoing_research)
                            <div class="col p-2">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <a href="/projects/{{ $ongoing_research->research_status }}/{{ $ongoing_research->slug }}" style="text-decoration: none; color: inherit;">
                                            <h5 class="card-title">{{ $ongoing_research->title }}</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="category2" role="tabpanel" aria-labelledby="category2-tab">
            <div class="container-fluid">
                <div class="container text-center" style="margin-top: 20px; margin-bottom: 20px;">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                        @foreach($research_data['completed_research'] as $completed_research)
                            <div class="col p-2">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <a href="/projects/{{ $completed_research->research_status }}/{{ $completed_research->slug }}" style="text-decoration: none; color: inherit;">
                                            <h5 class="card-title">{{ $completed_research->title }}</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@include('layouts.footer')
