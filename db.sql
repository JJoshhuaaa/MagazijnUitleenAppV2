CREATE TABLE products 
(    id INT AUTO_INCREMENT PRIMARY KEY,    name VARCHAR(255) NOT NULL,    description TEXT,    category VARCHAR(100),    quantity INT NOT NULL DEFAULT 0,  price DECIMAL(10, 2),   created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP);INSERT INTO products (name, description, category, quantity)    
VALUES('Product 1', 'Description of Product 1', 'Category A', 10),
    ('Product 2', 'Description of Product 2', 'Category B', 15),
    ('Product 3', 'Description of Product 3', 'Category A', 5);