@extends('layouts.app')

@section('content')

<!-- FONT AWESOME -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
/* HERO SECTION */
.hero {
    min-height: 90vh;
    display: flex;
    align-items: center;
    background: url('/assets/img/rumah-tahfidz.jpg.jpg') center/cover no-repeat;
}

/* HERO OVERLAY */
.hero-overlay {
    width: 100%;
    padding: 90px 20px;
}

.hero-content {
    max-width: 900px;
    margin: auto;
    text-align: center;
    color: #ffffff;
    animation: fadeUp 1.3s ease forwards;
}

.hero-icon {
    font-size: 60px;
    color: #facc15;
    margin-bottom: 18px;
}

.hero-content h2 {
    font-size: 44px;
    font-weight: 700;
    margin-bottom: 15px;
    letter-spacing: 1px;
    color: #facc15;
}

.hero-content .subtitle {
    font-size: 18px;
    margin-bottom: 32px;
    font-style: italic;
    color: #ffffff;
}

.hero-content p {
    font-size: 16px;
    line-height: 1.9;
    margin-bottom: 18px;
    color: #ffffff;
}

/* FEATURE ICONS */
.hero-features {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin: 45px 0;
    flex-wrap: wrap;
}

.feature-item {
    background: rgba(0, 0, 0, 0.45);
    padding: 25px 22px;
    border-radius: 18px;
    width: 220px;
    backdrop-filter: blur(4px);
    transition: 0.3s;
}

.feature-item:hover {
    transform: translateY(-6px);
    background: rgba(0, 0, 0, 0.6);
}

.feature-item i {
    font-size: 34px;
    color: #facc15;
    margin-bottom: 10px;
}

.feature-item h4 {
    font-size: 16px;
    color: #ffffff;
    margin-bottom: 6px;
}

.feature-item p {
    font-size: 14px;
    color: #e5e7eb;
}

/* ANIMATION */
@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(55px);
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

            <!-- FEATURE ICONS -->
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
