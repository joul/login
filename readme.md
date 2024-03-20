<!-- creating new table: -->

CREATE TABLE comments(
id int(11) not null AUTO_INCREMENT,
username varchar(30) not null,
comment_text text not null,
created_at DATETIME not null DEFAULT CURRENT_TIMESTAMP,
users_id int(11),
PRIMARY key(id),
FOREIGN key(users_id) REFERENCES users (id) ON DELETE SET null
);

 <!-- inserting new user -->

INSERT INTO `users`( `username`, `pwd`, `email`) VALUES ('Nathan','joe123','joe@demo.io');
