<?php
    $count = \App\Notification::where('user_id', Auth::user()->id)->where('read_status', 0)->count();
?>
<?php if($count > 0): ?>
    <div class="notifications_icon"><?php echo e($count); ?></div>
<?php else: ?>
    <div></div>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\Gambly\resources\views/pages/fragment/notifications_counter.blade.php ENDPATH**/ ?>