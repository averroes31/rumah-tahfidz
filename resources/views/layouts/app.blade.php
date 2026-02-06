<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Rumah Tahfidz Qur\'an')</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #020617;
            color: #e5e7eb;
            display: flex;
        }

        /* SIDEBAR */
        .sidebar {
            width: 230px;
            min-height: 100vh;
            background: linear-gradient(180deg, #020617, #0f172a);
            padding: 25px 15px;
            position: fixed;
            left: 0;
            top: 0;
        }

        .sidebar h1 {
            color: #facc15;
            font-size: 20px;
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar nav {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .sidebar nav a {
            padding: 12px 16px;
            border-radius: 10px;
            color: #e5e7eb;
            text-decoration: none;
            font-weight: 500;
            position: relative;
            transition: all 0.3s ease;
        }

        /* GARIS BAWAH */
        .sidebar nav a::after {
            content: "";
            position: absolute;
            left: 16px;
            bottom: 6px;
            width: 0%;
            height: 2px;
            background: #facc15;
            transition: width 0.3s ease;
        }

        .sidebar nav a:hover {
            background: #facc15;
            color: #020617;
            transform: translateX(6px);
        }

        .sidebar nav a:hover::after {
            width: 60%;
        }

        /* LINK AKTIF */
        .sidebar nav a.active {
            background: rgba(250, 204, 21, 0.15);
            color: #facc15;
        }

        .sidebar nav a.active::after {
            width: 60%;
        }

        /* CONTENT AREA */
        .content {
            margin-left: 230px;
            width: calc(100% - 230px);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
            padding: 30px 20px;
        }

        footer {
            text-align: center;
            padding: 25px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .content {
                margin-left: 0;
                width: 100%;
            }

            .sidebar nav {
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
            }
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<aside class="sidebar">
    <h1>Rumah Tahfidz</h1>
    <nav>
        <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Beranda</a>
        <a href="/tentang" class="{{ request()->is('tentang') ? 'active' : '' }}">Tentang</a>
        <a href="/program" class="{{ request()->is('program') ? 'active' : '' }}">Program</a>
        <a href="/kegiatan" class="{{ request()->is('kegiatan') ? 'active' : '' }}">Kegiatan</a>
        <a href="/kontak" class="{{ request()->is('kontak') ? 'active' : '' }}">Kontak</a>
    </nav>
</aside>

<!-- CONTENT -->
<div class="content">
    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Rumah Tahfidz Qur'an Sulthoni Elbarthaq</p>
    </footer>
</div>

</body>
</html>
