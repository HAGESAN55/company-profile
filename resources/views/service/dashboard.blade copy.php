<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>

<div class="admin-wrapper">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="sidebar-header">
            <h4>Dashboard</h4>
        </div>

        <ul class="sidebar-menu">

            <li>
                <a href="/admin" class="active">
                    Dashboard
                </a>
            </li>

            <li>
                <a href="/">
                    Kembali ke Website
                </a>
            </li>

        </ul>

    </aside>


    <!-- MAIN CONTENT -->
    <main class="main-content">

        <!-- TOPBAR -->
        <nav class="topbar">

            <h5>Dashboard</h5>

            <span class="admin-name">
                Administrator
            </span>

        </nav>


        <!-- CONTENT -->
        <section class="content">

            <h3 class="mb-4">
                Selamat Datang di Dashboard
            </h3>


            <!-- STAT CARD -->
            <div class="row g-4 mb-5">

                <div class="col-md-3">
                    <div class="stat-card">
                        <h6>User</h6>
                        <h2>120</h2>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="stat-card">
                        <h6>Galeri</h6>
                        <h2>45</h2>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="stat-card">
                        <h6>Artikel</h6>
                        <h2>22</h2>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="stat-card">
                        <h6>Visitor</h6>
                        <h2>2.340</h2>
                    </div>
                </div>

            </div>


            <!-- TABLE -->
            <div class="card">

                <div class="card-header fw-bold">
                    Aktivitas Terbaru
                </div>

                <div class="card-body p-0">

                    <table class="table mb-0">

                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Aksi</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>Admin</td>
                                <td>Update Artikel</td>
                                <td>2026-02-28</td>
                            </tr>

                            <tr>
                                <td>Admin</td>
                                <td>Upload Galeri</td>
                                <td>2026-02-27</td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>


        </section>

    </main>

</div>


</body>
</html>