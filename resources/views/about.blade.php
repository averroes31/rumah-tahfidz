@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
/* ABOUT SECTION */
.about-section {
    min-height: 100vh;
    background: url('/assets/img/rumah-tahfidz.jpg.jpg') center/cover no-repeat;
    padding: 90px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* CONTAINER */
.about-container {
    max-width: 1000px;
    background: rgba(0, 0, 0, 0.6);
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
    margin-bottom: 10px;
}

.about-divider {
    width: 80px;
    height: 4px;
    background: #facc15;
    margin: 0 auto 25px;
    border-radius: 10px;
}

/* SLIDER */
.slider {
    position: relative;
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
    background: rgba(250, 204, 21, 0.25);
    border: none;
    color: #facc15;
    font-size: 22px;
    padding: 10px 15px;
    border-radius: 50%;
    cursor: pointer;
}

.prev { left: -15px; }
.next { right: -15px; }

/* DOTS */
.slider-dots {
    text-align: center;
    margin-top: 20px;
}

.slider-dots span {
    height: 10px;
    width: 10px;
    background: #94a3b8;
    display: inline-block;
    border-radius: 50%;
    margin: 0 5px;
    cursor: pointer;
}

.slider-dots span.active {
    background: #facc15;
}

/* SOCIAL */
.social-media {
    display: flex;
    justify-content: center;
    gap: 18px;
    margin-top: 30px;
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
}

.social-media a:hover {
    background: #facc15;
    color: #0f172a;
}

/* NEW SECTION */
.extra-section {
    background: #020617;
    padding: 70px 20px;
    color: white;
}

.extra-container {
    max-width: 1100px;
    margin: auto;
}

/* VISION */
.vision-mission {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px,1fr));
    gap: 25px;
}

.vm-box {
    background: rgba(255,255,255,0.05);
    border-radius: 16px;
    padding: 25px;
    text-align: center;
}

.vm-box i {
    font-size: 35px;
    color: #facc15;
    margin-bottom: 10px;
}

.vm-box h3 {
    color: #facc15;
    margin-bottom: 10px;
}

/* ADVANTAGES */
.advantages {
    margin-top: 60px;
}

.advantages h2 {
    text-align: center;
    color: #facc15;
    margin-bottom: 25px;
}

.adv-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(200px,1fr));
    gap: 20px;
}

.adv-item {
    background: rgba(255,255,255,0.05);
    border-radius: 14px;
    padding: 20px;
    text-align: center;
}

.adv-item i {
    font-size: 30px;
    color: #facc15;
    margin-bottom: 8px;
}

@keyframes fadeUp {
    from {opacity:0; transform:translateY(40px);}
    to {opacity:1; transform:translateY(0);}
}

@keyframes fadeSlide {
    from {opacity:0; transform:translateX(30px);}
    to {opacity:1; transform:translateX(0);}
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
                    bacaan (tahsin), serta penanaman nilai-nilai akhlakul karimah.
                </p>
            </div>
            <div class="slide">
                <p>
                    Kegiatan pembelajaran dilaksanakan secara terstruktur dan berkesinambungan
                    dengan metode yang disesuaikan dengan kemampuan santri, baik anak-anak
                    maupun remaja.
                </p>
            </div>
            <div class="slide">
                <p>
                    Dengan bimbingan ustadz dan ustadzah berpengalaman, Rumah Tahfidz Qur'an
                    berkomitmen mencetak generasi Qur'ani yang berakhlak mulia.
                </p>
            </div>

            <button class="slider-btn prev" onclick="prevSlide()">❮</button>
            <button class="slider-btn next" onclick="nextSlide()">❯</button>
        </div>

        <div class="slider-dots">
            <span class="active" onclick="showSlide(0)"></span>
            <span onclick="showSlide(1)"></span>
            <span onclick="showSlide(2)"></span>
        </div>

        <div class="social-media">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-tiktok"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fas fa-envelope"></i></a>
        </div>
    </div>
</section>

<section class="extra-section">
    <div class="extra-container">

        <div class="vision-mission">
            <div class="vm-box">
                <i class="fas fa-eye"></i>
                <h3>Visi</h3>
                <p>Mewujudkan generasi Qur'ani yang berakhlakul karimah dan berilmu.</p>
            </div>

            <div class="vm-box">
                <i class="fas fa-bullseye"></i>
                <h3>Misi</h3>
                <p>Menyelenggarakan pendidikan tahfidz, tahsin, dan pembinaan karakter Islami.</p>
            </div>
        </div>

        <div class="advantages">
            <h2>Keunggulan Kami</h2>
            <div class="adv-grid">
                <div class="adv-item"><i class="fas fa-star"></i><p>Metode Hafalan Efektif</p></div>
                <div class="adv-item"><i class="fas fa-user-graduate"></i><p>Ustadz Profesional</p></div>
                <div class="adv-item"><i class="fas fa-heart"></i><p>Lingkungan Islami</p></div>
                <div class="adv-item"><i class="fas fa-clock"></i><p>Jadwal Fleksibel</p></div>
            </div>
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

setInterval(() => {
    nextSlide();
}, 7000);
</script>

@endsection
