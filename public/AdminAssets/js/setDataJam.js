
$(document).ready(function() {
    let nama =   '';
    let lokasi =   '';
    let petunjuk =  '';
    let kategori =  '';
    let ruangan =  '';
    let kondisi = '';
    let keterangan =  '';
    let status =  '';
    let theData = {};

$('#buttonTambahJam').click(function() {
     

     $.ajax({
          type: 'GET', //THIS NEEDS TO BE GET
          url: '/getJam',
          dataType: 'json',
          success: function (data) {
              theData = data.data;
             
          },error:function(){ 
               console.log(data);
          }
      });
});
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('#jamKonfirmasi').click(function() {
     nama =   $('#nm_jam').val();
     dosen =   $('#tb_dosen').val();
     ruangan =  $('#tb_ruangan').val();
     hari =  $('#tb_hari').val();
     awal =  $('#tb_awal').val();
     akhir =  $('#tb_akhir').val();
     let fix_awal  = awal +':00'
     let fix_akhir  = akhir +':00'
     
    for (let index = 0; index < theData.length; index++) {
        const element = theData[index];
        if (ruangan == element.ruangan_id  && hari === element.hari  && fix_awal === element.awal) {
            return Swal.fire({
                icon: "error",
                title: "Ruangan Sedang Dipakai",
                text: "Silahkan Koreksi Kembali Data Anda",
            });
        }
        if(ruangan == element.ruangan_id  && hari === element.hari  && fix_awal === element.awal && fix_akhir === element.akhir) {
            return Swal.fire({
                        icon: "error",
                        title: "Ruangan Sedang Dipakai",
                        text: "Silahkan Koreksi Kembali Data Anda",
                    });
         } else {
           return Swal.fire({
                title: "Konfirmasi Penambahan Data!",
                text: "Apakah Anda Yakin Data Anda Sudah Benar ?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "OK!"
              }).then((result) => {
                if (result.isConfirmed) {
                    // $('#formTambahJam').submit();
                    $.ajax({

                        url: `/admin/tambahJam`,
                        type: "POST",
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content'), '_method': 'patch'},
                        cache: false,
                        data: {
                            "_token": $('#token').val(),
                            "nama": nama,
                            "dosen": dosen,
                            "ruangan": ruangan , 
                            "hari": hari , 
                            "awal": awal , 
                            "akhir": akhir , 
                        },
                        success:function(response){
                                Swal.fire({
                                title: "Berhasil!",
                                text: "Data Telah Berhasil Ditambahkan",
                                icon: "success"
                              });
                                $('#nm_jam').val('');
                                $('#tb_dosen').val('');
                                $('#tb_ruangan').val('');
                                $('#tb_hari').val('');
                                $('#tb_awal').val('');
                                $('#tb_akhir').val('');
                                $('#modalTambahJam').modal('hide');
                        },
                        error:function(error){
 
                        }
            
                    });
                  
                }
              });
         }
    }


     
});


});

function setDataJam (data){
$('#formEditJam').attr('action',`/admin/editJam/${data.id}`);
$('#nama_jam').val(data.jam);
$('#awal').val(data.awal);
$('#akhir').val(data.akhir);
$('#pilihRuangan').val(data.ruangan.id);
$('#pilihRuangan').html(data.ruangan.nama_ruangan);
$('#pilihHari').val(data.hari);
$('#pilihHari').html(data.hari);
$('#pilihDosenEdit').val(data.dosen.nama_dosen);
$('#pilihDosenEdit').html(data.dosen.nama_dosen);


}

function setDataDosen(data){
$('#formEditDosen').attr('action',`/admin/editDosen/${data.id}`);
$('#nama_dosen').val(data.nama_dosen);



}