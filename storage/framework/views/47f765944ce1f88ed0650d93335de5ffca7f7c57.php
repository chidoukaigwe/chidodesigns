    <?php $__env->startSection('content'); ?>

        <section class="clients-section" style="min-height: 100vh;">

            <?php echo $__env->make('inc.clients-page.intro', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('inc.clients-page.client-jolocs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('inc.clients-page.client-hostfront', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('inc.clients-page.client-one', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('inc.clients-page.client-two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </section>

    <?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/chido/projects/laravel-projects/chidodesignsapp/resources/views/pages/clients.blade.php ENDPATH**/ ?>