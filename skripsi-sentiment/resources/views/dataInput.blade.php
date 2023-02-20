<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
@include('include.header')


<body class="g-sidenav-show   bg-gray-100">
    <div class="position-absolute w-100 min-height-300 top-0"
        style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
        <span class="mask bg-primary opacity-6"></span>
    </div>
    @include('include.sidebar')
    <main class="main-content position-relative border-radius-lg ">
        @include('include.navbar')
        <div class="card shadow-lg mx-4 card-profile-bottom mt-2">
            <div class="card-body p-3">
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ asset('assets/img/Datanamics2.png') }}" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                Analisis Sentimen
                            </h5>
                            <p class="mb-0 font-weight-bold text-sm">
                                Akun Selebgram
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0">
                            <a href="{{ url('newdata') }}" class="btn btn-primary"><i class="fa fa-plus-square"
                                    aria-hidden="true"></i> &nbsp; New Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-md-3">
                    <a href="">
                        <div class="card text-center shadow m-3 py-2">
                            <a href="javascript:;" class="mt-2">
                                <img class="avatar avatar-xl shadow rounded-circle"
                                    src="{{ asset('assets/img/team-1.jpg') }}">
                            </a>

                            <div class="card-body">
                                <h4 class="card-title">Andrew John</h4>
                                <h6 class="category"><span class="badge bg-gradient-info">Selebgram</span>
                                </h6>
                                <div class="row">
                                    <div class="col">
                                        <div class="d-flex justify-content-center">
                                            <div class="d-grid text-center">
                                                <span class="text-lg font-weight-bolder">22</span>
                                                <span class="text-sm opacity-8">Post</span>
                                            </div>
                                            <div class="d-grid text-center mx-4">
                                                <span class="text-lg font-weight-bolder">10</span>
                                                <span class="text-sm opacity-8">Follower</span>
                                            </div>
                                            <div class="d-grid text-center">
                                                <span class="text-lg font-weight-bolder">89</span>
                                                <span class="text-sm opacity-8">Following</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <div class="card text-center shadow m-3 py-2">
                            <a href="javascript:;" class="mt-2">
                                <img class="avatar avatar-xl shadow rounded-circle"
                                    src="{{ asset('assets/img/team-1.jpg') }}">
                            </a>

                            <div class="card-body">
                                <h4 class="card-title">Andrew John</h4>
                                <h6 class="category"><span class="badge bg-gradient-info">Selebgram</span>
                                </h6>
                                <div class="row">
                                    <div class="col">
                                        <div class="d-flex justify-content-center">
                                            <div class="d-grid text-center">
                                                <span class="text-lg font-weight-bolder">22</span>
                                                <span class="text-sm opacity-8">Post</span>
                                            </div>
                                            <div class="d-grid text-center mx-4">
                                                <span class="text-lg font-weight-bolder">10</span>
                                                <span class="text-sm opacity-8">Follower</span>
                                            </div>
                                            <div class="d-grid text-center">
                                                <span class="text-lg font-weight-bolder">89</span>
                                                <span class="text-sm opacity-8">Following</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <div class="card text-center shadow m-3 py-2">
                            <a href="javascript:;" class="mt-2">
                                <img class="avatar avatar-xl shadow rounded-circle"
                                    src="{{ asset('assets/img/team-1.jpg') }}">
                            </a>

                            <div class="card-body">
                                <h4 class="card-title">Andrew John</h4>
                                <h6 class="category"><span class="badge bg-gradient-info">Selebgram</span>
                                </h6>
                                <div class="row">
                                    <div class="col">
                                        <div class="d-flex justify-content-center">
                                            <div class="d-grid text-center">
                                                <span class="text-lg font-weight-bolder">22</span>
                                                <span class="text-sm opacity-8">Post</span>
                                            </div>
                                            <div class="d-grid text-center mx-4">
                                                <span class="text-lg font-weight-bolder">10</span>
                                                <span class="text-sm opacity-8">Follower</span>
                                            </div>
                                            <div class="d-grid text-center">
                                                <span class="text-lg font-weight-bolder">89</span>
                                                <span class="text-sm opacity-8">Following</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <div class="card text-center shadow m-3 py-2">
                            <a href="javascript:;" class="mt-2">
                                <img class="avatar avatar-xl shadow rounded-circle"
                                    src="{{ asset('assets/img/team-1.jpg') }}">
                            </a>

                            <div class="card-body">
                                <h4 class="card-title">Andrew John</h4>
                                <h6 class="category"><span class="badge bg-gradient-info">Selebgram</span>
                                </h6>
                                <div class="row">
                                    <div class="col">
                                        <div class="d-flex justify-content-center">
                                            <div class="d-grid text-center">
                                                <span class="text-lg font-weight-bolder">22</span>
                                                <span class="text-sm opacity-8">Post</span>
                                            </div>
                                            <div class="d-grid text-center mx-4">
                                                <span class="text-lg font-weight-bolder">10</span>
                                                <span class="text-sm opacity-8">Follower</span>
                                            </div>
                                            <div class="d-grid text-center">
                                                <span class="text-lg font-weight-bolder">89</span>
                                                <span class="text-sm opacity-8">Following</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="mt-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="javascript:;" tabindex="-1">
                                <i class="fa fa-angle-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="javascript:;">1</a></li>
                        <li class="page-item active"><a class="page-link" href="javascript:;">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:;">
                                <i class="fa fa-angle-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            @include('include.footer')
        </div>
    </main>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Argon Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0 overflow-auto">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default"
                        onclick="sidebarType(this)">Dark</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="d-flex my-3">
                    <h6 class="mb-0">Navbar Fixed</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                            onclick="navbarFixed(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-sm-4">
                <div class="mt-2 mb-5 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                            onclick="darkMode(this)">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    @include('include.script')
    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Graph Data",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#5e72e4",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
</body>

</html>
