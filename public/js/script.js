$(function(){

    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#id').val('');
        $('#nama').val('');
        $('#kelas').val('');

    });

    $('.tampilModalUbah').on('click' , function() {

        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body from').attr('action', 'http://localhost/Learn-mvc/public/mahasiswa/ubah')

        const id = $(this).data('id');
       
        $.ajax({
            url: 'http://localhost/Learn-mvc/public/mahasiswa/getUbah',
            data: {id : id},
            method :'post',
            dataType: 'json',
            success : function(data){
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#kelas').val(data.kelas);
            }
        });

    });

});