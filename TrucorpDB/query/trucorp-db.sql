CREATE TABLE Users (
  ID int(11) NOT NULL,
  Nama varchar(255) NOT NULL,
  Kantor varchar(10) NOT NULL,
  PRIMARY KEY (ID)
);

INSERT INTO Users (ID, Nama, Kantor) VALUES
(22017, 'Fadel Muharam', 'Pusat'),
(22018, 'Budi Haryanto', 'Pusat'),
(22019, 'Justin Bieber', 'Cabang'),
(22020, 'Brad Pitt', 'Pusat');
