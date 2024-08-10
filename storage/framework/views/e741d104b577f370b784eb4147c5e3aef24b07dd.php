

<?php $__env->startSection('content'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">All Assignments</h3>
                  <h6 class="font-weight-normal mb-0"></h6>
                </div>
                <div align="right" class="col-12 col-xl-4 justify-content-end">
                    <a href="#add" class="btn btn-primary px-2 rounded" data-toggle="modal"> Add New </a>
                </div>
              </div>
            </div>
          </div>

                <div class="modal" tabindex="-1" role="dialog" id="add">
                    <div class="modal-dialog modal-md" role="document">
                      <div class="modal-content" style="background-image:url('<?php echo e(url('/')); ?>/images/carousel/banner_4.jpg');background-repeat:no-repeat;background-size:cover;">
                        <div class="modal-header">
                          <h4 class="modal-title text-white">Add new Assignment</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="<?php echo e(route('assignment.add')); ?>" enctype="multipart/form-data">
                              <?php echo csrf_field(); ?>
                              <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="details" id="exampleInputEmail1" placeholder="Assignment Details">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="skills" id="exampleInputEmail1" placeholder="Required Skills">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="schedule" id="exampleInputEmail1" placeholder="Assignment Schedule">
                              </div>
                              
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Add Assignment</button>
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
                  <p class="card-title mb-0">All Assignments</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                        <th> Details</th>
                        <th>Skills</th>
                          <th>Schedule</th>
                          <th>Actions</th>
                          
                        </tr>  
                      </thead>
                      <tbody>
                        <?php if(count($assignments) > 0): ?>
                          <?php $__currentLoopData = $assignments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                          <tr>
                        <td><?php echo e($vel->details); ?> </td>
                        <td><?php echo e($vel->skills); ?> </td>
                        <td><?php echo e($vel->schedule); ?> </td>
                          <td class="font-weight-medium">
                            <a href="<?php echo e(route('assignment.del', $vel->id)); ?>" class="btn btn-danger rounded"> Delete </a>
                            <a href="#edit<?php echo e($vel->id); ?>" data-toggle="modal" class="btn btn-primary rounded"> Edit </a>
                            </td>
                            
                        </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <tr><td colspan="5"> No Assignment record </td></tr>
                      <?php endif; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <?php if(count($assignments)>0): ?>
            <?php $__currentLoopData = $assignments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="modal" tabindex="-1" role="dialog" id="edit<?php echo e($vol->id); ?>">
                    <div class="modal-dialog modal-md" role="document">
                      <div class="modal-content" style="background-image:url('<?php echo e(url('/')); ?>/images/carousel/banner_4.jpg');background-repeat:no-repeat;background-size:cover;">
                        <div class="modal-header">
                          <h4 class="modal-title text-white">Edit Assignment</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="<?php echo e(route('assignment.update')); ?>" enctype="multipart/form-data">
                              <?php echo csrf_field(); ?>
                              <div class="form-group">
                                <input type="text" class="form-control form-control-lg" value="<?php echo e($vol->details); ?>" name="details" id="exampleInputEmail1" placeholder="Assignment Details">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control form-control-lg" value="<?php echo e($vol->skills); ?>" name="skills" id="exampleInputEmail1" placeholder="Required Skills">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control form-control-lg" value="<?php echo e($vol->schedule); ?>" name="schedule" id="exampleInputEmail1" placeholder="Assignment Schedule">
                              </div>
                              
                              
                              <input type="hidden" name="sid" value="<?php echo e($vol->id); ?>">
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Update Assignment</button>
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
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\myprojects\hospital\resources\views//admin/assignments.blade.php ENDPATH**/ ?>