<div class="blog_section layout_padding">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <h1 class="about_taital text-center">Daftar Ruangan</h1>
          </div>
       </div>
       <div class="blog_section_2">
          <div class="row">
            @foreach ($news as $data)
               
            <div class="col-md-3 mb-5">
               <div class="blog_box">
                  <div class="blog_img"><img src="/img/ruangan.jpg"></div>
                  <h4 class="date_text  text-{{$data->kondisi === 'Baik' ? 'success' : 'danger'}}"><i class="bi bi-{{$data->kondisi === 'Baik' ? 'check' : 'x'}}-circle-fill"></i></h4>
                  <h4 class="prep_text text-center">{{$data->nama_ruangan. ' '.$data->kategori->nama_kategori}}</h4>
                  <p class="text-center">{{$data->hint}}</p>
               </div>
            </div>
            
            @endforeach
          </div>
          <div class="d-flex justify-content-center">
            {{ $news->links() }}
         </div>
       </div>
    </div>
 </div>