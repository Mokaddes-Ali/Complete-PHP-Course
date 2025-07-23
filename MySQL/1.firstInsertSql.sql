CREATE DATABASE company_db;
-- নতুন ডাটাবেস, যার নাম company_db

CREATE TABLE clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    country VARCHAR(50),
    phone_number VARCHAR(20),
    address VARCHAR(100)
);
-- clients নামে একটি টেবিল তৈরি করা হল | এতে নাম, ইমেইল, দেশ, ফোন নাম্বার ও ঠিকানা সংরক্ষণ thakbe

INSERT INTO clients (first_name, last_name, email, country, phone_number, address) VALUES
('Mokaddes', 'Ali', 'mokaddes@gmail.com', 'Bangladesh', '01711111111', 'Rajshahi'),
('Tuhin', 'Ahmed', 'tuhin@gmail.com', 'Bangladesh', '01712222222', 'Dhaka');

-- clients টেবিলে দুটি রেকর্ড যোগ করা Insert ব্যবহার করে

ALTER TABLE clients ADD COLUMN age INT;
-- clients টেবিলে নতুন একটি কলাম age যুক্ত করা

ALTER TABLE clients ADD COLUMN gender VARCHAR(10) AFTER email;
-- clients টেবিলে gender নামের নতুন কলাম যোগ | এটি email কলামের ঠিক পরেই যুক্ত হবে


UPDATE clients SET country = 'India' WHERE id = 2;
-- id = 2 এর country মান পরিবর্তন করে 'India'

DELETE FROM clients WHERE id = 1;
-- id = 1 থাকা রেকর্ডটি টেবিল থেকে ডিলিট করা


ALTER TABLE clients MODIFY email VARCHAR(150);
-- email কলামের সাইজ পরিবর্তন করে 150 করা
