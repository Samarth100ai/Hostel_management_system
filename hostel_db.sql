-- Create the database
CREATE DATABASE IF NOT EXISTS hostel_db;
USE hostel_db;

-- Students Table
CREATE TABLE Students (
    StudentID INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(100),
    Gender VARCHAR(10),
    DOB DATE,
    ContactNumber VARCHAR(15),
    Email VARCHAR(100),
    RoomID INT,
    AdmissionDate DATE
);

-- Rooms Table
CREATE TABLE Rooms (
    RoomID INT PRIMARY KEY AUTO_INCREMENT,
    RoomNumber VARCHAR(10),
    Capacity INT,
    Occupied INT,
    RoomType VARCHAR(20)
);

-- Staff Table
CREATE TABLE Staff (
    StaffID INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(100),
    Role VARCHAR(50),
    ContactNumber VARCHAR(15),
    JoiningDate DATE
);

-- Fees Table
CREATE TABLE Fees (
    FeeID INT PRIMARY KEY AUTO_INCREMENT,
    StudentID INT,
    Amount DECIMAL(10,2),
    DueDate DATE,
    PaidDate DATE,
    Status VARCHAR(20),
    FOREIGN KEY (StudentID) REFERENCES Students(StudentID)
);

-- Complaints Table
CREATE TABLE Complaints (
    ComplaintID INT PRIMARY KEY AUTO_INCREMENT,
    StudentID INT,
    Description TEXT,
    DateFiled DATE,
    Status VARCHAR(20),
    FOREIGN KEY (StudentID) REFERENCES Students(StudentID)
);

-- Dummy Data for Rooms
INSERT INTO Rooms (RoomNumber, Capacity, Occupied, RoomType) VALUES
('A101', 2, 1, 'Double'),
('A102', 1, 1, 'Single'),
('B201', 3, 2, 'Triple'),
('B202', 2, 0, 'Double');

-- Dummy Data for Students
INSERT INTO Students (Name, Gender, DOB, ContactNumber, Email, RoomID, AdmissionDate) VALUES
('Ravi Kumar', 'Male', '2002-05-14', '9876543210', 'ravi@example.com', 1, '2023-08-01'),
('Sneha Reddy', 'Female', '2003-02-20', '9123456789', 'sneha@example.com', 2, '2023-08-05'),
('Amit Sharma', 'Male', '2001-11-30', '9988776655', 'amit@example.com', 3, '2023-08-10');

-- Dummy Data for Staff
INSERT INTO Staff (Name, Role, ContactNumber, JoiningDate) VALUES
('Meena Joshi', 'Warden', '9001122334', '2022-01-15'),
('Rajesh Nair', 'Cleaner', '9011223344', '2023-03-10'),
('Anita Desai', 'Cook', '9022334455', '2023-06-01');

-- Dummy Data for Fees
INSERT INTO Fees (StudentID, Amount, DueDate, PaidDate, Status) VALUES
(1, 5000.00, '2023-09-01', '2023-08-25', 'Paid'),
(2, 5000.00, '2023-09-01', NULL, 'Unpaid'),
(3, 5000.00, '2023-09-01', '2023-08-30', 'Paid');

-- Dummy Data for Complaints
INSERT INTO Complaints (StudentID, Description, DateFiled, Status) VALUES
(1, 'Leaking tap in bathroom', '2023-08-20', 'Resolved'),
(2, 'Wi-Fi not working', '2023-08-22', 'Pending');