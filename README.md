# Project Tokobook MVC
Langka - langka menjalankan project Menggunakan github dekstop
1. clone code menggunakan aplikasi github dekstop
2. Download aplikasi [Disini](https://desktop.github.com/)


# Jika Sudah Selesai Clone
SESUAIKAN BASE_URL DI CONFIG DAN DATABASENYA

# Skame Database
# admin / petugas
id (INT, PRIMARY KEY, AUTO_INCREMENT)
nama (VARCHAR)
username (VARCHAR, UNIQUE)
password (VARCHAR)
roles

# Produk
id (INT, PRIMARY KEY, AUTO_INCREMENT)
nama (VARCHAR)
harga (DECIMAL)
stok (INT)

# Pelanggan
id (INT, PRIMARY KEY, AUTO_INCREMENT)
nama (VARCHAR)
alamat (TEXT)
telepon (VARCHAR)

# Transaksi
id (INT, PRIMARY KEY, AUTO_INCREMENT)
tanggal_transaksi (DATE)
id_pelanggan (INT, FOREIGN KEY REFERENCES pelanggan(id))
jumlah (INT)
total (DECIMAL)

#Peminjaman
id (INT, PRIMARY KEY, AUTO_INCREMENT)
id_transaksi (INT, FOREIGN KEY REFERENCES transaksi(id))
id_produk (INT, FOREIGN KEY REFERENCES produk(id))
tanggal_pinjam (DATE)
tanggal_kembali (DATE)
jumlah (INT)
