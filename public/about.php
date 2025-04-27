<?php
$page_title = "About Us";
include('includes/head.php');
include('includes/header.php');
?>

<div class="about-us"></div>
<div class="container section-title" data-aos="fade-up">
    <h1 class="text-white o-cim">About Us</h1>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up">
    <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-6">
            <div class="about-img">
                <img src="/assets/img/Techsebész traumateam.png" class="img-fluid" alt="">
            </div>
        </div>

        <div class="col-lg-6">
            <!-- Tabs -->
            <ul class="nav nav-pills mb-3" id="about-tabs">
                <li><a class="nav-link active" data-bs-toggle="pill" href="#about-tab1">Személyes</a></li>
                <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab2">Kézségek</a></li>
                <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab3">Szolgáltatásaim</a></li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content" style="color: white;">
                <div class="tab-pane fade show active" id="about-tab1">
                    <p>Több mint 10 éve foglalkozom IT eszközök karbantartásával és javításával.</p>
                    <p>Az első 5 évet hobbi szinten töltöttem el, majd közel 4 éven át a Media Markt számítástechnikai osztályán dolgoztam...</p>
                    <!-- További tartalom -->
                </div><!-- End Tab 1 Content -->

                <div class="tab-pane fade" id="about-tab2">
                    <p><strong>Számítógépes és IT eszközökkel kapcsolatos szakértelmemet folyamatosan fejlesztem, többek között az alábbi területeken:</strong></p>
                    <ul>
                        <li>Asztali PC-k, laptopok és tabletek javítása</li>
                        <!-- További felsorolás -->
                    </ul>
                </div><!-- End Tab 2 Content -->

                <div class="tab-pane fade" id="about-tab3">
                    <p><strong>Számítógépek és laptopok teljeskörű karbantartása:</strong> tisztítás, alkatrészek cseréje, szoftveres javítások...</p>
                    <!-- További tartalom -->
                </div><!-- End Tab 3 Content -->
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
