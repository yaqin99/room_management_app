@extends('admin.dashboard')
@section('main')
@include('admin.modal.modalEditJam')
@include('admin.modal.modalTambahJam')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Daftar Jam Pelajaran</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Home</a></li>
          <li class="breadcrumb-item"><a href="/admin/jam">Jam</a></li>
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
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambahJam"><i class="bi bi-plus-circle"></i> Jam</button>
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
                    <th scope="col">Jam Perkuliahan</th>
                    <th scope="col">Durasi</th>
                    <th scope="col">Lama Pembelajaran</th>
                    <th scope="col">Aksi</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $syifa)
                    
                 
                  <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td><a href="#"  class="dosen text-dark">{{ $syifa->jam }}</a>
                    </td>
                    <td>{{ \Carbon\Carbon::parse($syifa->awal)->format('H:i'). ' - '.\Carbon\Carbon::parse($syifa->akhir)->format('H:i').' WIB'}}</td>
                    @php
                      
                    @endphp
                    <td>{{ \Carbon\Carbon::parse($syifa->akhir)->diff(\Carbon\Carbon::parse($syifa->awal) ) }}</td>
                    
                      
                    <td>
                        <div class="btn-group">
                          
                          <a onclick="setDataJam({{$syifa}})" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditJam"><i class="bi bi-pencil-square"></i>
                          </a>
                          <form method="POST" action="/deleteJam/{{ $syifa->id }}">
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