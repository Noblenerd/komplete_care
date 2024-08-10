

<?php $__env->startSection('content'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">All Users</h3>
                  <h6 class="font-weight-normal mb-0"></h6>
                </div>
                <div align="right" class="col-12 col-xl-4 justify-content-end">
                  <a href="#add" class="btn btn-primary px-2 rounded" data-toggle="modal"> Add New User</a>
                </div>
              </div>
            </div>
          </div>

          <div class="modal" tabindex="-1" role="dialog" id="add">
                    <div class="modal-dialog modal-md" role="document">
                      <div class="modal-content" style="background-image:url('<?php echo e(url('/')); ?>/images/carousel/banner_4.jpg');background-repeat:no-repeat;background-size:cover;">
                        <div class="modal-header">
                          <h4 class="modal-title text-white">Add new User</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="<?php echo e(route('users.add')); ?>">
                              <?php echo csrf_field(); ?>
                              <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="first_name" id="exampleInputEmail1" placeholder="First Name">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="last_name" id="exampleInputEmail1" placeholder="Last Name">
                              </div>
                              <div class="form-group">
                                <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Email Address">
                              </div>
                              <div class="form-group">
                                <input type="tel" class="form-control form-control-lg" name="phone" id="exampleInputEmail1" placeholder="Phone Number">
                              </div>
                              <div class="form-group">
                                <select size="1" class="form-control form-control-lg" name="gender" id="exampleInputEmail1" placeholder="Gender">
                                    <option> Select Gender </option>
                                    <option> Male </option>
                                    <option> Female </option>
                                </select>
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="username" id="exampleInputEmail1" placeholder="Username">
                              </div>
                              <div class="form-group">
                                <input type="password" class="form-control form-control-lg" name="password" id="exampleInputEmail1" placeholder="Password">
                              </div>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Add User</button>
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
                  <p class="card-title mb-0">All Users</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Gender</th>
                          <th>Email Status</th>
                          <th>Actions</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <?php if(count($users) > 0): ?>
                          <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                        <tr>
                        <td><?php echo e($vel->first_name); ?> </td>
                        <td><?php echo e($vel->last_name); ?></td>
                        <td><?php echo e($vel->email); ?></td>
                        <td><?php echo e($vel->phone); ?></td>
                        <td><?php echo e($vel->gender); ?> </td>
                          <td class="font-weight-medium">
                            <?php if($vel->email_verify_status == 1): ?>
                            <div class="badge badge-success">Completed</div>
                            <?php elseif($vel->email_verify_status == 0): ?>
                            <div class="badge badge-danger">Pending</div>
                            <?php else: ?>
                            <div class="badge badge-primary">Unknown</div>
                            <?php endif; ?>
                            </td>
                            <td class="font-weight-medium">
                              <a href="#edit<?php echo e($vel->id); ?>" data-toggle="modal" type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                                Edit
                                <i class="typcn typcn-edit btn-icon-append"></i>                          
                              </a>
                              <a href="<?php echo e(route('users.del', $vel->id)); ?>" type="button" class="btn btn-danger btn-sm btn-icon-text">
                                Delete
                                <i class="typcn typcn-delete-outline btn-icon-append"></i>                          
                              </a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <tr><td colspan="8"> No User record </td></tr>
                      <?php endif; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        <?php if(count($users)>0): ?>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="modal" tabindex="-1" role="dialog" id="edit<?php echo e($vol->id); ?>">
                    <div class="modal-dialog modal-md" role="document">
                      <div class="modal-content" style="background-image:url('<?php echo e(url('/')); ?>/images/carousel/banner_4.jpg');background-repeat:no-repeat;background-size:cover;">
                        <div class="modal-header">
                          <h4 class="modal-title text-white">Update User</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="<?php echo e(route('users.update')); ?>">
                              <?php echo csrf_field(); ?>
                              <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="first_name" value="<?php echo e($vol->first_name); ?>" id="exampleInputEmail1" placeholder="First Name">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="last_name" value="<?php echo e($vol->last_name); ?>" id="exampleInputEmail1" placeholder="Last Name">
                              </div>
                              <div class="form-group">
                                <input type="email" class="form-control form-control-lg" name="email" value="<?php echo e($vol->email); ?>" id="exampleInputEmail1" placeholder="Email Address">
                              </div>
                              <div class="form-group">
                                <input type="tel" class="form-control form-control-lg" value="<?php echo e($vol->phone); ?>" name="phone" id="exampleInputEmail1" placeholder="Phone Number">
                              </div>
                               
                              <div class="form-group">
                                <select size="1" class="form-control form-control-lg" name="gender" id="exampleInputEmail1" placeholder="Gender">
                                    <option selected disabled> <?php echo e($vol->gender); ?> </option>
                                    <option> Male </option>
                                    <option> Female </option>
                                </select>
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control form-control-lg" value="<?php echo e($vol->username); ?>" name="username" id="exampleInputEmail1" placeholder="Username">
                              </div>
                              
                              <input type="hidden" name="sid" value="<?php echo e($vol->id); ?>">
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Update User</button>
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
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\myprojects\hospital\resources\views//admin/users.blade.php ENDPATH**/ ?>