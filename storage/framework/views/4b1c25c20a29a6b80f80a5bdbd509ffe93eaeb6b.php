    <?php $__env->startSection('content'); ?>

        <section class="about-section" style="min-height: 100vh;">

            <?php echo $__env->make('inc.about.intro', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('inc.about.interests', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('inc.about.outro', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </section>

    <?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/chido/Downloads/chidodesignsapp/resources/views/pages/about.blade.php ENDPATH**/ ?>