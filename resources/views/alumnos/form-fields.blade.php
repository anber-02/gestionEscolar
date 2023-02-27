<label>
  Nombre(s): <br/>
  <input type="text" name="nombre" value="{{old('nombre', $alumno->nombre)}}"/>
  <!-- indicamos la variable que queremos verificar si tiene errores -->
  @error('nombre')
    <br />
  <!-- variable mensaje disponible por laravel -->
    <small style="color:red">{{$message}}</small>
  @enderror
</label>
<br />
<label>
  Apellido Paterno: <br/>
  <input type="text" name="a_paterno" value="{{old('a_paterno',$alumno->a_paterno)}}"/>
</label>
<br />
<label>
  Apellido Materno: <br/>
  <input type="text" name="a_materno" value="{{old('a_materno',$alumno->a_materno)}}"/>
</label>
<br />
<label>
  Matricula: <br/>
  <input type="text" name="matricula" value="{{old('matricula',$alumno->matricula)}}"/>
</label>
<br />
<label>
  Edad: <br/>
  <input type="number" name="edad" value="{{old('edad',$alumno->edad)}}"/>
</label>
<br />
<label>
  Direccion: <br/>
  <input type="text" name="direccion_alumno" value="{{old('direccion_alumno',$alumno->direccion_alumno)}}" />
</label>
<br />
<label>
  Email alumno: <br/>
  <input type="email" name="email_alumno" value="{{old('email_alumno',$alumno->email_alumno)}}"/>
</label>
<br />
<label>
  Telefono alumno: <br/>
  <input type="text" name="telefono_alumno" value="{{old('telefono_alumno',$alumno->telefono_alumno)}}"/>
</label>
<br />
<label>
  Grado: <br/>
  <input type="number" name="grado" value="{{old('grado',$alumno->grado)}}"/>
</label>
<br />
<h2>Datos del tutor</h2>
<label>
  Nombre(s): <br/>
  <input type="text" name="nombre_tutor" value="{{old('nombre_tutor',$alumno->nombre_tutor)}}"/>
</label>
<br />
<label>
  Apellido paterno: <br/>
  <input type="text" name="a_paterno_tutor" value="{{old('a_paterno_tutor',$alumno->a_paterno_tutor)}}"/>
</label>
<br />
<label>
  Apellido materno: <br/>
  <input type="text" name="a_materno_tutor" value="{{old('a_materno_tutor',$alumno->a_materno_tutor)}}"/>
</label>
<br />
<label>
  Email: <br/>
  <input type="email" name="email_tutor" value="{{old('email_tutor',$alumno->email_tutor)}}"/>
</label>
<br />
<label>
  Telefono: <br/>
  <input type="text" name="telefono_tutor" value="{{old('telefono_tutor',$alumno->telefono_tutor)}}"/>
</label>
<br />
<label>
  Direccion: <br/>
  <input type="text" name="direccion_tutor" value="{{old('direccion_tutor',$alumno->direccion_tutor)}}"/>
</label>
<br />
<input type="submit" value="Enviar"/>