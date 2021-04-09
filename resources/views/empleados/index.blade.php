<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crud Nexura</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!-- Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div>
                    <h1>Crear empleado</h1>
                    <br>
                    <div class="alert alert-primary col-sm-10" role="alert">Los campos con asteriscos (*) son obligatorios</div>
                    <br>
                    <div>
                        <form action="{{ route('empleados.index') }}" method="POST">
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label font-weight-bold"><b>Nombre Completo *</b></label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control" placeholder="Nombre completo del empleado">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label"><b>Correo electronico *</b></label>
                                <div class="col-sm-8">
                                    <input type="text" name="email" class="form-control" placeholder="Correo electronico">
                                </div>
                            </div>
                            <br>
                            <div class="form-gruop row">
                                <label for="email" class="col-sm-2 col-form-label"><b>Sexo *</b></label>
                                <div class="form-group col-sm-2">
                                    <label class="form-check-label" for="masculino"><input class="form-check-input" type="radio" name="flexRadioDefault" id="masculino" checked>Masculino</label>
                                </div>
                                <div class="form-check col-sm-2">
                                    <label class="form-check-label" for="femenino"><input class="form-check-input" type="radio" name="flexRadioDefault" id="femenino">Femenino</label>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="area" class="col-sm-2 col-form-label"><b>Area *</b></label>
                                <div class="col-sm-8">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Administración</option>
                                    <option value="1">Mercadeo</option>
                                    <option value="2">Proyectos</option>
                                    <option value="3">Soporte</option>
                                </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="descripcion" class="col-sm-2 col-form-label"><b>Descripción *</b></label>
                                <div class="col-sm-8">
                                    <textarea name="descripcion" class="form-control" placeholder="Descripción de la experiencia del empleado" style="height: 100px"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="form-gruop row">
                                <label for="email" class="col-sm-2 col-form-label"><b>Roles *</b></label>
                                <div class="form-group col">
                                    <div class="form-check col-sm-4">
                                        <label class="form-check-label" for="check1"><input class="form-check-input" type="checkbox" name="flexRadioDefault" id="check1" value="checkbox1">Deseo recibir boletín informativo</label>
                                    </div>
                                    <div class="form-check col-sm-4">
                                        <label class="form-check-label" for="check2"><input class="form-check-input" type="checkbox" name="flexRadioDefault" id="check2" value="checkbox2">Desarrollador</label>
                                    </div>
                                    <div class="form-check col-sm-4">
                                        <label class="form-check-label" for="check3"><input class="form-check-input" type="checkbox" name="flexRadioDefault" id="check3" value="checkbox3">Gerente estratégico</label>
                                    </div>
                                    <div class="form-check col-sm-4">
                                        <label class="form-check-label" for="check3"><input class="form-check-input" type="checkbox" name="flexRadioDefault" id="check3" value="checkbox3">Auxiliar administrativo</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-auto">
                                @csrf
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>

                        </form>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Sexo</th>
                                <th>Area</th>
                                <th>Boletín</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($empleados as $empleado)
                            <tr>
                                <td>{{ $empleado->id }}</td>
                                <td>{{ $empleado->name }}</td>
                                <td>{{ $empleado->email }}</td>
                                <td>{{ $empleado->sexo }}</td>
                                <td>{{ $empleado->area }}</td>
                                <td>{{ $empleado->boletin }}</td>
                                <td>{{ $empleado->sexo }}</td>
                                <td>
                                    <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input
                                        type="submit"
                                        value="Eliminar"
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('¿Desea eliminar el empleado?')">
                                        <input
                                        type="submit"
                                        value="Modificar"
                                        class="btn btn-sm btn-success">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
