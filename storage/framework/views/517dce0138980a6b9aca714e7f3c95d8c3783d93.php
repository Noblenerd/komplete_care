

<?php $__env->startSection('content'); ?>
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
      <div class="col-xl-6 grid-margin stretch-card flex-column">
          <h5 class="mb-2 text-titlecase mb-4">Workers statistics</h5>
        <div class="row">
          <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body d-flex flex-column justify-content-between">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <p class="mb-0 text-muted">Appointment Rate</p>
                  <p class="mb-0 text-muted">+1.37%</p>
                </div>
                <h4>1352</h4>
                <canvas id="transactions-chart" class="mt-auto" height="65"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body d-flex flex-column justify-content-between">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <div>
                    <p class="mb-2 text-muted">Logins</p>
                    <h6 class="mb-0">563</h6>
                  </div>
                  <div>
                    <p class="mb-2 text-muted">Active</p>
                    <h6 class="mb-0">720</h6>
                  </div>
                  <div>
                    <p class="mb-2 text-muted">Inactive</p>
                    <h6 class="mb-0">5900</h6>
                  </div>
                </div>
                <canvas id="sales-chart-a" class="mt-auto" height="65"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="row h-100">
          <div class="col-md-6 stretch-card grid-margin grid-margin-md-0">
            <div class="card">
              <div class="card-body d-flex flex-column justify-content-between">
                <p class="text-muted">Health Workers Analytics</p>
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <h3 class="mb-">27632</h3>
                  <h3 class="mb-">78%</h3>
                </div>
                <canvas id="sales-chart-b" class="mt-auto" height="38"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-6 stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="row h-100">
                  <div class="col-6 d-flex flex-column justify-content-between">
                    <p class="text-muted">CPU</p>
                    <h4>55%</h4>
                    <canvas id="cpu-chart" class="mt-auto"></canvas>
                  </div>
                  <div class="col-6 d-flex flex-column justify-content-between">
                    <p class="text-muted">Memory</p>
                    <h4>123,65</h4>
                    <canvas id="memory-chart" class="mt-auto"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 grid-margin stretch-card flex-column">
        <h5 class="mb-2 text-titlecase mb-4">Income statistics</h5>
        <div class="row h-100">
          <div class="col-md-12 stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-start flex-wrap">
                  <div>
                    <p class="mb-3">Monthly Increase</p>
                    <h3>67842</h3>
                  </div>
                  <div id="income-chart-legend" class="d-flex flex-wrap mt-1 mt-md-0"></div>
                </div>
                <canvas id="income-chart"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body border-bottom">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="mb-2 mb-md-0 text-uppercase font-weight-medium">Overall sales</h6>
              <div class="dropdown">
                <button class="btn bg-white p-0 pb-1 text-muted btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Last 30 days
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                  <h6 class="dropdown-header">Settings</h6>
                  <a class="dropdown-item" href="javascript:;">Action</a>
                  <a class="dropdown-item" href="javascript:;">Another action</a>
                  <a class="dropdown-item" href="javascript:;">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
            <canvas id="sales-chart-c" class="mt-2"></canvas>
            <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3 mt-4">
              <div class="d-flex flex-column justify-content-center align-items-center">
                <p class="text-muted">Gross Sales</p>
                <h5>492</h5>
                <div class="d-flex align-items-baseline">
                  <p class="text-success mb-0">0.5%</p>
                  <i class="typcn typcn-arrow-up-thick text-success"></i>
                </div>
              </div>
              <div class="d-flex flex-column justify-content-center align-items-center">
                <p class="text-muted">Purchases</p>
                <h5>87k</h5>
                <div class="d-flex align-items-baseline">
                  <p class="text-success mb-0">0.8%</p>
                  <i class="typcn typcn-arrow-up-thick text-success"></i>
                </div>
              </div>
              <div class="d-flex flex-column justify-content-center align-items-center">
                <p class="text-muted">Tax Return</p>
                <h5>882</h5>
                <div class="d-flex align-items-baseline">
                  <p class="text-danger mb-0">-04%</p>
                  <i class="typcn typcn-arrow-down-thick text-danger"></i>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <div class="dropdown">
                <button class="btn bg-white p-0 pb-1 pt-1 text-muted btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Last 7 days
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                  <h6 class="dropdown-header">Settings</h6>
                  <a class="dropdown-item" href="javascript:;">Action</a>
                  <a class="dropdown-item" href="javascript:;">Another action</a>
                  <a class="dropdown-item" href="javascript:;">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
              </div>
              <p class="mb-0">overview</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-4 grid-margin stretch-card">
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card newsletter-card bg-gradient-warning">
              <div class="card-body">
                <div class="d-flex flex-column align-items-center justify-content-center h-100">
                  <h5 class="mb-3 text-white">Newsletter</h5>
                  <form class="form d-flex flex-column align-items-center justify-content-between w-100">
                    <div class="form-group mb-2 w-100">
                      <input type="text" class="form-control" placeholder="email address">
                    </div>
                    <button class="btn btn-danger btn-rounded mt-1" type="submit">Subscribe</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 stretch-card">
            <div class="card profile-card bg-gradient-primary">
              <div class="card-body">
                <div class="row align-items-center h-100">
                  <div class="col-md-4">
                    <figure class="avatar mx-auto mb-4 mb-md-0">
                      <img src="images/faces/face20.jpg" alt="avatar">
                    </figure>
                  </div>
                  <div class="col-md-8">
                    <h5 class="text-white text-center text-md-left"><?php echo e($admin->username); ?></h5>
                    <p class="text-white text-center text-md-left"><?php echo e($admin->email); ?></p>
                    <div class="d-flex align-items-center justify-content-between info pt-2">
                      <div>
                        <p class="text-white font-weight-bold">Active City</p>
                        <p class="text-white font-weight-bold">Proactive</p>
                      </div>
                      <div>
                        <p class="text-white"><?php echo e(date('d F, Y')); ?></p>
                        <p class="text-white">Location</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body border-bottom">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="mb-2 mb-md-0 text-uppercase font-weight-medium">Sales statistics</h6>
              <div class="dropdown">
                <button class="btn bg-white p-0 pb-1 text-muted btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Last 7 days
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton4">
                  <h6 class="dropdown-header">Settings</h6>
                  <a class="dropdown-item" href="javascript:;">Action</a>
                  <a class="dropdown-item" href="javascript:;">Another action</a>
                  <a class="dropdown-item" href="javascript:;">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
            <canvas id="sales-chart-d" height="320"></canvas>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
              <div>
                <p class="mb-2 text-md-center text-lg-left">Total Users</p>
                <h1 class="mb-0"><?php echo e(count($users)); ?></h1>
              </div>
              <i class="typcn typcn-briefcase icon-xl text-secondary"></i>
            </div>
            <canvas id="expense-chart" height="80"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
              <div>
                <p class="mb-2 text-md-center text-lg-left">Total Workers</p>
                <h1 class="mb-0"><?php echo e(count($workers)); ?></h1>
              </div>
              <i class="typcn typcn-chart-pie icon-xl text-secondary"></i>
            </div>
            <canvas id="budget-chart" height="80"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
              <div>
                <p class="mb-2 text-md-center text-lg-left">Total Assignments</p>
                <h1 class="mb-0"><?php echo e(count($assignments)); ?></h1>
              </div>
              <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
            </div>
            <canvas id="balance-chart" height="80"></canvas>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="table-responsive pt-3">
            <table class="table table-striped project-orders-table">
              <thead>
                <tr>
                  <th>S/N</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th> Status</th>
                  
                </tr>  
              </thead>
              <tbody>
                <?php if(count($workers) > 0): ?>
                  <?php $__currentLoopData = $workers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    
                <tr>
                  <td><?php echo e(++$k); ?></td>
                  <td><?php echo e($val->first_name); ?> <?php echo e($val->s_last_name); ?></td>
                  <td><?php echo e($val->last_name); ?></td>
                  <td><?php echo e($val->email); ?></td>
                  <td><?php echo e($val->phone); ?></td>
                  <td class="font-weight-medium">
                    <?php if($val->status == 1): ?>
                    <div class="badge badge-primary">Active</div>
                    <?php elseif($val->status == 0): ?>
                    <div class="badge badge-danger">Inactive</div>
                     <?php endif; ?>
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
      <!-- partial -->
       
          
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\myprojects\hospital\resources\views//admin/dashboard.blade.php ENDPATH**/ ?>