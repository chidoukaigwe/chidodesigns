<section class="row projects-shareposts-app-section">

    <div class="col-sm-12 col-md-12">

        <div class="jumbotron p-3 p-md-5 rounded custom-jumbotron projects-shareposts-app-section-jumbotron" style="background-color: #f2f2f2;">

            <h1 class="mg-btm-4 text-center">SharePosts App</h1>

            <strong><small>Custom PHP MVC Framework</small></strong>
            <h4 class="mt-1"> <a href="http://shareposts.chido-designs.co.uk/users/register" target="_blank">SharePost App</a></h4>

            <p class="mg-btm-1"> An app that allows users to share posts with each other. Simply create an account, sign in and use the app.</p>

            <p class="mg-btm-4"> I deployed this custom MVC within a Docker container, to experiment and explore Docker containerization, in a potential production environment. <br/> The application is running on a <a href="http://rancher.com" target="_blank">Rancher</a>  installation within my <a href="https://www.vultr.com/" target="_blank">Vultr</a> cloud server.</p>

            <h4 class="mt-1 blue-text">Objectives</h4>

            <ul class="mg-btm-4">
                <li>Create A small custom PHP based MVC Framework.</li>
                <li>Understand how MVC frameworks like Laravel, Symfony, Slim work under the hood.</li>
                <li>Understand how routing works within MVC frameworks.</li>
                <li>Understand the separation of concerns, behind the MVC design pattern .</li>
            </ul>

            <img src="images/case-studies/sharepost-app/shareposts-mvc-createacc.png" alt="SharePost App" class="mg-btm-4">

            <h4 class="mt-1 blue-text">App Overview</h4>

            <p class="mg-btm-4">
                This application is built based on OOP principles; and the segmenting into three main logical components: The Model, The View and The Controller. Creating my own MVC Framework gave me a better insight into component driven development, it also enabled me to look at the popular Laravel & Symfony frameworks and understand what is happening at the core level.
                <br><br>
                The application at its core level mimics the data architecture of the Laravel or Symfony framework. A public folder *holding all app assets* with an index file initialization file. We have a bootstrap file *that sits in an app folder* that brings in all the necessary files to start up the app.
                <br><br>
                The code is easy to read and maintain and enables efficient codebase scaling.
            </p>

            <img src="images/case-studies/sharepost-app/shareposts-mvc-posts-page.png" alt="SharePost App" class="mg-btm-4">

            <div class="btn-holder text-center chido-designs-welcome-section-btn">
                <a href="http://shareposts.chido-designs.co.uk:8080/" target="_blank">
                    <button type="button" class="btn btn-lg official-custom-btn">View Live Demo</button>
                </a>
                <a href="https://github.com/chidoukaigwe/sharepostsapp" target="_blank">
                    <button type="button" class="btn btn-lg btn-outline-secondary">View Source Code</button>
                </a>
                <a href="https://hub.docker.com/repository/docker/chidodesigns/sharepostapp" target="_blank">
                    <button type="button" class="btn btn-lg btn-outline-secondary">Docker Image</button>
                </a>
            </div>

        </div> <!-- End Of Jumbotron -->

    </div> <!-- End Of Col -->

</section>
<?php /**PATH /home/chido/projects/laravel-projects/chidodesignsapp/resources/views/inc/projects-page/shareposts-app.blade.php ENDPATH**/ ?>