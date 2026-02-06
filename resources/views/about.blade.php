@extends('layouts.app')

@section('content')

<!-- FONT AWESOME -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
/* ABOUT SECTION */
.about-section {
    min-height: 90vh;
    background: url('/assets/img/rumah-tahfidz.jpg.jpg') center/cover no-repeat;
    padding: 90px 20px;
    display: flex;
    align-items: center;
}

/* CONTAINER */
.about-container {
    max-width: 1000px;
    margin: auto;
    background: rgba(0, 0, 0, 0.55);
    border-radius: 20px;
    padding: 50px 40px 60px;
    color: #e5e7eb;
    backdrop-filter: blur(4px);
    animation: fadeUp 1.2s ease forwards;
}

.about-container h2 {
    text-align: center;
    font-size: 36px;
    font-weight: 700;
    color: #facc15;
    margin-bottom: 15px;
}

.about-divider {
    width: 80px;
    height: 4px;
    background: #facc15;
    margin: 0 auto 30px;
    border-radius: 10px;
}

/* SLIDER */
.slider {
    position: relative;
    overflow: hidden;
}

.slide {
    display: none;
    animation: fadeSlide 0.8s ease;
}

.slide.active {
    display: block;
}

.slide p {
    font-size: 16px;
    line-height: 1.9;
    text-align: justify;
    color: #ffffff;
}

/* BUTTONS */
.slider-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(250, 204, 21, 0.2);
    border: none;
    color: #facc15;
    font-size: 26px;
    padding: 10px 16px;
    border-radius: 50%;
    cursor: pointer;
    transition: 0.3s;
}

.slider-btn:hover {
    background: rgba(250, 204, 21, 0.4);
}

.prev {
    left: -15px;
}

.next {
    right: -15px;
}

/* DOTS */
.slider-dots {
    text-align: center;
    margin-top: 30px;
}

.slider-dots span {
    height: 10px;
    width: 10px;
    background: #94a3b8;
    display: inline-block;
    border-radius: 50%;
    margin: 0 6px;
    cursor: pointer;
    transition: 0.3s;
}

.slider-dots span.active {
    background: #facc15;
}

/* SOCIAL MEDIA */
.social-media {
    display: flex;
    justify-content: center;
    gap: 18px;
    flex-wrap: wrap;
    margin-top: 40px;
}

.social-media a {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    border: 2px solid #facc15;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #facc15;
    font-size: 20px;
    text-decoration: none;
    transition: 0.3s;
}

.social-media a:hover {
    background: #facc15;
    color: #0f172a;
    transform: translateY(-3px);
}

/* ANIMATION */
@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(40px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeSlide {
    from {
        opacity: 0;
        transform: translateX(30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}
</style>

<section class="about-section">
    <div class="about-container">
        <h2>Tentang Kami</h2>
        <div class="about-divider"></div>

        <div class="slider">

            <div class="slide active">
                <p>
                    Rumah Tahfidz Qur'an Sulthoni Elbartaq adalah lembaga pendidikan Islam yang
                    berfokus pada pembinaan dan penguatan hafalan Al-Qur'an, peningkatan kualitas
                    bacaan (tahsin), serta penanaman nilai-nilai akhlakul karimah sebagai fondasi
                    utama pendidikan. Rumah Tahfidz ini didirikan pada tanggal 23 November 2024
                    dengan harapan dapat memberikan manfaat bagi seluruh umat manusia.
                </p>
            </div>

            <div class="slide">
                <p>
                    Kegiatan pembelajaran dilaksanakan secara terstruktur dan berkesinambungan
                    dengan metode yang disesuaikan dengan kemampuan santri, baik anak-anak
                    maupun remaja. Selain menghafal Al-Qur'an, santri juga dibina dalam
                    kedisiplinan, adab, serta pemahaman dasar keislaman.
                </p>
            </div>

            <div class="slide">
                <p>
                    Dengan bimbingan para ustadz dan ustadzah yang berkompeten dan berpengalaman,
                    Rumah Tahfidz Qur'an berkomitmen mencetak generasi Qur'ani yang cinta
                    Al-Qur'an, berakhlakul karimah, serta mampu mengamalkan nilai-nilai
                    Al-Qur'an dalam kehidupan sehari-hari.
                </p>
            </div>

            <!-- BUTTON -->
            <button class="slider-btn prev" onclick="prevSlide()">❮</button>
            <button class="slider-btn next" onclick="nextSlide()">❯</button>

        </div>

        <div class="slider-dots">
            <span class="active" onclick="showSlide(0)"></span>
            <span onclick="showSlide(1)"></span>
            <span onclick="showSlide(2)"></span>
        </div>

        <!-- SOCIAL MEDIA -->
        <div class="social-media">
            <a href="https://www.instagram.com/avtrixy23" target="_blank" title="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.tiktok.com/@rumahtahfidz" target="_blank" title="TikTok">
                <i class="fab fa-tiktok"></i>
            </a>
            <a href="https://www.youtube.com/@averroesalfaruqi" target="_blank" title="YouTube">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="mailto:alfaruqiaverroes@gmail.com" title="Email">
                <i class="fas fa-envelope"></i>
            </a>
        </div>

    </div>
</section>

<script>
let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.slider-dots span');

function showSlide(index) {
    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));

    slides[index].classList.add('active');
    dots[index].classList.add('active');
    currentSlide = index;
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
}

/* AUTO SLIDE */
setInterval(() => {
    nextSlide();
}, 7000);
</script>

@endsection
