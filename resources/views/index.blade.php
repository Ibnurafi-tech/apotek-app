<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Apotek</title>
    <!-- Bootstrap 5 CSS & FontAwesome Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f6f9; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .navbar-brand { font-weight: 700; letter-spacing: 1px; }
        .card { border: none; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        .nav-pills .nav-link { border-radius: 8px; color: #495057; font-weight: 600; padding: 10px 20px; }
        .nav-pills .nav-link.active { background-color: #0d6efd; }
        .btn-custom { border-radius: 8px; font-weight: 600; padding: 10px 20px; }
        .form-label { font-weight: 600; color: #343a40; }
        .form-control { border-radius: 8px; padding: 10px 14px; }
        .form-control:focus { box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15); }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fa-solid me-2"></i>SISTEM APOTEK TERINTEGRASI</a>
            <span class="navbar-text text-white font-monospace">TRKJ 2D</span>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-4 py-2">
        <!-- Navigation Tabs -->
        <ul class="nav nav-pills mb-4 justify-content-center bg-white p-2 rounded-3 shadow-sm" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-pelanggan-tab" data-bs-toggle="pill" data-bs-target="#pills-pelanggan" type="button" role="tab"><i class="fa-solid fa-users me-2"></i>Data Pelanggan</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-staf-tab" data-bs-toggle="pill" data-bs-target="#pills-staf" type="button" role="tab"><i class="fa-solid fa-user-tie me-2"></i>Staf Apotek</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-obat-tab" data-bs-toggle="pill" data-bs-target="#pills-obat" type="button" role="tab"><i class="fa-solid fa-pills me-2"></i>Daftar Obat</button>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            
            <!-- TAB 1: FORM PELANGGAN -->
            <div class="tab-pane fade show active" id="pills-pelanggan" role="tabpanel">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <div class="card p-4">
                            <h4 class="mb-3 text-primary"><i class="fa-solid fa-user-plus me-2"></i>Input Data Pelanggan</h4>
                            <hr class="mb-4">
                            <form id="formPelanggan">
                                <div class="mb-3">
                                    <label class="form-label">ID Pelanggan</label>
                                    <input type="text" id="id_pelanggan" class="form-control" placeholder="Contoh: PLG001" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" id="nama_pelanggan" class="form-control" placeholder="Masukkan nama pelanggan" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Alamat</label>
                                    <textarea id="alamat_pelanggan" class="form-control" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">No HP</label>
                                    <input type="text" id="no_hp_pelanggan" class="form-control" placeholder="Contoh: 081234567890" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 btn-custom"><i class="fa-solid fa-floppy-disk me-2"></i>Simpan Data Pelanggan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 2: FORM STAF APOTEK -->
            <div class="tab-pane fade" id="pills-staf" role="tabpanel">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card p-4">
                            <h4 class="mb-3 text-primary"><i class="fa-solid fa-id-card me-2"></i>Input Data Staf Apotek</h4>
                            <hr class="mb-4">
                            <form id="formStaf">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">ID Staff</label>
                                        <input type="text" id="id_staff" class="form-control" placeholder="Contoh: STF001" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Nama Staff</label>
                                        <input type="text" id="nama_staf" class="form-control" placeholder="Nama lengkap staff" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Alamat</label>
                                    <textarea id="alamat_staf" class="form-control" rows="2" placeholder="Alamat tinggal" required></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Tempat Lahir</label>
                                        <input type="text" id="tempat_lahir" class="form-control" placeholder="Kota kelahiran" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input type="date" id="tanggal_lahir" class="form-control" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">No HP</label>
                                    <input type="text" id="no_hp_staf" class="form-control" placeholder="Nomor HP aktif" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 btn-custom"><i class="fa-solid fa-floppy-disk me-2"></i>Simpan Data Staf</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 3: FORM DAFTAR OBAT -->
            <div class="tab-pane fade" id="pills-obat" role="tabpanel">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <div class="card p-4">
                            <h4 class="mb-3 text-primary"><i class="fa-solid fa-capsules me-2"></i>Input Data Obat</h4>
                            <hr class="mb-4">
                            <form id="formObat">
                                <div class="mb-3">
                                    <label class="form-label">Kode Obat</label>
                                    <input type="text" id="kode_obat" class="form-control" placeholder="Contoh: OBT001" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama Obat</label>
                                    <input type="text" id="nama_obat" class="form-control" placeholder="Contoh: Paracetamol 500mg" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Stock Obat</label>
                                        <input type="number" id="stock_obat" class="form-control" placeholder="Jumlah stok" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Tanggal Expired</label>
                                        <input type="date" id="tanggal_expired" class="form-control" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 btn-custom"><i class="fa-solid fa-floppy-disk me-2"></i>Simpan Data Obat</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap 5 JS & SweetAlert2 untuk notifikasi cantik -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Fungsi kirim data ke API Laravel
        async function sendData(url, payload) {
            try {
                const response = await fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(payload)
                });
                const result = await response.json();
                if (response.ok) {
                    Swal.fire({'icon': 'success', 'title': 'Berhasil!', 'text': result.message || 'Data berhasil disimpan.'});
                } else {
                    Swal.fire({'icon': 'error', 'title': 'Gagal!', 'text': JSON.stringify(result)});
                }
            } catch (err) {
                Swal.fire({'icon': 'error', 'title': 'Error!', 'text': 'Gagal terhubung ke server.'});
            }
        }

        // Form Submit Event Handlers
        document.getElementById('formPelanggan').addEventListener('submit', function(e) {
            e.preventDefault();
            sendData('/api/pelanggan', {
                id_pelanggan: document.getElementById('id_pelanggan').value,
                nama: document.getElementById('nama_pelanggan').value,
                alamat: document.getElementById('alamat_pelanggan').value,
                no_hp: document.getElementById('no_hp_pelanggan').value
            });
        });

        document.getElementById('formStaf').addEventListener('submit', function(e) {
            e.preventDefault();
            sendData('/api/staf', {
                id_staff: document.getElementById('id_staff').value,
                nama: document.getElementById('nama_staf').value,
                alamat: document.getElementById('alamat_staf').value,
                tempat_lahir: document.getElementById('tempat_lahir').value,
                tanggal_lahir: document.getElementById('tanggal_lahir').value,
                no_hp: document.getElementById('no_hp_staf').value
            });
        });

        document.getElementById('formObat').addEventListener('submit', function(e) {
            e.preventDefault();
            sendData('/api/obat', {
                kode_obat: document.getElementById('kode_obat').value,
                nama_obat: document.getElementById('nama_obat').value,
                stock_obat: document.getElementById('stock_obat').value,
                tanggal_expired: document.getElementById('tanggal_expired').value
            });
        });
    </script>
</body>
</html>