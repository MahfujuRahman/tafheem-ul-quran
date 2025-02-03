<section>
    <div class="w-100 tq-pt-120 tq-pb-110 position-relative">
        <div class="container">
            <div class="tq-sec-title-wrapper d-flex flex-column align-items-center text-center position-relative w-100">
                <div class="tq-sec-title d-flex flex-column align-items-center text-center">
                    <img decoding="async" class="img-fluid"
                        src="../frontend/plugins/ingeniofy-plus/assets/images/shape2.png" alt="Together We Prosper The"
                        loading="lazy">
                    <span>Welcome to the Islamic center</span>
                    <h2 class="mb-0">Together We Prosper The <br> House Of Allah</h2>
                </div><!-- Section Title -->
            </div><!-- Section Title Wrapper -->
            <div class="tq-about-wrapper position-relative w-100">
                <div class="row">

                    <div class="col-12 col-lg-5 order-lg-1 prayer-time-section">
                        <div class="tq-about-img-wrap d-flex align-items-center justify-content-center position-relative w-100">
                            <div class="tq-about-img2 overflow-hidden w-100 text-center">
                                <img decoding="async" class="img-fluid w-100" src="../frontend/uploads/2023/12/tq-service-img2.png" alt="Together We Prosper">
                            </div>
                        </div>
                        <div class="prayer-card position-relative overflow-hidden">
                            <div class="prayer-gradient-bg"></div>
                            <div class="prayer-content position-relative">
                                <div class="prayer-header">
                                    <h2 class="prayer-title">Prayer Times <i class="fas fa-praying-hands ms-2"></i></h2>
                                    <div class="prayer-subtitle">Today's Schedule</div>
                                </div>
                                <div class="prayer-times-container">
                                    <div class="prayer-item fajr">
                                        <i class="prayer-icon fas fa-sun"></i>
                                        <div class="prayer-info">
                                            <span class="prayer-name">Fajr</span>
                                            <span class="prayer-time">04:45 AM</span>
                                        </div>
                                    </div>
                                    <div class="prayer-item dhuhr">
                                        <i class="prayer-icon fas fa-sun"></i>
                                        <div class="prayer-info">
                                            <span class="prayer-name">Dhuhr</span>
                                            <span class="prayer-time">01:30 PM</span>
                                        </div>
                                    </div>
                                    <div class="prayer-item asr">
                                        <i class="prayer-icon fas fa-sun"></i>
                                        <div class="prayer-info">
                                            <span class="prayer-name">Asr</span>
                                            <span class="prayer-time">06:45 PM</span>
                                        </div>
                                    </div>
                                    <div class="prayer-item maghrib">
                                        <i class="prayer-icon fas fa-moon"></i>
                                        <div class="prayer-info">
                                            <span class="prayer-name">Maghrib</span>
                                            <span class="prayer-time">05:53 PM</span>
                                        </div>
                                    </div>
                                    <div class="prayer-item isha">
                                        <i class="prayer-icon fas fa-moon"></i>
                                        <div class="prayer-info">
                                            <span class="prayer-name">Isha</span>
                                            <span class="prayer-time">08:04 PM</span>
                                        </div>
                                    </div>
                                    <div class="prayer-item jummah">
                                        <i class="prayer-icon fas fa-mosque"></i>
                                        <div class="prayer-info">
                                            <span class="prayer-name">Jummah</span>
                                            <span class="prayer-time">01:30 PM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12 col-sm-12 col-lg-7 roja_left">
                        <div
                            class="tq-about-cap margin-top-30 d-flex flex-column align-items-center w-100 roja_timming">
                            <h3 class="mb-0">Roja Timing</h3>
                            <div class="d-flex flex-row gap-5 justify-content-between w-100 mb-0 list-unstyled">
                                <div>
                                    <strong>Today</strong> Sehri: 04:00 am
                                </div>
                                <div>
                                    <strong>Today</strong> Iftar: 06:30 pm
                                </div>
                            </div>
                        </div><!-- Roja Timing -->
                        <div class="col-lg-12">
                            <div class="roja_tables p-3 shadow-sm">
                                <h3 class="roja_heading text-center mb-3">30 Days Ramadan Timing</h3>
                                <div class="d-flex flex-wrap justify-content-between gap-3">
                                    <!-- First 10 days -->
                                    <div class="timing-section">
                                        <h4 class="section-title">Days 1-10</h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-center">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th>Day</th>
                                                        <th>Sehri</th>
                                                        <th>Iftar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @for ($day = 1; $day <= 10; $day++)
                                                        <tr>
                                                            <td>Day {{ $day }}</td>
                                                            <td>04:00 AM</td>
                                                            <td>06:30 PM</td>
                                                        </tr>
                                                    @endfor
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-- Second 10 days -->
                                    <div class="timing-section">
                                        <h4 class="section-title">Days 11-20</h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-center">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th>Day</th>
                                                        <th>Sehri</th>
                                                        <th>Iftar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @for ($day = 11; $day <= 20; $day++)
                                                        <tr>
                                                            <td>Day {{ $day }}</td>
                                                            <td>04:00 AM</td>
                                                            <td>06:30 PM</td>
                                                        </tr>
                                                    @endfor
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-- Last 10 days -->
                                    <div class="timing-section">
                                        <h4 class="section-title">Days 21-30</h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-center">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th>Day</th>
                                                        <th>Sehri</th>
                                                        <th>Iftar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @for ($day = 21; $day <= 30; $day++)
                                                        <tr>
                                                            <td>Day {{ $day }}</td>
                                                            <td>04:00 AM</td>
                                                            <td>06:30 PM</td>
                                                        </tr>
                                                    @endfor
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div><!-- About Wrapper -->
        </div>
    </div>
</section>

<style>
    .roja_tables {
        background: #fff;
        border-radius: 10px;
        border: 1px solid #dee2e6;
        padding: 20px;
        transition: 0.3s ease-in-out;
    }

    .roja_tables:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .roja_heading {
        background: #28a745;
        color: white;
        padding: 12px;
        border-radius: 5px;
    }

    .table th,
    .table td {
        vertical-align: middle;
        font-size: 16px;
    }

    .table thead th {
        background: #343a40 !important;
        color: white;
    }

    @media (max-width: 768px) {
        .roja_heading {
            font-size: 20px;
        }
    }
</style>
