SELECT alumnos.id_alumno,alumnos.nombre, a_paterno, a_materno, grupos.nombre as grupo,
calificaciones.primer_parcial, calificaciones.segundo_parcial, calificaciones.tercer_parcial, calificaciones.promedio,
materias.clave, materias.nombre
from grupos inner join alumnos on grupos.id_alumno = alumnos.id_alumno
inner join calificaciones on alumnos.id_alumno = calificaciones.id_alumno
inner join materias on alumnos.id_alumno = materias.id_alumno;
;



alter table calificaciones change segundo_grado tercer_parcial double(8,2) ;
alter table calificaciones change tercer_grado tercer_parcial double(8,2) ;
alter table calificaciones change primer_grado tercer_parcial double(8,2) ;