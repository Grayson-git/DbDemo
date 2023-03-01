-- CREATE TABLE meals_meal_times (
--     meal_ID INT, 
--     meal_time_ID INT, 
--     PRIMARY KEY (meal_ID, meal_time_ID),
--     FOREIGN KEY (meal_ID) REFERENCES meals(meal_ID),
--     FOREIGN KEY (meal_time_ID) REFERENCES meal_times(meal_time_ID)
-- );

-- SELECT * FROM meals
                    
-- INNER JOIN meals_meal_times ON meals_meal_times.meal_ID = meals.meal_ID
-- INNER JOIN meal_times ON meal_times.meal_time_ID = meals_meal_times.meal_time_ID

-- WHERE meal_times.meal_time_name='Breakfast'

-- select * from meal_times;

-- alter table meal_times drop primary key meal_time_ID;

-- CREATE TABLE meal_times (
--     meal_type VARCHAR(20), 
--     meal_time_ID INT
-- );


-- INSERT INTO meal_times (meal_type, meal_time_ID) 
-- VALUES ('Breakfast', 1), ('Lunch', 2), ('Dinner', 3);

-- INSERT INTO meals_meal_times (meal_ID, meal_time_ID)
-- VALUES (1, 1), (2, 1), (3, 1), (4, 1), (5, 1), (6, 2), (7, 2), (8, 2), (9, 2), (10, 2), (11, 3), (12, 3), (13, 3), (14, 3), (15, 3), (4, 2), (9, 3);

-- alter table meal_times ADD PRIMARY key (meal_time_ID);

-- SELECT meal_type FROM meal_times
                    
                    -- INNER JOIN meals_meal_times ON meals_meal_times.meal_ID = meals.meal_ID
                    -- INNER JOIN meal_times ON meals_meal_times.meal_time_ID = meal_times.meal_time_ID

                    -- WHERE meal_times.meal_type='Breakfast'

-- SELECT * FROM meals
                    
--                     INNER JOIN meals_meal_times ON meals_meal_times.meal_ID = meals.meal_ID
--                     INNER JOIN meal_times ON meals_meal_times.meal_time_ID = meal_times.meal_time_ID

--                     WHERE meal_times.meal_type='Breakfast'

SELECT * FROM meals
                    
                    INNER JOIN meals_meal_times ON meals_meal_times.meal_ID = meals.meal_ID
                    INNER JOIN meal_times ON meals_meal_times.meal_time_ID = meal_times.meal_time_ID

                    WHERE meal_times.meal_time_ID=3

