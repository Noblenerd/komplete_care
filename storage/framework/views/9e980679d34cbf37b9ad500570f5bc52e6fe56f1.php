

<?php $__env->startSection('content'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">All Testimonies</h3>
                  <h6 class="font-weight-normal mb-0"></h6>
                </div>
                <div align="right" class="col-12 col-xl-4 justify-content-end">
                    <a href="#add" class="btn btn-primary px-2 rounded" data-toggle="modal"> Add Testimony </a>
                </div>
              </div>
            </div>
          </div>

                <div class="modal" tabindex="-1" role="dialog" id="add">
                    <div class="modal-dialog modal-md" role="document">
                      <div class="modal-content" style="background-image:url('<?php echo e(url('/')); ?>/images/carousel/banner_4.jpg');background-repeat:no-repeat;background-size:cover;">
                        <div class="modal-header">
                          <h4 class="modal-title text-dark">Add new Testimony</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="<?php echo e(route('testimony.add')); ?>" enctype="multipart/form-data">
                              <?php echo csrf_field(); ?>
                              <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="title" id="exampleInputEmail1" placeholder="Name">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="content" id="exampleInputEmail1" placeholder="Testimony">
                              </div>  
                              <div class="form-group">
                                <input type="file" class="form-control form-control-lg" name="image" id="exampleInputEmail1" placeholder="Image of item">
                              </div>
                              
                              
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Add Testimony</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

          <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">All Testimonies</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                        <th> Name</th>
                        <th>Testimony</th>
                          <th>Image</th>
                          <th>Actions</th>
                          
                        </tr>  
                      </thead>
                      <tbody>
                        <?php if(count($news) > 0): ?>
                          <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                        <tr>
                        <td><?php echo e($vel->name); ?> </td>
                        <td><?php echo e(substr($vel->testimony,0,50)); ?>... </td>
                        <td><img src="<?php echo e(url('/')); ?>/<?php echo e($vel->image); ?>" class="rounded-circle" style="height:50px;width:50px;"></td>
                          <td class="font-weight-medium">
                            <a href="<?php echo e(route('testimony.del', $vel->id)); ?>" class="btn btn-danger rounded"> Delete </a>
                            <a href="#edit<?php echo e($vel->id); ?>" data-toggle="modal" class="btn btn-primary rounded"> Edit </a>
                            </td>
                            
                        </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <tr><td colspan="5"> No Testimony record </td></tr>
                      <?php endif; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <?php if(count($news)>0): ?>
            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="modal" tabindex="-1" role="dialog" id="edit<?php echo e($vol->id); ?>">
                    <div class="modal-dialog modal-md" role="document">
                      <div class="modal-content" style="background-image:url('<?php echo e(url('/')); ?>/images/carousel/banner_4.jpg');background-repeat:no-repeat;background-size:cover;">
                        <div class="modal-header">
                          <h4 class="modal-title text-dark">Edit Testimony</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="<?php echo e(route('testimony.update')); ?>" enctype="multipart/form-data">
                              <?php echo csrf_field(); ?>
                              <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="title" id="exampleInputEmail1" placeholder="Name">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="content" id="exampleInputEmail1" placeholder="Testimony ">
                              </div>  
                              <div class="form-group">
                                <input type="file" class="form-control form-control-lg" name="image" id="exampleInputEmail1" placeholder="Image of item">
                              </div>
                              
                              <input type="hidden" name="sid" value="<?php echo e($vol->id); ?>">
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Update Testimony</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

        
                  
                
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\myprojects\logistics\resources\views//admin/testimony.blade.php ENDPATH**/ ?>