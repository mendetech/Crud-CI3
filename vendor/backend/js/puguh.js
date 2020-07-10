// Data table Client Side
$(function () {
    $('#table').DataTable()
    $('#table2').DataTable({
    'paging'      : true,
    'lengthChange': false,
    'searching'   : false,
    'ordering'    : false,
    'info'        : true,
    'autoWidth'   : false
    })
})

// Datepicker
$(function (){
    $('#tanggal').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
      })
      $('#tanggal2').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
      })
});

// Alert
/**
 * Sweet Alert
 */

$(function (){
    const flashdata = $('#flash-data').data('flashdata');
    if(flashdata){
        Swal.fire({
            title: 'Berhasil',
            text: 'Data Berhasil ' + flashdata,
            type: 'success'
        });
    }
});


$(function (){
    const flashdata = $('#flash-data-absen').data('flashdata');
    if(flashdata){
        Swal.fire({
            title: 'Terima Kasih',
            html: 'Berhasil Melakukan Absensi <strong></strong> seconds.',
            type: 'success',
            timer: 1000,
            onBeforeOpen: () => {
              Swal.showLoading()
              timerInterval = setInterval(() => {
                Swal.getContent().querySelector('strong')
                  .textContent = Swal.getTimerLeft()
              }, 100)
            },
            onClose: () => {
              clearInterval(timerInterval)
            }
          }).then((result) => {
            if (
              result.dismiss === Swal.DismissReason.timer
            ) {
              console.log('I was closed by the timer')
            }
          })
    }
});



// Confirm Delete
$('.btn-del').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Hapus ?',
        text: 'Apakah anda yakin akan menghapus data ini ?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!'
        }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
});


$(document).ready(function (){
  
});