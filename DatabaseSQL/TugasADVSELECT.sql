//ADVANCE SELECT

//SOAL 3.1

//1.	Tampilkan produk yang asset nya diatas 20jt
SELECT * FROM produk WHERE harga_beli * stok > 20000000;
+----+-------+-----------------+------------+------------+------+----------+--------------+
| id | kode  | nama            | harga_beli | harga_jual | stok | min_stok | jenis_produk |
+----+-------+-----------------+------------+------------+------+----------+--------------+
| 10 | KS111 | Bedak Emas Raja |   15000000 |   16000000 |    3 |        1 |            6 |
+----+-------+-----------------+------------+------------+------+----------+--------------+

//2.	Tampilkan data produk beserta selisih stok dengan minimal stok
SELECT SUM(stok - min_stok) AS selisih FROM produk;
+---------+
| selisih |
+---------+
|      19 |
+---------+

//3.	Tampilkan total asset produk secara keseluruhan
SELECT SUM(stok) AS total_asset FROM produk;
+-------------+
| total_asset |
+-------------+
|         151 |
+-------------+

//4.	Tampilkan data pelanggan yang lahirnya antara tahun 1999 sampai 2004
SELECT * FROM pelanggan WHERE YEAR(tgl_lahir) BETWEEN 1999 AND 2004;
+----+--------+----------------+------+------------+------------+-----------------------+----------+
| id | kode   | nama_pelanggan | jk   | tmp_lahir  | tgl_lahir  | email                 | kartu_id |
+----+--------+----------------+------+------------+------------+-----------------------+----------+
|  1 | 010001 | Rian Haidar    | L    | Bandung    | 1999-10-19 | rian.gang@gmail.com   |        2 |
|  2 | 010002 | Hermin Aina    | P    | Bojonegoro | 2001-02-10 | hermina@gmail.com     |        1 |
|  4 | 010004 | Gilang Handika | L    | Semarang   | 2001-03-04 | gggilanghdk@gmail.com |        2 |
|  5 | 010005 | Pras Budi      | L    | Sleman     | 2000-07-17 | BPras112@gmail.com    |        1 |
|  6 | 010006 | Zilvia Riana   | P    | Solo       | 2002-04-18 | zilzilia@gmail.com    |        2 |
|  9 | 10009  | Maryon Lieh    | L    | Jakarta    | 2000-05-01 | maryonlie@gmail.com   |        1 |
+----+--------+----------------+------+------------+------------+-----------------------+----------+

//5.	Tampilkan data pelanggan yang lahirnya tahun 1998
SELECT * FROM pelanggan WHERE YEAR(tgl_lahir)=1998;
+----+--------+----------------+------+-----------+------------+--------------------+----------+
| id | kode   | nama_pelanggan | jk   | tmp_lahir | tgl_lahir  | email              | kartu_id |
+----+--------+----------------+------+-----------+------------+--------------------+----------+
|  3 | 010003 | Diana Laras    | P    | Malang    | 1998-11-23 | laras773@gmail.com |        3 |
|  8 | 10008  | Jihan Yohana   | P    | Kediri    | 1998-12-31 | yohanjj@gmail.com  |        2 |
+----+--------+----------------+------+-----------+------------+--------------------+----------+

//6.	Tampilkan data pelanggan yang berulang tahun bulan Juli (Dalam Database saya tidak ada yang lahir Bulan Agustus)
SELECT * FROM pelanggan WHERE MONTH(tgl_lahir)=07;
+----+--------+----------------+------+-----------+------------+--------------------+----------+
| id | kode   | nama_pelanggan | jk   | tmp_lahir | tgl_lahir  | email              | kartu_id |
+----+--------+----------------+------+-----------+------------+--------------------+----------+
|  5 | 010005 | Pras Budi      | L    | Sleman    | 2000-07-17 | BPras112@gmail.com |        1 |
+----+--------+----------------+------+-----------+------------+--------------------+----------+

//7.	Tampilkan data pelanggan : nama, tmp_lahir, tgl_lahir dan umur (selisih tahun sekarang dikurang tahun kelahiran)
SELECT nama_pelanggan, tmp_lahir, tgl_lahir, (YEAR(NOW())-YEAR(tgl_lahir)) AS umur FROM pelanggan;
+----------------+------------+------------+------+
| nama_pelanggan | tmp_lahir  | tgl_lahir  | umur |
+----------------+------------+------------+------+
| Rian Haidar    | Bandung    | 1999-10-19 |   24 |
| Hermin Aina    | Bojonegoro | 2001-02-10 |   22 |
| Diana Laras    | Malang     | 1998-11-23 |   25 |
| Gilang Handika | Semarang   | 2001-03-04 |   22 |
| Pras Budi      | Sleman     | 2000-07-17 |   23 |
| Zilvia Riana   | Solo       | 2002-04-18 |   21 |
| Satria Hanung  | Jakarta    | 1997-10-30 |   26 |
| Jihan Yohana   | Kediri     | 1998-12-31 |   25 |
| Maryon Lieh    | Jakarta    | 2000-05-01 |   23 |
+----------------+------------+------------+------+

//SOAL 3.2

//1.	Berapa jumlah pelanggan yang tahun lahirnya 1998
SELECT COUNT(*) AS Lahir_1998 FROM pelanggan WHERE YEAR(tgl_lahir)=1998;
+------------+
| Lahir_1998 |
+------------+
|          2 |
+------------+

//2.	Berapa jumlah pelanggan perempuan yang tempat lahirnya di Jakarta
SELECT COUNT(*) AS Lahir_Jakarta FROM pelanggan WHERE tmp_lahir='Jakarta';
+---------------+
| Lahir_Jakarta |
+---------------+
|             2 |
+---------------+

//3.	Berapa jumlah total stok semua produk yang harga jualnya dibawah 20rb (Didalam database saya harga terendah adalah 10.000 sehingga saya ganti menjadi 20.000)
SELECT SUM(stok) AS Stok_B10K FROM produk WHERE harga_jual <20000;
+-----------+
| Stok_B10K |
+-----------+
|        10 |
+-----------+

//4.	Ada berapa produk yang mempunyai kode awal K
SELECT COUNT(*) AS Huruf_AwalK FROM produk WHERE kode LIKE 'K%';
+-------------+
| Huruf_AwalK |
+-------------+
|           1 |
+-------------+

//5.	Berapa harga jual rata-rata produk yang diatas 1jt
SELECT AVG(harga_jual) AS Harga_Rata1Jt FROM produk WHERE harga_jual > 1000000;
+---------------+
| Harga_Rata1Jt |
+---------------+
|       5530000 |
+---------------+

//6.	Tampilkan jumlah stok yang paling besar
SELECT nama, MAX(stok) AS stok_terbanyak FROM produk;
+--------+----------------+
| nama   | stok_terbanyak |
+--------+----------------+
| Laptop |             50 |
+--------+----------------+

//7.	Ada berapa produk yang stoknya kurang dari minimal stok
SELECT COUNT(*) AS Stok_Kurang FROM produk WHERE stok < min_stok;
+-------------+
| Stok_Kurang |
+-------------+
|           1 |
+-------------+

//8.	Berapa total asset dari keseluruhan produk
SELECT SUM(stok) AS total_asset FROM produk;
+-------------+
| total_asset |
+-------------+
|         151 |
+-------------+

//SOAL 3.3

//1.	Tampilkan data produk : id, kode(sengaja biar keren), nama, stok dan informasi jika stok telah sampai batas minimal atau kurang dari minimum stok dengan informasi ‘segera belanja’ jika tidak ‘stok aman’.
SELECT id, kode, nama, stok,
IF(stok < min_stok, 'Segera Belanja', 'Stok Aman') AS Info_Stok
FROM produk;
+----+-------+-----------------+------+----------------+
| id | kode  | nama            | stok | Info_Stok      |
+----+-------+-----------------+------+----------------+
|  1 | EL111 | Laptop          |    5 | Stok Aman      |
|  2 | MK111 | Nasi Goreng     |   50 | Stok Aman      |
|  3 | EL112 | Setrika         |   30 | Stok Aman      |
|  4 | FT111 | Kursi Kayu      |   20 | Stok Aman      |
|  5 | PK111 | Kemeja Hitam    |   15 | Stok Aman      |
|  6 | PK112 | Gaun Merak      |   10 | Stok Aman      |
|  7 | MN111 | Es Kopyor       |   10 | Segera Belanja |
|  8 | EL113 | AC              |    4 | Stok Aman      |
|  9 | FT112 | Meja Kaca       |    4 | Stok Aman      |
| 10 | KS111 | Bedak Emas Raja |    3 | Stok Aman      |
+----+-------+-----------------+------+----------------+

//2.	Tampilkan data pelanggan: id, nama, umur dan kategori umur : jika umur < 17 → ‘muda’ , 17-55 → ‘Dewasa’, selainnya ‘Tua’
SELECT id, nama_pelanggan, (YEAR(NOW())-YEAR(tgl_lahir)) AS umur,
CASE
	WHEN DATEDIFF(CURRENT_DATE(), tgl_lahir)/365 < 17 THEN 'Muda'
	WHEN DATEDIFF(CURRENT_DATE(), tgl_lahir)/365 < 55 THEN 'Dewasa'
	ELSE 'Tua'
END AS Kategori_Usia
FROM pelanggan;
+----+----------------+------+---------------+
| id | nama_pelanggan | umur | Kategori_Usia |
+----+----------------+------+---------------+
|  1 | Rian Haidar    |   24 | Dewasa        |
|  2 | Hermin Aina    |   22 | Dewasa        |
|  3 | Diana Laras    |   25 | Dewasa        |
|  4 | Gilang Handika |   22 | Dewasa        |
|  5 | Pras Budi      |   23 | Dewasa        |
|  6 | Zilvia Riana   |   21 | Dewasa        |
|  7 | Satria Hanung  |   26 | Dewasa        |
|  8 | Jihan Yohana   |   25 | Dewasa        |
|  9 | Maryon Lieh    |   23 | Dewasa        |
+----+----------------+------+---------------+

//3.	Tampilkan data produk: id, kode, nama, dan bonus untuk kode ‘EL111’ →’Hardisk’ , ‘KS111’ → ‘Masker Wajah’ selain dari diatas ‘Tidak Ada’ (Menyesuakain dengan Tabel Database saya soal saya ubah)
SELECT id, kode, nama,
CASE
	WHEN kode = 'EL111' THEN 'Hardisk'
	WHEN kode = 'KS111' THEN 'Masker Wajah'
	ELSE 'Tidak Ada'
END AS bonus
FROM produk;
+----+-------+-----------------+--------------+
| id | kode  | nama            | bonus        |
+----+-------+-----------------+--------------+
|  1 | EL111 | Laptop          | Hardisk      |
|  2 | MK111 | Nasi Goreng     | Tidak Ada    |
|  3 | EL112 | Setrika         | Tidak Ada    |
|  4 | FT111 | Kursi Kayu      | Tidak Ada    |
|  5 | PK111 | Kemeja Hitam    | Tidak Ada    |
|  6 | PK112 | Gaun Merak      | Tidak Ada    |
|  7 | MN111 | Es Kopyor       | Tidak Ada    |
|  8 | EL113 | AC              | Tidak Ada    |
|  9 | FT112 | Meja Kaca       | Tidak Ada    |
| 10 | KS111 | Bedak Emas Raja | Masker Wajah |
+----+-------+-----------------+--------------+

//SOAL 3.4

//1.	Tampilkan data statistik jumlah tempat lahir pelanggan
SELECT tmp_lahir, COUNT(*) AS Jumlah_Pelanggan
FROM pelanggan
GROUP BY tmp_lahir;
+------------+------------------+
| tmp_lahir  | Jumlah_Pelanggan |
+------------+------------------+
| Bandung    |                1 |
| Bojonegoro |                1 |
| Jakarta    |                2 |
| Kediri     |                1 |
| Malang     |                1 |
| Semarang   |                1 |
| Sleman     |                1 |
| Solo       |                1 |
+------------+------------------+

//2.	Tampilkan jumlah statistik produk berdasarkan jenis produk
SELECT produk.jenis_produk, jenis_produk.nama, COUNT(*) AS Jumlah_Jenis
FROM produk
JOIN jenis_produk ON produk.jenis_produk = jenis_produk.id
GROUP BY produk.jenis_produk;
+--------------+------------+--------------+
| jenis_produk | nama       | Jumlah_Jenis |
+--------------+------------+--------------+
|            1 | Elektronik |            3 |
|            2 | Makanan    |            1 |
|            3 | Minuman    |            1 |
|            4 | Pakaian    |            2 |
|            5 | Furnitur   |            2 |
|            6 | Kosmetik   |            1 |
+--------------+------------+--------------+

//3.	Tampilkan data pelanggan yang usianya dibawah rata usia pelanggan
SELECT * FROM pelanggan
WHERE YEAR(NOW()) - YEAR(tgl_lahir) < (SELECT AVG(YEAR(NOW()) - YEAR(tgl_lahir)) FROM pelanggan);
+----+--------+----------------+------+------------+------------+-----------------------+----------+
| id | kode   | nama_pelanggan | jk   | tmp_lahir  | tgl_lahir  | email                 | kartu_id |
+----+--------+----------------+------+------------+------------+-----------------------+----------+
|  2 | 010002 | Hermin Aina    | P    | Bojonegoro | 2001-02-10 | hermina@gmail.com     |        1 |
|  4 | 010004 | Gilang Handika | L    | Semarang   | 2001-03-04 | gggilanghdk@gmail.com |        2 |
|  5 | 010005 | Pras Budi      | L    | Sleman     | 2000-07-17 | BPras112@gmail.com    |        1 |
|  6 | 010006 | Zilvia Riana   | P    | Solo       | 2002-04-18 | zilzilia@gmail.com    |        2 |
|  9 | 10009  | Maryon Lieh    | L    | Jakarta    | 2000-05-01 | maryonlie@gmail.com   |        1 |
+----+--------+----------------+------+------------+------------+-----------------------+----------+

//4.	Tampilkan data produk yang harganya diatas rata-rata harga produk
SELECT * FROM produk
WHERE harga_jual > (SELECT AVG(harga_jual) FROM produk);
+----+-------+-----------------+------------+------------+------+----------+--------------+
| id | kode  | nama            | harga_beli | harga_jual | stok | min_stok | jenis_produk |
+----+-------+-----------------+------------+------------+------+----------+--------------+
|  1 | EL111 | Laptop          |    3500000 |    3800000 |    5 |        4 |            1 |
|  8 | EL113 | AC              |    3750000 |    4100000 |    4 |        2 |            1 |
| 10 | KS111 | Bedak Emas Raja |   15000000 |   16000000 |    3 |        1 |            6 |
+----+-------+-----------------+------------+------------+------+----------+--------------+

//5.	Tampilkan data pelanggan yang memiliki kartu dimana iuran tahunan kartu diatas 500[dalam ribu](Mengikuti data Statistik saya di Dalam Database)
SELECT pelanggan.id, pelanggan.kode, pelanggan.nama_pelanggan, pelanggan.kode, pelanggan.jk,  pelanggan.kartu_id, kartu.nama, kartu.iuran
FROM pelanggan
JOIN kartu ON pelanggan.kartu_id = kartu.id
WHERE kartu.iuran > 500;
+-------------+------------+-----------------------------------------------+------------+------+-------------+--------------------------------+------------------------+
| id          | kode       | nama_pelanggan                                | kode       | jk   | kartu_id    | nama                           | iuran                  |
+-------------+------------+-----------------------------------------------+------------+------+-------------+--------------------------------+------------------------+
|           1 | 010001     | Rian Haidar                                   | 010001     | L    |           2 | Perak                          |                   1000 |
|           2 | 010002     | Hermin Aina                                   | 010002     | P    |           1 | Emas                           |                   2000 |
|           4 | 010004     | Gilang Handika                                | 010004     | L    |           2 | Perak                          |                   1000 |
|           5 | 010005     | Pras Budi                                     | 010005     | L    |           1 | Emas                           |                   2000 |
|           6 | 010006     | Zilvia Riana                                  | 010006     | P    |           2 | Perak                          |                   1000 |
|           7 | 10007      | Satria Hanung                                 | 10007      | L    |           1 | Emas                           |                   2000 |
|           8 | 10008      | Jihan Yohana                                  | 10008      | P    |           2 | Perak                          |                   1000 |
|           9 | 10009      | Maryon Lieh                                   | 10009      | L    |           1 | Emas                           |                   2000 |
+-------------+------------+-----------------------------------------------+------------+------+-------------+--------------------------------+------------------------+

//6.	Tampilkan statistik data produk dimana harga produknya dibawah rata-rata harga produk secara keseluruhan
SELECT * FROM produk
WHERE harga_beli < (SELECT AVG(harga_beli) FROM produk);
+-------------+------------+-----------------------------------------------+------------------------+------------------------+-------------+-------------+--------------+
| id          | kode       | nama                                          | harga_beli             | harga_jual             | stok        | min_stok    | jenis_produk |
+-------------+------------+-----------------------------------------------+------------------------+------------------------+-------------+-------------+--------------+
|           2 | MK111      | Nasi Goreng                                   |                  10000 |                  20000 |          50 |          40 |            2 |
|           3 | EL112      | Setrika                                       |                 210000 |                 295000 |          30 |          25 |            1 |
|           4 | FT111      | Kursi Kayu                                    |                 750000 |                 820000 |          20 |          12 |            5 |
|           5 | PK111      | Kemeja Hitam                                  |                 450000 |                 520000 |          15 |          12 |            4 |
|           6 | PK112      | Gaun Merak                                    |                1200000 |                1550000 |          10 |           5 |            4 |
|           7 | MN111      | Es Kopyor                                     |                   7000 |                  10000 |          10 |          30 |            3 |
|           9 | FT112      | Meja Kaca                                     |                2150000 |                2200000 |           4 |           1 |            5 |
+-------------+------------+-----------------------------------------------+------------------------+------------------------+-------------+-------------+--------------+

//7.	Tampilkan data pelanggan yang memiliki kartu dimana diskon kartu yang diberikan diatas 10%(Mengikuti data Statistik saya di Dalam Database)
SELECT pelanggan.id, pelanggan.kode, pelanggan.nama_pelanggan, pelanggan.kode, pelanggan.jk,  pelanggan.kartu_id, kartu.nama, kartu.diskon
FROM pelanggan
JOIN kartu ON pelanggan.kartu_id = kartu.id
WHERE kartu.diskon > 0.1;
+-------------+------------+-----------------------------------------------+------------+------+-------------+--------------------------------+------------------------+
| id          | kode       | nama_pelanggan                                | kode       | jk   | kartu_id    | nama                           | diskon                 |
+-------------+------------+-----------------------------------------------+------------+------+-------------+--------------------------------+------------------------+
|           2 | 010002     | Hermin Aina                                   | 010002     | P    |           1 | Emas                           |                    0.2 |
|           5 | 010005     | Pras Budi                                     | 010005     | L    |           1 | Emas                           |                    0.2 |
|           7 | 10007      | Satria Hanung                                 | 10007      | L    |           1 | Emas                           |                    0.2 |
|           9 | 10009      | Maryon Lieh                                   | 10009      | L    |           1 | Emas                           |                    0.2 |
+-------------+------------+-----------------------------------------------+------------+------+-------------+--------------------------------+------------------------+