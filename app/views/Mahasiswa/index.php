<div class="row justify-content-center">
  <div class="col-md-6">
    <h3 class="text-center">Daftar Mahasiswa</h3>
  </div>
</div>

<div class="row justify-content-center">
  <div class="col-md-6">
    <button type="button" class="btn btn-primary tombolModalTambah" data-bs-toggle="modal" data-bs-target="#tombolModal">Tambah Data Mahasiswa
    </button>
  </div>
</div>

<div class="row justify-content-center">
  <div class="col-lg-6">
    <br>
    <?php Flasher::flash() ?>
  </div>
</div>

<form action="<?= BASEURL; ?>/mahasiswa/cari">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Cari mahasiswa..." aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword" id="keyword" autocomplete="off">
        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
      </div>
    </div>
  </div>
</form>

<div class="row justify-content-center">
  <div class="col-md-6">

    <ul class="list-group mt-2">
      <?php foreach($data['mhs'] as $mhs ) : ?>
        <li class="list-group-item">
          <?= $mhs['nama']; ?>
          <a href="<?= BASEURL ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger float-end text-decoration-none" onclick="return confirm('yakin?')">Hapus</a>
          <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-success float-end text-decoration-none tombolModalUbah" data-bs-toggle="modal" data-bs-target="#tombolModal" data-id="<?= $mhs['id']; ?>">Ubah</a>
          <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-end text-decoration-none">Detail</a>
          
  
        </li>
      <?php endforeach; ?>
    </ul>
    
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="tombolModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        <div class="mb-3">
          
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama">
          
          <label for="nim" class="form-label">NIM</label>
          <input type="number" class="form-control" id="nim" name="nim">
          
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email">
          
          <div class="form-group mb-3">
            <label class="form-label" for="jurusan">Jurusan</label>
            
            <select class="form-select" id="jurusan" name="jurusan">
              <option value="Pendidikan Guru Sekolah Dasar">Pendidikan Guru Sekolah Dasar</option>
              <option value="Pendidikan Matematika">Pendidikan Matematika</option>
              <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
              <option value="Pendidikan Ipa">Pendidikan Sejarah</option>
            </select>
          </div>
  
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah data</button>
        </form>
      </div>
    </div>
  </div>
</div>