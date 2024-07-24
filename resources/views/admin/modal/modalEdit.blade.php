<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-center">
            <h5 class="modal-title ">Edit Data Ruangan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4 py-5 p-md-5">        
            <form class="signup-form" method="POST" id="formEditRuangan" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group mb-2">
                    <label for="judul" class="text-dark">Nama Ruangan</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="nama_ruangan" id="nama_ruangan"  aria-describedby="button-addon2">
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label for="ukuran" class="text-dark" >Lokasi</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="lokasi" id="lokasi"  aria-describedby="button-addon2">
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label for="kategori" class="text-dark" >Petunjuk</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="hint" id="hint"  aria-describedby="button-addon2">
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label  class="form-label">Tipe Ruangan</label>
                    <select class="form-select" required name="kategori" id="kategori"  aria-label="Default select example">                    
                      <option selected id="pilihan">Pilih -</option>
                      @foreach ($kategori as $k)        
                      <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                      @endforeach
                      
                    </select>
                  </div>
                <div class="form-group mb-2">
                    <label  class="form-label">Jenis Ruangan</label>
                    <select class="form-select" required name="gender" id="gender" aria-label="Default select example">                    
                      <option id="choosen" selected>Pilih -</option>
                      @foreach ($gender as $k)        
                      <option value="{{ $k->id }}">{{ $k->nama_gender }}</option>
                      @endforeach
                      
                    </select>
                  </div>
                <div class="form-group mb-2">
                    <label  class="form-label">Kondisi</label>
                    <select class="form-select" required name="kondisi" id="kondisi" aria-label="Default select example">                    
                      <option id="kondisinya" selected>Pilih -</option>
                            
                      <option value="1">Baik</option>
                      <option value="2">Kurang Baik</option>
                      
                      
                    </select>
                  </div>
                
                
                <div class="form-group mb-2">
                    <label for="sinopsis" class="text-dark">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" class="form-control" ></textarea>
                </div>

                <div class="form-group mb-2">
                    <label  class="form-label">Status</label>
                    <select class="form-select" required name="status" id="status" aria-label="Default select example">                    
                      <option id="statusnya" selected>Pilih -</option>
                            
                      <option value="1">Terpakai</option>
                      <option value="2">Tidak Terpakai</option>
                      
                      
                    </select>
                  </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" onclick="return confirm('Apakah Anda Yakin Mengeupdate Ruangan Ini ?')">Konfirmasi</button>
            </div>
        </form>
      </div>
    </div>
  </div>