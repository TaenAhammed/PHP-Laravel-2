-- Database Name
CREATE DATABASE attendance_system;

-- Employee Information Table
CREATE TABLE employee_info(
    employeeId INT NOT NULL AUTO_INCREMENT,
    firstName VARCHAR(255),
    lastName VARCHAR(255),
    age int(3),
    PRIMARY KEY(employeeId)
);

-- Employee Attendance Table
CREATE TABLE employee_attendance(
    id INT NOT NULL AUTO_INCREMENT,
    date DATETIME DEFAULT CURRENT_TIMESTAMP,
    employeeId INT,
    isAttend BOOLEAN,
    PRIMARY KEY(id),
    FOREIGN KEY(employeeId) REFERENCES employee_info(employeeId)
);