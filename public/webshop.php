<?php
$page_title = "Webshop";
include('includes/head.php');
include('includes/header.php');
?>

<section id="hero" class="hero section accent-background py-5">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 justify-content-center">
            <div class="col-12 text-center">
                <h3 class="display-4 text-primary">
                    WEBSHOP
                    <p><h6 class="text-muted">AZ OLDAL A HARDVERAPRÓ HIRDETÉSEIT JELENÍTI MEG</h6></p>
                </h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-12">
                <div class="card border border-dark rounded shadow-sm overflow-hidden center" style="width: 100%;">
                    <div class="card-body p-0">
                        <div class="row gy-3 gy-md-4 gy-lg-0" style="min-height: 750px;">
                            <div id="iframe-container" class="inactive">
                                <iframe id="iframe" src="https://hardverapro.hu/aprok/hirdeto/techsebesz/keres.php?usrid=450222" frameborder="0" style="width: 100%; height: 100%;"></iframe>
                                <div id="iframe-placeholder" class="d-flex justify-content-center align-items-center">
                                    <p class="text-center">Kattints ide az iframe betöltéséhez</p>
                                </div>
                            </div>

                            <script>
                                const iframeContainer = document.getElementById("iframe-container");
                                const iframe = document.getElementById("iframe");
                                const iframePlaceholder = document.getElementById("iframe-placeholder");

                                // Az iframe teljes láthatóságúra állítása kattintásra
                                iframePlaceholder.addEventListener("click", function() {
                                    iframeContainer.classList.remove("inactive");  // Aktív állapot
                                    iframePlaceholder.style.display = "none";  // Eltünteti a placeholder-t
                                });

                                // Figyeljük a kattintást az oldalon, hogy kikattintás esetén halványítsuk az iframe-et
                                document.addEventListener("click", function(event) {
                                    // Ha a kattintás NEM az iframe-re vagy a placeholder-re történik
                                    if (!iframe.contains(event.target) && !iframePlaceholder.contains(event.target)) {
                                        iframeContainer.classList.add("inactive");  // Kikattintott állapot
                                        iframePlaceholder.style.display = "flex";  // Visszahozza a placeholder-t
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
