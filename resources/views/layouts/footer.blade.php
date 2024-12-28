<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">

            <!-- Sponsorship Section -->
            <section id="sponsorship" class="sponsorship-section col-lg-3 col-md-6 col-sm-12">
                <h5 class="text-uppercase">Sponsorship</h5>
                <p>"Kami sangat berterima kasih atas dukungan dari para sponsor MFP Academy, yang membantu mewujudkan
                    program dan acara kami. Terima kasih atas kemitraan yang terus berlanjut."</p>
                <div class="sponsors-logos">
                    <img src="/page-imgs/pertamina.png" alt="Sponsor 1" class="sponsor-logo">
                    <img src="/page-imgs/teknologi informasi.png" alt="Sponsor 2" class="sponsor-logo">
                    <img src="/page-imgs/white_races_logo_02.png" alt="Sponsor 3" class="sponsor-logo">
                    <img src="/page-imgs/pssi.jpg" alt="Sponsor 3" class="sponsor-logo">
                </div>
            </section>

            <!-- Location Map Section -->
            <section id="location-map" class="location-map-container col-lg-3 col-md-6 col-sm-12">
                <h5 class="text-uppercase">GMAPS MFP ACADEMY</h5>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.191137083147!2d110.41756027347164!3d-7.769545827065874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59b9b6f6c75b%3A0xb0fad1f3eaec3439!2sMaguwoharjo%20Football%20Park!5e0!3m2!1sid!2sid!4v1729438920886!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
        </div>
    </div>

    <!-- Footer Copyright -->
    <div class="footer-bottom">
        <p>&copy; 2024 MFP Academy . All rights reserved.</p>
    </div>
</footer>

<style>
    /* Reset margin and padding for html, body, and footer */
    html,
    body {
        margin: 0;
        padding: 0;
        height: 100%;
        box-sizing: border-box;
    }

    /* Footer Styling */
    footer {
        background-color: #000000;
        color: #ffffff;
        font-family: 'Arial', sans-serif;
        padding-top: 40px;
        /* Padding atas tetap ada */
        position: relative;
    }

    .footer .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .footer .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .footer-first-card-1,
    .sponsorship-section,
    .location-map-container {
        margin-bottom: 20px;
    }

    .sponsors-logos img {
        margin-right: 10px;
        max-width: 100px;
    }

    iframe {
        width: 100%;
        max-width: 600px;
        height: 300px;
    }

    .footer-bottom {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px 0;
        /* Kurangi padding agar tidak ada space lebar */
        margin-top: 20px;
        /* Memberikan jarak sedikit antara konten atas dan copyright */
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    .footer-bottom p {
        margin: 0;
    }

    /* Make sure the body content takes at least 100% height to push footer down */
    .content-wrapper {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .content-wrapper>.footer {
        margin-top: auto;
        /* This ensures footer sticks to the bottom */
    }
</style>
