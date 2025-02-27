


<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Créer un Article</h1>
    <form method="POST" action="<?php echo e(route('posts.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenu</label>
            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Publier</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hamza\Desktop\laravel\BlogProject\resources\views/posts/create.blade.php ENDPATH**/ ?>