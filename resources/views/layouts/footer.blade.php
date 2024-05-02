    <footer>
        <div class="container-fluid p-5 custom-footer-style footer-details footer-design">
            <div class="row m-5">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h4 class="fw-bold">Contact Details</h4>
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
                    <h4 class="fw-bold">Forms</h4>
                    <ul class="list-unstyled">
                        <li><a href="#"> <i class="fa fa-link" aria-hidden="true"></i>
                                Proposal Review Form</a></li>
                        <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i>
                                Survey Data Analysis Training</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h4 class="fw-bold">Important Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="https://cvfs.isr.umich.edu/"> <i class="fa fa-link" aria-hidden="true"></i>
                                <strong>CVFS</strong>
                                -Chitwan Valley Family Study</a></li>
                        <li><a href="https://www.icpsr.umich.edu/web/ICPSR/search/studies?q=chitwan"> <i
                                    class="fa fa-link" aria-hidden="true"></i>
                                <strong>ICPSR</strong>
                                -University of Michigan</a></li>
                        <li><a href="https://ukdataservice.ac.uk/"> <i class="fa fa-link" aria-hidden="true"></i>
                                <strong>UK Data Service</strong></a></li>
                        <li><a href="http://idea.isernepal.org/"> <i class="fa fa-link" aria-hidden="true"></i>
                                <strong>IDEA</strong></a></li>
                        <li><a href="https://famelo.netlify.app/"> <i class="fa fa-link" aria-hidden="true"></i>
                                <strong>FAMELO</strong></a></li>
                        <li><a href="http://loaf.isernepal.org/"> <i class="fa fa-link" aria-hidden="true"></i>
                                <strong>LOAF</strong></a></li>
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
                    <h4 class="fw-bold">Latest Events/News</h4>
                    <div class="sh-recent-posts-widgets">
                        @foreach ($posts_latest_news as $post)
                            <div class="sh-recent-posts-widgets-item">
                                <span class="post-meta-categories">
                                    <a
                                        href="/posts/category/{{ $post->category->name }}">{{ $post->category->name }}</a>
                                </span>
                                <a href="{{ route('posts.show', ['slug' => $post->slug]) }}">
                                    <h6 class="fw-bold">{{ $post->title }}</h6>
                                </a>
                            </div>
                        @endforeach

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{ asset('resources/js/app.js') }}"></script>
    <script src="{{ asset('bootstrap-5.3.3-dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.js') }}"></script>
    {{-- script for hover down delay not working --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var dropdowns = document.querySelectorAll(".hover-dropdown");

            dropdowns.forEach(function(dropdown) {
                var timeout;
                dropdown.addEventListener("mouseenter", function() {
                    clearTimeout(timeout);
                    var menu = dropdown.querySelector(".dropdown-menu");
                    menu.classList.remove("delayed");
                });
                dropdown.addEventListener("mouseleave", function() {
                    var menu = dropdown.querySelector(".dropdown-menu");
                    timeout = setTimeout(function() {
                        menu.classList.add("delayed");
                    }, 2000); // Adjust the delay time here (in milliseconds)
                });

                // Add event listener to sub-level dropdowns
                var submenus = dropdown.querySelectorAll(".dropdown-submenu");

                submenus.forEach(function(submenu) {
                    submenu.addEventListener("mouseenter", function() {
                        clearTimeout(timeout);
                    });
                    submenu.addEventListener("mouseleave", function() {
                        var menu = submenu.querySelector(".dropdown-menu");
                        timeout = setTimeout(function() {
                            menu.classList.add("delayed");
                        }, 2000); // Adjust the delay time here (in milliseconds)
                    });
                });
            });
        });
    </script>
    {{-- script for header search --}}
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

    {{-- script for filter of publication by its type and date --}}
    <script>
        // Sample data, replace with your actual data
        const publicationsData = {!! isset($publications_data) ? json_encode($publications_data) : '[]' !!};

        let currentPage = 1;
        const rowsPerPage = 5;

        function renderTable(page) {
            const startIndex = (page - 1) * rowsPerPage;
            const endIndex = startIndex + rowsPerPage;
            const filteredData = applyFilters(publicationsData);
            const paginatedData = filteredData.slice(startIndex, endIndex);

            const tableBody = document.getElementById('tableBody');
            tableBody.innerHTML = '';

            paginatedData.forEach(publication => {
                const row = document.createElement('tr');
                row.innerHTML = `
                <td class="align-middle">${publication.publicationcategory.name}</td>
                <td class="align-middle">${publication.title}</td>
                <td class="align-middle"><a href="${publication.link}" target="_blank" class="fw-bold"
                        style="text-decoration: none; color: #01274c;">DOI</a></td>
                <td class="align-middle">${publication.year}</td>
            `;
                tableBody.appendChild(row);
            });
        }

        function renderPagination() {
            const totalPages = Math.ceil(publicationsData.length / rowsPerPage);
            const pagination = document.getElementById('pagination');
            pagination.innerHTML = '';

            for (let i = 1; i <= totalPages; i++) {
                const li = document.createElement('li');
                li.classList.add('page-item');
                const a = document.createElement('a');
                a.classList.add('page-link');
                a.href = '#';
                a.textContent = i;
                a.addEventListener('click', () => {
                    currentPage = i;
                    renderTable(currentPage);
                    renderPagination();
                });
                li.appendChild(a);
                pagination.appendChild(li);
            }
        }

        function applyFilters(data) {
            const typeFilter = document.getElementById('filterPublicationType').value;
            const dateFilter = document.getElementById('filterPublicationDate').value;

            return data.filter(publication => {
                if (typeFilter !== 'all' && publication.publicationcategory.id !== parseInt(typeFilter)) {
                    return false;
                }
                if (dateFilter !== 'all' && publication.year.toString() !== dateFilter) {
                    return false;
                }
                return true;
            });
        }

        function sortTable(columnIndex) {
            const key = `column${columnIndex}`;
            publicationsData.sort((a, b) => {
                const valueA = a[key].toUpperCase();
                const valueB = b[key].toUpperCase();
                if (valueA < valueB) {
                    return -1;
                }
                if (valueA > valueB) {
                    return 1;
                }
                return 0;
            });
            renderTable(currentPage);
        }
        // Add event listener to the "Apply Filters" button
        document.getElementById('applyFilterBtn').addEventListener('click', function() {
            renderTable(currentPage);
            renderPagination();
        });


        // Initial render
        renderTable(currentPage);
        renderPagination();
    </script>

    <script>
        $(document).ready(function() {
            // Function to filter table rows based on selected publication types
            function filterTableRows() {
                var selectedPublicationTypes = [];

                // Get selected publication types
                $('input[id^="checkboxPublicationType"]:checked').each(function() {
                    selectedPublicationTypes.push($(this).val());
                });

                // Show or hide table rows based on selected filters
                $('tr[data-type]').each(function() {
                    var publicationType = $(this).data('type').toString();

                    if (selectedPublicationTypes.length === 0 || selectedPublicationTypes.includes(
                            publicationType)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }

            // Initial filtering on page load
            filterTableRows();

            // Event listener for checkbox change
            $('input[type=checkbox]').change(function() {
                filterTableRows();
            });

            $('.sortable').click(function() {
                var column = $(this).data('column');
                var order = $(this).data('order');
                var text = $(this).html();
                text = text.substring(0, text.length - 1);

                if (order == 'desc') {
                    $(this).data('order', "asc");
                    $(this).find('i').removeClass('fa-sort-desc').addClass('fa-sort-asc');
                    sortTable(column, 'asc');
                } else {
                    $(this).data('order', "desc");
                    $(this).find('i').removeClass('fa-sort-asc').addClass('fa-sort-desc');
                    sortTable(column, 'desc');
                }
            });

            function sortTable(column, order) {
                var table, rows, switching, i, x, y, shouldSwitch;
                table = document.getElementById("example");
                switching = true;
                while (switching) {
                    switching = false;
                    rows = table.rows;
                    for (i = 1; i < (rows.length - 1); i++) {
                        shouldSwitch = false;
                        x = rows[i].getElementsByTagName("TD")[column];
                        y = rows[i + 1].getElementsByTagName("TD")[column];
                        if (order == "asc") {
                            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                                shouldSwitch = true;
                                break;
                            }
                        } else if (order == "desc") {
                            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                                shouldSwitch = true;
                                break;
                            }
                        }
                    }
                    if (shouldSwitch) {
                        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                        switching = true;
                    }
                }
            }
        });
    </script>
    </body>

    </html>
