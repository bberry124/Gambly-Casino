<?php $__currentLoopData = \App\Notification::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="header_notification notify-<?php echo e($notification->type); ?>">
        <div class="notify-header">
            <div class="notify-title">
                <span class="tooltip" title="<?php echo e(\App\Http\Controllers\GeneralController::formatDate($notification->time)); ?>">
                    <i class="<?php echo e($notification->icon); ?>"></i>
                    <?php echo $notification->title; ?>

                </span>
            </div>
        </div>
        <div class="notify-description">
            <?php echo $notification->message; ?>

        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH D:\xampp\htdocs\Gambly\resources\views/pages/fragment/notifications.blade.php ENDPATH**/ ?>