<div class="modal fade" id="addKategoriModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Data Kategori</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="{{ route('kategori.store') }}" method="POST">
					@csrf
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label for="nama_kategori" class="form-label">Nama Kategori</label>
								<input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori" id="nama_kategori" placeholder="Masukkan nama kategori..">

								@error('nama_kategori')
								<div class="invalid-feedback d-block">
									{{ $message }}
								</div>
								@enderror
							</div>
						</div>

						<div class="col-md-12">
							<div class="mb-3">
								<label for="judul_kategori" class="form-label">Judul Kategori</label>
								<input type="text" class="form-control @error('judul_kategori') is-invalid @enderror" name="judul_kategori" id="judul_kategori" placeholder="Masukkan judul kategori..">

								@error('judul_kategori')
								<div class="invalid-feedback d-block">
									{{ $message }}
								</div>
								@enderror
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>