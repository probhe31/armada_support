<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bodega RAS Support</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all" />


        <style type="text/css">
            body{
                background-color: #00174E;
            }
            input{
                display: block;
                width: 100%;
                padding-left: 10px;
                padding-right: 0px;
                margin-left: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                padding-top: 10px;
                padding-bottom: 10px;
            }

            textarea{
                display: block;
                width: 100%;
                padding-left: 10px;
                padding-right: 10px;
                margin-left: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                padding-top: 10px;
                padding-bottom: 10px;

            }

            .main-btn{
                background-color: #6A3829;
                border-width: 0px;
                color: white;
            }

            .title_section{
                color: white;
                text-align: center;
            }

            .subtitle_section{
                color:white;
                text-align: center;
                margin-bottom: 10px;
            }

            .pb-image-pj{
                text-align: center;
            }

            .image_container{
                text-align: center;
                margin-bottom: 50px;
            }

            .contact-us{
                color: white;
            }
        </style>

       
    </head>
    <body>
       <div id="contact" class="section md-padding bg-white">

        <!-- Container -->
            <div class="container">

             <!-- Section-header -->
              
                <div class="row">

               

                        
                    <div class="col-md-4"></div>
                    <div class="col-md-4">

                        <div class="section-header text-left margin_left_pe">

                        <h2 class="title_section">BODEGA RAS</h2>
                        <h3 class="subtitle_section">Support</h3>
                        <div class="image_container"><img src="{{URL::asset('img/ic_launcher.png')}}" alt="Avatar" class="pb-image-pj"></div>


                        </div>

                       <span class="contact-us">Please contact us at </span><a href="mailto:soporte.pisco.armada@gmail.com">soporte.pisco.armada@gmail.com</a>

                        <!--{!! Form::open(['route' => 'contact.store']) !!}
                            {!! Form::text('name', null, ['class' => 'input', 'placeholder'=>__('Name')]) !!}
                            {!! Form::text('email', null, ['class' => 'input', 'placeholder'=>__('Email')]) !!}
                            {!! Form::textarea('msg', null, ['class' => 'input', 'placeholder'=>__('Message')]) !!}
                            {!! Form::submit(__('SEND'), ['class' => 'main-btn']) !!}
                        {!! Form::close() !!}-->

                    </div>
                     <div class="col-md-4"></div>

                 </div>

             </div> 

        </div>

   
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    </body>
</html>
