create table users (
    id integer primary key autoincrement,
    name varchar(30) not null check (length(name) <= 30),
    email text not null unique,
    password text not null
);

create table posts (
    id integer primary key autoincrement,
    title varchar(30) not null check (length(title) <= 30),
    image text not null,
    content text not null,
    created_at datetime default current_timestamp,
    user_id integer not null,
    foreign key (user_id) references users (id) on delete cascade
);