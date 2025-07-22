create table especialidad
(
    id     integer primary key autoincrement,
    nombre varchar(32) not null,
    unique (nombre)
);

create table unidad_educativa
(
    id     integer primary key autoincrement,
    sie varchar(15) not null,
    nombre varchar(30) not null,
    dependencia varchar(8) not null,
    soft_delete boolean not null default false,
    unique (sie)
);

create table curso
(
    id          integer primary key autoincrement,
    grado       varchar(1) not null,
    nombre      varchar(6) not null,
    paralelo    varchar(2) not null,
    soft_delete boolean    not null default false,
    unique (grado, paralelo)
);

create table curso_especialidad
(
    id              integer primary key autoincrement,
    gestion         int not null,
    curso_id        int      not null,
    especialidad_id int      not null,
    soft_delete     boolean  not null default false,
    unique (gestion, curso_id, especialidad_id),
    foreign key (curso_id) references curso (id),
    foreign key (especialidad_id) references especialidad (id)
);

create table estudiante
(
    id               integer primary key autoincrement,
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
    id                    integer primary key autoincrement,
    gestion               int   not null,
    estudiante_id         int        not null,
    unidad_educativa_id   int        not null,
    curso_paralelo_origen varchar(1) not null,
    curso_especialidad_id int not null,
    estado                varchar(1) not null default 'A', -- Activo, Retirado, 
    tutor_id              int,
    editable              boolean    not null default true,
    foreign key (estudiante_id) references estudiante (id),
    foreign key (unidad_educativa_id) references unidad_educativa (id),
    foreign key (curso_especialidad_id) references curso_especialidad (id)
);

create table centralizador
(
    id                    integer primary key autoincrement,
    ser                   smallint not null,
    saber                 smallint not null,
    hacer                 smallint not null,
    decidir               smallint not null,
    autoevaluacion        smallint not null,
    promedio              smallint not null,
    matricula_id int not null,
    trimestre          varchar(1)      not null,
    docente_id            int,
    editable              boolean  not null default true,
    soft_delete           boolean  not null default false,
    foreign key (matricula_id) references matricula (id)
);

-- Lista de estudiantes de la especialidad de 
-- Sistemas Informaticos
select e.apellidos, e.nombres, e.registro
from estudiante e, especialidad es 
where e.especialidad_id = es.id and es.id = 1
order by e.apellidos;

