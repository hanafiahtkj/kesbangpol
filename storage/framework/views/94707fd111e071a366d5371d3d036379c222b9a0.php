<?php $__env->startPush('add_css'); ?>
<link rel="stylesheet" href="<?php echo e(url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')); ?>">

  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo e(url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('konten'); ?>
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Kegiatan</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" action=<?php echo e(route('admin.savekegiatan')); ?> enctype="multipart/form-data">
          <?php echo e(csrf_field()); ?>

          <div class="box-body"><!-- Date -->
            <div class="form-group">
              <label>Tanggal Kegiatan</label>

              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" id="datepicker" name="tanggal">
              </div>
              <!-- /.input group -->
            </div>
            <!-- /.form group -->
            <div class="form-group">
              <label>Jam Kegiatan</label>
              <input type="text" class="form-control" name="jam" required>
            </div>
            <div class="form-group">
              <label>Nama Kegiatan</label>
              <input type="text" class="form-control" name="kegiatan" required>
            </div>
            <div class="form-group">
              <label>Tempat Kegiatan</label>
              <input type="text" class="form-control" name="tempat" required>
            </div>
            <div class="form-group">
              <label>Keterangan</label>
              <input type="text" class="form-control" name="keterangan" required>
            </div>
            
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo e(route('admin.kegiatan')); ?>" class="btn btn-danger">Kembali</a>
          </div>
        </form>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('add_js'); ?>
<!-- CK Editor -->
<script src="<?php echo e(url('assets/bower_components/ckeditor/ckeditor.js')); ?>"></script>

<!-- bootstrap datepicker -->
<script src="<?php echo e(url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>"></script>
<script>
    //Date picker
    $('#datepicker').datepicker({
      format: 'dd/mm/yyyy',
      autoclose: true
    })
    $('#datepicker1').datepicker({
      format: 'dd/mm/yyyy',
      autoclose: true
    })
</script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
  })
</script>

<?php $__env->stopPush(); ?>    
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>