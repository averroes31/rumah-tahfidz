@extends('layouts.app')

@section('content')

<style>
/* PROGRAM SECTION */
.program-section {
    min-height: 90vh;
    background: url('/assets/img/rumah-tahfidz.jpg.jpg') center/cover no-repeat;
    padding: 90px 20px;
    display: flex;
    align-items: center;
}

/* CONTAINER */
.program-container {
    max-width: 1100px;
    margin: auto;
    text-align: center;
    color: #e5e7eb;
    background: rgba(0, 0, 0, 0.55);
    border-radius: 25px;
    padding: 50px 40px 60px;
    backdrop-filter: blur(4px);
    animation: fadeUp 1.2s ease forwards;
}

.program-container h2 {
    font-size: 36px;
    font-weight: 700;
    color: #facc15;
    margin-bottom: 20px;
}

.program-container .program-desc {
    max-width: 700px;
    margin: 0 auto 50px;
    font-size: 16px;
    line-height: 1.8;
    color: #cbd5f5;
}

/* PROGRAM CARDS */
.program-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
}

.program-card {
    background: rgba(255, 255, 255, 0.06);
    border-radius: 20px;
    padding: 35px 30px;
    backdrop-filter: blur(6px);
    transition: all 0.4s ease;
}

.program-card:hover {
    transform: translateY(-8px);
    background: rgba(255, 255, 255, 0.1);
}

.program-card h3 {
    font-size: 22px;
    color: #facc15;
    margin-bottom: 15px;
}

.program-card p {
    font-size: 15px;
    line-height: 1.8;
    color: #e5e7eb;
}

/* ANIMATION */
@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(45px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<section class="program-section">
    <div class="program-container">
        <h2>Program Tahfidz</h2>
        <p class="program-desc">
            Rumah Tahfidz Qur'an menyediakan berbagai program pembelajaran
            yang dirancang sesuai dengan usia dan kemampuan santri,
            dengan bimbingan ustadz dan ustadzah yang berpengalaman.
        </p>

        <div class="program-grid">

            <div class="program-card">
                <h3>Tahfidz Anak</h3>
                <p>
                    Program hafalan Al-Qur'an untuk anak-anak dengan metode
                    yang menyenangkan, bertahap, dan sesuai perkembangan usia.
                </p>
            </div>

            <div class="program-card">
                <h3>Tahfidz Remaja</h3>
                <p>
                    Program hafalan Al-Qur'an bagi remaja dengan penekanan
                    pada kedisiplinan, muroja’ah, dan penjagaan hafalan.
                </p>
            </div>

            <div class="program-card">
                <h3>Tahfidz Dewasa</h3>
                <p>
                    Program hafalan Al-Qur'an untuk orang dewasa
                    dengan jadwal fleksibel dan bimbingan intensif.
                </p>
            </div>

            <div class="program-card">
                <h3>Tahsin Al-Qur'an</h3>
                <p>
                    Program perbaikan bacaan Al-Qur'an sesuai kaidah tajwid
                    untuk meningkatkan kefasihan dan ketepatan makhraj.
                </p>
            </div>

            <div class="program-card">
                <h3>Muroja’ah Intensif</h3>
                <p>
                    Program khusus penguatan dan pengulangan hafalan
                    agar hafalan tetap kuat dan terjaga.
                </p>
            </div>

            <div class="program-card">
                <h3>Kelas Iqro & Dasar Qur'an</h3>
                <p>
                    Program pembelajaran membaca Al-Qur'an dari dasar
                    bagi pemula anak maupun dewasa.
                </p>
            </div>

            <div class="program-card">
                <h3>Pembinaan Akhlak Islami</h3>
                <p>
                    Program pembentukan karakter Islami, adab,
                    dan pembiasaan akhlakul karimah dalam keseharian.
                </p>
            </div>

            <div class="program-card">
                <h3>Kajian Keislaman</h3>
                <p>
                    Kajian rutin meliputi akidah, fiqih, dan akhlak
                    sebagai bekal pemahaman Islam yang benar.
                </p>
            </div>

        </div>
    </div>
</section>

@endsection
