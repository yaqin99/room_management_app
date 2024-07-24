<div class="modal fade" id="modalTambahJam" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-center">
            <h5 class="modal-title ">Tambah Jam Kuliah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4 py-5 p-md-5">        
            <form class="signup-form" method="POST" action="/admin/tambahJam" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-2">
                    <label for="judul" class="text-dark">Nama Jam</label>
                    <div class="input-group">
                      <input type="text" class="form-control" required name="nama_jam" aria-describedby="button-addon2">
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label for="ukuran" class="text-dark" >Awal</label>
                    <div class="input-group">
                        <input type="time" class="form-control" required name="awal" aria-describedby="button-addon2">
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label for="kategori" class="text-dark" >Akhir</label>
                    <div class="input-group">
                        <input type="time" class="form-control" required name="akhir" aria-describedby="button-addon2">
                    </div>
                </div>
                
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" onclick="return confirm('Apakah Anda Yakin Menambah Data Ini ?')">Konfirmasi</button>
            </div>
        </form>
      </div>
    </div>
  </div>