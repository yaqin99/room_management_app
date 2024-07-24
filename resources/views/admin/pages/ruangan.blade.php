@extends('admin.dashboard')
@section('main')
@include('admin.modal.modalEdit')
@include('admin.modal.modalTambah')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Ruangan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Home</a></li>
          <li class="breadcrumb-item"><a href="/admin">Ruangan</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

       
          <div class="card">
            
            <div class="card-body">
                <div class="d-flex justify-content-between">

                  <div class="container col-12">
                    <div class="row">
                      <span class="card-title d-flex justify-content-between">
                        Daftar Ruangan
                        <div class="btn-group">

                          <div class="dropdown me-2">
                            <button class="btn btn-secondary dropdown-toggle btn btn-warning" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Kategori
                            </button>
                            <ul class="dropdown-menu">
                              @foreach ($kategori as $kat)
                                
                              <li><a class="dropdown-item" href="/admin/kategori/{{$kat->id}}">{{$kat->nama_kategori}}</a></li>
                              @endforeach
                              
                            </ul>
                          </div>
                          <div class="dropdown me-2">
                            <button class="btn btn-secondary dropdown-toggle btn btn-danger" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Jenis
                            </button>
                            <ul class="dropdown-menu">
                              @foreach ($gender as $ge)
                                
                              <li><a class="dropdown-item" href="/admin/gender/{{$ge->id}}">{{$ge->nama_gender}}</a></li>
                              @endforeach
                              
                            </ul>
                          </div>
                          <button class="btn btn-success " type="button" data-bs-toggle="modal" data-bs-target="#modalTambahRuangan"><i class="bi bi-plus-circle"></i> Ruangan</button>

                        </div>
                      </span>

                    </div>
                  </div>

                </div>
                  
              <!-- Table with hoverable rows -->
              <div class="table-responsive">
                <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Ruangan</th>
                    <th scope="col">Tipe Ruangan</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Petunjuk</th>
                    <th scope="col">Kondisi</th>
                    <th scope="col">Status</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                 
                  @foreach ($data as $syifa)
                    
                 
                  <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $syifa->nama_ruangan}}</td>
                    <td>{{ $syifa->kategori->nama_kategori}}</td>

                    <td>{{ $syifa->gender->nama_gender}}</td>
                    <td>{{$syifa->lokasi }}</td>
                   
                    <td>{{$syifa->hint}}</td>
                    <td>{{$syifa->kondisi}}</td>
                    <td>{{$syifa->status}}</td>
                    <td>{{$syifa->keterangan}}</td>
                    
                    <td>
                      <div class="btn-group">
                        
                        <a href="" onclick="setModal({{$syifa}})" data-bs-toggle="modal" data-bs-target="#modalEdit" class="btn btn-warning"><i class="bi bi-pencil-square"></i>
                        </a>
                        <form method="POST" action="/deleteRuangan/{{$syifa->id}}">
                          @csrf
                          <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah Anda Yaqin Menghapus Data Ruangan Ini ?')"><i class="bi bi-trash-fill"></i>
                          </button>
                        </form>
                      </div>
                  </td>
                  </tr>
                  

                  @endforeach
                 
                
                </tbody>
              </table>
              </div>
              <div class="d-flex justify-content-start">

                {{ $data->links() }}
                
                 
              </div>
            </div>
         

          </div>

       
        </div>
      </div>
    </section>
  
      
  	

       
       
       

      
    
  </main>
    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
  <script src="/adminAssets/js/setModal.js"></script>
  <script>
    //  document.querySelector('#formPengajuan').addEventListener('submit', function(e) {
    //   var form = this;
      
    //   e.preventDefault();
      
    //   swal({
    //       title: "Apakah Anda Yakin?",
    //       text: "Surat Sudah Selesai!",
    //       icon: "info",
    //       buttons: [
    //         'Batal',
    //         'Konfirmasi'
    //       ],
    //       dangerMode: true,
    //     }).then(function(isConfirm) {
    //       if (isConfirm) {
    //         swal({
    //           title: 'Surat Sedang Kami Kerjakan',
    //           text: 'Surat Dalam Proses',
    //           icon: 'success'
    //         }).then(function() {
    //           form.submit();
    //         });
    //       } else {
    //         swal("Batal", "Konfirmasi di Batalkan", "error");
    //       }
    //     });
    // });


    // document.querySelector('#form1').addEventListener('submit', function(e) {
    //   var form = this;
      
    //   e.preventDefault();
      
    //   swal({
    //       title: "Apakah Anda Yakin?",
    //       text: "Keluar Dari Halaman Admin!",
    //       icon: "info",
    //       buttons: [
    //         'Batal',
    //         'Keluar'
    //       ],
    //       dangerMode: true,
    //     }).then(function(isConfirm) {
    //       if (isConfirm) {
    //         swal({
    //           title: 'Log out!',
    //           text: 'Logout Berhasil, Semoga Hari Anda Menyenangkan',
    //           icon: 'success'
    //         }).then(function() {
    //           form.submit();
    //         });
    //       } else {
    //         swal("Batal", "Logout di Batalkan", "error");
    //       }
    //     });
    // });

  </script>
@endsection