CREATE TABLE User(
    
    uId INT AUTO_INCREMENT PRIMARY KEY,
    uFname VARCHAR(20) NOT NULL,
    uLname VARCHAR(20) NOT NULL,
    uPassword VARCHAR(20),
    address VARCHAR(100), 
    uPhoneNo INT(10),
    UNIQUE (uId,uPassword)

);

CREATE TABLE PickUpRequest(

    oId INT AUTO_INCREMENT PRIMARY KEY,
    uId VARCHAR(10) REFERENCES User(uId),
    cloth INT,
    footwear INT,
    book INT,
    orderDate DATE,
    pickupTime VARCHAR(20),
    pickupDate DATE
    -- FOREIGN KEY uId REFERENCES User(uId)

);

CREATE TABLE OrderRecord(

    date DATE PRIMARY KEY,
    cloth INT,
    footwear INT,
    book INT

);