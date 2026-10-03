CREATE DATABASE IF NOT EXISTS data_api;
USE data_api;

CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    address TEXT NOT NULL
);

INSERT INTO users (id,name,username,email,address) VALUES
(1,'Leanne Graham','Bret','Sincere@april.biz','Kulas Light, Apt. 556, Gwenborough, 92998-3874'),
(2,'Ervin Howell','Antonette','Shanna@melissa.tv','Victor Plains, Suite 879, Wisokyburgh, 90566-7771'),
(3,'Clementine Bauch','Samantha','Nathan@yesenia.net','Douglas Extension, Suite 847, McKenziehaven, 59590-4157'),
(4,'Patricia Lebsack','Karianne','Julianne@clementine.com','Hoeger Mall, Apt. 692, South Elvis, 53919-4257'),
(5,'Chelsey Dietrich','Kamren','Lucio_Hetttinger@annie.ca','Skiles Walks, Suite 351, Roscoeview, 33263'),
(6,'Mrs. Dennis Schulist','Leopoldo_Corkery','Karley_Dach@jasper.info','Norberto Crossing, Apt. 950, South Christy, 23505-1337'),
(7,'Kurtis Weissnat','Elwyn.Skiles','Telly@agustin.biz','Rex Trail, Apt. 280, Howemouth, 58804-1099'),
(8,'Nicholas Runolfsdottir V','Maxime_Nienow','Sherwood@rosamond.me','Ellsworth Summit, Suite 729, Aliyaview, 45169'),
(9,'Glenna Reichert','Delphine','Patsy@kulas.com','Dayna Park, Suite 449, Bartholomebury, 76495-3109'),
(10,'Clementina DuBuque','Moriah.Stanton','Rebeka@lueilwitz.biz','Kattie Turnpike, Suite 198, Lebsackbury, 31428-2261');
