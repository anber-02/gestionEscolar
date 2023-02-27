<label>
  Nombre(s): <br/>
  <input type="text" name="nombre" value="{{old('nombre', $docente->nombre)}}"/>
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
  <input type="text" name="a_paterno" value="{{old('a_paterno',$docente->a_paterno)}}"/>
  @error('a_paterno')
    <br />
  <!-- variable mensaje disponible por laravel -->
    <small style="color:red">{{$message}}</small>
  @enderror
</label>
<br />
<label>
  Apellido Materno: <br/>
  <input type="text" name="a_materno" value="{{old('a_materno',$docente->a_materno)}}"/>
  @error('a_materno')
    <br />
  <!-- variable mensaje disponible por laravel -->
    <small style="color:red">{{$message}}</small>
  @enderror
</label>
<br />
<label>
  Telefono: <br/>
  <input type="text" name="telefono" value="{{old('telefono',$docente->telefono)}}"/>
  @error('telefono')
    <br />
  <!-- variable mensaje disponible por laravel -->
    <small style="color:red">{{$message}}</small>
  @enderror
</label>
<br />
<label>
  Direccion: <br/>
  <input type="text" name="direccion" value="{{old('direccion',$docente->direccion)}}"/>
  @error('direccion')
    <br />
  <!-- variable mensaje disponible por laravel -->
    <small style="color:red">{{$message}}</small>
  @enderror
</label>
<br />
<label>
  Curp: <br/>
  <input type="text" name="curp" value="{{old('curp',$docente->curp)}}" />
  @error('curp')
    <br />
  <!-- variable mensaje disponible por laravel -->
    <small style="color:red">{{$message}}</small>
  @enderror
</label>
<br />
<label>
  Email: <br/>
  <input type="email" name="email" value="{{old('email',$docente->email)}}"/>
  @error('email')
    <br />
  <!-- variable mensaje disponible por laravel -->
    <small style="color:red">{{$message}}</small>
  @enderror
</label>
<br />
<label>
  RFC: <br/>
  <input type="text" name="rfc" value="{{old('rfc',$docente->rfc)}}"/>
  @error('rfc')
    <br />
  <!-- variable mensaje disponible por laravel -->
    <small style="color:red">{{$message}}</small>
  @enderror
</label>
<br />
<input type="submit" value="Enviar"/>