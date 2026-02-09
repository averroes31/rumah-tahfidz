@extends('layouts.app')

@section('content')

<!-- FONT AWESOME -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
/* RESET */
* {
    box-sizing: border-box;
}

/* HERO */
.hero {
    min-height: 100vh;
    background: url('/assets/img/rumah-tahfidz.jpg.jpg') center center / cover no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* OVERLAY */
.hero-overlay {
    width: 100%;
    min-height: 100vh;
    background: rgba(0,0,0,0.65);
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

/* CONTENT */
.hero-content {
    max-width: 900px;
    text-align: center;
    color: #ffffff;
    animation: fadeUp 1.3s ease forwards;
}

/* ICON */
.hero-icon {
    font-size: 60px;
    color: #facc15;
    margin-bottom: 15px;
}

/* TITLE */
.hero-content h2 {
    font-size: 40px;
    font-weight: 700;
    margin-bottom: 12px;
    color: #facc15;
}

/* SUBTITLE */
.hero-content .subtitle {
    font-size: 18px;
    margin-bottom: 25px;
    font-style: italic;
}

/* TEXT */
.hero-content p {
    font-size: 16px;
    line-height: 1.8;
    margin-bottom: 15px;
}

/* FEATURES */
.hero-features {
    display: flex;
    justify-content: center;
    gap: 25px;
    margin-top: 40px;
    flex-wrap: wrap;
}

.feature-item {
    background: rgba(0, 0, 0, 0.55);
    padding: 22px;
    border-radius: 16px;
    width: 220px;
    backdrop-filter: blur(5px);
    transition: 0.3s;
}

.feature-item:hover {
    transform: translateY(-5px);
    background: rgba(0, 0, 0, 0.75);
}

.feature-item i {
    font-size: 32px;
    color: #facc15;
    margin-bottom: 10px;
}

.feature-item h4 {
    font-size: 16px;
    margin-bottom: 5px;
}

.feature-item p {
    font-size: 14px;
    color: #e5e7eb;
}

/* MOBILE */
@media (max-width: 768px) {
    .hero-content h2 {
        font-size: 26px;
    }

    .hero-content .subtitle {
        font-size: 15px;
    }

    .hero-content p {
        font-size: 14px;
    }

    .hero-features {
        gap: 15px;
    }

    .feature-item {
        width: 100%;
        max-width: 280px;
    }
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
</style>

<section class="hero">
    <div class="hero-overlay">
        <div class="hero-content">

            <div class="hero-icon">
                <i class="fas fa-quran"></i>
            </div>

            <h2>Rumah Tahfidz Qur'an Sulthoni Elbartaq</h2>

            <p class="subtitle">
                Membangun Generasi Qur'ani yang Berilmu dan Berakhlak Mulia
            </p>

            <p>
                Rumah Tahfidz Qur'an adalah lembaga pendidikan Islam yang berkomitmen
                dalam pembinaan hafalan Al-Qur'an, peningkatan kualitas bacaan (tahsin),
                serta pembentukan karakter Islami bagi para santri.
            </p>

            <p>
                Dengan lingkungan yang kondusif dan bimbingan ustadz serta ustadzah
                yang berkompeten, kami berupaya mencetak generasi Qur'ani
                yang siap mengamalkan nilai-nilai Islam dalam kehidupan.
            </p>

            <div class="hero-features">
                <div class="feature-item">
                    <i class="fas fa-book-quran"></i>
                    <h4>Tahfidz Al-Qur'an</h4>
                    <p>Program hafalan Al-Qur'an terarah dan berkelanjutan.</p>
                </div>

                <div class="feature-item">
                    <i class="fas fa-microphone-lines"></i>
                    <h4>Tahsin Bacaan</h4>
                    <p>Perbaikan makhraj dan tajwid sesuai kaidah.</p>
                </div>

                <div class="feature-item">
                    <i class="fas fa-mosque"></i>
                    <h4>Pembinaan Akhlak</h4>
                    <p>Menanamkan adab dan akhlakul karimah.</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
