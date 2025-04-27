<?php
$page_title = "Services";
include('includes/head.php');
include('includes/header.php');
?>

<div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    <h2 class="text-center text-primary mb-4">Szolgáltatások és Árak</h2>
    <p class="text-center text-muted mb-5">Az árak az ÁFÁ-t tartalmazzák. Az árváltoztatás jogát fenntartjuk.</p>

    <div class="accordion" id="serviceAccordion">
        <!-- Szolgáltatás 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Operációs rendszer telepítés és konfigurálás
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#serviceAccordion">
                <div class="accordion-body">
                    <p class="price">11,999 Ft</p>
                    <p>Az operációs rendszer telepítése és a szükséges szoftverek konfigurálása, hogy a készüléke újra teljesítményének megfelelően működjön.</p>
                </div>
            </div>
        </div>

        <!-- Szolgáltatás 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Operációs rendszer + adatmásolás
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#serviceAccordion">
                <div class="accordion-body">
                    <p class="price">24,999 Ft</p>
                    <p>Operációs rendszer telepítés és adatainak biztonságos átmásolása az új rendszerbe.</p>
                </div>
            </div>
        </div>

        <!-- Szolgáltatás 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Szoftveres karbantartás / állapotfelmérés
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#serviceAccordion">
                <div class="accordion-body">
                    <p class="price">9,999 Ft</p>
                    <p>A készülék teljesítményének elemzése és optimalizálása, hogy a rendszer gyorsabban és hatékonyabban működjön.</p>
                </div>
            </div>
        </div>

        <!-- Szolgáltatás 4 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Laptop tisztítás és karbantartás
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#serviceAccordion">
                <div class="accordion-body">
                    <p class="price">12,999 - 24,999 Ft</p>
                    <p>A laptop belső részeinek tisztítása és karbantartása a hűtés javítása érdekében.</p>
                </div>
            </div>
        </div>

        <!-- Szolgáltatás 5 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Laptop kijelző csere
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#serviceAccordion">
                <div class="accordion-body">
                    <p class="price">4,999 - 11,999 Ft + kijelző</p>
                    <p>Ha a kijelző sérült, gyorsan és megbízhatóan kicseréljük, hogy ismét teljes képernyő élményben legyen része.</p>
                </div>
            </div>
        </div>

        <!-- Szolgáltatás 6 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Laptop billentyűzet csere
                </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#serviceAccordion">
                <div class="accordion-body">
                    <p class="price">4,999 - 14,999 Ft</p>
                    <p>Ha a billentyűzet nem működik megfelelően, azt teljesen kicseréljük a megfelelő típusra.</p>
                </div>
            </div>
        </div>

        <!-- Szolgáltatás 7 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Távoli segítségnyújtás
                </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#serviceAccordion">
                <div class="accordion-body">
                    <p class="price">2,500 Ft / 15 perc</p>
                    <p>Segítséget nyújtunk távolról a problémák gyors megoldásában.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
