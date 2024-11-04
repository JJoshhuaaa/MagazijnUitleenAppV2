-- SQLBook: Code
CREATE DATABASE vista_magazijn_v2;

USE vista_magazijn_v2;

--'studenten' table
CREATE TABLE studenten (
    student_nummer SMALLINT(6) PRIMARY KEY,
    student_naam VARCHAR(255) NOT NULL,
    deleted_at TIMESTAMP NULL
);

--'artikelen' table
CREATE TABLE artikelen (
    id INT AUTO_INCREMENT PRIMARY KEY,
    artikel_naam VARCHAR(255) NOT NULL,
    beschrijving TEXT,
    categorie VARCAHR(50),
    qr_code VARCHAR(255) UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP NULL
);

--'uitschrijvingen' table
CREATE TABLE uitschrijvingen (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_nummer SMALLINT(6),
    artikel_id INT,
    FOREIGN KEY (student_nummer) REFERENCES studenten(student_nummer),
    FOREIGN KEY (artikel_id) REFERENCES artikelen(id)
);

--'reserveringen' table
CREATE TABLE reserveringen (
    student_nummer SMALLINT(6),
    artikel_id INT,
    leendatum DATE NOT NULL,
    vervaldatum DATE NOT NULL,
    PRIMARY KEY (student_nummer, artikel_id),
    FOREIGN KEY (student_nummer) REFERENCES studenten(student_nummer),
    FOREIGN KEY (artikel_id) REFERENCES artikelen(id)
);
