<script src="/mazer/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="/mazer/dist/assets/js/bootstrap.js"></script>
<script src="/mazer/dist/assets/js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://zuramai.github.io/mazer/demo/assets/compiled/js/app.js"></script>
<script src="https://zuramai.github.io/mazer/demo/assets/extensions/jquery/jquery.min.js"></script>
<script src="https://zuramai.github.io/mazer/demo/assets/extensions/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="https://zuramai.github.io/mazer/demo/assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://zuramai.github.io/mazer/demo/assets/static/js/pages/datatables.js"></script>
<script src="https://zuramai.github.io/mazer/demo/assets/compiled/js/app.js"></script>

<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js" type="text/javascript"></script>
<script src="https://combinatronics.com/Sha256/Pristine/master/dist/pristine.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="/mazer/dist/assets/js/jquery.dataTables.min.js"></script> 
<script src="/mazer/dist/assets/js/dataTables.bootstrap4.min.js"></script> 
<script src="/mazer/dist/assets/js/dataTables.responsive.min.js"></script> 
<script src="/mazer/dist/assets/js/responsive.bootstrap4.min.js"></script> 
<script src="/mazer/dist/assets/js/dataTables.buttons.min.js"></script> 
<script src="/mazer/dist/assets/js/buttons.bootstrap4.min.js"></script> 
<script src="/mazer/dist/assets/js/buttons.html5.min.js"></script> 
<script src="/mazer/dist/assets/js/buttons.flash.min.js"></script> 
<script src="/mazer/dist/assets/js/buttons.print.min.js"></script> 
<script src="/mazer/dist/assets/js/dataTables.select.min.js"></script> 
<script src="/mazer/dist/assets/js/pdfmake.min.js"></script> 
<script src="/mazer/dist/assets/js/vfs_fonts.js"></script> 


<script>
    <?php
    if (session()->getFlashdata('info')) {
    ?>
        Swal.fire({
            icon: '<?= session()->getFlashdata('info') ?>',
            title: '<?= session()->getFlashdata('message') ?>',
        })
    <?php
    }
    ?>


    let deleteData = (thisValue) => {
        Swal.fire({
            title: 'Yakin hapus data?',
            icon: 'warning',
            html: 'Data akan dihapus permanent',
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: true,
            confirmButtonText: '<i class="bi bi-check"></i> Lanjutkan',
            confirmButtonAriaLabel: 'Lanjutkan dihapus',
            cancelButtonText: '<i class="bi bi-x"></i> Batal',
            cancelButtonAriaLabel: 'Batalkan'
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                window.location = thisValue.getAttribute('data-href');
            }
        })
    }
</script>

<script>
    // Jquery Datatable
    $(document).ready(function() {
    var table = $('#dt').DataTable( { 
        ordering: false,      
        scrollX:        true,
        scrollCollapse: true,
        autoWidth:         true,  
        paging:         true,
        dom: "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start datatable-search'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end datatable-btns'B>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'i><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'p>>",
            buttons: [
                {
                    extend: 'collection',
                    text: 'Export',
                    buttons: [
                    {
                        extend: 'copy',
                        title: 'Engpar Database',
                        exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24]
                        }
                    },
                    {
                        extend: 'csv',
                        title: 'Engpar Database',
                        exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24]
                        }
                    },
                    {
                        extend: 'excel',
                        title: 'Engpar Database',
                        exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24]
                        }
                    },
                    {
                        extend: 'pdf',
                        title: 'Engpar Database',
                        exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24]
                        }
                    },
                    {
                        extend: 'print',
                        title: 'Engpar Database',
                        exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24]
                        },
                        customize: function(win) {
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).find('h1').css('font-size', '15pt');
                        $(win.document.body).find('h1').css('text-align', 'center');
                        $(win.document.body).find('table').addClass('compact').css('font-size', 'inherit');
                        }
                    }
                    ]
                },
                {
                    extend: 'collection',
                    text: 'Import',
                    buttons: [
                    {
                        text: 'New',
                        action: function(){
                            $('#border-less').modal('show');
                        }
                    },
                    {
                        text: 'Download Sample',
                        action: function(){
                            window.location.href = '<?= base_url('lowran-example.xlsx') ?>';
                        }
                    }]
                }
                ]
            });
        });
</script>