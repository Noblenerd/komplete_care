

<?php $__env->startSection('content'); ?>

<section class="shop_sectio layout_padding">
  <div class="container">
    <div class="d-flex justify-content-center">
      <h2 class="heading_style">
       My Receipt
      </h2>
    </div>
    <div class="row">
      <div align="center" class="col-md-12 mb-3">
          <h5>
              Receipt generated upon a successful payment
            </h5>
      </div>
      
      
      
        <div class="col-md-3 mb-3">
            <div class="h-100">
              <div class="shop-detail p-1">
                
              </div>
            </div>
          </div>
        
    
          <div class="col-md-6 mb-3">
              <div class="h-100">
                <div class="shop-detail card p-1">
                  <div class="card-header">
                      <legend><h3> <img src="<?php echo e($set->image); ?>" style="height:50px;width:30px;"> Payment Receipt </h3></legend>
                  </div>
                  <br>
                  <b align="right"> Date: <?php echo e(date('d F, Y', strtotime($parcel->created_at))); ?> </b>
                  <br>
                  <b> Receiver's Name </b>
                  <h5> <?php echo e($parcel->s_first_name); ?> <?php echo e($parcel->s_last_name); ?> </h5><br>

                  <b> Amount </b>
                  <h5> <?php echo e(number_format($parcel->amount,2,'.',',')); ?> </h5><br>

                  <b> Details </b>
                  <h5> Payment for logistics from <?php echo e($parcel->pickup); ?> to <?php echo e($parcel->destination); ?> </h5><br>

                  <b> Status </b>
                  <h5> Successful </h5><br>

                  
                    <button class="btn btn-primary form-control" type="submit"> Download Receipt </button>
                  
                </div>
              </div>
            </div>
          
          </div>

  </div>
</section>
<!-- end shop section -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\myprojects\logistics\resources\views//main/receipt.blade.php ENDPATH**/ ?>