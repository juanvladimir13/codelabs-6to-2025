create table especialidad
(
    id     integer primary key,
    nombre varchar(32) not null,
    unique (nombre)
);

create table unidad_educativa
(
    id     integer primary key,
    sie varchar(15) not null,
    nombre varchar(30) not null,
    dependencia varchar(8) not null,
    soft_delete boolean not null default false,
    unique (sie)
);

create table estudiante
(
    id               integer primary key,
    rude             varchar(30),
    registro         varchar(8),
    carnet           varchar(10),
    apellidos        varchar(50) not null,
    nombres          varchar(50) not null,
    fecha_nacimiento date,
    genero           varchar(1),
    celular          varchar(15),
    correo           varchar(50),
    direccion        varchar(100),
    especialidad_id  int not null,
    editable boolean not null default true,
    soft_delete boolean not null default false,
    unique (registro),
    foreign key (especialidad_id) references especialidad (id)
);

create table matricula
(
    id                    integer primary key,
    gestion               integer not null,
    estudiante_id         int      not null,
    unidad_educativa_id   int      not null,
    curso_paralelo_origen varchar(1) not null,
    estado varchar(1) not null default 'A',
    foreign key (estudiante_id) references estudiante (id),
    foreign key (unidad_educativa_id) references unidad_educativa (id)
);

-- Lista de estudiantes de la especialidad de 
-- Sistemas Informaticos
select e.apellidos, e.nombres, e.registro
from estudiante e, especialidad es 
where e.especialidad_id = es.id and es.id = 1
order by e.apellidos;

