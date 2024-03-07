# Project Tokobook MVC
Langka - langka menjalankan project Menggunakan github dekstop
1. clone code menggunakan aplikasi github dekstop
2. Download aplikasi [Disini](https://desktop.github.com/)


# Jika Sudah Selesai Clone
SESUAIKAN BASE_URL DI CONFIG DAN DATABASENYA

# Skame Database
admin / petugas
1. id (INT, PRIMARY KEY, AUTO_INCREMENT)
2. nama (VARCHAR)
3. username (VARCHAR, UNIQUE)
4. password (VARCHAR)
5. roles (VARCHAR) admin/petugas

Produk
1. id (INT, PRIMARY KEY, AUTO_INCREMENT)
2. nama (VARCHAR)
3. harga (DECIMAL)
4. stok (INT)

Pelanggan
1. id (INT, PRIMARY KEY, AUTO_INCREMENT)
2. nama (VARCHAR)
3. alamat (TEXT)
4. telepon (VARCHAR)

Transaksi
1. id (INT, PRIMARY KEY, AUTO_INCREMENT)
2. tanggal_transaksi (DATE)
3. id_pelanggan (INT, FOREIGN KEY REFERENCES pelanggan(id))
4. id_produk (INT, FOREIGN KEY REFERENCES produk(id))
5. jumlah (INT)
6. total (DECIMAL)

Peminjaman
1. id (INT, PRIMARY KEY, AUTO_INCREMENT)
2. id_produk (INT, FOREIGN KEY REFERENCES produk(id))
3. id_pelanggan (INT, FOREIGN KEY REFERENCES pelanggan(id))
4. tanggal_pinjam (DATE)
5. tanggal_kembali (DATE)
6. jumlah (INT)
