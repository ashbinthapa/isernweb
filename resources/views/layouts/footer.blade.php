    <footer>
        <div class="container-fluid p-5 custom-footer-style footer-details footer-design">
            <div class="row m-5">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h4>Contact Details</h4>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-map" aria-hidden="true"></i>
                            Bharatpur-15, Fulbari, Chitwan, Nepal</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>
                            +977-56-591054 ,+977-56-592406</li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i>
                            iser.nepal@outlook.com</li>
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i>
                            10 A.M. - 5 P.M.</li>
                        <li>
                            <a href="https://www.facebook.com/isernepalofficial/" target="_blank"
                                class="social-icons-size">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/iser-nepal-68b407160/" target="_blank"
                                class="social-icons-size">
                                <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h4>Forms</h4>
                    <ul class="list-unstyled">
                        <li><a href="#"> <i class="fa fa-link" aria-hidden="true"></i>
                                Proposal Review Form</a></li>
                        <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i>
                                Survey Data Analysis Training</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h4>Important Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="https://cvfs.isr.umich.edu/"> <i class="fa fa-link" aria-hidden="true"></i>
                                <strong>CVFS</strong>
                                -Chitwan Valley Family Study</a></li>
                        <li><a href="https://www.icpsr.umich.edu/web/ICPSR/search/studies?q=chitwan"> <i
                                    class="fa fa-link" aria-hidden="true"></i>
                                <strong>ICPSR</strong>
                                -University of Michigan</a></li>
                        <li><a href="https://ukdataservice.ac.uk/"> <i class="fa fa-link" aria-hidden="true"></i>
                                UK Data Service</a></li>
                        <li><a href="http://idea.isernepal.org/"> <i class="fa fa-link" aria-hidden="true"></i>
                                IDEA</a></li>
                        <li><a href="https://famelo.netlify.app/"> <i class="fa fa-link" aria-hidden="true"></i>
                                FAMELO</a></li>
                        <li><a href="http://loaf.isernepal.org/"> <i class="fa fa-link" aria-hidden="true"></i>
                                LOAF</a></li>
                        <li><a href="http://home.isr.umich.edu/"> <i class="fa fa-link" aria-hidden="true"></i>
                                <strong>ISR</strong>
                                -University of Michigan</a></li>
                        <li><a href="https://censusnepal.cbs.gov.np/"> <i class="fa fa-link" aria-hidden="true"></i>
                                <strong>CBS</strong>
                                -Central Bureau of Statistics
                            </a></li>
                        <li><a href="https://bharatpurmun.gov.np/"> <i class="fa fa-link" aria-hidden="true"></i>
                                Bharatpur Metropolitan City</a></li>
                        <li><a href="https://nhrc.gov.np/"> <i class="fa fa-link" aria-hidden="true"></i>
                                <strong>NHRC</strong>
                                -Nepal Health Research Council</a></li>
                        <li><a href="https://isernepal.org.np/other-links"> <i class="fa fa-link"
                                    aria-hidden="true"></i>
                                Other Links</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h4>Latest Events/News</h4>
                    <div class="sh-recent-posts-widgets">
                        <div class="sh-recent-posts-widgets-item">
                            <span class="post-meta-categories">
                                <a href="https://isernepal.org.np/category/announcement/">Announcement</a>
                            </span>
                            <a href="https://isernepal.org.np/vacancy-announcement-for-project-manager/">
                                <h6>VACANCY ANNOUNCEMENT FOR PROJECT MANAGER</h6>
                            </a>
                        </div>
                        <div class="sh-recent-posts-widgets-item">
                            <span class="post-meta-categories">
                                <a href="https://isernepal.org.np/category/announcement/">Announcement</a>
                            </span>
                            <a
                                href="https://isernepal.org.np/vacancy-announcement-for-research-assistant-and-interviewers/">
                                <h6>VACANCY ANNOUNCEMENT FOR RESEARCH ASSISTANT/INTERVIEWERS</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-3">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <span>© Institute for Social and Environmental Research – Nepal</span>
                </div>
            </div>
        </div>
    </footer>
    <script>
        // Add an event listener to the form submission
        document.getElementById('searchForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting normally

            // Get the value of the search input
            var searchTerm = document.getElementById('searchInput').value;

            // Perform your search functionality here, for example, redirecting to a search page
            window.location.href = '/search?query=' + encodeURIComponent(searchTerm);
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the dropdown elements
            const filterPublicationType = document.getElementById("filterPublicationType");
            const filterPublicationDate = document.getElementById("filterPublicationDate");

            // Initialize pagination variables
            const table = document.getElementById("example");
            const tableBody = table.querySelector("tbody");
            const rows = tableBody.getElementsByTagName("tr");
            const rowsPerPage = 10; // Number of rows per page
            let currentPage = 1;

            // Function to display rows for the current page
            function displayRows() {
                const start = (currentPage - 1) * rowsPerPage;
                const end = start + rowsPerPage;

                for (let i = 0; i < rows.length; i++) {
                    if (i >= start && i < end) {
                        rows[i].style.display = "";
                    } else {
                        rows[i].style.display = "none";
                    }
                }
            }

            // Initial display of rows
            displayRows();

            // Add event listener to pagination links
            document.querySelectorAll(".pagination .page-link").forEach(function(link) {
                link.addEventListener("click", function(event) {
                    event.preventDefault();
                    currentPage = parseInt(this.dataset.page);
                    displayRows();
                });
            });

            // Add event listener to filter by publication type
            filterPublicationType.addEventListener("change", function() {
                filterTable();
            });

            // Add event listener to filter by publication date
            filterPublicationDate.addEventListener("change", function() {
                filterTable();
            });

            function filterTable() {
                const selectedType = filterPublicationType.value;
                const selectedDate = filterPublicationDate.value;
                const rows = document.querySelectorAll("tbody tr");

                rows.forEach(function(row) {
                    const type = row.getAttribute("data-type");
                    const date = row.getAttribute("data-date");

                    if ((selectedType === "all" || selectedType === type) &&
                        (selectedDate === "all" || selectedDate === date)) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                });
            }
        });
    </script>
    <!-- Script to trigger modal on success -->
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var myModal = new bootstrap.Modal(document.getElementById('successModal'), {
                    keyboard: false
                });
                myModal.show();
            });
        </script>
    @endif
    <script src="{{ asset('resources/js/app.js') }}"></script>
    <script src="{{ asset('bootstrap-5.3.3-dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.js') }}"></script>
    </body>

    </html>
