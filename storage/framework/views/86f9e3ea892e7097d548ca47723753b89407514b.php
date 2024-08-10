

<?php $__env->startSection('content'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">All Videos</h3>
                  <h6 class="font-weight-normal mb-0"></h6>
                </div>
                <div align="right" class="col-12 col-xl-4 justify-content-end">
                    
                </div>
              </div>
            </div>
          </div>

                <div class="modal" tabindex="-1" role="dialog" id="add">
                    <div class="modal-dialog modal-md" role="document">
                      <div class="modal-content" style="background-image:url('<?php echo e(url('/')); ?>/images/carousel/banner_4.jpg');background-repeat:no-repeat;background-size:cover;">
                        <div class="modal-header">
                          <h4 class="modal-title text-white">Add new Video</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="<?php echo e(route('video.add')); ?>" enctype="multipart/form-data">
                              <?php echo csrf_field(); ?>
                              <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="name" id="exampleInputEmail1" placeholder="Name of Video">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="link" id="exampleInputEmail1" placeholder="Video Link">
                              </div>  
                              
                              
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Add Video</button>
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
                  <p class="card-title mb-0">All Quotes</p>
                  <div class="table-responsive">
                      <table class="table table-striped table-borderless">
                          <thead>
                            <tr>
                              <th>S/N</th>
                              <th>Sender</th>
                              <th>Recipient</th>
                              <th>Pickup</th>
                              <th>Destination</th>
                              <th>Payment Status</th>
                              <th>Current Location</th>
                              <th>Actions</th>
                            </tr>  
                          </thead>
                          <tbody>
                            <?php if(count($quotes) > 0): ?>
                              <?php $__currentLoopData = $quotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                
                            <tr>
                              <td><?php echo e(++$k); ?></td>
                              <td><?php echo e($val->s_first_name); ?> <?php echo e($val->s_last_name); ?></td>
                              <td><?php echo e($val->r_first_name); ?> <?php echo e($val->r_last_name); ?></td>
                              <td><?php echo e($val->pickup); ?></td>
                              <td><?php echo e($val->destination); ?></td>
                              <td class="font-weight-medium">
                                <?php if($val->payment == 1): ?>
                                <div class="badge badge-primary">Paid</div>
                                <?php elseif($val->payment == 0): ?>
                                <div class="badge badge-danger">Pending</div>
                                <?php else: ?>
                                <div class="badge badge-success">Completed</div>
                                <?php endif; ?>
                                </td>
                                <td>
                                <?php echo e($val->current_location); ?>

                                </td>
                                <td class="font-weight-medium">
                                    <a href="<?php echo e(route('quote.view', $val->id)); ?>" class="btn btn-success rounded"> View </a>
                                    <a href="<?php echo e(route('quote.del', $val->id)); ?>" class="btn btn-danger rounded"> Delete </a>
                                    <a href="#edit<?php echo e($val->id); ?>" data-toggle="modal" class="btn btn-primary rounded"> Update </a>
                                    </td>
                            </tr>
                            
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <tr><td colspan="5"> No record found </td></tr>
                          <?php endif; ?>
                          </tbody>
                        </table>
                        
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <?php if(count($quotes)>0): ?>
            <?php $__currentLoopData = $quotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="modal" tabindex="-1" role="dialog" id="edit<?php echo e($vol->id); ?>">
                    <div class="modal-dialog modal-md" role="document">
                      <div class="modal-content" style="background-image:url('<?php echo e(url('/')); ?>/images/carousel/banner_4.jpg');background-repeat:no-repeat;background-size:cover;">
                        <div class="modal-header">
                          <h4 class="modal-title text-white">Edit Video Record</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="<?php echo e(route('quote.update')); ?>" enctype="multipart/form-data">
                              <?php echo csrf_field(); ?>
                              <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="current_location" id="exampleInputEmail1" value="<?php echo e($vol->current_location); ?>" placeholder="Current Location">
                              </div>
                              
                              
                              
                              <input type="hidden" name="sid" value="<?php echo e($vol->id); ?>">
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Update Location</button>
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
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\myprojects\logistics\resources\views//admin/quotes.blade.php ENDPATH**/ ?>