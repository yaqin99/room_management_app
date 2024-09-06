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