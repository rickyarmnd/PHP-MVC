<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
          <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
            Tambah Mahasiswa
            </button>
            <br><br>
            <h3>Daftar Mahasiswa</h3>
        <ul class="list-group">
            <?php foreach($data['mahasiswa'] as $mhs ) : ?>
              <li class="list-group-item"><?= $mhs['nama'] ?>
              <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class ="badge badge-primary float-right ml-2">Detail</a>
              <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class ="badge badge-secondary float-right ml-2 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']?>">Ubah</a>
              <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class ="badge badge-danger float-right ml-1" onclick="return confirm('yakin')">Hapus</a>
              
                </li>
            <?php endforeach; ?>
        
       </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">    
      
      <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
         <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id">
      
      <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
         <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
         <div class="form-group">
            <label for="kelas">Kelas </label>
            <input type="text" class="form-control" id="kelas" name="kelas">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>