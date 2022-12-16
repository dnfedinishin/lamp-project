USE mariadb;
create table if not exists firstname
(
  id serial primary key,
  firstname varchar(255)
);

insert into firstname (id, firstname)
values
(1, 'Hoary'),
(2, 'Gutsy'),
(3, 'Bionic'),
(4, 'Artful'),
(5, 'Jack'),
(6, 'Bill'),
(7, 'Charlie'),
(8, 'Djohn'),
(9, 'Raichel'),
(10, 'Leo');

create table if not exists lastname
(
  id serial primary key,
  lastname varchar(255)
);

insert into lastname (id, lastname)
values
(1, 'Hedgehog'),
(2, 'Gibbon'),
(3, 'Beaver'),
(4, 'Aardverk'),
(5, 'Johansson'),
(6, 'Jackson'),
(7, 'Diesel'),
(8, 'Willis'),
(9, 'Pitt'),
(10, 'Stiller');
