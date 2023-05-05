//Menambahkan kolom status_pembayaran pada table pembayaran
ALTER TABLE pembayaran ADD COLUMN status_pembayaran VARCHAR(10);

//Trigger pertama, isi_status_pembayaran, akan dipicu setiap kali ada data baru yang ditambahkan pada table pembayaran.
CREATE TRIGGER isi_status_pembayaran AFTER INSERT ON pembayaran
FOR EACH ROW
BEGIN
    UPDATE pembayaran p
    SET p.status_pembayaran = 'Lunas'
    WHERE p.id = NEW.pesanan_id;
END;

//Trigger kedua, cek_pesanan, akan dipicu setiap kali ada data baru yang ditambahkan pada table pesanan.
CREATE TRIGGER cek_pesanan AFTER INSERT ON pesanan
FOR EACH ROW
BEGIN
    IF EXISTS (
        SELECT * FROM pembayaran WHERE pesanan_id = NEW.pesanan_id
    ) THEN
        UPDATE pembayaran p
        SET p.status_pembayaran = 'Lunas'
        WHERE p.id = NEW.pesanan_id;
    END IF;
END;