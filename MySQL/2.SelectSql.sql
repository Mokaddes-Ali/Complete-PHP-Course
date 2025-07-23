SELECT * FROM customers;
-- এই কুয়েরি সমস্ত customers টেবিলের রেকর্ড রিটার্ন করবে।
-- এতে সব কলাম দেখাবে যেমন: নাম, ঠিকানা, ফোন ইত্যাদি।

SELECT email FROM customers;
-- শুধুমাত্র customers টেবিলের email কলাম রিটার্ন করবে।
-- অন্য কোনো তথ্য ছাড়াই শুধু ইমেইল লিস্ট পাওয়া যাবে।

SELECT country,address FROM customers;
-- এই কুয়েরি প্রতিটি কাস্টমারের country ও address দেখাবে।
-- এটি ব্যবহার করে দেশের ভিত্তিতে গ্রাহকের অবস্থান চেক করা যায়।

SELECT * FROM customers WHERE address = "Rajshahi";
-- এই কুয়েরি শুধুমাত্র Rajshahi ঠিকানার রেকর্ডগুলো রিটার্ন করবে।
-- ফিল্টার হিসেবে address = "Rajshahi" দেওয়া হয়েছে।

SELECT email FROM customers WHERE address="Dhaka";
-- ঢাকার গ্রাহকদের ইমেইলগুলো দেখাবে।
-- এটি নির্দিষ্ট address এর জন্য নির্বাচিত কলাম দেখায়।

SELECT * FROM customers WHERE address="Dhaka" AND last_name="Rahman";
-- যাদের ঠিকানা ঢাকা এবং শেষ নাম Rahman, তাদের সব তথ্য দেখাবে।
-- AND কন্ডিশন ব্যবহার করে একাধিক শর্ত দেওয়া হয়েছে।

SELECT * FROM customers WHERE address IN ("Dhaka","Rajshahi","Rangpur");
-- যেসব কাস্টমারের ঠিকানা Dhaka, Rajshahi বা Rangpur, তারা দেখাবে।
-- IN অপারেটর দিয়ে একাধিক ভ্যালু চেক করা যায়।

SELECT DISTINCT address FROM customers;
-- সমস্ত ইউনিক ঠিকানা গুলো দেখাবে, ডুপ্লিকেট বাদ দিয়ে।
-- DISTINCT কিওয়ার্ড দিয়ে একাধিক একই রেকর্ড বাদ দেওয়া হয়।

SELECT * FROM customers LIMIT 10;
-- শুধুমাত্র প্রথম ১০টি রেকর্ড রিটার্ন করবে।
-- এটি pagination বা লিমিটেড রেজাল্ট দেখাতে ব্যবহৃত হয়।

SELECT * FROM customers LIMIT 10,5;
-- ১১তম রেকর্ড থেকে শুরু করে ৫টি রেকর্ড দেখাবে।
-- LIMIT এর প্রথম মান offset ও দ্বিতীয়টি কয়টা রেকর্ড দেখাবে তা।

SELECT * FROM customers LIMIT 10 OFFSET 3;
-- ৪র্থ রেকর্ড থেকে শুরু করে ১০টি রেকর্ড দেখাবে।
-- OFFSET দিয়ে কোন পজিশন থেকে শুরু হবে তা নির্ধারণ করা হয়।

SELECT * FROM customers WHERE id BETWEEN 10 AND 20;
-- কাস্টমার আইডি ১০ থেকে ২০ এর মধ্যে যাদের, তাদের দেখাবে।
-- BETWEEN অপারেটর একটি রেঞ্জের ভিতর ফিল্টার করতে সাহায্য করে।

SELECT * FROM customers ORDER BY first_name ASC;
-- কাস্টমারদের প্রথম নাম অক্ষরানুক্রমিকভাবে সাজিয়ে দেখাবে।
-- ASC দ্বারা increasing order বোঝায়।

SELECT * FROM customers ORDER BY first_name DESC;
-- কাস্টমারদের প্রথম নাম decreasing order এ সাজাবে।
-- DESC মানে Z থেকে A অর্ডার।

SELECT * FROM customers ORDER BY last_name DESC LIMIT 5;
-- শেষ নামের ভিত্তিতে সাজিয়ে প্রথম ৫টি রেকর্ড দেখাবে।
-- ORDER BY এবং LIMIT একসাথে রেজাল্ট ছোট করতে ব্যবহৃত হয়।

SELECT * FROM customers WHERE email LIKE "%rahman%";
-- যাদের ইমেইলে 'rahman' শব্দটি আছে, তাদের তথ্য দেখাবে।
-- LIKE অপারেটর দিয়ে pattern ম্যাচ করা হয়।

SELECT * FROM customers WHERE first_name LIKE "s%" ORDER BY first_name;
-- যাদের নাম s দিয়ে শুরু, তাদের নাম অক্ষরানুক্রমে দেখাবে।
-- s% মানে s দিয়ে শুরু হওয়া নামগুলো।

SELECT * FROM customers WHERE first_name LIKE "%s%" ORDER BY DESC;
-- যাদের নামের মধ্যে s আছে, তাদের DESC অর্ডারে দেখাবে।
-- এখানে ORDER BY DESC ভুল, কলাম নাম প্রয়োজন।

SELECT * FROM customers WHERE first_name LIKE "%s%" ORDER BY first_name DESC;
-- যাদের নামের মধ্যে s আছে, তাদের নাম Z থেকে A সাজিয়ে দেখাবে।
-- সঠিকভাবে ORDER BY first_name DESC ব্যবহার করা হয়েছে।

SELECT * FROM customers WHERE phone LIKE "%001";
-- যাদের ফোন নম্বরের শেষে 001 আছে, তাদের দেখাবে।
-- LIKE "%001" দিয়ে ফোনের শেষ অংশে প্যাটার্ন চেক হয়।

CREATE TABLE products(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    price VARCHAR(15) NOT NULL
);
-- একটি নতুন products টেবিল তৈরি করবে id, name ও price কলামসহ।
-- id অটো ইনক্রিমেন্ট হবে এবং প্রাইমারি কি হিসেবে কাজ করবে।

DROP TABLE IF EXISTS products;
-- যদি products টেবিল আগে থেকেই থাকে, তবে সেটা ডিলিট করবে।
-- EXISTS চেক করে টেবিল থাকলে ড্রপ করে, না থাকলে কিছু করে না।

ALTER TABLE customers RENAME COLUMN phone TO phone_number;
-- customers টেবিলে phone কলামের নাম পরিবর্তন করে phone_number করা হচ্ছে।
-- ALTER TABLE দিয়ে কলাম রিনেম করা হয়।

RENAME TABLE customers TO clients;
-- customers টেবিলের নাম পরিবর্তন করে clients করা হচ্ছে।
-- RENAME TABLE দিয়ে পুরো টেবিলের নাম পরিবর্তন করা যায়।
