    <?php $__env->startSection('content'); ?>

        <section class="projects-section" style="min-height: 100vh;">

            <?php echo $__env->make('inc.projects-page.intro', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('inc.projects-page.shareposts-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </section>

    <?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/chido/projects/laravel-projects/chidodesignsapp/resources/views/pages/projects.blade.php ENDPATH**/ ?>