<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Ubah Pegawai</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('pegawai.update',$pegawai->id)); ?>" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        <?php echo e(csrf_field()); ?>

                            
                            <div class="form-group">
                            <label for="nip" class="col-md-4 control-label">Nip</label>
                            <div class="col-md-6">
                                <input id="nip" type="text" class="form-control" name="nip" value="<?php echo e($pegawai->nip); ?>"  autofocus>
                            </div>
                            </div>

                           <div class="form-group " >
                            <label for="name" class="col-md-4 control-label">Nama Golongan </label>
                            <div class="col-md-6">
                            <div class="form-group <?php echo e($errors->has('id_golongan') ? 'has-errors':'message'); ?>" >
                            <select class="form-control" name="id_golongan" >
                            <option >Pilih</option>
                            <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo $data->id; ?>"><?php echo $data->nama_golongan; ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                             <?php if($errors->has('id_golongan')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('id_golongan')); ?></strong>
                                </span>
                            <?php endif; ?>
                            </div>
                            </div>
                  

                            <div class="form-group " >
                            <label for="name" class="col-md-4 control-label">Nama Jabatan </label>
                            <div class="col-md-6">
                            <div class="form-group <?php echo e($errors->has('id_jabatan') ? 'has-errors':'message'); ?>" >
                            <select class="form-control" name="id_jabatan" >
                            <option >Pilih</option>
                            <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo $data->id; ?>"><?php echo $data->nama_jabatan; ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                            <?php if($errors->has('id_jabatan')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('id_jabatan')); ?></strong>
                                </span>
                            <?php endif; ?>
                            </div>
                            </div>

                             <div class="form-group">
                            <label for="foto" class="col-md-4 control-label">foto</label>
                            <div class="col-md-6">
                                <input id="foto" type="file" class="form-control" name="foto" value="<?php echo e($pegawai->foto); ?>"  autofocus>
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