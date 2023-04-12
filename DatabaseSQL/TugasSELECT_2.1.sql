//1. Sudah mendownload beekeper 
//2. Tampilkan seluruh data produk diurutkan berdasarkan harga_jual mulai dari yang termahal
SELECT * FROM produk ORDER BY harga_jual DESC;
+----+-------+-----------------+------------+------------+------+----------+--------------+
| id | kode  | nama            | harga_beli | harga_jual | stok | min_stok | jenis_produk |
+----+-------+-----------------+------------+------------+------+----------+--------------+
| 10 | KS111 | Bedak Emas Raja |   15000000 |   16000000 |    3 |        1 |            6 |
|  8 | EL113 | AC              |    3750000 |    4100000 |    4 |        2 |            1 |
|  1 | EL111 | Laptop          |    3500000 |    3800000 |    5 |        4 |            1 |
|  9 | FT112 | Meja Kaca       |    2150000 |    2200000 |    4 |        1 |            5 |
|  6 | PK112 | Gaun Merak      |    1200000 |    1550000 |   10 |        5 |            4 |
|  4 | FT111 | Kursi Kayu      |     750000 |     820000 |   20 |       12 |            5 |
|  5 | PK111 | Kemeja Hitam    |     450000 |     520000 |   15 |       12 |            4 |
|  3 | EL112 | Setrika         |     210000 |     295000 |   30 |       25 |            1 |
|  2 | MK111 | Nasi Goreng     |      10000 |      20000 |   50 |       40 |            2 |
|  7 | MN111 | Es Kopyor       |       7000 |      10000 |   10 |       30 |            3 |
+----+-------+-----------------+------------+------------+------+----------+--------------+
//3. Tampilkan data kode, nama, tmp_lahir, tgl_lahir dari table pelanggan
SELECT kode, nama_pelanggan, tmp_lahir, tgl_lahir FROM pelanggan; 
+--------+----------------+------------+------------+
| kode   | nama_pelanggan | tmp_lahir  | tgl_lahir  |
+--------+----------------+------------+------------+
| 010001 | Rian Haidar    | Bandung    | 1999-10-19 |
| 010002 | Hermin Aina    | Bojonegoro | 2001-02-10 |
| 010003 | Diana Laras    | Malang     | 1998-11-23 |
| 010004 | Gilang Handika | Semarang   | 2001-03-04 |
| 010005 | Pras Budi      | Sleman     | 2000-07-17 |
| 010006 | Zilvia Riana   | Solo       | 2002-04-18 |
| 10007  | Satria Hanung  | Jakarta    | 1997-10-30 |
| 10008  | Jihan Yohana   | Kediri     | 1998-12-31 |
| 10009  | Maryon Lieh    | Jakarta    | 2000-05-01 |
+--------+----------------+------------+------------+
//4. Tampilkan kode,nama,stok dari table produk yang stok-nya hanya 4
SELECT kode,nama, stok FROM produk WHERE stok=4;
+-------+-----------+------+
| kode  | nama      | stok |
+-------+-----------+------+
| EL113 | AC        |    4 |
| FT112 | Meja Kaca |    4 |
+-------+-----------+------+
//5. Tampilkan seluruh data pelanggan yang tempat lahirnya Jakarta
SELECT * FROM pelanggan WHERE tmp_lahir='Jakarta';
+----+-------+----------------+------+-----------+------------+---------------------+----------+
| id | kode  | nama_pelanggan | jk   | tmp_lahir | tgl_lahir  | email               | kartu_id |
+----+-------+----------------+------+-----------+------------+---------------------+----------+
|  7 | 10007 | Satria Hanung  | L    | Jakarta   | 1997-10-30 | satria76@gmail.com  |        1 |
|  9 | 10009 | Maryon Lieh    | L    | Jakarta   | 2000-05-01 | maryonlie@gmail.com |        1 |
+----+-------+----------------+------+-----------+------------+---------------------+----------+
//6. Tampilkan kode, nama, tmp_lahir, tgl_lahir dari pelanggan diurutkan dari yang paling muda usianya
SELECT kode, nama_pelanggan, tmp_lahir, tgl_lahir FROM pelanggan ORDER BY tgl_lahir DESC;
+--------+----------------+------------+------------+
| kode   | nama_pelanggan | tmp_lahir  | tgl_lahir  |
+--------+----------------+------------+------------+
| 010006 | Zilvia Riana   | Solo       | 2002-04-18 |
| 010004 | Gilang Handika | Semarang   | 2001-03-04 |
| 010002 | Hermin Aina    | Bojonegoro | 2001-02-10 |
| 010005 | Pras Budi      | Sleman     | 2000-07-17 |
| 10009  | Maryon Lieh    | Jakarta    | 2000-05-01 |
| 010001 | Rian Haidar    | Bandung    | 1999-10-19 |
| 10008  | Jihan Yohana   | Kediri     | 1998-12-31 |
| 010003 | Diana Laras    | Malang     | 1998-11-23 |
| 10007  | Satria Hanung  | Jakarta    | 1997-10-30 |
+--------+----------------+------------+------------+