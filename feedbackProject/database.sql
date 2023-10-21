-- noi chua cac cau lenh sql
CREATE TABLE feedback(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    body TEXT DEFAULT '',
    date DATETIME
);

-- insert value
INSERT INTO feedback(name,email,body,date) VALUES
('Poo','t1@gmail.com','My cute dog.',current_timestamp()),
('Phoong','t2@gmail.com','My cute dog.',current_timestamp()),
('Ben','t13@gmail.com','My cute cat.',current_timestamp());