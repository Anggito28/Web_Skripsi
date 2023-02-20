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
                </div>
            </div>
        </div>
        <div class="container-fluid py-4">
            <div class="row mt-4 d-flex">
                <div class="justify-content-center d-flex">
                    <div class="card shadow-sm rounded-3" style="width: 80%">
                        <div class="card-body">
                            <h4 class="mb-3">New Data Form</h4>
                            <form action="POST">
                                <div class="row">
                                    <h6>User Information</h6>
                                    <hr class="horizontal dark">
                                    <div class="col-md-6">
                                        <label for="name">Fullname Selebgram</label>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Nama Lengkap Selebgram" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="username">Username Selebgram</label>
                                        <input type="text" class="form-control" name="username"
                                            placeholder="username selebgram" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="follower">Total Follower User</label>
                                        <input type="number" class="form-control" name="follower" placeholder="0">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="following">Total Following User</label>
                                        <input type="number" class="form-control" name="following" placeholder="0">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="post">Total Post Content</label>
                                        <input type="number" class="form-control" name="post" placeholder="0">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="status">Status</label>
                                        <select name="status" class="form-control">
                                            <option value="" disabled selected>-- Choice Status --</option>
                                            <option value="student"> Student </option>
                                            <option value="worker"> Pekerja </option>
                                            <option value="freelance"> Freelance </option>
                                            <option value="etc">etc</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="status">Category</label>
                                        <select name="status" class="form-control">
                                            <option value="" disabled selected>-- Choice Category --</option>
                                            <option value="actress"> Actress </option>
                                            <option value="selebgram"> Selebgram </option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="date">Date Update</label>
                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy"
                                            name="update_date">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="photos">Upload Photos</label>
                                        <input type="file" class="form-control" placeholder="input photo user">
                                    </div>
                                    <h6 class="pt-3">User Sentiment</h6>
                                    <hr class="horizontal dark">
                                    <div class="col-md-4">
                                        <label for="positif">Total Positif Sentiment</label>
                                        <input type="number" class="form-control" placeholder="0" name="positif">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="neutral">Total Neutral Sentiment</label>
                                        <input type="number" class="form-control" placeholder="0" name="neutral">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="negatif">Total Negatif Sentiment</label>
                                        <input type="number" class="form-control" placeholder="0" name="negatif">
                                    </div>
                                </div>
                                <div class="pt-3">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"
                                            aria-hidden="true"></i> &nbsp; Save</button>
                                    <a href="{{ url('data_seleb') }}" class="btn btn-danger"><i class="fa fa-ban"
                                            aria-hidden="true"></i> &nbsp; Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
