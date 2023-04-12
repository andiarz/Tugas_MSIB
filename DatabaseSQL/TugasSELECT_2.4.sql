//1. Tampilkan 2 data produk termahal
SELECT *FROM produk ORDER BY harga_beli DESC LIMIT 2;
+----+-------+-----------------+------------+------------+------+----------+--------------+
| id | kode  | nama            | harga_beli | harga_jual | stok | min_stok | jenis_produk |
+----+-------+-----------------+------------+------------+------+----------+--------------+
| 10 | KS111 | Bedak Emas Raja |   15000000 |   16000000 |    3 |        1 |            6 |
|  8 | EL113 | AC              |    3750000 |    4100000 |    4 |        2 |            1 |
+----+-------+-----------------+------------+------------+------+----------+--------------+
//2. Tampilkan produk yang paling murah
SELECT *FROM produk ORDER BY harga_beli ASC LIMIT 1;
+----+-------+-----------+------------+------------+------+----------+--------------+
| id | kode  | nama      | harga_beli | harga_jual | stok | min_stok | jenis_produk |
+----+-------+-----------+------------+------------+------+----------+--------------+
|  7 | MN111 | Es Kopyor |       7000 |      10000 |   10 |       30 |            3 |
+----+-------+-----------+------------+------------+------+----------+--------------+
//3. Tampilkan produk yang stoknya paling banyak
SELECT *FROM produk ORDER BY stok DESC LIMIT 1;
+----+-------+-------------+------------+------------+------+----------+--------------+
| id | kode  | nama        | harga_beli | harga_jual | stok | min_stok | jenis_produk |
+----+-------+-------------+------------+------------+------+----------+--------------+
|  2 | MK111 | Nasi Goreng |      10000 |      20000 |   50 |       40 |            2 |
+----+-------+-------------+------------+------------+------+----------+--------------+
//4. Tampilkan dua produk yang stoknya paling sedikit
SELECT *FROM produk ORDER BY stok ASC LIMIT 2;
+----+-------+-----------------+------------+------------+------+----------+--------------+
| id | kode  | nama            | harga_beli | harga_jual | stok | min_stok | jenis_produk |
+----+-------+-----------------+------------+------------+------+----------+--------------+
| 10 | KS111 | Bedak Emas Raja |   15000000 |   16000000 |    3 |        1 |            6 |
|  9 | FT112 | Meja Kaca       |    2150000 |    2200000 |    4 |        1 |            5 |
+----+-------+-----------------+------------+------------+------+----------+--------------+
//5. Tampilkan pelanggan yang paling muda
SELECT *FROM pelanggan ORDER BY tgl_lahir DESC LIMIT 1;
+----+--------+----------------+------+-----------+------------+--------------------+----------+
| id | kode   | nama_pelanggan | jk   | tmp_lahir | tgl_lahir  | email              | kartu_id |
+----+--------+----------------+------+-----------+------------+--------------------+----------+
|  6 | 010006 | Zilvia Riana   | P    | Solo      | 2002-04-18 | zilzilia@gmail.com |        2 |
+----+--------+----------------+------+-----------+------------+--------------------+----------+
//6. Tampilkan pelanggan yang paling tua
SELECT *FROM pelanggan ORDER BY tgl_lahir ASC LIMIT 1;
+----+-------+----------------+------+-----------+------------+--------------------+----------+
| id | kode  | nama_pelanggan | jk   | tmp_lahir | tgl_lahir  | email              | kartu_id |
+----+-------+----------------+------+-----------+------------+--------------------+----------+
|  7 | 10007 | Satria Hanung  | L    | Jakarta   | 1997-10-30 | satria76@gmail.com |        1 |
+----+-------+----------------+------+-----------+------------+--------------------+----------+

