

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1><?php echo e($post->title); ?></h1>
    <p><?php echo e($post->content); ?></p>
    <small>Écrit par <?php echo e($post->user->name); ?> - <?php echo e($post->created_at->diffForHumans()); ?></small>

    <?php if(auth()->guard()->check()): ?>
        <?php if(Auth::id() === $post->user_id): ?>
            <a href="<?php echo e(route('posts.edit', $post)); ?>" class="btn btn-warning mt-3">Modifier</a>
            <form action="<?php echo e(route('posts.destroy', $post)); ?>" method="POST" class="d-inline">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger mt-3">Supprimer</button>
            </form>
        <?php endif; ?>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hamza\Desktop\laravel\BlogProject\resources\views/posts/show.blade.php ENDPATH**/ ?>