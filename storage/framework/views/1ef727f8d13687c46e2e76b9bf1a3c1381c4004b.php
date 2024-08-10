

<?php $__env->startSection('content'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome <?php echo e($admin->username); ?></h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! </span></h6>
                </div>
                
              </div>
            </div>
          </div>
          <div class="row">
            
            <div class="col-md-12 grid-margin transparent">
              <div class="row">
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Balance</p>
                      <p class="fs-30 mb-2">0</p>
                      <p></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Deposits</p>
                      <p class="fs-30 mb-2">0</p>
                      <p></p>
                    </div>
                  </div>
                </div>
              
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Investments</p>
                      <p class="fs-30 mb-2">0</p>
                      <p></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Withdrawals</p>
                      <p class="fs-30 mb-2">0</p>
                      <p></p>
                    </div>
                  </div>
                </div>
              
            </div>
        
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Latest Quotes</p>
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

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\myprojects\logistics\resources\views//admin/dashboard.blade.php ENDPATH**/ ?>