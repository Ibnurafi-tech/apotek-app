<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI-APOTEK - Data Terdaftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f6f9; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .card { border: none; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        .nav-pills .nav-link { border-radius: 8px; color: #495057; font-weight: 600; padding: 10px 20px; }
        .nav-pills .nav-link.active { background-color: #0d6efd; }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/"><i class="fa-solid fa-hospital-user me-2"></i>SI-APOTEK</a>
            <a href="/" class="btn btn-light btn-sm fw-bold"><i class="fa-solid fa-plus me-2"></i>Tambah Data Baru</a>
        </div>
    </nav>

    <!-- Content Tabel -->
    <div class="container my-4 py-2">
        <ul class="nav nav-pills mb-4 justify-content-center bg-white p-2 rounded-3 shadow-sm" id="pills-tab" role="tablist">
            <li class="nav-item">
                <button class="nav-link active" id="pills-pelanggan-tab" data-bs-toggle="pill" data-bs-target="#pills-pelanggan" type="button"><i class="fa-solid fa-list me-2"></i>Daftar Pelanggan</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="pills-staf-tab" data-bs-toggle="pill" data-bs-target="#pills-staf" type="button"><i class="fa-solid fa-users-gear me-2"></i>Daftar Staf Apotek</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="pills-obat-tab" data-bs-toggle="pill" data-bs-target="#pills-obat" type="button"><i class="fa-solid fa-boxes-stacked me-2"></i>Stok Obat</button>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            
            <!-- TABEL PELANGGAN -->
            <div class="tab-pane fade show active" id="pills-pelanggan">
                <div class="card p-4">
                    <h4 class="mb-3 text-primary"><i class="fa-solid fa-users me-2"></i>Data Pelanggan Terdaftar</h4>
                    <hr class="mb-4">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped align-middle">
                            <thead class="table-primary">
                                <tr>
                                    <th>ID Pelanggan</th>
                                    <th>Nama Lengkap</th>
                                    <th>Alamat</th>
                                    <th>No HP</th>
                                </tr>
                            </thead>
                            <tbody id="tabelPelanggan"></tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- TABEL STAF -->
            <div class="tab-pane fade" id="pills-staf">
                <div class="card p-4">
                    <h4 class="mb-3 text-primary"><i class="fa-solid fa-user-tie me-2"></i>Data Staf Apotek Terdaftar</h4>
                    <hr class="mb-4">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped align-middle">
                            <thead class="table-primary">
                                <tr>
                                    <th>ID Staff</th>
                                    <th>Nama Staff</th>
                                    <th>Tempat, Tgl Lahir</th>
                                    <th>No HP</th>
                                </tr>
                            </thead>
                            <tbody id="tabelStaf"></tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- TABEL OBAT -->
            <div class="tab-pane fade" id="pills-obat">
                <div class="card p-4">
                    <h4 class="mb-3 text-primary"><i class="fa-solid fa-pills me-2"></i>Daftar Stok Obat</h4>
                    <hr class="mb-4">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped align-middle">
                            <thead class="table-primary">
                                <tr>
                                    <th>Kode Obat</th>
                                    <th>Nama Obat</th>
                                    <th>Stok</th>
                                    <th>Tgl Expired</th>
                                </tr>
                            </thead>
                            <tbody id="tabelObat"></tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        async function loadTableData() {
            // Load Pelanggan
            const resPelanggan = await fetch('/api/pelanggan');
            const dataPelanggan = await resPelanggan.json();
            document.getElementById('tabelPelanggan').innerHTML = dataPelanggan.map(p => `
                <tr>
                    <td><span class="badge bg-secondary">${p.id_pelanggan}</span></td>
                    <td class="fw-bold">${p.nama}</td>
                    <td>${p.alamat}</td>
                    <td>${p.no_hp}</td>
                </tr>
            `).join('');

            // Load Staf
            const resStaf = await fetch('/api/staf');
            const dataStaf = await resStaf.json();
            document.getElementById('tabelStaf').innerHTML = dataStaf.map(s => `
                <tr>
                    <td><span class="badge bg-secondary">${s.id_staff}</span></td>
                    <td class="fw-bold">${s.nama}</td>
                    <td>${s.tempat_lahir}, ${s.tanggal_lahir}</td>
                    <td>${s.no_hp}</td>
                </tr>
            `).join('');

            // Load Obat
            const resObat = await fetch('/api/obat');
            const dataObat = await resObat.json();
            document.getElementById('tabelObat').innerHTML = dataObat.map(o => `
                <tr>
                    <td><span class="badge bg-secondary">${o.kode_obat}</span></td>
                    <td class="fw-bold">${o.nama_obat}</td>
                    <td><span class="badge bg-success">${o.stock_obat} Pcs</span></td>
                    <td>${o.tanggal_expired}</td>
                </tr>
            `).join('');
        }

        document.addEventListener('DOMContentLoaded', loadTableData);
    </script>
</body>
</html>