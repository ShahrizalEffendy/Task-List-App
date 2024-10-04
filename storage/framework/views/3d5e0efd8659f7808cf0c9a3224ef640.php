

<?php $__env->startSection('title','The list of tasks'); ?>

<?php $__env->startSection('content'); ?>
    
    <nav class="mb-4">
    <a href="<?php echo e(route('tasks.create')); ?>"
    class="link">Add Task</a>
    </nav>    
    
    <?php $__empty_1 = true; $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div>
            <a href="<?php echo e(route ('tasks.show', ['task'=> $task->id])); ?>"
            class="<?php echo \Illuminate\Support\Arr::toCssClasses(['line-through'=> $task->completed]); ?>"><?php echo e($task->title); ?></a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div>There are no tasks!</div>
    <?php endif; ?>

    <?php if($tasks->count()): ?>
        <nav class="mt-4">
        <?php echo e($tasks->links()); ?>

        </nav>
    <?php endif; ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP 14S\laravel course\task-list\resources\views/index.blade.php ENDPATH**/ ?>