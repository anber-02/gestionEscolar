SELECT alumnos.nombre, a_paterno, a_materno, materias.nombre, calificaciones.primer_parcial, calificaciones.segundo_parcial, calificaciones.tercer_parcial  from grupos inner join alumnos on grupos.id_alumno = alumnos.id_alumno inner join materias on grupos.id_grupo = materias.id_grupo inner join calificaciones on 
calificaciones.id_alumno = alumnos.id_alumno;



alter table calificaciones change segundo_grado tercer_parcial double(8,2) ;
alter table calificaciones change tercer_grado tercer_parcial double(8,2) ;
alter table calificaciones change primer_grado tercer_parcial double(8,2) ;