CREATE TABLE staff (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) UNIQUE,
  password VARCHAR(255),
  role VARCHAR(20) DEFAULT 'staff'
);

CREATE TABLE attendance (
  id INT AUTO_INCREMENT PRIMARY KEY,
  staff_id INT,
  date DATE,
  shift VARCHAR(10),
  present BOOLEAN,
  FOREIGN KEY (staff_id) REFERENCES staff(id)
);

CREATE TABLE trips (
  id INT AUTO_INCREMENT PRIMARY KEY,
  staff_id INT,
  date DATE,
  vehicle VARCHAR(50),
  material VARCHAR(100),
  weight DECIMAL(10,2),
  rate DECIMAL(10,2),
  earning DECIMAL(10,2),
  FOREIGN KEY (staff_id) REFERENCES staff(id)
);
