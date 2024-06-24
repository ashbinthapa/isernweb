    <footer>
        <div class="container-fluid custom-footer-style footer-details footer-design py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-8 col-sm-12 p-3">
                        <h5 class="fw-bold">Contact Details</h5>
                        <ul class="list-unstyled">
                            <li>
                                <div class="icon-text-wrapper">
                                    <div class="icon"><i class="fa fa-map" aria-hidden="true"></i></div>
                                    <div class="text">Bharatpur-15, Fulbari, Chitwan, Nepal</div>
                                </div>
                            </li>
                            <li>
                                <div class="icon-text-wrapper">
                                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                    <div class="text">+977-56-591054 ,+977-56-592406</div>
                                </div>
                            </li>
                            <li>
                                <div class="icon-text-wrapper">
                                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                    <div class="text">iser.nepal@outlook.com</div>
                                </div>
                            </li>
                            <li>
                                <div class="icon-text-wrapper">
                                    <div class="icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                                    <div class="text">10 A.M. - 5 P.M.</div>
                                </div>
                            </li>
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

                    <style>
                        .icon-text-wrapper {
                            display: flex;
                            align-items: center;
                        }

                        .icon {
                            margin-right: 10px;
                        }

                        .text {
                            display: inline-block;
                        }
                    </style>

                    <div class="col-lg-3 col-md-8 col-sm-12 p-3">
                        <h5 class="fw-bold">Forms</h4>
                            <ul class="list-unstyled">
                                <li><a href="#"> <i class="fa fa-link" aria-hidden="true"></i>
                                        Proposal Review Form</a></li>
                                <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i>
                                        Survey Data Analysis Training</a></li>
                            </ul>
                    </div>
                    <div class="col-lg-3 col-md-8 col-sm-12 p-3">
                        <h5 class="fw-bold">Important Links</h4>
                            <ul class="list-unstyled">
                                <li><a href="https://cvfs.isr.umich.edu/"> <i class="fa fa-link" aria-hidden="true"></i>
                                        <strong>CVFS</strong>
                                        -Chitwan Valley Family Study</a></li>
                                <li><a href="https://www.icpsr.umich.edu/web/ICPSR/search/studies?q=chitwan"> <i
                                            class="fa fa-link" aria-hidden="true"></i>
                                        <strong>ICPSR</strong>
                                        -University of Michigan</a></li>
                                <li><a href="https://ukdataservice.ac.uk/"> <i class="fa fa-link"
                                            aria-hidden="true"></i>
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
                                <li><a href="https://censusnepal.cbs.gov.np/"> <i class="fa fa-link"
                                            aria-hidden="true"></i>
                                        <strong>CBS</strong>
                                        -Central Bureau of Statistics
                                    </a></li>
                                <li><a href="https://bharatpurmun.gov.np/"> <i class="fa fa-link"
                                            aria-hidden="true"></i>
                                        Bharatpur Metropolitan City</a></li>
                                <li><a href="https://nhrc.gov.np/"> <i class="fa fa-link" aria-hidden="true"></i>
                                        <strong>NHRC</strong>
                                        -Nepal Health Research Council</a></li>
                                <li><a href="https://isernepal.org.np/other-links"> <i class="fa fa-link"
                                            aria-hidden="true"></i>
                                        Other Links</a></li>
                            </ul>
                    </div>
                    <div class="col-lg-3 col-md-8 col-sm-12 p-3">
                        <h5 class="fw-bold">Latest Events/News</h4>
                            <div class="sh-recent-posts-widgets">
                                @foreach ($posts_latest_news as $post)
                                    <div class="sh-recent-posts-widgets-item">
                                        <span class="post-meta-categories fw-bold">
                                            <a
                                                href="/posts/category/{{ $post->category->name }}">{{ $post->category->name }}</a>
                                        </span>
                                        <a href="{{ route('posts.show', ['slug' => $post->slug]) }}">
                                            <h6>{{ $post->title }}</h6>
                                        </a>
                                    </div>
                                @endforeach

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

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('bootstrap-5.3.3-dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>

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
        document.getElementById('filterPublicationType').addEventListener('change', function() {
            document.getElementById('filterForm').submit();
        });

        document.getElementById('filterPublicationDate').addEventListener('change', function() {
            document.getElementById('filterForm').submit();
        });
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

    {{-- sctipt for move to top button --}}
    <script>
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>

    <script>
        // script.js

        document.addEventListener('DOMContentLoaded', function() {
            var header = document.querySelector('.sticky-top-custom');

            function onScroll() {
                if (window.scrollY > 0) {
                    header.classList.add('active');
                } else {
                    header.classList.remove('active');
                }
            }

            window.addEventListener('scroll', onScroll);
        });
    </script>

    {{-- communicity capacity building and trainging page script starts --}}
    <script>
        var acc = document.getElementsByClassName("ashbin-accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("ashbin-active");
                var ashbinpanel = this.nextElementSibling;
                if (ashbinpanel.style.display === "block") {
                    ashbinpanel.style.display = "none";
                } else {
                    ashbinpanel.style.display = "block";
                }
            });
        }
    </script>

    {{-- communicity capacity building and trainging page script ends --}}
    </body>

    </html>
