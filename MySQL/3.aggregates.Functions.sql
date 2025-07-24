CREATE TABLE products(
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    category VARCHAR(40) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    stock_quantity INT NOT NULL,
    description TEXT NOT NULL
);



INSERT INTO products(name, category, price, stock_quantity, description) VALUES

('Samsung Galaxy S21', 'mobile', 799.99, 50, 'Latest Samsung smartphone with AMOLED display'),
('Apple iPhone 13', 'mobile', 999.99, 40, 'Flagship iPhone with A15 chip and dual cameras'),
('OnePlus 9 Pro', 'mobile', 899.99, 35, 'High-speed performance and Hasselblad camera'),
('Xiaomi Mi 11', 'mobile', 749.99, 60, 'Affordable flagship with 108MP camera'),
('Google Pixel 6', 'mobile', 699.00, 30, 'Pure Android experience with excellent camera'),
('Realme GT Neo 5', 'mobile', 499.99, 55, 'Mid-range mobile with flagship features'),
('Samsung Galaxy A52', 'mobile', 349.00, 70, 'Mid-range phone with great display and camera'),
('Dell XPS 13', 'laptop', 1199.00, 20, 'Slim and powerful ultrabook with Intel Core i7'),
('Apple MacBook Air M2', 'laptop', 1299.00, 25, 'Lightweight laptop with Apple Silicon M2'),
('HP Pavilion 15', 'laptop', 749.99, 30, 'Budget-friendly performance laptop'),
('Asus ROG Strix G15', 'laptop', 1499.00, 15, 'Gaming laptop with high refresh-rate display'),
('Lenovo IdeaPad 3', 'laptop', 599.00, 40, 'Affordable everyday use laptop'),
('Acer Aspire 7', 'laptop', 699.99, 18, 'Laptop with NVIDIA graphics for light gaming'),
('Microsoft Surface Laptop 5', 'laptop', 999.99, 12, 'Elegant design with strong productivity features'),
('MSI Modern 14', 'laptop', 849.00, 20, 'Stylish and portable laptop for professionals');



 -- Products মোট দাম
SELECT SUM(price) FROM products;

-- Products গড় দাম
SELECT AVG(price) FROM products;

-- Productsমধ্যে সর্বনিম্ন দাম
SELECT MIN(price) FROM products;

-- Products মধ্যে সর্বোচ্চ দাম
SELECT MAX(price) FROM products;

-- মোট কয়টি Products আছে
SELECT COUNT(*) FROM products;

-- কতগুলো ইউনিক ক্যাটেগরি Products আছে 
SELECT COUNT(DISTINCT category) FROM products;

-- প্রতিটি ক্যাটেগরিতে কতগুলো Products
SELECT category, COUNT(*) FROM products GROUP BY category;

-- প্রতিটি ক্যাটেগরির Products মোট দাম
SELECT category, SUM(price) FROM products GROUP BY category;

-- প্রতিটি ক্যাটেগরির Products গড় দাম 
SELECT category, AVG(price) FROM products GROUP BY category;

-- প্রতিটি ক্যাটেগরিতে মোট কত স্টক আছে 
SELECT category, SUM(stock_quantity) FROM products GROUP BY category;

-- প্রতিটি ক্যাটেগরিতে সর্বোচ্চ দাম কত
SELECT category, MAX(price) FROM products GROUP BY category;

-- যেসব ক্যাটেগরির গড় দাম ১০০০ টাকার বেশি
SELECT category, AVG(price) FROM products GROUP BY category HAVING AVG(price) > 1000;

-- প্রতিটি ক্যাটেগরির গড় দাম
SELECT category, AVG(price) AS average_price 
FROM products 
GROUP BY category
ORDER BY average_price DESC;

-- যেসব ক্যাটেগরির মোট স্টক ২০-এর বেশি
SELECT category, SUM(stock_quantity) FROM products GROUP BY category HAVING SUM(stock_quantity) > 20;

-- products টেবিলের বিভিন্ন পরিসংখ্যান
SELECT
  COUNT(*),                  -- মোট প্রোডাক্ট সংখ্যা
  SUM(stock_quantity),       -- মোট স্টক পরিমাণ
  AVG(price),                -- গড় দাম
  MIN(price),                -- সর্বনিম্ন দাম
  MAX(price),                -- সর্বোচ্চ দাম
  SUM(price * stock_quantity) -- All Products মূল্য
FROM products;

-- use AS save the data
SELECT COUNT(*) AS total_products,           
  SUM(stock_quantity) AS total_stock,        
  AVG(price) AS average_price,               
  MIN(price) AS min_price,                   
  MAX(price) AS max_price,                   
  SUM(price * stock_quantity) AS total_price
FROM products;
