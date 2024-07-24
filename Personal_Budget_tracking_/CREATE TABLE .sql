CREATE TABLE budget_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    item_name VARCHAR(255) NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    category VARCHAR(100),
    date_added DATE
);
