<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Organisasi Mahasiswa</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #111;
            color: #f8f9fa;
            position: relative;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* === Background Blur === */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: url('/1.jpg') no-repeat center center;
            background-size: cover;
            filter: blur(10px);
            z-index: -2;
        }

        body::after {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.6); /* Overlay hitam transparan */
            z-index: -1;
        }

        nav {
            position: sticky;
            top: 0;
            background-color: #1a1a1a;
            padding: 15px 30px;
            text-align: right;
            border-bottom: 2px solid #660000;
            z-index: 1000;
            box-shadow: 0 2px 8px rgba(255, 0, 0, 0.1);
        }

        nav ul {
            list-style: none;
            display: inline-flex;
            margin: 0;
            padding: 0;
            gap: 30px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            text-decoration: none;
            color: #f8f9fa;
            font-weight: bold;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #ff4b4b;
        }

        .container {
            padding: 30px;
            background-color: rgba(0, 0, 0, 0.65);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.2);
        }

        h1 {
            color: #ff4b4b;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #1e1e1e;
            color: #f8f9fa;
        }

        table, th, td {
            border: 1px solid #333;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        a.button {
            background-color: #ff4b4b;
            padding: 8px 16px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        a.button:hover {
            background-color: #cc0000;
        }

        button {
            background-color: #ff4b4b;
            border: none;
            padding: 6px 12px;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #cc0000;
        }

        input, select, textarea {
            padding: 8px;
            width: 100%;
            margin-bottom: 10px;
            background-color: #2a2a2a;
            border: 1px solid #444;
            color: white;
            border-radius: 4px;
        }

        label {
            font-weight: bold;
            color: #f8f9fa;
        }
    </style>
</head>
<body>

    <nav>
        <ul>
            <li><a href="{{ route('organisasi.index') }}">Organisasi</a></li>
            <li><a href="{{ route('anggota.index') }}">Anggota</a></li>
            <li><a href="{{ route('kegiatan.index') }}">Kegiatan</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
