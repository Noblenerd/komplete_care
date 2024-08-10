

<?php $__env->startSection('content'); ?>

<section class="shop_sectio layout_padding">
  <div class="container-fluid">
    <div class="d-flex justify-content-center">
      <img src="<?php echo e(url('/')); ?>/<?php echo e($parcel->image); ?>" style="height:90px;width:90px;" class="rounded">
        <h2 class="heading_style">
       Tracking Details - <?php echo e($parcel->tracking_id); ?>

      </h2>
    </div>
    <div class="row">
      <div align="center" class="col-md-12 mb-5">
          <h5>
              Current Location: <?php echo e($parcel->current_location); ?>

            </h5>
      </div>
      
      <div class="col-md-1"></div>
          
        <div class="col-md-10">
        <div class="row">
      <div class="col-md-3 mb-3">
        <div class="h-100">
          <div class="shop-detail p-1">
            <div class="card-header p-1">
                <h3> Sender's Details </h3>
            </div>
            <form method="post" action="<?php echo e(route('quote.send')); ?>" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <div class="form-group">
                <label> Sender's First Name </label>
                <div class="input-group">
                    <h5> <?php echo e($parcel->s_first_name); ?> </h5>
                </div>
              </div>

              <div class="form-group">
                  <label> Sender's Last Name </label>
                  <div class="input-group">
                        <h5> <?php echo e($parcel->s_last_name); ?> </h5>
                  </div>
                </div>

                <div class="form-group">
                    <label> Sender's Email Address</label>
                    <div class="input-group">
                            <h5> <?php echo e($parcel->s_email); ?> </h5>
                    </div>
                  </div>

                  <div class="form-group">
                      <label> Sender's Phone Number </label>
                      <div class="input-group">
                            <h5> <?php echo e($parcel->s_phone); ?> </h5>
                      </div>
                    </div>

            
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-3">
          <div class="h-100">
            <div class="shop-detail p-1">
              <div class="card-header p-1">
                  <h3> Recipient's Details </h3>
              </div>
              <div class="form-group">
                  <label>  First Name </label>
                  <div class="input-group">
                        <h5> <?php echo e($parcel->r_first_name); ?> </h5>
                  </div>
                </div>
  
                <div class="form-group">
                    <label> Last Name </label>
                    <div class="input-group">
                            <h5> <?php echo e($parcel->r_last_name); ?> </h5>
                    </div>
                  </div>
  
                  <div class="form-group">
                      <label> Email Address </label>
                      <div class="input-group">
                            <h5> <?php echo e($parcel->r_email); ?> </h5>
                      </div>
                    </div>
  
                    <div class="form-group">
                        <label> Phone Number </label>
                        <div class="input-group">
                                <h5> <?php echo e($parcel->r_phone); ?> </h5>
                        </div>
                      </div>
  
              
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="h-100">
              <div class="shop-detail p-1">
                <div class="card-header p-1">
                    <legend><h3> Parcel Details </h3></legend>
                </div>
                <div class="form-group">
                    <label>  Pickup Address </label>
                    <div class="input-group">
                            <h5> <?php echo e($parcel->pickup); ?> </h5>
                    </div>
                  </div>
    
                  <div class="form-group">
                      <label> Destination Address </label>
                      <div class="input-group">
                            <h5> <?php echo e($parcel->destination); ?> </h5>
                      </div>
                    </div>
    
                    
                      <div class="form-group">
                          <label> Weight (in Kg) </label>
                          <div class="input-group">
                                <h5> <?php echo e($parcel->weight); ?> </h5>
                          </div>
                        </div>

                        <div class="form-group">
                            <label> Delivery Method </label>
                            <div class="input-group">
                                    <h5> <?php echo e($parcel->delivery_method); ?> </h5>
                            </div>
                          </div>

                          
    
                
              </div>
            </div>
          </div>
        
    
          <div class="col-md-3 mb-3">
              <div class="h-100">
                <div class="shop-detail p-1">
                  <div class="card-header p-1">
                      <legend><h3> Payment Status </h3></legend>
                  </div>
                  <img src="<?php echo e(url('/')); ?>/<?php echo e($set->image); ?>" style="height:280px;">
                    <?php if($parcel->payment == 1): ?>
                    <button class="btn btn-success form-control" type="button"> Paid </button>
                    <?php elseif($parcel->payment == 0): ?>
                    <button class="btn btn-danger form-control" type="button"> Unpaid </button>
                    <?php endif; ?>
                </div>
              </div>
            </div>
        </div>
    </div>
          </div>

  </div>
</section>
<!-- end shop section -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\myprojects\logistics\resources\views//main/tracking.blade.php ENDPATH**/ ?>