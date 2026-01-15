use shop; 

create table if not exits shop.components(
    id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) not null,
    brand varchar(255),
    model varchar(255)
);

create table if not exits shop.pcs(
    id varchar(255) PRIMARY KEY,
    owner varchar(255),
    brand varchar(255),
    price float
);

alter table shop.components
add foreing key (pc_id) references shop.pcs(id);

create table if not exits shop.users(
    id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) unique,
    password varchar(255)
);