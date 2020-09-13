<section class="row contact-intro-section">

        <div class="col-sm-12 col-md-12">
    
                <div class="jumbotron p-3 p-md-5 rounded custom-jumbotron contact-intro-section-jumbotron">

                    <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    
                    <?php echo Form::open(['action' => 'PagesController@contactForm', 'method' => 'POST']); ?>


                    <div class="form-group">
                        <?php echo e(Form::label('full-name', 'Full Name')); ?>  
                        <?php echo e(Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Full Name'])); ?>  
                        <?php if(Session::has('error')): ?>
                            <p><?php echo e(Session::get('error')); ?></p>
                        <?php endif; ?>
                    </div> 
            
                    <div class="form-group">
                        <?php echo e(Form::label('email', 'Email Address')); ?>  
                        <?php echo e(Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Example@example.com'])); ?> 
                    </div> 

                    <div class="form-group">
                        <?php echo e(Form::label('subject', 'Subject')); ?>  
                        <?php echo e(Form::text('subject', '', ['class' => 'form-control', 'placeholder' => 'Can you help me build a website?'])); ?> 
                    </div> 

                    <div class="form-group">
                        <?php echo e(Form::label('budget', 'Budget')); ?>  
                        <?php echo e(Form::text('budget', '', ['class' => 'form-control', 'placeholder' => 'What is your maximum budget?'])); ?> 
                    </div> 

                    <div class="form-group">
                        <?php echo e(Form::label('timeline', 'Timeline')); ?>  
                        <?php echo e(Form::text('timeline', '', ['class' => 'form-control', 'placeholder' => 'What is your timeline for project completion?'])); ?> 
                    </div> 
    
                    <?php echo e(Form::submit('Submit', ['class'=> 'btn btn-primary'])); ?>

            
                <?php echo Form::close(); ?>



                </div>

        </div>

      
</section>
<?php /**PATH /home/chido/projects/laravel-projects/chidodesignsapp/resources/views/inc/contact-page/form.blade.php ENDPATH**/ ?>