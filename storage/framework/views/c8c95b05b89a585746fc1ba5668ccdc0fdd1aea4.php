

<?php $__env->startSection('content'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Settings</h3>
                  <h6 class="font-weight-normal mb-0"></h6>
                </div>
                <div align="right" class="col-12 col-xl-4 justify-content-end">
                    
                </div>
              </div>
            </div>
          </div>

          

          <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Site Settings</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                        <th>Website Name</th>
                        <th>Logo</th>
                        <th>Favicon</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Actions</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <?php if(count($site) > 0): ?>
                          <?php $__currentLoopData = $site; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                        <tr>
                        <td><?php echo e($vel->name); ?> </td>
                        <td><img src="<?php echo e(url('/')); ?>/<?php echo e($vel->image); ?>" style="height:50px;width:50px;"></td>
                        <td><img src="<?php echo e(url('/')); ?>/<?php echo e($vel->fav); ?>" style="height:50px;width:50px;"></td>
                        <td><?php echo e($vel->email); ?></td>
                        <td><?php echo e($vel->phone); ?></td>
                        <td><?php echo e($vel->address); ?></td>
                        <td class="font-weight-medium">
                            <a href="#edit<?php echo e($vel->id); ?>" data-toggle="modal" class="btn btn-primary rounded"> Update </a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <tr><td colspan="8"> No Site Settings record </td></tr>
                      <?php endif; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        <?php if(count($site)>0): ?>
            <?php $__currentLoopData = $site; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="modal" tabindex="-1" role="dialog" id="edit<?php echo e($vol->id); ?>">
                    <div class="modal-dialog modal-md" role="document">
                      <div class="modal-content" style="background-image:url('<?php echo e(url('/')); ?>/images/carousel/banner_4.jpg');background-repeat:no-repeat;background-size:cover;">
                        <div class="modal-header">
                          <h4 class="modal-title text-white">Update Setings</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="<?php echo e(route('site.update')); ?>" enctype="multipart/form-data">
                              <?php echo csrf_field(); ?>
                              <div class="form-group">
                                  Company Name:<br>
                                <input type="text" class="form-control form-control-lg" name="name" value="<?php echo e($vol->name); ?>" id="exampleInputEmail1" placeholder="Website Name">
                              </div>
                              <div class="form-group">
                                  Email Address:<br>
                                <input type="email" class="form-control form-control-lg" name="email" value="<?php echo e($vol->email); ?>" id="exampleInputEmail1" placeholder="Email Address">
                              </div>
                              <div class="form-group">
                                  Phone Number:<br>
                                <input type="tel" class="form-control form-control-lg" value="<?php echo e($vol->phone); ?>" name="phone" id="exampleInputEmail1" placeholder="Phone Number">
                              </div>
                              <div class="form-group">
                                  Address:<br>
                                <input type="text" class="form-control form-control-lg" name="address" value="<?php echo e($vol->address); ?>" id="exampleInputEmail1" placeholder="Address">
                              </div>
                             
                              <div class="form-group">
                                  Site Favicon:<br>
                                <input type="file" class="form-control form-control-lg" name="fav" id="exampleInputEmail1" placeholder="Username">
                              </div>
                              <div class="form-group">
                                  Site Logo:<br>
                                <input type="file" class="form-control form-control-lg" name="image" id="exampleInputEmail1" placeholder="Username">
                              </div>
                              <input type="hidden" name="sid" value="<?php echo e($vol->id); ?>">
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Update</button>
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
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\myprojects\hospital\resources\views//admin/settings.blade.php ENDPATH**/ ?>