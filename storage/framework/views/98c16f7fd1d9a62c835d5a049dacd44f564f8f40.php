

<?php $__env->startSection('content'); ?>

<section class="shop_sectio layout_padding">
  <div class="container">
    <div class="d-flex justify-content-center">
      <h2 class="heading_style">
       Get a Quote
      </h2>
    </div>
    <div class="row">
      <div align="center" class="col-md-12 mb-3">
          <h5>
              Send any Parcel with ease - Get a Quote for the best of price
            </h5>
      </div>
      
      
      <div class="col-md-6 mb-3">
        <div class="h-100">
          <div class="shop-detail p-1">
            <div class="card-header">
                <h3> Sender's Details </h3>
            </div>
            <form method="post" action="<?php echo e(route('quote.send')); ?>" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <div class="form-group">
                <label> Sender's First Name </label>
                <div class="input-group">
                    <input type="text" name="s_first_name" class="form-control" placeholder="">
                </div>
              </div>

              <div class="form-group">
                  <label> Sender's Last Name </label>
                  <div class="input-group">
                      <input type="text" name="s_last_name" class="form-control" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                    <label> Sender's Email Address</label>
                    <div class="input-group">
                        <input type="email" name="s_email" class="form-control" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                      <label> Sender's Phone Number </label>
                      <div class="input-group">
                          <input type="tel" name="s_phone" class="form-control" placeholder="">
                      </div>
                    </div>

            
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-3">
          <div class="h-100">
            <div class="shop-detail p-1">
              <div class="card-header">
                  <h3> Recipient's Details </h3>
              </div>
              <div class="form-group">
                  <label>  First Name </label>
                  <div class="input-group">
                      <input type="text" name="r_first_name" class="form-control" placeholder="">
                  </div>
                </div>
  
                <div class="form-group">
                    <label> Last Name </label>
                    <div class="input-group">
                        <input type="text" name="r_last_name" class="form-control" placeholder="">
                    </div>
                  </div>
  
                  <div class="form-group">
                      <label> Email Address </label>
                      <div class="input-group">
                          <input type="email" name="r_email" class="form-control" placeholder="">
                      </div>
                    </div>
  
                    <div class="form-group">
                        <label> Phone Number </label>
                        <div class="input-group">
                            <input type="tel" name="r_phone" class="form-control" placeholder="">
                        </div>
                      </div>
  
              
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="h-100">
              <div class="shop-detail p-1">
                <div class="card-header">
                    <legend><h3> Parcel Details </h3></legend>
                </div>
                <div class="form-group">
                    <label>  Pickup Address </label>
                    <div class="input-group">
                        <input type="text" name="pickup" class="form-control" placeholder="">
                    </div>
                  </div>
    
                  <div class="form-group">
                      <label> Destination Address </label>
                      <div class="input-group">
                          <input type="text" name="destination" class="form-control" placeholder="">
                      </div>
                    </div>
    
                    <div class="form-group">
                        <label> Image </label>
                        <div class="input-group">
                            <input type="file" name="image" class="form-control" placeholder="">
                        </div>
                      </div>
    
                      <div class="form-group">
                          <label> Weight (in Kg) </label>
                          <div class="input-group">
                              <input type="number" name="weight" class="form-control" placeholder="">
                          </div>
                        </div>

                        <div class="form-group">
                            <label> Delivery Method </label>
                            <div class="input-group">
                                <select size="1" name="delivery_method" class="form-control" placeholder="">
                                    <option> Select Delivery Method </option>
                                    <option value="Air"> By Air </option>
                                    <option value="Land"> By Land </option>
                                    <option value="Sea"> By Sea </option>
                                </select>
                            </div>
                          </div>
    
                
              </div>
            </div>
          </div>
        
    
          <div class="col-md-6 mb-3">
              <div class="h-100">
                <div class="shop-detail p-1">
                  <div class="card-header">
                      <legend><h3> Payment </h3></legend>
                  </div>
                  <img src="<?php echo e($set->image); ?>" style="height:370px;">
      
                    <button class="btn btn-primary form-control" type="submit"> Proceed to Payment </button>
                  </form>
                </div>
              </div>
            </div>
          
          </div>

  </div>
</section>
<!-- end shop section -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\myprojects\logistics\resources\views//main/quote.blade.php ENDPATH**/ ?>