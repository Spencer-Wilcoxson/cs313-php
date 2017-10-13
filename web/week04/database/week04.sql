CREATE TABLE guestlist(
   id SERIAL PRIMARY KEY,
   lastName  varchar(80) NOT NULL,
   firstName varchar(80) NOT NULL,
   number    bigint NOT NULL,
   email     varchar(120)
);

CREATE TABLE users(
   id       SERIAL PRIMARY KEY,
   username varchar(80) NOT NULL,
   password int NOT NULL
);

CREATE TABLE events(
   id         SERIAL PRIMARY KEY,
   name       varchar(80) NOT NULL,
   alertTime  date NOT NULL,
   userID int references users(id)
);

CREATE TABLE junction(
   id       SERIAL PRIMARY KEY,
   eventsID int references events(id),
   guestID  int references guestlist(id)
);