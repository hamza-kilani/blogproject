

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">Liste des Articles</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-primary mb-3">Créer un article</a>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($post->title); ?></td>
                        <td><?php echo e($post->user->name); ?></td>
                        <td><?php echo e($post->created_at->format('d/m/Y')); ?></td>
                        <td>
                            <!-- Bouton Voir -->
                            <a href="<?php echo e(route('posts.show', $post)); ?>" class="btn btn-info btn-sm">Voir</a>

                            <?php if(auth()->guard()->check()): ?>
                                <?php if(Auth::id() === $post->user_id): ?>
                                    <!-- Bouton Modifier -->
                                    <a href="<?php echo e(route('posts.edit', $post)); ?>" class="btn btn-warning btn-sm">Modifier</a>

                                    <!-- Bouton Supprimer -->
                                    <form action="<?php echo e(route('posts.destroy', $post)); ?>" method="POST" class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm" 
                                            onclick="return confirm('Voulez-vous vraiment supprimer cet article ?');">
                                            Supprimer
                                        </button>
                                    </form>
                                <?php endif; ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <div class="mt-3">
        <?php echo e($posts->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hamza\Desktop\laravel\BlogProject\resources\views/posts/index.blade.php ENDPATH**/ ?>