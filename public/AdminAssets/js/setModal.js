function setModal (data){
$('#formEditRuangan').attr('action',`/editRuangan/${data.id}`);
$('#nama_ruangan').val(data.nama_ruangan);
$('#lokasi').val(data.lokasi);
$('#hint').val(data.hint);
$('#keterangan').val(data.keterangan);
$('#pilihan').html(data.kategori.nama_kategori);
$('#pilihan').val(data.kategori.id);
$('#choosen').html(data.gender.nama_gender);
$('#choosen').val(data.gender.id);
$('#choosen').val(data.gender.id);

let theCondition = 0 ;
let theState = 0 ; 
if (data.kondisi === 'Baik') {
     theCondition = 1 ;
} else {
     theCondition = 2 ;
}
$('#kondisinya').html(data.kondisi);
$('#kondisinya').val(theCondition);


if (data.status === 'Terpakai') {
    
     theState = 1 ;
} else {
     theState = 2 ;
}
$('#statusnya').html(data.status);
$('#statusnya').val(theState);






}