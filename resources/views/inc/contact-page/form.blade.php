<section class="row contact-intro-section">

        <div class="col-sm-12 col-md-12">
    
                <div class="jumbotron p-3 p-md-5 rounded custom-jumbotron contact-intro-section-jumbotron">

                    @include('inc.messages')
                    
                    {!! Form::open(['action' => 'PagesController@contactForm', 'method' => 'POST']) !!}

                    <div class="form-group">
                        {{Form::label('full-name', 'Full Name')}}  
                        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Full Name'])}}  
                        @if(Session::has('error'))
                            <p>{{ Session::get('error') }}</p>
                        @endif
                    </div> 
            
                    <div class="form-group">
                        {{Form::label('email', 'Email Address')}}  
                        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Example@example.com'])}} 
                    </div> 

                    <div class="form-group">
                        {{Form::label('subject', 'Subject')}}  
                        {{Form::text('subject', '', ['class' => 'form-control', 'placeholder' => 'Can you help me build a website?'])}} 
                    </div> 

                    <div class="form-group">
                        {{Form::label('budget', 'Budget')}}  
                        {{Form::text('budget', '', ['class' => 'form-control', 'placeholder' => 'What is your maximum budget?'])}} 
                    </div> 

                    <div class="form-group">
                        {{Form::label('timeline', 'Timeline')}}  
                        {{Form::text('timeline', '', ['class' => 'form-control', 'placeholder' => 'What is your timeline for project completion?'])}} 
                    </div> 
    
                    {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
            
                {!! Form::close() !!}


                </div>

        </div>

      
</section>
