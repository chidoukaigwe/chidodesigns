<section class="row projects-shareposts-app-section">

    <div class="col-sm-12 col-md-12">

        <div class="jumbotron p-3 p-md-5 rounded custom-jumbotron projects-shareposts-app-section-jumbotron" style="background-color: #f2f2f2;">

            <h1 class="mg-btm-4 text-center">Chido Designs Social Network</h1>

            <strong><small>Node.js / ES6 - EJS</small></strong>
            <h4 class="mt-1"> <a href="http://social-network.chido-designs.co.uk/" target="_blank">Chido Designs Social Network</a></h4>

            <p class="mg-btm-1"> A Social Network, whereby users can create and share posts, follow users and talk to other users in real time. </p>

            <p class="mg-btm-4"> I deployed this Node.js/Express & MongoDB application via a Heroku CI/CD pipeline, creating multiple environments, [Dev / Stage / Prod], to test code. The application is running on basic Heroku dyno.</p>

            <h4 class="mt-1 blue-text">Objectives</h4>

            <ul class="mg-btm-4">
                <li>Create a user registration based app, that allowed user generated content with a full Javascript stack (Nodejs Server Side - ES6 & EJS Client Side) .</li>
                <li>Build an application that enabled users to follow each other.</li>
                <li>Build a full stack javascript application.</li>
                <li>Develop and deploy a Nodejs application with Heroku.</li>
            </ul>

            <img src="images/case-studies/social-network/chidodesignssocialnetworksignup.png" alt="Chido Designs Social Network App" class="mg-btm-4">

            <h4 class="mt-1 blue-text">App Overview</h4>

            <p class="mg-btm-4">
                This application is built in Node.js whilst utilizing the Express.js framework on the server side. We use EJS as our frontend templating engine, to help render data from the server.
                <br><br>
                The application mimics a social network, in that you can create a user,  follow other users, create posts and talk to users in real time.
                <br><br>
                We have utilized socket.io for real time chat within this application;user authentication - both stateful with sessions and stateless with JSON Web Tokens.
                <br><br>
                The application uses MongoDB as its database and we focus more on data collections as a way of handling and processing data.
            </p>

            <img src="images/case-studies/social-network/chidodesignssocialnetworkfeedpage.png" alt="Chido Designs Social Network App" alt="Chido Designs Social Network" class="mg-btm-4">

            <div class="btn-holder text-center chido-designs-welcome-section-btn">
                <a href="http://social-network.chido-designs.co.uk/" target="_blank">
                    <button type="button" class="btn btn-lg official-custom-btn">View Live Demo</button>
                </a>
                <a href="https://github.com/chidoukaigwe/Nodejs-social-network" target="_blank">
                    <button type="button" class="btn btn-lg btn-outline-secondary">View Source Code</button>
                </a>
            </div>

        </div> <!-- End Of Jumbotron -->

    </div> <!-- End Of Col -->

</section>
