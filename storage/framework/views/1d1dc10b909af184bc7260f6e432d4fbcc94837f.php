<div class="content">   
    <style>
        .content {
          padding-top: 40px;
          padding-bottom: 40px;
        }
        .icon-stat {
            display: block;
            overflow: hidden;
            position: relative;
            padding: 15px;
            margin-bottom: 1em;
            background-color: #fff;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        .icon-stat-label {
            display: block;
            color: #999;
            font-size: 13px;
        }
        .icon-stat-value {
            display: block;
            font-size: 28px;
            font-weight: 600;
        }
        .icon-stat-visual {
            position: relative;
            top: 22px;
            display: inline-block;
            width: 32px;
            height: 32px;
            border-radius: 4px;
            text-align: center;
            font-size: 16px;
            line-height: 30px;
        }
        .bg-primary {
            color: #fff;
            background: #d74b4b;
        }
        .bg-secondary {
            color: #fff;
            background: #6685a4;
        }
        
        .icon-stat-footer {
            padding: 10px 0 0;
            margin-top: 10px;
            color: #aaa;
            font-size: 12px;
            border-top: 1px solid #eee;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">    
              <div class="icon-stat">    
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label">Total Cost</span>
                    <span class="icon-stat-value">$<?php echo e($totalCost); ?></span>
                  </div>   
                  <div class="col-xs-4 text-center">
                    <i class="fa fa-dollar icon-stat-visual bg-primary"></i>
                  </div>
                </div>    
                <div class="icon-stat-footer">
                  <i class="fa fa-clock-o"></i> Updated Now
                </div>    
              </div>    
            </div>    
            <div class="col-md-3 col-sm-6">    
              <div class="icon-stat">    
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label">Total Purchase</span>
                    <span class="icon-stat-value"><?php echo e($totalPurchase); ?></span>
                  </div>    
                  <div class="col-xs-4 text-center">
                    <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
                  </div>
                </div>    
                <div class="icon-stat-footer">
                  <i class="fa fa-clock-o"></i> Updated Now
                </div>   
              </div>
            </div>
            <div class="col-md-3 col-sm-6">    
              <div class="icon-stat">    
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label">Total Delivered</span>
                    <span class="icon-stat-value"><?php echo e($totalDelivered); ?></span>
                  </div>    
                  <div class="col-xs-4 text-center">
                    <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
                  </div>
                </div>    
                <div class="icon-stat-footer">
                  <i class="fa fa-clock-o"></i> Updated Now
                </div>
              </div>    
            </div>    
            <div class="col-md-3 col-sm-6">    
              <div class="icon-stat">    
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label">Total Canceled</span>
                    <span class="icon-stat-value"><?php echo e($totalCanceled); ?></span>
                  </div>    
                  <div class="col-xs-4 text-center">
                    <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
                  </div>
                </div>    
                <div class="icon-stat-footer">
                  <i class="fa fa-clock-o"></i> Updated Now
                </div>    
              </div>    
            </div>    
         </div>  
         <div class="row">
            <div class="col-md-12">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     Latest Order
                  </div>
                  <div class="panel-body">
                    <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th>OrderId</th>
                                  <th>Subtotal</th>
                                  <th>Discount</th>
                                  <th>Tax</th>
                                  <th>Total</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Mobile</th>
                                  <th>Email</th>
                                  <th>Zipcode</th>
                                  <th>Status</th>
                                  <th>Order Date</th>
                                  <th class="text-center">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr>
                                      <td><?php echo e($order->id); ?></td>
                                      <td>$<?php echo e($order->subtotal); ?></td>
                                      <td>$<?php echo e($order->discount); ?></td>
                                      <td>$<?php echo e($order->tax); ?></td>
                                      <td>$<?php echo e($order->total); ?></td>
                                      <td><?php echo e($order->firstname); ?></td>
                                      <td><?php echo e($order->lastname); ?></td>
                                      <td><?php echo e($order->mobile); ?></td>
                                      <td><?php echo e($order->email); ?></td>
                                      <td><?php echo e($order->zipcode); ?></td>
                                      <td><?php echo e($order->status); ?></td>
                                      <td><?php echo e($order->created_at); ?></td>
                                      <td><a href="<?php echo e(route('user.orderdetails',['order_id'=>$order->id])); ?>" class="btn btn-info btn-sm">Details</a></td>
                                  </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                      </table>
                  </div>
               </div>   
            </div>
         </div>      
    </div>    
</div><?php /**PATH F:\New folder\copy\laravel8ecommerce\resources\views/livewire/user/user-dashboard-component.blade.php ENDPATH**/ ?>