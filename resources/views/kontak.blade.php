@extends('layouts.app')

@section('content')

<!-- FONT AWESOME -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
/* CONTACT SECTION */
.contact-section {
    background: linear-gradient(135deg, #020617, #0f172a);
    padding: 90px 20px;
}

.contact-container {
    max-width: 1000px;
    margin: auto;
    text-align: center;
    color: #e5e7eb;
}

.contact-container h2 {
    font-size: 36px;
    font-weight: 700;
    color: #facc15;
    margin-bottom: 20px;
}

.contact-desc {
    max-width: 700px;
    margin: 0 auto 45px;
    font-size: 16px;
    line-height: 1.8;
    color: #cbd5f5;
}

/* CONTACT GRID */
.contact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 25px;
    margin-bottom: 45px;
}

/* LINK WRAPPER */
.contact-link {
    text-decoration: none;
    color: inherit;
}

.contact-card {
    background: rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    padding: 30px 25px;
    backdrop-filter: blur(6px);
    transition: all 0.4s ease;
    height: 100%;
}

.contact-card:hover {
    transform: translateY(-6px);
    background: rgba(255, 255, 255, 0.08);
}

.contact-icon {
    font-size: 38px;
    margin-bottom: 12px;
    color: #facc15;
}

.contact-card h3 {
    font-size: 18px;
    color: #facc15;
    margin-bottom: 6px;
}

.contact-card p {
    font-size: 14px;
    color: #e5e7eb;
    text-align: center; /* ⬅️ RATA TENGAH */
    line-height: 1.6;
}

/* SOCIAL MEDIA */
.social-media {
    display: flex;
    justify-content: center;
    gap: 18px;
    flex-wrap: wrap;
    margin-top: 120px;
}

.social-media a {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    border: 2px solid #facc15;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #facc15;
    font-size: 22px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.social-media a:hover {
    background: #facc15;
    color: #0f172a;
    transform: translateY(-4px);
}
</style>

<section class="contact-section">
    <div class="contact-container">
        <h2>Kontak Kami</h2>
        <p class="contact-desc">
            Untuk informasi lebih lanjut mengenai kegiatan dan program
            Rumah Tahfidz Qur'an, silakan menghubungi kami melalui kontak berikut:
        </p>

        <div class="contact-grid">

            <!-- MAPS / ALAMAT -->
            <a href="https://maps.app.goo.gl/rfmPjD9pVsdRhPmt5"
               target="_blank"
               class="contact-link"
               title="Lihat Lokasi di Google Maps">

                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-location-dot"></i>
                    </div>
                    <h3>ALAMAT</h3>
                    <p>
                        RT 05 RW 05<br>
                        Desa Banjaranyar<br>
                        Kecamatan Balapulang<br>
                        Kabupaten Tegal<br>
                        Jawa Tengah<br>
                        Kode Pos 52464
                    </p>
                </div>
            </a>

            <!-- WHATSAPP -->
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <h3>WhatsApp</h3>
                <p>
                    <a href="https://wa.me/6288225439455"
                       target="_blank"
                       style="color:#e5e7eb;text-decoration:none;">
                        0882-2543-9455
                    </a>
                </p>
            </div>

            <!-- EMAIL -->
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3>Email</h3>
                <p>
                    <a href="mailto:alfaruqiaverroes@gmail.com"
                       style="color:#e5e7eb;text-decoration:none;">
                        alfaruqiaverroes@gmail.com
                    </a>
                </p>
            </div>

        </div>

        <!-- SOCIAL MEDIA -->
        <div class="social-media">

            <a href="https://www.tiktok.com/@rumahtahfidz" target="_blank" title="TikTok">
                <i class="fab fa-tiktok"></i>
            </a>

            <a href="https://www.youtube.com/@averroesalfaruqi" target="_blank" title="YouTube">
                <i class="fab fa-youtube"></i>
            </a>

            <a href="https://www.instagram.com/avtrixy23?igsh=MXNuMWZ2bGNmNWJieA==" target="_blank" title="Instagram">
                <i class="fab fa-instagram"></i>
            </a>

            <a href="mailto:alfaruqiaverroes@gmail.com" title="Email">
                <i class="fas fa-envelope"></i>
            </a>

        </div>
    </div>
</section>

@endsection
