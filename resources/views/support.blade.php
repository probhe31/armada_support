<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bodega RAS Support</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all" />

 <link rel="stylesheet" href="css/pisco_armada.css" type="text/css" media="all" />


   

       
    </head>
    <body>
       <div id="contact" class="section md-padding bg-white">

        <!-- Container -->
            <div class="container">

             <!-- Section-header -->
              
                <div class="row">

               

                        
                    <div class="col-md-3"></div>
                    <div class="col-md-6">

                        <div class="section-header text-left margin_left_pe">

                        <h2 class="title_section">BODEGA RAS</h2>
                        <h3 class="subtitle_section">Support</h3>
                        <div class="image_container"><img src="{{URL::asset('img/web_hi_res_512.png')}}" alt="Avatar" class="logo" width="180px"></div>


                        </div>

                       <p class="contact-us">Please contact us at:</p>
                       <p class="contact-us"><a class="link" href="mailto:soporte.pisco.armada@gmail.com">soporte.pisco.armada@gmail.com</a></p>

                        <!--{!! Form::open(['route' => 'contact.store']) !!}
                            {!! Form::text('name', null, ['class' => 'input', 'placeholder'=>__('Name')]) !!}
                            {!! Form::text('email', null, ['class' => 'input', 'placeholder'=>__('Email')]) !!}
                            {!! Form::textarea('msg', null, ['class' => 'input', 'placeholder'=>__('Message')]) !!}
                            {!! Form::submit(__('SEND'), ['class' => 'main-btn']) !!}
                        {!! Form::close() !!}-->

                    </div>
                     <div class="col-md-3"></div>

                 </div>

             </div> 

        </div>

   
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    </body>
</html>
