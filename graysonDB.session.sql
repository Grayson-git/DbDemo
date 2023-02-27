
CREATE TABLE meals (
    meal_ID int AUTO_INCREMENT PRIMARY KEY, 
    meal_name VARCHAR(255) NOT NULL, 
    meal_price DECIMAL(5,2) NOT NULL,
    meal_description VARCHAR(255) NOT NULL, 
    meal_image VARCHAR(255) NOT NULL, 
    meal_type VARCHAR(10) NOT NULL
);

CREATE TABLE meal_times (
    meal_time_ID int AUTO_INCREMENT PRIMARY KEY, 
    meal_time_name VARCHAR(20) NOT NULL, 
    meal_ID int NOT NULL, 
    FOREIGN KEY (meal_ID) REFERENCES meals(meal_ID) 
);

CREATE TABLE lite_fare (
    lite_fare_ID int AUTO_INCREMENT PRIMARY KEY, 
    lite_fare_icon VARCHAR(10) NOT NULL, 
    meal_ID int NOT NULL,
    FOREIGN KEY (meal_ID) REFERENCES meals(meal_ID) 
);

INSERT INTO meals (meal_name, meal_price, meal_description, meal_image, meal_type) 
    VALUES ('Fried Chicken', 7.50, 'Crispy fried chicken served with a side of your choice', 'chicken', 'Classic');

INSERT INTO meals (meal_name, meal_price, meal_description, meal_image, meal_type) 
    VALUES ('Mashed Potatoes', 3.50, 'Creamy mashed potatoes topped with butter and herbs', 'mashedpotatoes', 'Classic');

INSERT INTO meals (meal_name, meal_price, meal_description, meal_image, meal_type) 
    VALUES ('Green Beans', 3.00, 'Fresh green beans cooked to perfection', 'greenbeans', 'Classic');

INSERT INTO meals (meal_name, meal_price, meal_description, meal_image, meal_type) 
    VALUES ('Taco Casserole', 8.00, 'A delicious layer of taco meat, cheese, and tortillas', 'tacocas', 'Classic');

INSERT INTO meals (meal_name, meal_price, meal_description, meal_image, meal_type) 
    VALUES ('Spanish Rice', 5.00, 'Flavorful Spanish rice cooked with tomatoes, onions, and peppers', 'spanishrice', 'Classic');

INSERT INTO meals (meal_name, meal_price, meal_description, meal_image, meal_type) 
    VALUES ('Pico de Gallo', 4.00, 'A fresh salsa made with tomatoes, onions, cilantro, and jalapenos', 'pico', 'Classic');

INSERT INTO meals (meal_name, meal_price, meal_description, meal_image, meal_type) 
    VALUES ('Lasagna', 9.50, 'Layers of cheesy lasagna noodles smothered in marinara sauce', 'lasagna', 'Classic');

INSERT INTO meals (meal_name, meal_price, meal_description, meal_image, meal_type) 
    VALUES ('Garlic Bread', 2.00, 'Freshly toasted garlic bread', 'garlicbread', 'Classic');

INSERT INTO meals (meal_name, meal_price, meal_description, meal_image, meal_type) 
    VALUES ('Salad', 4.50, 'A crisp garden salad with your choice of dressing', 'salad', 'Lite Fare');

INSERT INTO meals (meal_name, meal_price, meal_description, meal_image, meal_type) 
    VALUES ('Fish and Chips', 8.25, 'Golden fried fish served with crispy french fries', 'fishchips', 'Classic');

INSERT INTO meals (meal_name, meal_price, meal_description, meal_image, meal_type) 
    VALUES ('Cole Slaw', 3.75, 'Tangy coleslaw made with shredded cabbage and carrots', 'coleslaw', 'Classic');

INSERT INTO meals (meal_name, meal_price, meal_description, meal_image, meal_type) 
    VALUES ('French Fries', 3.25, 'Crispy golden french fries', 'fries', 'Classic');

INSERT INTO meals (meal_name, meal_price, meal_description, meal_image, meal_type) 
    VALUES ('Pizza', 12.00, 'A large pizza loaded with your favorite toppings', 'pizza', 'Classic');

INSERT INTO meals (meal_name, meal_price, meal_description, meal_image, meal_type) 
    VALUES ('Garlic Knots', 2.50, 'Soft and fluffy garlic knots', 'garlicknots', 'Classic');

INSERT INTO meals (meal_name, meal_price, meal_description, meal_image, meal_type) 
    VALUES ('Ceasar Salad', 5.00, 'Crisp romaine lettuce tossed with caesar dressing, croutons, and parmesan cheese', 'ceasarsalad2', 'Lite Fare');

INSERT INTO meal_times (meal_time_name, meal_ID) 
    VALUES ('Breakfast', 1),
           ('Breakfast', 2),
           ('Breakfast', 3),
           ('Breakfast', 4),
           ('Lunch', 5),
           ('Lunch', 6),
           ('Lunch', 7),
           ('Lunch', 8),
           ('Lunch', 9),
           ('Dinner', 10),
           ('Dinner', 11),
           ('Dinner', 12),
           ('Dinner', 13),
           ('Dinner', 14),
           ('Dinner', 15);

INSERT INTO lite_fare (lite_fare_icon, meal_ID) 
    VALUES ('Healthy', 9),
           ('Healthy', 15);