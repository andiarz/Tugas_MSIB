//Query untuk mengakses MySQL melalui Commad Prompt
C:\Users\Lenovo>cd \xampp\mysql\bin
C:\xampp\mysql\bin>mysql -u root -p

//Query untuk menampilkan kumpulan database yang suddah pernah dibuat
show databases;

//Query untuk membuat database melalui Command Prompt
create database praktekdb1;

//Query untuk menggunakan database di Command Prompt
use praktekdb1;

//Query membuat tabel kartu dengan kolom berisikan id, kode, nama, diskon, dan iuran. id adalah primary key, kode sifatnya unique, dan nama tidak boleh kosong.
create table kartu(
    -> id int auto_increment primary key,
    -> kode varchar(6) unique,
    -> nama varchar(30) not null,
    -> diskon double,
    -> iuran double);

//Query membuat tabel pelanggan dengan kolom berisikan id, kode, nama, jk, tmp_lahir, tgl_lahir, email, dan kartu_id. id adalah primary key, kode sifatnya unique, nama tidak boleh kosong, kartu_id mengambil sumber dari kolom id di tabel kartu.
create table pelanggan(
    -> id int auto_increment primary key,
    -> kode varchar(10) unique,
    -> nama varchar(45) not null,
    -> jk char(1),
    -> tmp_lahir varchar(30),
    -> tgl_lahir date,
    -> email varchar(45),
    -> kartu_id int not null references kartu(id));

//Query membuat tabel pesanan dengan kolom berisikan id, tanggal, total, dan pelanggan_id. id adalah primary key, pelanggan_id mengambil sumber dari kolom id di tabel pelanggan.
create table pesanan(
    -> id int not null auto_increment primary key,
    -> tanggal date,
    -> total double,
    -> pelanggan_id int not null references pelanggan(id));

//Query membuat tabel pembayaran dengan kolom berisikan id, no_kuitansi, tanggal, jumlah, ke, dan pesanan_id. id adalah primary key, no_kuitansi sifatnya unique, pesanan_id mengambil sumber dari kolom id di tabel pesanan.
create table pembayaran(
    -> id int not null auto_increment primary key,
    -> no_kuitansi varchar(10) unique,
    -> tanggal date,
    -> jumlah double,
    -> ke int,
    -> pesanan_id int not null references pesanan(id));

//Query membuat tabel jenis_produk dengan kolom berisikan id, dan nama. id adalah primary key, nama tidak boleh kosong.
create table jenis_produk(
    -> id int not null auto_increment primary key,
    -> nama varchar(45) not null);

//Query membuat tabel produk dengan kolom berisikan id, kode, nama, harga_beli, harga_jual, stok, min_stok, dan jenis_produk_id. id adalah primary key, kode sifatnya unique, nama-harga_beli-harga_jual tidak boleh kosong, jenis_produk_id mengambil sumber dari kolom id di tabel jenis_produk.
create table produk(
    -> id int not null auto_increment primary key,
    -> kode varchar(10) unique,
    -> nama varchar(45) not null,
    -> harga_beli double not null,
    -> harga_jual double not null,
    -> stok int,
    -> min_stok int,
    -> jenis_produk_id int not null references jenis_produk(id));

//Query membuat tabel pesanan_items dengan kolom berisikan id, produk_id, pesanan_id, qty, dan harga. id adalah primary key, produk_id mengambil sumber dari kolom id di tabel produk, pesanan_id mengambil sumber dari kolom id di tabel pesanan.
create table pesanan_items(
    -> id int not null auto_increment primary key,
    -> produk_id int not null references produk(id),
    -> pesanan_id int not null references pesanan(id),
    -> qty int,
    -> harga double);

//Query membuat tabel vendor dengan kolom berisikan id, nomor, nama, kota, dan kontak. id adalah primary key, nomor sifatnya unique, nama tidak boleh kosong.
create table vendor(
    -> id int not null auto_increment primary key,
    -> nomor varchar(4) unique,
    -> nama varchar(40) not null,
    -> kota varchar(30),
    -> kontak varchar(30));

//Query membuat tabel pembelian dengan kolom berisikan id, tanggal, nomor produk_id, jumlah, harga, dan vendor_id. id adalah primary key, nomor sifatnya unique, harga tidak boleh kosong, produk_id mengambil sumber dari kolom id di tabel produk, vendor_id mengambil sumber dari kolom id di tabel vendor.
create table pembelian(
    -> id int not null auto_increment primary key,
    -> tanggal varchar(45),
    -> nomor varchar(10) unique,
    -> produk_id int not null references produk(id),
    -> jumlah int,
    -> harga double not null,
    -> vendor_id int not null references vendor(id));

//Query menambahkan kolom baru pada tabel pelanggan yakni alamat dengan tipe data varchar(40)
alter table pelanggan add
    -> alamat varchar(50);

//Query kolom nama pada tabel pelanggan menjadi nama_pelanggan
alter table pelanggan change
    -> nama nama_pelanggan varchar(45);

//Query mengedit tipe data nama_pelanggan pada tabel pelanggan menjadi varchar(50)
alter table pelanggan modify
    -> nama_pelanggan varchar(50);