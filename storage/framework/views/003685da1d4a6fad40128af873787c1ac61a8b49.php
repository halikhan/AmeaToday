<?php $__env->startSection('content'); ?>

<div class="for-content-tabs">
    <div class="tab-content" id="v-pills-tabContent">

        <?php if(Session::has('message')): ?>
        <p class="alert
        <?php echo e(Session::get('alert-class', 'alert-success')); ?>"><?php echo e(Session::get('message')); ?></p>
        <?php endif; ?>

            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-main-heading mt3 mb3">
                        <h1>Coaches</h1>
                    </div>
                </div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                       <?php $__currentLoopData = $getCoaches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($key+1); ?></th>
                        <td><?php echo e($value->name); ?></td>
                        <td><?php echo e($value->email); ?></td>
                        <td><?php echo e($value->contact); ?></td>
                        <td><a class="btn btn-success" type="button" href="<?php echo e(route('amea-today', $value->id )); ?>">Select</a></td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
            </div>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user_dashboard.layouts.user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/user_dashboard/Coaches/index.blade.php ENDPATH**/ ?>