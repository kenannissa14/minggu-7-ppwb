CREATE TABLE mahasiswa (
    nomer INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255),
    nim VARCHAR(15) UNIQUE,
    program_studi VARCHAR(70)
);

INSERT INTO mahasiswa (nama, nim, program_studi) VALUES
('User1', '09876', 'Informatika'),
('User2', '43215', 'Sistem Informasi'),
('User3', '32154', 'Sistem Informasi'),
('User4', '21543', 'Teknik Elektro'),
('User5', '15432', 'Informatika');