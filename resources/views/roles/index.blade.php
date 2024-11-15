@extends('layouts.index', ['title' => 'Halaman Data Peran dan Hak Akses', 'page_heading' => 'Daftar Peran dan Hak
Akses'])

@section('content')
<!-- icon title manajemen aset unugha-->
<link rel="icon" href="{{ url('../assets/img/logo-login-unugha.png') }}" type="image/x-icon">
<!-- icon title manajemen aset unugha-->

<div class="card">
	<div class="card-body">
		@include('utilities.alert')
		<div class="d-flex justify-content-end mb-3">
			<div class="btn-group">
				@can('tambah peran dan hak akses')
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#role_create_modal">
					<i class="fas fa-fw fa-plus"></i>
					Tambah Data
				</button>
				@endcan
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-bordered table-hover" id="datatable">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Nama</th>
								<th scope="col">Daftar Hak Akses</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($roles as $role)
							<tr>
								<th scope="row">{{ $loop->iteration }}</th>
								<td>{{ $role->name }}</td>
								<td>
									@foreach ($role->permissions as $permission)
									<span class="badge badge-primary my-1">{{ $permission->name }}</span>
									@endforeach
								</td>
								<td class="text-center">
									<div class="btn-group" role="group" aria-label="Basic example">
										@can('ubah peran dan hak akses')
										<a data-id="{{ $role->id }}" class="btn btn-sm btn-success text-white edit-modal mr-2"
											data-toggle="modal" data-target="#role_edit_modal" title="Ubah data">
											<i class="fas fa-fw fa-edit"></i>
										</a>
										@endcan

										@can('hapus peran dan hak akses')
										<form action="{{ route('peran-dan-hak-akses.destroy', $role) }}" method="POST">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-sm btn-danger text-white delete-button">
												<i class="fas fa-fw fa-trash-alt"></i>
											</button>
										</form>
										@endcan
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('modal')
@include('roles.modal.create')
@include('roles.modal.edit')
@endpush

@push('js')
@include('roles._script')
@endpush
