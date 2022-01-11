<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
        .sclist{
            list-style: none;
        }
        .sclist li{
            line-height: 33px;
            border-bottom: 1px solid #ccc;
        }
        .slink i{
            font-size: 16px;
            margin-left: 12px;
        }
    </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Attributes
                            </div>
                            <div class="col-md-6">
                                <a href="<?php echo e(route('admin.add_attribute')); ?>" class="btn btn-success pull-right">Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <?php if(Session::has('message')): ?>
                            <div class="alert alert-success" role="alert"><?php echo e(Session::get('message')); ?></div>
                        <?php endif; ?>
                        <table class="table table-striped">
                            <thead>
                               <tr>
                                   <th>Id</th>
                                   <th>Name</th>
                                   <th>Created At</th>
                                   <th>Action</th>
                               </tr>
                            </thead>
                            <tbody>
                               <?php $__currentLoopData = $pattributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pattribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <tr>
                                       <td><?php echo e($pattribute->id); ?></td>
                                       <td><?php echo e($pattribute->name); ?></td>
                                       <td><?php echo e($pattribute->created_at); ?></td>                                     
                                       <td>
                                           <a href="<?php echo e(route('admin.edit_attribute',['attribute_id'=>$pattribute->id])); ?>"><i class="fa fa-edit fa-2x"></i></a>
                                           <a href="#" onclick="confirm('Are you sure, You want to delete this attribute ?') || event.stopImmediatePropagation()" wire:click.prevent="deleteAttribute(<?php echo e($pattribute->id); ?>)" style="margin-left: 10px;"><i class="fa fa-times fa-2x text-danger"></i></a>
                                       </td>
                                   </tr>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo e($pattributes->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH F:\New folder\copy\laravel8ecommerce\resources\views/livewire/admin/admin-attributes-component.blade.php ENDPATH**/ ?>