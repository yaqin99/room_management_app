function setDataJam (data){
$('#formEditJam').attr('action',`/admin/editJam/${data.id}`);
$('#nama_jam').val(data.jam);
$('#awal').val(data.awal);
$('#akhir').val(data.akhir);


}
function setDataDosen(data){
$('#formEditDosen').attr('action',`/admin/editDosen/${data.id}`);
$('#nama_dosen').val(data.nama_dosen);



}