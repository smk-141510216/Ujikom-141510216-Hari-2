<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Ubah Tunjangan</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('tunjangan.update',$tunjangan->id)); ?>">
                        <input name="_method" type="hidden" value="PATCH">
                        <?php echo e(csrf_field()); ?>

                            
                            <div class="form-group">
                            <label for="nip" class="col-md-4 control-label">Kode Tunjangan</label>
                            <div class="col-md-6">
                            <div class="form-group <?php echo e($errors->has('kode_tunjangan') ? 'has-errors':'message'); ?>" >
                                <input id="nip" type="text" class="form-control" name="nip" value="<?php echo e($tunjangan->kode_tunjangan); ?>"  autofocus>

                            </div>
                            </div>
          
                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nama Golongan</label>
                            <div class="col-md-6">
                            <select class="form-control" name="id_golongan" >
                            <option >Pilih</option>
                            <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo $data->id; ?>"><?php echo $data->nama_golongan; ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nama Jabatan </label>
                            <div class="col-md-6">
                            <select class="form-control" name="id_jabatan" >
                            <option >Pilih</option>
                            <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo $data->id; ?>"><?php echo $data->nama_jabatan; ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="status" class="col-md-4 control-label">Status</label>
                            <div class="col-md-6">
                            <select class="form-control" name="status" required>
                            <option>Pilih</option>
                            <option>Kawin</option>
                            <option>Lajang</option>
                                </select>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="nip" class="col-md-4 control-label">Jumlah Anak</label>
                            <div class="col-md-6">
                            <div class="form-group <?php echo e($errors->has('jimlah_anak') ? 'has-errors':'message'); ?>" >
                                <input id="nip" type="text" class="form-control" name="nip" value="<?php echo e($tunjangan->jumlah_anak); ?>"  autofocus>
                             <?php if($errors->has('jumlah_anak')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('jumlah_anak')); ?></strong>
                                </span>
                            <?php endif; ?>
                            </div>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="nip" class="col-md-4 control-label">Besaran Uang</label>
                            <div class="col-md-6">
                            <div class="form-group <?php echo e($errors->has('besaran_uang') ? 'has-errors':'message'); ?>" >
                                <input id="nip" type="text" class="form-control" name="nip" value="<?php echo e($tunjangan->besaran_uang); ?>"  autofocus>
                             <?php if($errors->has('besaran_uang')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('besaran_uang')); ?></strong>
                                </span>
                            <?php endif; ?>
                            </div>
                            </div>
                            </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>