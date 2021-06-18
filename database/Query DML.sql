INSERT INTO Kamar VALUES
('Km001', 101, 'Standard', 1, 200000, 'Kipas Angin, Kamar Mandi, Air Hangat', 1),
('Km002', 302, 'Deluxe', 3, 320000, 'AC, Kamar Mandi, Air Hangat, Balkon', 1),
('Km003', 205, 'Standard', 2, 230000, 'Kipas Angin, Kamar Mandi, Air Hangat', 1),
('Km004', 301, 'Superior', 3, 300000, 'AC, Kamar Mandi, Air Hangat', 1),
('Km005', 303, 'Suit', 3, 400000, 'AC, Kamar Mandi, Air Hangat, Balkon, Extra Bantal', 1),
('Km006', 203, 'Deluxe', 2, 330000, 'AC, Kamar Mandi, Air Hangat, Balkon', 1),
('Km007', 102, 'Superior', 1, 270000, 'AC, Kamar Mandi, Air Hangat', 1),
('Km008', 105, 'Standard', 1, 170000, 'Kamar Mandi, Air Hangat', 1),
('Km009', 305, 'Deluxe', 3, 370000, 'AC, Kamar Mandi, Air Hangat, Balkon', 1),
('Km0010', 307, 'Suit', 3, 420000, 'AC, Kamar Mandi, Air Hangat, Balkon', 1)

INSERT INTO Pelanggan VALUES
('Plg001', '331906150396002', 'Andreyansyah', 'Bandung Barat', '087885966332'),
('Plg002', '331906170589005', 'Imanuel', 'Lampung Barat', '081225330225'),
('Plg003', '331906200490004', 'Johan Ardiyansah', 'Jakarta Pusat', '0898998122'),
('Plg004', '331906310188001', 'Joko Santoso', 'Kediri Jawa Timur', '085875888918'),
('Plg005', '331906170892001', 'I Gede Suraso', 'Denpasar Bali', '081290332200')

INSERT INTO Reservasi VALUES
('Rsvp001', (SELECT idKmr from Kamar WHERE idKmr='Km001'), (SELECT idPel from Pelanggan WHERE idPel='Plg002'), '2021/04/28', '2021/04/30'),
('Rsvp002', (SELECT idKmr from Kamar WHERE idKmr='Km008'), (SELECT idPel from Pelanggan WHERE idPel='Plg001'), '2021/05/01', '2021/05/10'),
('Rsvp003', (SELECT idKmr from Kamar WHERE idKmr='Km002'), (SELECT idPel from Pelanggan WHERE idPel='Plg004'), '2021/05/05', '2021/05/07'),
('Rsvp004', (SELECT idKmr from Kamar WHERE idKmr='Km003'), (SELECT idPel from Pelanggan WHERE idPel='Plg003'), '2021/05/06', '2021/04/07'),
('Rsvp005', (SELECT idKmr from Kamar WHERE idKmr='Km006'), (SELECT idPel from Pelanggan WHERE idPel='Plg005'), '2021/05/08', '2021/05/12'),
('Rsvp006', (SELECT idKmr from Kamar WHERE idKmr='Km009'), (SELECT idPel from Pelanggan WHERE idPel='Plg001'), '2021/05/08', '2021/05/10'),
('Rsvp007', (SELECT idKmr from Kamar WHERE idKmr='Km004'), (SELECT idPel from Pelanggan WHERE idPel='Plg002'), '2021/05/11', '2021/05/13'),
('Rsvp008', (SELECT idKmr from Kamar WHERE idKmr='Km005'), (SELECT idPel from Pelanggan WHERE idPel='Plg003'), '2021/05/14', '2021/05/15'),
('Rsvp009', (SELECT idKmr from Kamar WHERE idKmr='Km0010'), (SELECT idPel from Pelanggan WHERE idPel='Plg005'), '2021/05/14', '2021/05/17'),
('Rsvp0010', (SELECT idKmr from Kamar WHERE idKmr='Km007'), (SELECT idPel from Pelanggan WHERE idPel='Plg001'), '2021/05/14', '2021/05/16')