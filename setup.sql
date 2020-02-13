DROP TABLE IF EXISTS contact;

CREATE TABLE contact(
    id      INT NOT NULL AUTO_INCREMENT,
    name    VARCHAR(20),
    phone   VARCHAR(15),
    email   VARCHAR(30),
    message TEXT,
    PRIMARY KEY(id)
);
