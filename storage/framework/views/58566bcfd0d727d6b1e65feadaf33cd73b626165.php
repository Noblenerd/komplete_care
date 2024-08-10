

<?php $__env->startSection('content'); ?>
<div class="content-body">
        <div class="container">
            <div class="page-title">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-4">
                        <div class="page-title-content">
                            <h3>Bill Payment</h3>
                            <p class="mb-2"></p>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="breadcrumbs"><a href="#">Home </a><span><i
                                    class="ri-arrow-right-s-line"></i></span><a href="#">Bills</a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-6">
                    <a href="#airtime" data-toggle="modal"><div class="stat-widget d-flex align-items-center bg-white">
                        <div class="widget-icon d-none d-md-block me-3 bg-primary"><span><i class="ri-file-copy-2-line"></i></span></div>
                        <div class="widget-content">
                            <h4>Airtime Topup</h4>
                            <p></p>
                        </div>
                    </div></a>
                </div>
                <div class="col-xl-3 col-6">
                                <a href="#data" data-toggle="modal"><div class="stat-widget d-flex align-items-center bg-white">
                        <div class="widget-icon d-none d-md-block me-3 bg-success"><span><i class="ri-file-list-3-line"></i></span></div>
                        <div class="widget-content">
                            <h3>Data</h3>
                            <p></p>
                        </div>
                    </div></a>
                </div>
                <div class="col-xl-3 col-6">
                                <a href="#cable" data-toggle="modal"><div class="stat-widget d-flex align-items-center bg-white">
                        <div class="widget-icon d-none d-md-block me-3 bg-warning"><span><i class="ri-file-paper-line"></i></span></div>
                        <div class="widget-content">
                            <h4>Cable</h4>
                            <p></p>
                        </div>
                    </div></a>
                </div>
                <div class="col-xl-3 col-6">
                                <a href="#elec" data-toggle="modal"><div class="stat-widget d-flex align-items-center bg-white">
                        <div class="widget-icon d-none d-md-block me-3 bg-danger"><span><i class="ri-file-paper-2-line"></i></span></div>
                        <div class="widget-content">
                            <h4>Electricity</h4>
                            <p></p>
                        </div>
                    </div></a>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header flex-row">
                            <h4 class="card-title">Bill Transactions </h4>
                            
                        </div>
                        <div class="card-body">
                            <div class="invoice-table">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="form-check"><input class="form-check-input"
                                                            type="checkbox" id="flexCheckDefault" value=""></div>
                                                </th>
                                                <th>Amount</th>
                                                <th>Description</th>
                                                <th>Nature</th>
                                                <th>Trx ID</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(count($history)>0): ?>
                                            <?php $__currentLoopData = $history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <div class="form-check"><input class="form-check-input"
                                                            type="checkbox" id="flexCheckDefault" value=""></div>
                                                </td>
                                                
                                                <td>$<?php echo e(number_format($val->amount,2,'.',',')); ?></td>
                                                <td>$<?php echo e($val->description); ?></td>
                                                <td>$<?php echo e($val->nature); ?></td>
                                                <td>$<?php echo e($val->trx_id); ?></td>
                                                <td><span class="badge px-3 py-2 bg-success">Completed</span></td>
                                                <td><?php echo e(date('d F, Y', strtotime($val->created_at))); ?></td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <tr>
                                                    <td colspan="6">No Record at the moment </td>
                                                </tr>
                                            <?php endif; ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal" id="airtime" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title" id="idCardModalLabel">Airtime Topup</h5>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <form action="<?php echo e(route('airtime.process')); ?>" class="identity-upload">
                                        <?php echo csrf_field(); ?>
                                        
                                        <div class="form-group mb-3">
                                                <select name="billid" class="form-control">
                                                <option value="mtn"> MTN </option>
                                                <option value="glo"> GLO </option>
                                                <option value="airtel"> AIRTEL </option>
                                                <option value="9mobile"> 9MOBILE </option>
                                                </select>
                                                
                                                
                                                
                                        </div>
                                        <div class="form-group">
                                                <input name="phone" type="tel" max="11" class="form-control" placeholder="Enter Phone Number">
                                        </div>
                                        <div class="form-group">
                                                <input name="amount" type="number" class="form-control" placeholder="Enter Amount">
                                        </div>
                                        
                                </div>
                                <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                                </form>
                                </div>
                        </div>
                        </div>


                        <div class="modal" id="data" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                        <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                        <h5 class="modal-title" id="">Purchase Data</h5>
                                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                        <form action="<?php echo e(route('data.process')); ?>" class="identity-upload">
                                                        <?php echo csrf_field(); ?>
                                                        
                                                        <div class="form-group mb-3">
                                                                <select id="" size="1" class="form-control" required name="network" onchange="getPlan(this.value, 'data')">
                                                                        <option> Select Network </option>
                                                                        <option value="mtn"> MTN </option>
                                                                        <option value="glo"> GLO </option>
                                                                        <option value="airtel"> AIRTEL </option>
                                                                        <option value="9mobile"> 9MOBILE </option>
                                                                                        
                                                                </select>
                                                        </div>
                                                        <div class="data_full"></div>
                                                        <div class="form-group">
                                                                <input name="phone" type="tel" max="11" class="form-control" placeholder="Enter Phone Number">
                                                        </div>
                                                        <div class="data_half">
                                                                
                                                        </div>
                                                        
                                                </div>
                                                <div class="modal-footer">
                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                </div>
                                                </form>
                                                </div>
                                        </div>
                                        </div>


                                        <div class="modal" id="cable" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                        <h5 class="modal-title" id="">Cable Recharge</h5>
                                                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                        <form action="<?php echo e(route('cable.process')); ?>" class="identity-upload">
                                                                        <?php echo csrf_field(); ?>
                                                                        
                                                                        <div class="form-group mb-3">
                                                                                <select id="" size="1" class="form-control cabletype" required name="billerid" onchange="getPlan(this.value, 'cable')">
                                                                                        <option> Select Type </option>
                                                                                        <option value="startimes"> STARTIMES </option>
                                                                                        <option value="dstv"> DSTV </option>
                                                                                        <option value="gotv"> GOTV </option>
                                                                                        <!--<option value="showmax"> SHOWMAX </option>-->
                                                                                </select>
                                                                        </div>
                                                                        <div class="cable_full"></div>
                                                                        <div class="form-group">
                                                                                        <input id="" type="text" maxlength="11" class="form-control cablecard" placeholder="<?php echo e(__('SmartCard Number')); ?>" onkeyup="getCableCard(this.value)" required name="card">
                                                                                        <span class="ecc text-danger"></span>
                                                                                        <span class="ecp text-success"></span>
                                                                        </div>

                                                                        <div class="cable_half">
                                                                                
                                                                        </div>
                                                                        
                                                                </div>
                                                                <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                </div>
                                                                </form>
                                                                </div>
                                                        </div>
                                                        </div>

                                                        <div class="modal" id="elec" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                        <h5 class="modal-title" id="">Purchase Electricity</h5>
                                                                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                        <form action="<?php echo e(route('elec.process')); ?>" class="identity-upload">
                                                                                        <?php echo csrf_field(); ?>
                                                                                        
                                                                                        <div class="form-group mb-3">
                                                                                                        <select id="" size="1" class="form-control edisco" required name="billerid">
                                                                                                                        <option> Select District </option>
                                                                                                                        <option value="abuja-electric"> ABUJA ELECTRICITY DISTRIBUTION COMPANY </option>
                                                                                                                        <option value="eko-electric"> EKO ELECTRICITY DISTRIBUTION PLC </option>
                                                                                                                        <option value="enugu-electric"> Enugu Electricity Distribution Company (EEDC) </option>
                                                                                                                        <option value="ibadan-electric"> Ibadan Electricity Distribution Company (IBEDC) </option>
                                                                                                                        <option value="ikeja-electric"> Ikeja Electric </option>
                                                                                                                        <option value="jos-electric"> JOS ELECTRICITY DISTRIBUTION COMPANY </option>
                                                                                                                        <option value="kaduna-electric"> KEDCO ( KADUNA ELECTRICITY DISTRIBUTION COMPANY) </option>
                                                                                                                        <option value="portharcourt-electric"> PORT HARCOURT ELECTRICITY DISTRIBUTION COMPANY ( PHED ) </option>
                                                                                                                        <option value="benin-electric"> BEDC BENIN ELECTRICITY DISTRIBUTION COMPANY </option>
                                                                                                                    </select>
                                                                                        </div>
                                                                                        <div class="form-group mb-3">
                                                                                                        <select id="" size="1" class="form-control metertype" required name="type">
                                                                                                                        <option> Select Type </option>
                                                                                                                        <option value="prepaid"> PREPAID </option>
                                                                                                                        <option value="postpaid"> POSTPAID </option>
                                                                                                                        
                                                                                                                    </select>
                                                                                        </div>
                                                                                        <div class="elec_full"></div>
                                                                                        <div class="form-group">
                                                                                                        <input id="" type="text" class="form-control metercard" placeholder="<?php echo e(__('Meter Number')); ?>" onkeyup="getElecCard(this.value)" required name="meter">
                                                                                                        <span class="mecc text-danger"></span>
                                                                                                        <span class="mecp text-success"></span>
                                                                                        </div>
                                                                                        <div class="form-group mb-3">
                                                                                        <input id="" type="number" max="" class="form-control" placeholder="<?php echo e(__('Amount to Buy')); ?>" required name="amount">
                                                                                        </div>
                                                                                        <div class="elec_half">
                                                                                                
                                                                                        </div>
                                                                                        
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                                </div>
                                                                                </form>
                                                                                </div>
                                                                        </div>
                                                                        </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\myprojects\gurupay\resources\views/user/bills.blade.php ENDPATH**/ ?>