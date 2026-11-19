<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Home') | PWL POS</title>
    <style>
        :root { color-scheme: light; --navy: #173b67; --blue: #2563eb; --bg: #f4f7fb; --text: #182230; }
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Inter, Arial, sans-serif; color: var(--text); background: var(--bg); }
        header { background: var(--navy); color: white; padding: 22px max(20px, calc((100% - 1100px)/2)); }
        header h1 { margin: 0 0 5px; font-size: 23px; }
        header p { margin: 0; opacity: .8; font-size: 13px; }
        nav { background: white; border-bottom: 1px solid #e2e8f0; padding: 0 max(20px, calc((100% - 1100px)/2)); display: flex; gap: 8px; flex-wrap: wrap; }
        nav a { display: inline-block; padding: 15px 12px; color: #334155; text-decoration: none; font-size: 14px; border-bottom: 3px solid transparent; }
        nav a.active { color: var(--blue); font-weight: 700; border-bottom-color: var(--blue); }
        main { max-width: 1100px; margin: 30px auto; padding: 0 20px; min-height: 55vh; }
        .hero { background: linear-gradient(120deg, #173b67, #2563eb); color: white; border-radius: 18px; padding: 34px; }
        .hero h2 { font-size: 30px; margin: 0 0 10px; }
        .hero p { max-width: 650px; line-height: 1.7; color: #eaf1ff; }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; margin-top: 22px; }
        .card { background: white; border: 1px solid #e4eaf2; border-radius: 14px; padding: 20px; box-shadow: 0 4px 16px #1725540a; }
        .card h3 { margin-top: 0; }
        .muted { color: #64748b; font-size: 14px; }
        .btn { display: inline-block; background: var(--blue); color: white; padding: 10px 14px; border-radius: 9px; text-decoration: none; font-size: 14px; border: 0; }
        .btn-light { background: #eaf1ff; color: #1d4ed8; }
        .table-wrap { overflow-x: auto; background: white; border-radius: 12px; border: 1px solid #e2e8f0; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 14px 16px; border-bottom: 1px solid #e8edf4; text-align: left; }
        th { background: #f8fafc; font-size: 13px; color: #475569; }
        .status { display: inline-block; padding: 5px 9px; border-radius: 20px; font-size: 12px; background: #dcfce7; color: #166534; }
        .status.empty { background: #fee2e2; color: #991b1b; }
        .section-head { display:flex; justify-content:space-between; gap:16px; align-items:center; flex-wrap:wrap; margin-bottom:20px; }
        footer { border-top: 1px solid #e2e8f0; padding: 22px 20px; text-align: center; color: #64748b; font-size: 13px; background: white; }
        @media (max-width: 600px) { .hero { padding: 24px; } .hero h2 { font-size: 24px; } }
    </style>
</head>
<body>
    <header>
        <h1>PWL POS</h1>
        <p>Project Praktikum Pemrograman Web Lanjut — Laravel 13</p>
    </header>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    <footer>&copy; {{ date('Y') }} PWL POS · Dibuat untuk praktikum Laravel</footer>
</body>
</html>
