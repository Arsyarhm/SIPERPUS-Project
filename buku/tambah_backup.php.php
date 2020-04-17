<?php 
include '../asset/header.php';
?>
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">
						<h2><i class="fas fa-book"></i> Tambah Data Buku</h2>
					</div>
					<div class="card-body">
						<form method="post" action="proses-tambah.php">
							<div class="form-group">
								<label for="judul">Judul</label>
								<input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul">
							</div>
							<div class="form-group">
								<label for="penerbit">Penerbit</label>
								<input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="Masukkan Nama Penerbit">
								<small class="form-text text-muted">Contoh:Gramedia</small>
							</div>												
							<div class="form-group">
								<label for="pengarang">Pengarang</label>
								<input type="text" class="form-control" name="pengarang"id="pengarang" placeholder="Masukkan Nama Pengarang">
								<small class="form-text text-muted">Contoh:Tere Liye</small>
							</div>
							<div class="form-group">
								<label for="ringkasan">Ringkasan</label>
								<input type="text" class="form-control" name="ringkasan"id="ringkasan" placeholder="Masukkan Ringkasan">
								<small class="form-text text-muted">Contoh:Buku ini cocok untuk pemula</small>
							</div>
							<div class="form-group">
								<label for="cover">Cover</label>
								<input type="text" class="form-control" name="cover"id="cover" placeholder="Masukkan Cover">
								<small class="form-text text-muted">Contoh:Pelangi</small>
							</div>
							<div class="form-group">
								<label for="stok">Stok</label>
								<input type="text" class="form-control" name="stok"id="stok" placeholder="Masukkan Stok">
								<small class="form-text text-muted">Contoh:10</small>
							</div>
							<button type="submit" class="btn btn-primary" name="simpan"> Simpan </button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
include '../asset/footer.php';
?>