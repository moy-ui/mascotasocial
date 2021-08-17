CREATE DATABASE IF NOT EXISTS mascotas;

USE mascotas;


CREATE TABLE users(
    id              int(255) auto_increment not null,
    rol             varchar(20),
    name            varchar(100),
    surname         varchar(200),
    nick            varchar(100),
    email           varchar(255),
    password        varchar(255),
    image           varchar(255),
    created_at      datetime,
    updated_at      datetime,
    remember_token  varchar(255),
    CONSTRAINT pk_users  PRIMARY KEY(id)
)ENGINE=InnoDB;

-- insertar usuarios
INSERT INTO users VALUES(null, 'user', 'Joel', 'Garcia', 'Joelg', 'joelG@gmail.com', 'pass123', null, CURTIME(), CURTIME(), null);
INSERT INTO users VALUES(null, 'user', 'Juan', 'Cornejo', 'juanC', 'juanC@gmail.com', 'pass123', null, CURTIME(), CURTIME(), null);


CREATE TABLE IF NOT EXISTS images(
    id              int(255) auto_increment not null,
    user_id         int(255),
    image_path      varchar(255),
    name            varchar(100),
    edad            varchar(50),
    actitudes       varchar(255),
    descripcion     text,
    created_at      datetime,
    updated_at      datetime,
    CONSTRAINT pk_images PRIMARY KEY(id),
    CONSTRAINT fk_images_users FOREIGN KEY(user_id) REFERENCES users(id) 
)ENGINE=InnoDB;

INSERT INTO images VALUES (null, 1, 'text.jpg', 'Pongo', '1', 'bueno, malo', 'Texto de prueba', CURTIME(), CURTIME());
INSERT INTO images VALUES (null, 1, 'text.jpg', 'Akira', '1', 'juegueton, activo', 'Texto de prueba para Akira', CURTIME(), CURTIME());
INSERT INTO images VALUES (null, 1, 'text.jpg', 'Bruno', '2', 'Dormilon, activo', 'Texto de prueba para Bruno', CURTIME(), CURTIME());

CREATE TABLE IF NOT EXISTS comments(
    id              int(255) auto_increment not null,
    user_id         int(255),
    image_id        int(255),
    content         text,
    created_at      datetime,
    updated_at      datetime,
    CONSTRAINT pk_coments PRIMARY KEY(id),
    CONSTRAINT fk_comments_users FOREIGN KEY(user_id) REFERENCES users(id),
    CONSTRAINT fk_comments_images FOREIGN KEY(image_id) REFERENCES images(id)
)ENGINE=InnoDB;

INSERT INTO comments VALUES(null, 1, 1, 'Esta muy bonito el perrito', CURTIME(), CURTIME());
INSERT INTO comments VALUES(null, 2, 1, 'Se ve muy bien', CURTIME(), CURTIME());
INSERT INTO comments VALUES(null, 1, 2, 'Esta muy chiquito el perrito', CURTIME(), CURTIME());

CREATE TABLE IF NOT EXISTS likes(
    id              int(255) auto_increment not null,
    user_id         int(255),
    image_id        int(255),
    created_at      datetime,
    updated_at      datetime,
    CONSTRAINT pk_likes PRIMARY KEY(id),
    CONSTRAINT fk_likes_users FOREIGN KEY(user_id) REFERENCES users(id),
    CONSTRAINT fk_likes_images FOREIGN KEY(image_id) REFERENCES images(id)
)ENGINE=InnoDB;

INSERT INTO likes VALUES(null, 1, 2, CURTIME(), CURTIME());
INSERT INTO likes VALUES(null, 1, 1, CURTIME(), CURTIME());
INSERT INTO likes VALUES(null, 2, 1, CURTIME(), CURTIME());

