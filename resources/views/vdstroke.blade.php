<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	{{-- Fontawesome --}}
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
	{{-- toastr --}}
	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" rel="stylesheet">
    <title>PENERAPAN SVM</title>
  </head>
  <body>
    <h3 class="text-center mb-4">DATA PENDERITA PENYAKIT STROKE</h3>

	<div class="container">
		<div class="row">
			<table class="table">
				<thead>
				  <tr>
					<th scope="col">id</th>
					<th scope="col">Gender</th>
					<th scope="col">Age</th>
					<th scope="col">Hypertension</th>
					<th scope="col">Heart Disease</th>
					<th scope="col">Ever Married</th>
					<th scope="col">Average Glucose  Level</th>
					<th scope="col">BMI</th>
					<th scope="col">Smoking Status</th>
					<th scope="col">Stroke</th>
					<th scope="col">Aksi</th>
				  </tr>
				</thead>
				<tbody>
				@php
					$no = 1;
				@endphp
				@foreach($data as $row)
				<tr>
					<th scope="row">{{ $no++ }}</th>
					<td>{{ $row->gender }}</td>
					<td>{{ $row->age }}</td>
					<td>{{ $row->hypertension }}</td>
					<td>{{ $row->heart_disease }}</td>
					<td>{{ $row->ever_married }}</td>
					<td>{{ $row->avg_gluose_level }}</td>
					<td>{{ $row->bmi }}</td>
					<td>{{ $row->smoking_status }}</td>
					<td>{{ $row->stroke }}</td>
					<td>
						<a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}"><i class="fa-solid fa-trash"></i></a>
					</td>
				  </tr>
				@endforeach
				</tbody>
			  </table>
		</div>
	</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	{{-- script sweet alert --}}
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	{{-- end --}}
	{{-- script toastr --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
	{{-- end --}}
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
  {{-- sweet alert delete --}}
  	<script>
		$('.delete').click(function(){
			var strokeid = $(this).attr('data-id');
			swal({
				title: "Apakah anda yakin?",
				text: "Menghapus Data Stroke Dengan id "+strokeid+"",
				icon: "warning",
				buttons: true,
				dangerMode: true,
				})
				.then((willDelete) => {
				if (willDelete) {
					window.location = "/delete/"+strokeid+""
					swal("Data Berhasil Di Hapus", {
					icon: "success",
					});
				} else {
					swal("Data Tidak Terhapus");
				}
			});
		});
	</script>
	{{-- notifikasi toast --}}
	<script>
		@if (Session::has('success'))
		toastr.success("{{Session::get('success')}}")
		@endif
	</script>
</html>
