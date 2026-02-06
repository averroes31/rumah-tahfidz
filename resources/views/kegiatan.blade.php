@extends('layouts.app')

@section('content')

<style>
/* ACTIVITIES SECTION */
.activities-section {
    background: linear-gradient(135deg, #020617, #0f172a);
    padding: 90px 20px;
}

.activities-container {
    max-width: 1100px;
    margin: auto;
    text-align: center;
    color: #e5e7eb;
}

.activities-container h2 {
    font-size: 36px;
    font-weight: 700;
    color: #facc15;
    margin-bottom: 20px;
}

.activities-desc {
    max-width: 750px;
    margin: 0 auto 50px;
    font-size: 16px;
    line-height: 1.8;
    color: #cbd5f5;
}

/* ACTIVITY CARDS */
.activities-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 25px;
}

.activity-card {
    background: rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    padding: 35px 30px;
    backdrop-filter: blur(6px);
    transition: all 0.4s ease;
}

.activity-card:hover {
    transform: translateY(-8px);
    background: rgba(255, 255, 255, 0.08);
}

/* ICON */
.activity-icon {
    font-size: 46px;
    margin-bottom: 16px;
    color: #facc15;
}

/* IMAGE */
.activity-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-radius: 14px;
    margin: 14px 0;
}

/* TITLE */
.activity-card h3 {
    font-size: 22px;
    color: #facc15;
    margin-bottom: 10px;
}

.activity-card p {
    font-size: 15px;
    line-height: 1.8;
    color: #e5e7eb;
}
</style>

<section class="activities-section">
    <div class="activities-container">
        <h2>Kegiatan Santri</h2>
        <p class="activities-desc">
            Rumah Tahfidz Qur'an Sulthoni Elbarthaq menyelenggarakan berbagai
            kegiatan pendidikan, ibadah, dan olahraga untuk membentuk santri
            yang Qur’ani, sehat, disiplin, dan berakhlak mulia.
        </p>

        <div class="activities-grid">

            <!-- SETORAN -->
            <div class="activity-card">
                <div class="activity-icon"><i class="fas fa-book-quran"></i></div>
                <h3>Setoran Hafalan</h3>
                <img src="/assets/img/setoran.jpeg" alt="Setoran Hafalan">
                <p>
                    Penyetoran hafalan Al-Qur'an kepada ustadz/ustadzah
                    sebagai evaluasi dan pembinaan rutin.
                </p>
            </div>

            <!-- MUROJAAH -->
            <div class="activity-card">
                <div class="activity-icon"><i class="fas fa-repeat"></i></div>
                <h3>Muroja’ah</h3>
                <img src="/assets/img/murojaah.jpeg" alt="Murojaah">
                <p>
                    Mengulang hafalan secara terjadwal agar hafalan
                    tetap kuat dan terjaga dengan baik.
                </p>
            </div>

            <!-- TAHSIN -->
            <div class="activity-card">
                <div class="activity-icon"><i class="fas fa-quran"></i></div>
                <h3>Tahsin Al-Qur'an</h3>
                <img src="/assets/img/tahsin.jpg" alt="Tahsin">
                <p>
                    Perbaikan bacaan Al-Qur'an sesuai kaidah tajwid
                    untuk meningkatkan kefasihan.
                </p>
            </div>

            <!-- KAJIAN -->
            <div class="activity-card">
                <div class="activity-icon"><i class="fas fa-mosque"></i></div>
                <h3>Kajian Islam</h3>
                <img src="/assets/img/kajian.jpeg" alt="Kajian Islam">
                <p>
                    Pembinaan akidah, akhlak, dan fiqih dasar
                    sebagai bekal kehidupan santri.
                </p>
            </div>

            <!-- SHOLAT -->
            <div class="activity-card">
                <div class="activity-icon"><i class="fas fa-praying-hands"></i></div>
                <h3>Sholat Berjamaah</h3>
                <img src="/assets/img/sholat.jpeg" alt="Sholat Berjamaah">
                <p>
                    Pembiasaan sholat fardhu berjamaah
                    untuk melatih disiplin dan kebersamaan.
                </p>
            </div>

            <!-- OLAHRAGA -->
            <div class="activity-card">
                <div class="activity-icon"><i class="fas fa-futbol"></i></div>
                <h3>Olahraga Pesantren</h3>
                <img src="/assets/img/olahraga.jpg" alt="Olahraga">
                <p>
                   Senam dipagi hari untuk memperbaiki daya atau imun pada tubuh 
                </p>
            </div>

            <!-- KERJA BAKTI -->
            <div class="activity-card">
                <div class="activity-icon"><i class="fas fa-broom"></i></div>
                <h3>Kerja Bakti</h3>
                <img src="/assets/img/kerjabakti.jpeg" alt="Kerja Bakti">
                <p>
                    Kegiatan kebersihan lingkungan untuk
                    menanamkan tanggung jawab dan kemandirian.
                </p>
            </div>

            <!-- KEAGAMAAN -->
            <div class="activity-card">
                <div class="activity-icon"><i class="fas fa-moon"></i></div>
                <h3>Kegiatan Keagamaan</h3>
                <img src="/assets/img/keagamaan.jpg" alt="Keagamaan">
                <p>
                    Dzikir, doa bersama, dan peringatan
                    hari besar Islam.
                </p>
            </div>

        </div>
    </div>
</section>

@endsection
