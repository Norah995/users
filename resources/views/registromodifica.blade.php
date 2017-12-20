<div class="container" align="center">
      <form action="/modificar/{{$user->id}}" method="POST">
        <input type="hidden" name="_method" value="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group col-md-4">
        <input type="text" class="form-control" name='nombres' id="formGroupExampleInput" placeholder="Nombres" value="{{$user->nombre}}">
      </div>
      <div class="form-group col-md-4">
        <input type="text" class="form-control" name='apellidos' id="formGroupExampleInput" placeholder="Apellidos" value="{{$user->apellido}}">
      </div>
      <div class="form-group col-md-4">
          <select id="inputState" class="form-control" name='sexo'>
          <option value="{{$user->sexo}}" selected>Femenino</option>
          <option value="{{$user->sexo}}">Masculino</option>
          </select>
      </div>
      <div class="form-group col-md-4">
          <input type="email" class="form-control" name='email' id="inputEmail4" placeholder="Email" value="{{$user->email}}">
      </div>  
      <div class="form-group col-md-4">
          <input type="password" class="form-control" name='contraseña' id="formGroupExampleInput" placeholder="Contraseña" value="{{$user->contraseña}}">
      </div>  
    <div>
      <button type="summit" class="btn btn-danger">MODIFICAR</button>
    </div>
    </form>
    </div> 
<script src="build/app.js"></script>  