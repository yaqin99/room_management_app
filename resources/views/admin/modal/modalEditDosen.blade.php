<div class="modal fade" id="modalEditDosen" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-center">
            <h5 class="modal-title ">Edit Data Dosen</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4 py-5 p-md-5">        
            <form class="signup-form" method="POST" id="formEditDosen" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group mb-2">
                    <label for="judul" class="text-dark">Nama Dosen</label>
                    <div class="input-group">
                      <input type="text" class="form-control" required name="nama_dosen" id="nama_dosen"  aria-describedby="button-addon2">
                    </div>
                </div>
                           
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" onclick="return confirm('Apakah Anda Yakin Mengeupdate Data Ini ?')">Konfirmasi</button>
            </div>
        </form>
      </div>
    </div>
  </div>