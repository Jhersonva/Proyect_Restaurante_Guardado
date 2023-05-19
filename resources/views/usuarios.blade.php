@extends('adminlte::page')

{{--@section('title', 'RESTAURANTE')--}}

@section('content')


<div class="card card-outline rounded-0 card-indigo">
    <div class="content bg-danger py-3 px-4">
        <h3 class="font-weight-bolder text-light">Usuario</h3>
    </div>
	<div class="card-body">
        
		<div class="container-fluid">
			<div id="msg"></div>
			<form action="" id="manage-user">
				<input type="hidden" name="id">
				<div class="form-group">
					<label for="name">Nombre</label>
					<input type="text" name="firstname" id="firstname" class="form-control">
				</div>
				<div class="form-group">
					<label for="name">Segundo Nombre</label>
					<input type="text" name="middlename" id="middlename" class="form-control">
				</div>
				<div class="form-group">
					<label for="name">Apellido</label>
					<input type="text" name="lastname" id="lastname" class="form-control">
				</div>
				<div class="form-group">
					<label for="username">Usuario</label>
					<input type="text" name="username" id="username" class="form-control" utocomplete="off">
				</div>
				<div class="form-group">
					<label for="password">Contraseña</label>
					<input type="password" name="password" id="password" class="form-control" value="" autocomplete="off">
					<small><i>Deja este campo en blanco si no deseas cambiar la contraseña de tu usuario</i></small>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Avatar</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input rounded-circle" id="customFile" name="img" accept="image/png, image/jpeg">
						<label class="custom-file-label" for="customFile">Examinar</label>
					</div>
				</div>
				<div class="form-group d-flex justify-content-center">
					<img src="" alt="" id="cimg" class="img-fluid img-thumbnail">
				</div>
			</form>
		</div>
	</div>
	<div class="card-footer">
		<div class="col-md-12">
			<div class="row">
				<button class="btn btn-sm btn-primary" form="manage-user">Actualizar</button>
			</div>
		</div>
	</div>
</div>
<style>
	img#cimg {
		height: 15vh;
		width: 15vh;
		object-fit: cover;
		border-radius: 100% 100%;
	}
</style>
<script>
	
	$('#manage-user').submit(function(e) {
		e.preventDefault();
		start_loader()
		$.ajax({
			url: _base_url_ + 'classes/Users.php?f=save',
			data: new FormData($(this)[0]),
			cache: false,
			contentType: false,
			processData: false,
			method: 'POST',
			type: 'POST',
			success: function(resp) {
				if (resp == 1) {
					location.reload()
				} else {
					$('#msg').html('<div class="alert alert-danger">Usuario ya existe</div>')
					end_loader()
				}
			}
		})
	})
</script>

@stop


