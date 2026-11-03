<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI-APOTEK - Form Input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f6f9; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .card { border: none; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        .nav-pills .nav-link { border-radius: 8px; color: #495057; font-weight: 600; padding: 10px 20px; }
        .nav-pills .nav-link.active { background-color: #0d6efd; }
        .btn-custom { border-radius: 8px; font-weight: 600; padding: 10px 20px; }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/"><i class="fa-solid fa-hospital-user me-2"></i>SI-APOTEK</a>
            <a href="/data" class="btn btn-light btn-sm fw-bold"><i class="fa-solid fa-table me-2"></i>Lihat Data Terdaftar</a>
        </div>
    </nav>

    <!-- Content Form -->
    <div class="container my-4 py-2">
        <ul class="nav nav-pills mb-4 justify-content-center bg-white p-2 rounded-3 shadow-sm" id="pills-tab" role="tablist">
            <li class="nav-item">
                <button class="nav-link active" id="pills-pelanggan-tab" data-bs-toggle="pill" data-bs-target="#pills-pelanggan" type="button"><i class="fa-solid fa-users me-2"></i>Input Pelanggan</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="pills-staf-tab" data-bs-toggle="pill" data-bs-target="#pills-staf" type="button"><i class="fa-solid fa-user-tie me-2"></i>Input Staf Apotek</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="pills-obat-tab" data-bs-toggle="pill" data-bs-target="#pills-obat" type="button"><i class="fa-solid fa-pills me-2"></i>Input Daftar Obat</button>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            
            <!-- FORM PELANGGAN -->
            <div class="tab-pane fade show active" id="pills-pelanggan">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <div class="card p-4">
                            <h4 class="mb-3 text-primary"><i class="fa-solid fa-user-plus me-2"></i>Form Input Pelanggan</h4>
                            <hr class="mb-4">
                            <form id="formPelanggan">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">ID Pelanggan</label>
                                    <input type="text" id="id_pelanggan" class="form-control" placeholder="Contoh: PLG001" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Nama Lengkap</label>
                                    <input type="text" id="nama_pelanggan" class="form-control" placeholder="Nama pelanggan" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Alamat</label>
                                    <textarea id="alamat_pelanggan" class="form-control" rows="3" placeholder="Alamat lengkap" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">No HP</label>
                                    <input type="text" id="no_hp_pelanggan" class="form-control" placeholder="081234567890" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 btn-custom"><i class="fa-solid fa-floppy-disk me-2"></i>Simpan Pelanggan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FORM STAF -->
            <div class="tab-pane fade" id="pills-staf">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card p-4">
                            <h4 class="mb-3 text-primary"><i class="fa-solid fa-id-card me-2"></i>Form Input Staf Apotek</h4>
                            <hr class="mb-4">
                            <form id="formStaf">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-bold">ID Staff</label>
                                        <input type="text" id="id_staff" class="form-control" placeholder="STF001" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-bold">Nama Staff</label>
                                        <input type="text" id="nama_staf" class="form-control" placeholder="Nama lengkap" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Alamat</label>
                                    <textarea id="alamat_staf" class="form-control" rows="2" placeholder="Alamat tinggal" required></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-bold">Tempat Lahir</label>
                                        <input type="text" id="tempat_lahir" class="form-control" placeholder="Kota" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-bold">Tanggal Lahir</label>
                                        <input type="date" id="tanggal_lahir" class="form-control" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">No HP</label>
                                    <input type="text" id="no_hp_staf" class="form-control" placeholder="No HP aktif" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 btn-custom"><i class="fa-solid fa-floppy-disk me-2"></i>Simpan Staf</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FORM OBAT -->
            <div class="tab-pane fade" id="pills-obat">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <div class="card p-4">
                            <h4 class="mb-3 text-primary"><i class="fa-solid fa-capsules me-2"></i>Form Input Data Obat</h4>
                            <hr class="mb-4">
                            <form id="formObat">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Kode Obat</label>
                                    <input type="text" id="kode_obat" class="form-control" placeholder="OBT001" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Nama Obat</label>
                                    <input type="text" id="nama_obat" class="form-control" placeholder="Paracetamol 500mg" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-bold">Stock Obat</label>
                                        <input type="number" id="stock_obat" class="form-control" placeholder="Stok" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-bold">Tanggal Expired</label>
                                        <input type="date" id="tanggal_expired" class="form-control" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 btn-custom"><i class="fa-solid fa-floppy-disk me-2"></i>Simpan Obat</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        async function sendData(url, payload, formElement) {
            try {
                const response = await fetch(url, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
                    body: JSON.stringify(payload)
                });
                const result = await response.json();
                if (response.ok) {
                    Swal.fire({
                        icon: 'success', 
                        title: 'Berhasil!', 
                        text: result.message || 'Data berhasil disimpan.',
                        showCancelButton: true,
                        confirmButtonText: 'Lihat Data Terdaftar',
                        cancelButtonText: 'Input Data Lagi'
                    }).then((res) => {
                        if (res.isConfirmed) { window.location.href = '/data'; }
                    });
                    formElement.reset();
                } else {
                    Swal.fire({
                        icon: 'error', 
                        title: 'Gagal!', 
                        text: typeof result === 'object' ? JSON.stringify(result) : result
                    });
                }
            } catch (err) {
                Swal.fire({
                    icon: 'error', 
                    title: 'Error!', 
                    text: 'Gagal terhubung ke server API.'
                });
            }
        }

        document.getElementById('formPelanggan').addEventListener('submit', function(e) {
            e.preventDefault();
            sendData('/api/pelanggan', {
                id_pelanggan: document.getElementById('id_pelanggan').value,
                nama: document.getElementById('nama_pelanggan').value,
                alamat: document.getElementById('alamat_pelanggan').value,
                no_hp: document.getElementById('no_hp_pelanggan').value
            }, this);
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
            }, this);
        });

        document.getElementById('formObat').addEventListener('submit', function(e) {
            e.preventDefault();
            sendData('/api/obat', {
                kode_obat: document.getElementById('kode_obat').value,
                nama_obat: document.getElementById('nama_obat').value,
                stock_obat: document.getElementById('stock_obat').value,
                tanggal_expired: document.getElementById('tanggal_expired').value
            }, this);
        });
    </script>
</body>
</html>