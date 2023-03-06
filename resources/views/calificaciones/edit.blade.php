<form action="{{route('alumnos.update', $alumno)}}"  method="POST">
  @csrf @method('PATCH')
  @include('alumnos.form-fields')
</form>