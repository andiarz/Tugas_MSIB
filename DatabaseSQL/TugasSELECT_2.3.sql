//1.	Tampilkan produk yang kode awalnya huruf K dan huruf M
SELECT * FROM produk WHERE kode LIKE 'K%' OR kode LIKE 'M%';
+----+-------+-----------------+------------+------------+------+----------+--------------+
| id | kode  | nama            | harga_beli | harga_jual | stok | min_stok | jenis_produk |
+----+-------+-----------------+------------+------------+------+----------+--------------+
|  2 | MK111 | Nasi Goreng     |      10000 |      20000 |   50 |       40 |            2 |
|  7 | MN111 | Es Kopyor       |       7000 |      10000 |   10 |       30 |            3 |
| 10 | KS111 | Bedak Emas Raja |   15000000 |   16000000 |    3 |        1 |            6 |
+----+-------+-----------------+------------+------------+------+----------+--------------+
//2.	Tampilkan produk yang kode awalnya bukan huruf M
SELECT * FROM produk WHERE kode NOT LIKE 'M%';
+----+-------+-----------------+------------+------------+------+----------+--------------+
| id | kode  | nama            | harga_beli | harga_jual | stok | min_stok | jenis_produk |
+----+-------+-----------------+------------+------------+------+----------+--------------+
|  1 | EL111 | Laptop          |    3500000 |    3800000 |    5 |        4 |            1 |
|  3 | EL112 | Setrika         |     210000 |     295000 |   30 |       25 |            1 |
|  4 | FT111 | Kursi Kayu      |     750000 |     820000 |   20 |       12 |            5 |
|  5 | PK111 | Kemeja Hitam    |     450000 |     520000 |   15 |       12 |            4 |
|  6 | PK112 | Gaun Merak      |    1200000 |    1550000 |   10 |        5 |            4 |
|  8 | EL113 | AC              |    3750000 |    4100000 |    4 |        2 |            1 |
|  9 | FT112 | Meja Kaca       |    2150000 |    2200000 |    4 |        1 |            5 |
| 10 | KS111 | Bedak Emas Raja |   15000000 |   16000000 |    3 |        1 |            6 |
+----+-------+-----------------+------------+------------+------+----------+--------------+
//3.	Tampilkan produk-produk televisi
SELECT * FROM produk WHERE nama LIKE '%Televisi%';
Empty set (0.001 sec)
//Tidak ada Produk yang bernama Televisi
//4.	Tampilkan pelanggan mengandung huruf 'SA'
SELECT * FROM pelanggan WHERE nama_pelanggan LIKE '%SA%';
+----+-------+----------------+------+-----------+------------+--------------------+----------+
| id | kode  | nama_pelanggan | jk   | tmp_lahir | tgl_lahir  | email              | kartu_id |
+----+-------+----------------+------+-----------+------------+--------------------+----------+
|  7 | 10007 | Satria Hanung  | L    | Jakarta   | 1997-10-30 | satria76@gmail.com |        1 |
+----+-------+----------------+------+-----------+------------+--------------------+----------+
//5.	Tampilkan pelanggan yang lahirnya bukan di Jakarta dan mengandung huruf ‘yo‘
SELECT * FROM pelanggan WHERE nama_pelanggan LIKE '%yo%' AND tmp_lahir LIKE 'Jakarta';
+----+-------+----------------+------+-----------+------------+---------------------+----------+
| id | kode  | nama_pelanggan | jk   | tmp_lahir | tgl_lahir  | email               | kartu_id |
+----+-------+----------------+------+-----------+------------+---------------------+----------+
|  9 | 10009 | Maryon Lieh    | L    | Jakarta   | 2000-05-01 | maryonlie@gmail.com |        1 |
+----+-------+----------------+------+-----------+------------+---------------------+----------+
//6.	Tampilkan pelanggan yang karakter huruf ke – 2 nya adalah A
SELECT * FROM pelanggan WHERE nama_pelanggan LIKE '_A%';
+----+-------+----------------+------+-----------+------------+---------------------+----------+
| id | kode  | nama_pelanggan | jk   | tmp_lahir | tgl_lahir  | email               | kartu_id |
+----+-------+----------------+------+-----------+------------+---------------------+----------+
|  7 | 10007 | Satria Hanung  | L    | Jakarta   | 1997-10-30 | satria76@gmail.com  |        1 |
|  9 | 10009 | Maryon Lieh    | L    | Jakarta   | 2000-05-01 | maryonlie@gmail.com |        1 |
+----+-------+----------------+------+-----------+------------+---------------------+----------+