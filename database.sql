CREATE TABLE users{
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(10) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP CURRENT_TIMESTAMP
}

CREATE TABLE events{
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description VARCHAR(255) NULL,
    photos_id INT,
    CONSTRAINT freeletics_photos
    FOREIGN KEY(photos_id)
        REFERENCES photos(id),
    author_id INT,
    CONSTRAINT freeletics_users
    FOREIGN KEY(author_id)
        REFERENCES users(id),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
}

CREATE TABLE photos{
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    subtitle VARCHAR(255) NULL,
    events VARCHAR(255) NOT NULL,
    is_used BOOLEAN(2) NOT NULL,
    author_id INT,
    CONSTRAINT freeletics_users
    FOREIGN KEY(author_id)
        REFERENCES users(id),
    file_path VARCHAR(255) NOT NULL,
    upload_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
}