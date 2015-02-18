CREATE TABLE users (
  id SERIAL NOT NULL,
  login VARCHAR(10) NOT NULL,
  password VARCHAR(50) NOT NULL,
  created TIMESTAMP NOT NULL DEFAULT(NOW()),
  email TEXT,
  lastseen TIMESTAMP,
  role INT NOT NULL,
  PRIMARY KEY  (id)
);

CREATE TABLE langs (
  id SERIAL NOT NULL,
  name VARCHAR(15) NOT NULL,
  flag VARCHAR(2) NOT NULL,
  PRIMARY KEY  (id)
);

CREATE TABLE roles (
  id SERIAL NOT NULL,
  name VARCHAR(20) NOT NULL,
  PRIMARY KEY  (id)
);


ALTER TABLE users ADD CONSTRAINT users_fk1 FOREIGN KEY (role) REFERENCES roles(id);

INSERT INTO roles (name) VALUES ('admin');
INSERT INTO users (login, password, role) VALUES ('admin', '52f504477e36154a49464ed65a50dd3b97c99327', 1);