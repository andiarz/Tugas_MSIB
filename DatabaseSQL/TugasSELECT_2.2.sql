//1. Tampilkan data produk yang stoknya 3 dan 10
SELECT * FROM produk WHERE stok=3 OR stok=10;
+----+-------+-----------------+------------+------------+------+----------+--------------+
| id | kode  | nama            | harga_beli | harga_jual | stok | min_stok | jenis_produk |
+----+-------+-----------------+------------+------------+------+----------+--------------+
|  6 | PK112 | Gaun Merak      |    1200000 |    1550000 |   10 |        5 |            4 |
|  7 | MN111 | Es Kopyor       |       7000 |      10000 |   10 |       30 |            3 |
| 10 | KS111 | Bedak Emas Raja |   15000000 |   16000000 |    3 |        1 |            6 |
+----+-------+-----------------+------------+------------+------+----------+--------------+
//2. Tampilkan data produk yang harga jualnya kurang dari 5 juta tetapi lebih dari 500 ribu
SELECT * FROM produk WHERE harga_jual < 5000000 AND harga_jual > 500000;
+----+-------+--------------+------------+------------+------+----------+--------------+
| id | kode  | nama         | harga_beli | harga_jual | stok | min_stok | jenis_produk |
+----+-------+--------------+------------+------------+------+----------+--------------+
|  1 | EL111 | Laptop       |    3500000 |    3800000 |    5 |        4 |            1 |
|  4 | FT111 | Kursi Kayu   |     750000 |     820000 |   20 |       12 |            5 |
|  5 | PK111 | Kemeja Hitam |     450000 |     520000 |   15 |       12 |            4 |
|  6 | PK112 | Gaun Merak   |    1200000 |    1550000 |   10 |        5 |            4 |
|  8 | EL113 | AC           |    3750000 |    4100000 |    4 |        2 |            1 |
|  9 | FT112 | Meja Kaca    |    2150000 |    2200000 |    4 |        1 |            5 |
+----+-------+--------------+------------+------------+------+----------+--------------+
//3. Tampilkan data produk yang harus segera ditambah stoknya
SELECT * FROM produk WHERE min_stok > stok;
+----+-------+-----------+------------+------------+------+----------+--------------+
| id | kode  | nama      | harga_beli | harga_jual | stok | min_stok | jenis_produk |
+----+-------+-----------+------------+------------+------+----------+--------------+
|  7 | MN111 | Es Kopyor |       7000 |      10000 |   10 |       30 |            3 |
+----+-------+-----------+------------+------------+------+----------+--------------+
//4. Tampilkan data pelanggan mulai dari yang paling muda
SELECT * FROM pelanggan ORDER BY tgl_lahir DESC;
+----+--------+----------------+------+------------+------------+-----------------------+----------+
| id | kode   | nama_pelanggan | jk   | tmp_lahir  | tgl_lahir  | email                 | kartu_id |
+----+--------+----------------+------+------------+------------+-----------------------+----------+
|  6 | 010006 | Zilvia Riana   | P    | Solo       | 2002-04-18 | zilzilia@gmail.com    |        2 |
|  4 | 010004 | Gilang Handika | L    | Semarang   | 2001-03-04 | gggilanghdk@gmail.com |        2 |
|  2 | 010002 | Hermin Aina    | P    | Bojonegoro | 2001-02-10 | hermina@gmail.com     |        1 |
|  5 | 010005 | Pras Budi      | L    | Sleman     | 2000-07-17 | BPras112@gmail.com    |        1 |
|  9 | 10009  | Maryon Lieh    | L    | Jakarta    | 2000-05-01 | maryonlie@gmail.com   |        1 |
|  1 | 010001 | Rian Haidar    | L    | Bandung    | 1999-10-19 | rian.gang@gmail.com   |        2 |
|  8 | 10008  | Jihan Yohana   | P    | Kediri     | 1998-12-31 | yohanjj@gmail.com     |        2 |
|  3 | 010003 | Diana Laras    | P    | Malang     | 1998-11-23 | laras773@gmail.com    |        3 |
|  7 | 10007  | Satria Hanung  | L    | Jakarta    | 1997-10-30 | satria76@gmail.com    |        1 |
+----+--------+----------------+------+------------+------------+-----------------------+----------+
//5. Tampilkan data pelanggan yang lahirnya di Jakarta dan gendernya perempuan
SELECT * FROM pelanggan WHERE tmp_lahir='Jakarta' AND jk='P';
Empty set (0.007 sec)
//6. Tampilkan data pelanggan yang ID nya 2, 4 dan 6
SELECT * FROM pelanggan WHERE id IN (2,4,6);
+----+--------+----------------+------+------------+------------+-----------------------+----------+
| id | kode   | nama_pelanggan | jk   | tmp_lahir  | tgl_lahir  | email                 | kartu_id |
+----+--------+----------------+------+------------+------------+-----------------------+----------+
|  2 | 010002 | Hermin Aina    | P    | Bojonegoro | 2001-02-10 | hermina@gmail.com     |        1 |
|  4 | 010004 | Gilang Handika | L    | Semarang   | 2001-03-04 | gggilanghdk@gmail.com |        2 |
|  6 | 010006 | Zilvia Riana   | P    | Solo       | 2002-04-18 | zilzilia@gmail.com    |        2 |
+----+--------+----------------+------+------------+------------+-----------------------+----------+
//7. Tampilkan data produk yang harganya antara 500 ribu sampai 6 juta
SELECT * FROM produk WHERE harga_jual >= 500000 AND harga_jual<= 6000000;
+----+-------+--------------+------------+------------+------+----------+--------------+
| id | kode  | nama         | harga_beli | harga_jual | stok | min_stok | jenis_produk |
+----+-------+--------------+------------+------------+------+----------+--------------+
|  1 | EL111 | Laptop       |    3500000 |    3800000 |    5 |        4 |            1 |
|  4 | FT111 | Kursi Kayu   |     750000 |     820000 |   20 |       12 |            5 |
|  5 | PK111 | Kemeja Hitam |     450000 |     520000 |   15 |       12 |            4 |
|  6 | PK112 | Gaun Merak   |    1200000 |    1550000 |   10 |        5 |            4 |
|  8 | EL113 | AC           |    3750000 |    4100000 |    4 |        2 |            1 |
|  9 | FT112 | Meja Kaca    |    2150000 |    2200000 |    4 |        1 |            5 |
+----+-------+--------------+------------+------------+------+----------+--------------+