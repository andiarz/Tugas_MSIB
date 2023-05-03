//-- Buat fungsi inputPelanggan(), setelah itu panggil fungsinya
DELIMITER $$
 
CREATE PROCEDURE inputPelanggan(
	kode varchar(10),nama VARCHAR(45), jk char(1), tmp_lahir varchar(30), tgl_lahir date, email varchar(45), kartu_id int
)
BEGIN
	INSERT INTO pelanggan (kode, nama, jk, tmp_lahir, tgl_lahir, email, kartu_id)   
	VALUES (kode, nama, jk, tmpl, tgll, email, idk);
END$$

DELIMITER ;
CALL inputPelanggan(‘C011’,’Lestiana Aina’, 'P', 'Bandung', 1999-05-18, 'lestaina@gmail.com', 3);


//-- Buat fungsi showPelanggan(), setelah itu panggil fungsinya
DELIMITER $$ 
CREATE PROCEDURE showPelanggan()
BEGIN    
	SELECT kode, nama, jk, tmp_lahir, tgl_lahir, email, kartu_id
	FROM pelanggan;
END
$$

DELIMITER ;

CALL showPelanggan();


//-- Buat fungsi inputProduk(), setelah itu panggil fungsinya
DELIMITER $$
 
CREATE PROCEDURE inputProduk(
	kode varchar(10),nama VARCHAR(45), harga_beli double, harga_jual double, stok int, min_stok int, jenis_produk_id int
)
BEGIN
	INSERT INTO produk (kode, nama, harga_beli, harga_jual, stok, min_stok, jenis_produk_id)   
	VALUES (kode, nama, hrgbl, hrgjl, stok, minst, idjp);
END$$

DELIMITER ;
CALL inputProduk(‘KT01’,’Keripik Tempe’, 8000, 10000, 100, 80, 3);

//-- Buat fungsi showProduk(), setelah itu panggil fungsinya
DELIMITER $$ 
CREATE PROCEDURE showProduk()
BEGIN    
	SELECT kode, nama, harga_beli, harga_jual, stok, min_stok, jenis_produk_id
	FROM pelanggan;
END
$$

DELIMITER ;

CALL showProduk();

//-- Buat fungsi totalPesanan(), setelah itu panggil fungsinya

DELIMITER $$
CREATE PROCEDURE totalPesanan()
BEGIN
  SELECT pi.qty, p.pesanan_id, pr.nama
  FROM pesanan_items pi
  INNER JOIN pesanan p ON pi.pesanan_id = p.id
  INNER JOIN produk pr ON pi.produk_id = pr.id;
END $$
DELIMITER ;

CALL totalPesanan();

//-- tampilkan seluruh pesanan dari semua pelanggan
DELIMITER $$
CREATE PROCEDURE totalPesananPelanggan()
BEGIN
  SELECT pl.nama, pl.kode, ps.total
  FROM pesanan ps
  INNER JOIN pelanggan pl ON ps.pelanggan_id = pl.id;
END $$
DELIMITER ;

CALL totalPesananPelanggan();

//-- buatkan query panjang di atas menjadi sebuah view baru: pesanan_produk_vw  (menggunakan join dari table pesanan,pelanggan dan produk)
CREATE VIEW pesanan_produk_vw AS
SELECT pi.pesanan_id, pl.nama AS nama_pelanggan, pr.nama AS nama_produk, pi.qty AS kuantitas, p.total
FROM pesanan_items pi
INNER JOIN pesanan p ON pi.pesanan_id = p.id
INNER JOIN pelanggan pl ON p.pelanggan_id = pl.id
INNER JOIN produk pr ON pi.produk_id = pr.id;

SELECT * FROM pesanan_produk_vw;

