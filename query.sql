create table if not exists tbl_posting(
	id_post int not null auto_increment,
	id_user int not null,
	tgl_post date not null,
	jam_post time not null,	
	icon_post varchar(200),
	jdl_post varchar(200) not null,
	category varchar(50) not null,
	source varchar(50) not null,
	isi text not null,
	primary key(id_post)
);


create table if not exists tbl_user (
	id_user int not null auto_increment,
	username varchar(50) not null,
	password varchar(10) not null,
	name varchar(50) not null,
	primary key(id_user)
);

create table if not exists tbl_master (
	id int not null auto_increment,
	welcome text not null,
	service text not null,
	clients text not null,
	about_us text not null,
	primary key (id)
);