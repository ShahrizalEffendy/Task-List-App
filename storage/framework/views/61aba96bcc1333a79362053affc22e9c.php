

<?php $__env->startSection('title',$task->title); ?>

<?php $__env->startSection('content'); ?>
<div class="mb-4">
    <a href="<?php echo e(route('tasks.index')); ?>"
    class="link"><- Go back to the task list!</a>
</div>

<p class="mb-4 text-slate-700"><?php echo e($task->description); ?></p>

<?php if($task->long_description): ?>
    <p class="mb-4 text-slate-700"><?php echo e($task->long_description); ?></p>
<?php endif; ?>

<p class="mb-4 text-sm text-slate-500">Created <?php echo e($task->created_at->diffForHumans()); ?> .
    Updated <?php echo e($task->updated_at->diffForHumans()); ?></p>

<p class="mb-4">
    <?php if($task->completed): ?>
    <span class="font-medium text-green-500">Completed</span>
    <?php else: ?>
    <span class="font-medium text-red-500">Not Completed</span>
    <?php endif; ?>
</p>

<div class="flex gap-2">
    <a href="<?php echo e(route('tasks.edit', ['task'=>$task])); ?>"
    class="btn">Edit</a>

    <form method="POST" action="<?php echo e(route('tasks.toggle-complete',['task'=>$task])); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <button type="submit" class="btn">
            Mark as <?php echo e($task->completed ? 'not completed' : 'completed'); ?>

        </button>
    </form>

    <form action="<?php echo e(route('tasks.destroy', ['task'=>$task->id])); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button type="submit" class="btn">Delete</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP 14S\laravel course\task-list\resources\views/show.blade.php ENDPATH**/ ?>