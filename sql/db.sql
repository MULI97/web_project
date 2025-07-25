-- Drop and recreate database
DROP DATABASE IF EXISTS e_patriot;
CREATE DATABASE IF NOT EXISTS e_patriot DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE e_patriot;

-- Table: roles
CREATE TABLE roles (
    roleId INT AUTO_INCREMENT PRIMARY KEY,
    roleName VARCHAR(50) NOT NULL UNIQUE, -- Admin, Citizen, Official
    dateCreated DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO roles (roleName) VALUES ('Admin'), ('Citizen'), ('Official');

-- Table: users
CREATE TABLE users (
    userId BIGINT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(15),
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL, -- hashed password
    roleId INT NOT NULL,
    regionId INT,
    dateCreated DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (roleId) REFERENCES roles(roleId)
);

-- Table: regions (Kenyan counties)
CREATE TABLE regions (
    regionId INT AUTO_INCREMENT PRIMARY KEY,
    regionName VARCHAR(100) NOT NULL UNIQUE
);

-- Table: officials
CREATE TABLE officials (
    officialId BIGINT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    position VARCHAR(100) NOT NULL, -- Governor, MP, Senator, etc.
    regionId INT NOT NULL,
    promises TEXT,
    FOREIGN KEY (regionId) REFERENCES regions(regionId)
);

-- Table: petitions
CREATE TABLE petitions (
    petitionId BIGINT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    createdBy BIGINT NOT NULL,
    regionId INT NOT NULL,
    status ENUM('Open','Closed','In Progress') DEFAULT 'Open',
    signatures INT DEFAULT 0,
    dateCreated DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (createdBy) REFERENCES users(userId),
    FOREIGN KEY (regionId) REFERENCES regions(regionId)
);

-- Table: feedback
CREATE TABLE feedback (
    feedbackId BIGINT AUTO_INCREMENT PRIMARY KEY,
    userId BIGINT NOT NULL,
    officialId BIGINT NOT NULL,
    feedback TEXT NOT NULL,
    rating INT CHECK(rating BETWEEN 1 AND 5),
    dateCreated DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (userId) REFERENCES users(userId),
    FOREIGN KEY (officialId) REFERENCES officials(officialId)
);

-- Table: messages (Contact form)
CREATE TABLE messages (
    messageId BIGINT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    subject VARCHAR(150),
    message TEXT,
    dateCreated DATETIME DEFAULT CURRENT_TIMESTAMP
);
