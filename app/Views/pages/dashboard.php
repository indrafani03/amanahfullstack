<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard (FULL STACK TEST)</h1>
   </div>
   <!-- Content Row -->
   <div class="row">
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-4 col-md-6 mb-4">
         <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total Stok
                     </div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($barang) ?></div>
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-4 col-md-6 mb-4">
         <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Format Code
                     </div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($code) ?></div>
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-4 col-md-6 mb-4">
         <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Kode Cabang
                     </div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($cabang) ?></div>
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Content Row -->
   <div class="row">
      <!-- Area Chart -->
      <div class="col-xl-12 col-lg-7">
         <button type="button" class="btn btn-outline-primary mb-2" data-toggle="modal" data-target="#staticBackdrop">Form Asset</button>
         <table class="table table-hover" id="contoh"> 
            <thead>
               <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Barang</th>
                  <th scope="col">Code</th>
                  <th scope="col">QR Code</th>
                  <th scope="col">Action</th>
               </tr>
            </thead>
            <tbody>
               <?php foreach ($barang as $data) {?>
                  <tr>
                  <th scope="row">1</th>
                  <td><?= $data['nama'] ?></td>
                  <td><?= $data['code'] ?></td>
                  <td><img src="<?= base_url('/qrcode/') ?>/<?= $data['qr'] ?>" ></td>
                  <td>
                     <button type="button" class="btn btn-outline-danger" id="btn_hapus"  data-id="<?= $data['id'] ?>">Hapus</button>
                     <button type="button" class="btn btn-outline-primary" id="edit" data-toggle="modal" data-target="#staticBackdrop" data-id="<?= $data['id'] ?>" data-kode_cabang="<?= $data['kode_cabang'] ?>" data-first_code="<?= $data['first_code'] ?>" data-nama="<?= $data['nama'] ?>" data-jumlah="<?= $data['jumlah'] ?>" data-tanggal_masuk="<?= $data['tanggal_masuk'] ?>" data-keterangan="<?= $data['keterangan'] ?>">Edit</button>
                  </td> 
               </tr>
               <?php } ?>
               
            </tbody>
         </table>
      </div>
      <!-- Pie Chart -->
      
   </div>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Form Barang</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
         <input type="hidden" value="" id="id"  name="id" value="">
            <div class="form-group">
               <label for="nama">Nama Barang</label>
               <input type="text" class="form-control" id="nama"  name="nama">
            </div>
            <div class="form-group">
               <label for="kode">Kode</label>
               <select class="form-control" id="kode" name="kode">
                  <?php foreach ($code as $data) {  ?>
                  <option value="<?= $data['code'] ?>"><?= $data['code']."-".$data['nama'] ?></option>
                  <?php } ?>
               </select>
            </div>
            <div class="form-group">
               <label for="kode_cabang">Kode Cabang</label>
               <select class="form-control" id="kode_cabang" name="kode_cabang">
                  <?php foreach ($cabang as $data) {  ?>
                  <option value="<?= $data['code'] ?>"><?= $data['code']."-".$data['nama'] ?></option>
                  <?php } ?>
               </select>
            </div>
            <div class="form-group">
               <label for="jumlah">Jumlah</label>
               <input type="number" class="form-control" id="jumlah"  name="jumlah">
            </div>
            <div class="form-group">
               <label for="tanggal">Tanggal Masuk</label>
               <input type="date" class="form-control" id="tanggal"  name="tanggal">
            </div>
            <div class="form-group">
               <label for="keterangan">Keterangan</label>
               <textarea class="form-control"  id="keterangan" name="keterangan" rows="3"></textarea>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btn_simpan_barang">Simpan</button>
         </div>
      </div>
   </div>
</div>
<!-- /.container-fluid -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
   $(document).ready( function () {
    $('#contoh').DataTable();
} );
   $(document).on('click', '#btn_simpan_barang', function () {
       var nama = $('#nama').val();
       var jumlah = $('#jumlah').val();
       var tanggal = $('#tanggal').val();
       var keterangan = $('#keterangan').val();
       var kode = $('#kode').val();
       var cabang = $('#kode_cabang').val();
       var id = $('#id').val();
     
       var varurl = window.location.protocol + "//" +location.hostname + ":8080/save-data-barang";
       $.ajax({
           type: 'POST',
           url: varurl,
           data: {
               "nama": nama,
               "jumlah": jumlah,
               "tanggal": tanggal,
               "keterangan": keterangan,
               "kode": kode,
               "cabang": cabang,
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

   $(document).on('click', '#edit', function () {
  var  nama = $(this).data('nama');
  var  jumlah = $(this).data('jumlah');
  var  id = $(this).data('id');
  var  tanggal_masuk = $(this).data('tanggal_masuk');
  var  keterangan =  $(this).data('keterangan');
  var  kode_cabang = $(this).data('kode_cabang');
  var  first_code =  $(this).data('first_code');

   $('#nama').val(nama);
   $('#jumlah').val(jumlah);
   $('#tanggal').val(tanggal_masuk);
   $('#keterangan').val(keterangan);
   $('#kode').val(first_code);
   $('#kode_cabang').val(kode_cabang);
   $('#id').val(id);

    
});

$(document).on('click', '#btn_hapus', function () {
       var id = $(this).data('id');
       var varurl = window.location.protocol + "//" + location.hostname + ":8080/hapus-barang";
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