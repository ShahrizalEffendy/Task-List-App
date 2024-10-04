

<?php $__env->startSection('title',isset($task) ? 'Edit task' : 'Add Task'); ?>

<?php $__env->startSection('content'); ?>
    <form method="POST" 
    action="<?php echo e(isset($task) ?route('tasks.update',['task'=>$task->id]) : route('tasks.store')); ?>">
        <?php echo csrf_field(); ?>
        <?php if(isset($task)): ?>
            <?php echo method_field('PUT'); ?>
        <?php endif; ?>
        <div class="mb-4">
            <label for="title">
                Title
            </label> 
            <input text="text" name="title" id="title" 
            class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500'=> $errors->has('title')]); ?>"
            value="<?php echo e($task->title ?? old('title')); ?>" />
            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="error"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        
        <div class="mb-4">
            <label for="description">Description</label>
            <textarea name="description" id="description" 
            class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500'=> $errors->has('description')]); ?>"
            rows="5"><?php echo e($task->description ?? old('description')); ?></textarea>
            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="error"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-4">
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" 
            class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500'=> $errors->has('long_description')]); ?>"
            rows="10"><?php echo e($task->long_description ?? old('long_description')); ?></textarea>
            <?php $__errorArgs = ['long_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="error"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="flex gap-2 items-center">
            <button type="submit" class="btn">
                <?php if(isset($task)): ?>
                Update task
                <?php else: ?>
                Add Task
                <?php endif; ?>
            </button>
            <a href="<?php echo e(route('tasks.index')); ?>" class="link">Cancel</a>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP 14S\laravel course\task-list\resources\views/form.blade.php ENDPATH**/ ?>