@extends('adminlte::page')

{{--@section('title', 'RESTAURANTE')--}}

@section('content')


<style>
	img#cimg {
		height: 15vh;
		width: 15vh;
		object-fit: cover;
		border-radius: 100% 100%;
	}

	img#cimg2 {
		height: 50vh;
		width: 100%;
		object-fit: contain;
		/* border-radius: 100% 100%; */
	}
</style>
<div class="col-lg-12">
	<div class="card card-outline rounded-0 card-indigo">
		<div class="content bg-danger py-3 px-4">
			<h3 class="font-weight-bolder text-light">Información del Sistema</h3>
		</div>
		<div class="card-body">
			<form action="" id="system-frm">
				<div id="msg" class="form-group"></div>
				<div class="form-group">
					<label for="name" class="control-label">Nombre del Sistema</label>
					<input type="text" class="form-control form-control-sm" name="name" id="name">
				</div>
				<div class="form-group">
					<label for="short_name" class="control-label">Nombre Corto del Sistema</label>
					<input type="text" class="form-control form-control-sm" name="short_name" id="short_name">
				</div>
				<div class="form-group">
					<label for="" class="control-label">Logo del Sistema</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input rounded-circle" id="customFile1" name="img">
						<label class="custom-file-label" for="customFile1">Examinar</label>
					</div>
				</div>
				<div class="form-group d-flex justify-content-center">
					<img src="img/logo_bit.png" alt="" id="cimg" class="img-fluid img-thumbnail">
				</div>
				<div class="form-group">
					<label for="" class="control-label">Fondo Aplicación</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input rounded-circle" id="customFile2" name="cover">
						<label class="custom-file-label" for="customFile2">Examinar</label>
					</div>
				</div>
				<div class="form-group d-flex justify-content-center">
					<img src="https://cdn.pixabay.com/photo/2016/05/26/14/11/chef-1417239_1280.png" alt="" id="cimg2" class="img-fluid img-thumbnail bg-gradient-secondary border-secondary">
				</div>
			</form>
		</div>
		<div class="card-footer">
			<div class="col-md-12">
				<div class="row">
					<button class="btn btn-sm btn-primary" form="system-frm">Actualizar Información</button>
				</div>
			</div>
		</div>

	</div>
</div>
<script>
	function displayImg(input, _this) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#cimg').attr('src', e.target.result);
				_this.siblings('.custom-file-label').html(input.files[0].name)
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	function displayImg2(input, _this) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				_this.siblings('.custom-file-label').html(input.files[0].name)
				$('#cimg2').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	function displayImg3(input, _this) {
		var fnames = [];
		Object.keys(input.files).map(function(k) {
			fnames.push(input.files[k].name)

		})
		_this.siblings('.custom-file-label').html(fnames.join(", "))
	}

	function delete_img($path) {
		start_loader()

		$.ajax({
			url: _base_url_ + 'classes/Master.php?f=delete_img',
			data: {
				path: $path
			},
			method: 'POST',
			dataType: "json",
			error: err => {
				console.log(err)
				alert_toast("Ocurrió un error al eliminar esta imagen", "error");
				end_loader()
			},
			success: function(resp) {
				$('.modal').modal('hide')
				if (typeof resp == 'object' && resp.status == 'success') {
					$('[data-path="' + $path + '"]').closest('.img-item').hide('slow', function() {
						$('[data-path="' + $path + '"]').closest('.img-item').remove()
					})
					alert_toast("Imagen eliminada con éxito", "success");
				} else {
					console.log(resp)
					alert_toast("Ocurrió un error al eliminar la imagen", "error");
				}
				end_loader()
			}
		})
	}
	$(document).ready(function() {
		$('.rem_img').click(function() {
			_conf("¿Desear eliminar esta imagen permanentemente?", 'delete_img', ["'" + $(this).attr('data-path') + "'"])
		})
		$('.summernote').summernote({
			height: 200,
			toolbar: [
				['style', ['style']],
				['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
				['fontname', ['fontname']],
				['fontsize', ['fontsize']],
				['color', ['color']],
				['para', ['ol', 'ul', 'paragraph', 'height']],
				['table', ['table']],
				['view', ['undo', 'redo', 'fullscreen', 'help']]
			]
		})
	})
</script>

@stop


