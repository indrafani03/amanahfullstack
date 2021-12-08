<?= $this->extend('index') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h1 class="h3 mb-0 text-gray-800">Format Barang</h1>
</div>
<!-- Content Row -->
<div class="row">
   <!-- Earnings (Monthly) Card Example -->
   <div class="col-xl-6 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
         <div class="card-body">
            <div style="text-align: end;">
               <span class="mb-2"><button type="button" class="btn btn-outline-primary btn-sm" id="tambah_data_awal" data-toggle="modal" data-target="#DigitAwal">Tambah Data</button>
               </span>
            </div>
            <div class="row no-gutters align-items-center">
               <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                  Digit Awal
               </div>
               <table class="table table-hover">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Code</th>
                        <th scope="col">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $i=1; foreach ($code as $read ) { ?>
                     <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $read['nama']?></td>
                        <td><?= $read['code']?></td>
                        <td>
                         <button type="button" class="btn btn-outline-danger btn-sm" id="btn_hapus_awal" data-id="<?= $read['id'] ?>">Hapus</button>
                         <button type="button" class="btn btn-outline-info btn-sm" id="edit_btn_awal" data-id="<?= $read['id'] ?>" data-nama="<?= $read['nama'] ?>" data-code="<?= $read['code'] ?>" data-toggle="modal" data-target="#DigitAwal">Edit</button>
                        </td>
                     </tr>
                     <?php } ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <!-- Earnings (Monthly) Card Example -->
   <div class="col-xl-6 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
         <div class="card-body">
            <div style="text-align: end;">
               <span class="mb-2"><button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#KodeCabang">Tambah Data</button>
               </span>
            </div>
            <div class="row no-gutters align-items-center">
               <div class="text-xl font-weight-bold text-success text-uppercase mb-1">
                  kode Branch
               </div>
               <table class="table table-hover">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Code</th>
                        <th scope="col">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; foreach ($cabang as $read ) { ?>
                     <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $read['nama']?></td>
                        <td><?= $read['code']?></td>
                        <td>
                         <button type="button" class="btn btn-outline-danger btn-sm" id="btn_hapus_cabang" data-id="<?= $read['id'] ?>">Hapus</button>
                         <button type="button" class="btn btn-outline-info btn-sm" id="edit_btn_cabang" data-id="<?= $read['id'] ?>" data-nama="<?= $read['nama'] ?>" data-code="<?= $read['code'] ?>" data-toggle="modal" data-target="#KodeCabang">Edit</button>
                        </td>
                     </tr>
                  <?php } ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Modal Digit Awal -->
<div class="modal fade" id="DigitAwal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Digit Awal</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
               <input type="hidden" name="id_awal" id="id_awal" value="">
               <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="email" class="form-control" id="nama_a" name="nama_a">
               </div>
               <div class="form-group">
                  <label for="kode">Kode</label>
                  <input type="email" class="form-control" id="code_a" name="code_a">
               </div>
           
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btn_simpan_awal">Simpan</button>
         </div>
      </div>
   </div>
</div>
<!-- Kode Cabang -->
<div class="modal fade" id="KodeCabang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Kode Cabang</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
               <input type="hidden" name="id_cabang" id="id_cabang" value="">
               <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="email" class="form-control" id="nama_c" name="nama_c">
               </div>
               <div class="form-group">
                  <label for="kode">Kode</label>
                  <input type="email" class="form-control" id="code_c" name="code_c">
               </div>
           
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btn_simpan_cabang">Simpan</button>
         </div>
      </div>
   </div>
</div>


<!-- /.container-fluid -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
   $(document).on('click', '#btn_simpan_awal', function () {
    var nama = $('#nama_a').val();
    var code = $('#code_a').val();
    var id = $('#id_awal').val();
     
    var varurl = window.location.protocol + "//" +location.hostname + ":8080/save-digit-awal";
    $.ajax({
        type: 'POST',
        url: varurl,
        data: {
            "nama": nama,
            "code": code,
            "id": id
        },
        dataType: 'json',
        success: function (response) {

            if (response.code == "204") {
                Swal.fire({

                    icon: 'error',
                    title: response.message,
                    showConfirmButton: true,

                })

            } else {
                Swal.fire({

                    icon: 'success',
                    title: response.message,
                    showConfirmButton: true,

                }).then((result) => {


                    window.location.reload()
                })
            }

        },
        complete: function () {
            // This will run after sending an Ajax complete
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError);
            // If any error occurs in request
        }
    });
});

$(document).on('click', '#edit_btn_awal', function () {
    var nama = $(this).data('nama');
    var code = $(this).data('code');
    var id = $(this).data('id');
 
    $('#nama_a').val(nama);
    $('#code_a').val(code);
    $('#id_awal').val(id);

    
});

$(document).on('click', '#tambah_data_awal', function () {
    $('#nama_a').val('');
    $('#code_a').val('');
    $('#id_awal').val('');
});

$(document).on('click', '#btn_hapus_awal', function () {
       var id = $(this).data('id');
       var varurl = window.location.protocol + "//" + location.hostname + ":8080/hapus-digit-awal";
       Swal.fire({
           title: 'Apa kamu yakin?',
           text: "Anda tidak akan dapat mengembalikan ini!",
           icon: 'warning',
           showCancelButton: true,
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Ya, hapus!'
       }).then((result) => {
   
           if (result.isConfirmed) {
               $.ajax({
                   type: 'POST',
                   url: varurl,
                   data: {
                       "id": id,
                   },
                   dataType: 'json',
                   success: function (response) {
   
                       if (response.code == "204") {
                           Swal.fire({
   
                               icon: 'error',
                               title: response.message,
                               showConfirmButton: true,
   
                           })
   
                       } else {
                           Swal.fire({
   
                               icon: 'success',
                               title: response.message,
                               showConfirmButton: true,
   
                           }).then((result) => {
   
   
                               window.location.reload()
                           })
                       }
   
                   },
                   complete: function () {
                       // This will run after sending an Ajax complete
                   },
                   error: function (xhr, ajaxOptions, thrownError) {
                       alert(thrownError);
                       // If any error occurs in request
                   }
               });
   
           }
       })
})


$(document).on('click', '#btn_simpan_cabang', function () {
    var nama = $('#nama_c').val();
    var code = $('#code_c').val();
    var id = $('#id_cabang').val();
     
    var varurl = window.location.protocol + "//" +location.hostname + ":8080/save-kode-cabang";
    $.ajax({
        type: 'POST',
        url: varurl,
        data: {
            "nama": nama,
            "code": code,
            "id": id
        },
        dataType: 'json',
        success: function (response) {

            if (response.code == "204") {
                Swal.fire({

                    icon: 'error',
                    title: response.message,
                    showConfirmButton: true,

                })

            } else {
                Swal.fire({

                    icon: 'success',
                    title: response.message,
                    showConfirmButton: true,

                }).then((result) => {


                    window.location.reload()
                })
            }

        },
        complete: function () {
            // This will run after sending an Ajax complete
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError);
            // If any error occurs in request
        }
    });
});

$(document).on('click', '#edit_btn_cabang', function () {
    var nama = $(this).data('nama');
    var code = $(this).data('code');
    var id = $(this).data('id');
 
    $('#nama_c').val(nama);
    $('#code_c').val(code);
    $('#id_cabang').val(id);

    
});

$(document).on('click', '#btn_hapus_cabang', function () {
       var id = $(this).data('id');
       var varurl = window.location.protocol + "//" + location.hostname + ":8080/hapus-code-cabang";
       Swal.fire({
           title: 'Apa kamu yakin?',
           text: "Anda tidak akan dapat mengembalikan ini!",
           icon: 'warning',
           showCancelButton: true,
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Ya, hapus!'
       }).then((result) => {
   
           if (result.isConfirmed) {
               $.ajax({
                   type: 'POST',
                   url: varurl,
                   data: {
                       "id": id,
                   },
                   dataType: 'json',
                   success: function (response) {
   
                       if (response.code == "204") {
                           Swal.fire({
   
                               icon: 'error',
                               title: response.message,
                               showConfirmButton: true,
   
                           })
   
                       } else {
                           Swal.fire({
   
                               icon: 'success',
                               title: response.message,
                               showConfirmButton: true,
   
                           }).then((result) => {
   
   
                               window.location.reload()
                           })
                       }
   
                   },
                   complete: function () {
                       // This will run after sending an Ajax complete
                   },
                   error: function (xhr, ajaxOptions, thrownError) {
                       alert(thrownError);
                       // If any error occurs in request
                   }
               });
   
           }
       })
})
</script>

<?= $this->endSection() ?>