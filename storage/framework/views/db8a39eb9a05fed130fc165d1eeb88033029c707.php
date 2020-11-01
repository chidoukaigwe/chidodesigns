<section class="row featured-work-section">

        <div class="col-sm-12 col-md-12">

                <div class="jumbotron p-3 p-md-5 rounded custom-jumbotron" style="background-color: #f2f2f2;">

                    <h1 class="mg-btm-4 text-center">Hostfront</h1>

                    <div class="row featured-work-row">

                            <div class="col-sm-12 col-md-12">

                                <strong><small>Web Hosting - Wordpress RESTful API</small></strong>
                                <h4 class="mt-1"> <a href="https://hostfront.co.uk/" target="_blank">Hostfront</a></h4>
                                <p class="mg-btm-2">Bring your digital vision to life in choosing a web hosting service, dedicated to bootstrapping digital ideas through bespoke managed wordpress hosting.</p>

                                <h4 class="mt-1 featured-work-section-header">The Brief</h4>

                                <p class="mg-btm-2">
                                  Create a web hosting service website, that details and displays the clients web host offerings. The application content must be accessible and easily manageable by the client, and its internal stakeholders; whilst the frontend application is API focused, with a clean consumer facing interface.
                                </p>


                                <p class="mg-btm-4">
                                    The frontend application built in Angular, communicates with the Wordpress REST Api to render data from the CMS. This application also connects with the
                                    Vultr API (cloud hosting) to handle customer hosting options and accounts.
                                </p>

                                <img src="images/case-studies/hostfront/hostfrontmainpage.png" alt="Hostfront Case Study Image" class="mg-btm-4">

                                <h4 class="mt-1 featured-work-section-header">The Solution</h4>

                                <p class="mg-btm-2">The Hostfront project is a headless cms build, with the focus of separating the management of content from the user interface.</p>

                                <p class="mg-btm-2">
                                    I built the backend in PHP within the Wordpress ecosystem, developing a custom plugin that would interact with the Wordpress RESTful features; creating custom API endpoints, that would enable the frontend application to make calls and receive data. The 'Advance Custom Fields' plugin is included within this build to help speed up the process of creating custom fields that interact with custom post types. The cms is built around global custom field modules, which creates flexibility for content creators to dynamically build out content.
                                </p>

                                <p class="mg-btm-2">
                                The frontend application is built in Angular 9, and acts as a two fold app. The first job it has, is to render the content from the CMS and display it to the end user. The second job is to consume third party apis and render or process their data. The choice in using Angular, was to take full advantage of a framework that has a wealth of tools and libraries built in; essentially giving us the capability to build a full scale web application, that interacts with a Wordpress backend.
                                </p>


                            </div>

                    </div> <!-- End Of Development Stack Row -->

                    <div class="btn-holder text-center chido-designs-welcome-section-btn">
                        <a href="https://hostfront.co.uk" target="_blank">
                            <button type="button" class="btn btn-lg official-custom-btn mg-top-2">View Website</button>
                        </a>
                    </div>

                </div> <!-- End Of Jumbotron -->

        </div>

</section>
<?php /**PATH /home/chido/projects/laravel-projects/chidodesignsapp/resources/views/inc/clients-page/client-hostfront.blade.php ENDPATH**/ ?>