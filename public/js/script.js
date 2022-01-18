$(function() {
  
  $('.tombolModalTambah').on('click', function() {
    $('.modal-title').html('Tambah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Tambah Data');
    $('#nama').val('');
    $('#nim').val('');
    $('#email').val('');
    $('#jurusan').val('');
    
  });
  
  $('.tombolModalUbah').on('click', function() {
    $('.modal-title').html('Ubah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost:8000/public/mahasiswa/ubah');
    
    const id = $(this).data('id');
    
    
    $.ajax({
      url: 'http://localhost:8000/public/mahasiswa/getubah',
      data: {id : id},
      method: 'post',
      dataType: 'json',
      success: function(data) {
        $('#nama').val(data.nama);
        $('#nim').val(data.nim);
        $('#email').val(data.email);
        $('#jurusan').val(data.jurusan);
        $('#id').val(data.id);
        
      }
    
    });
    
  });
  
});