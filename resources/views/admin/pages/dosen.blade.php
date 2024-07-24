@extends('admin.dashboard')
@section('main')
@include('admin.modal.modalEditDosen')
@include('admin.modal.modalTambahDosen')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Daftar Dosen Universitas Annuqayah</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Home</a></li>
          <li class="breadcrumb-item"><a href="/admin/dosen">Dosen</a></li>
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
                        Jam Perkuliahan
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambahDosen"><i class="bi bi-plus-circle"></i> Dosen</button>
                      </span>

                    </div>
                  </div>
                  
                  
                </div>
                  
              <!-- Table with hoverable rows -->
              <div class="table-responsive">
                <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Dosen</th>
                    <th scope="col">Aksi</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $syifa)
                    
                 
                  <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td><a href="#"  class="dosen text-dark">{{ $syifa->nama_dosen }}</a>
                    </td>
                    <td>
                        <div class="btn-group">
                          
                          <a onclick="setDataDosen({{$syifa}})" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditDosen"><i class="bi bi-pencil-square"></i>
                          </a>
                          <form method="POST" action="/deleteDosen/{{ $syifa->id }}">
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini')"><i class="bi bi-trash-fill"></i>
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
  <script src="/AdminAssets/js/setDataJam.js"></script>
  
@endsection