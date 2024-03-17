# Nama Kelompok
1. Rahmad Khoirun Nasirin
2. Falendika Tegar Pratama
3. Fitrah Rahmadhani Ahmad
4. Ni Made Julia Budiantari
5. M.Arya Suherman


# Jika Sudah Selesai Clone
SESUAIKAN BASE_URL DI CONFIG DAN DATABASENYA

# Skame Database
admin / petugas
1. id (INT, PRIMARY KEY, AUTO_INCREMENT)
2. nama (VARCHAR)
3. email (VARCHAR, UNIQUE)
4. password (VARCHAR)
5. roles (VARCHAR) admin/petugas

Product
1. id_produk (VARCHAR, PRIMARY KEY)
2. nama_produk (VARCHAR)
3. harga_satuan (DECIMAL)
4. stok_jual (INT)
5. stok_pinjam (INT)

Pelanggan
1. id_pelanggan (INT, PRIMARY KEY, AUTO_INCREMENT)
2. nama_pelanggan (VARCHAR)
3. alamat (TEXT)
4. telepon (VARCHAR)

Transaksi
1. id_transaksi (INT, PRIMARY KEY, AUTO_INCREMENT)
2. tanggal_transaksi (DATE)
3. id_pelanggan (INT, FOREIGN KEY REFERENCES pelanggan(id))
4. id_produk (VARCHAR, FOREIGN KEY REFERENCES product(id))
5. jumlah (INT)
6. total (DECIMAL)

Peminjaman
1. id_peminjaman (INT, PRIMARY KEY, AUTO_INCREMENT)
2. id_produk (VARCHAR, FOREIGN KEY REFERENCES product(id))
3. id_pelanggan (INT, FOREIGN KEY REFERENCES pelanggan(id))
4. tanggal_pinjam (DATE)
5. tanggal_kembali (DATE)
6. jumlah (INT)
