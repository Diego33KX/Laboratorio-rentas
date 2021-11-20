<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            :root{
                --primary-color: #e50914;
                --dark-color: #141414;
                --light-color: #f4f4f4;
            }
            
            *{
                margin: 0;
                padding: 0;
            }
            
            body{
                font-family: Arial, Helvetica, sans-serif;
                background: #000000;
                color: #999999;
            }
            
            ul{
                list-style: none;
            }
            
            h1,h2,h3,h4{
                color: #ffffff;
            }
            
            h3{
                font-weight: lighter;
            }
            
            a{
                color: #ffffff;
                text-decoration: none;
            }
            
            p{
                margin: 0.5rem 0;
                font-weight: bold;
                color: #ffffff;
            }
            
            img{
                width: 100%;
            }
            
            .showcase{
                width: 100%;
                height: 100vh;
                position: relative;
                background: url("{{asset('/img/1.jpg')}}") no-repeat center center/cover;
            }
            
            .showcase::after{
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1;
                background: rgba(0, 0, 0, 0.4);
                box-shadow: 120px 100px 250px #000000 , inset -120px -100px 250px #000000;
            }
            
            .showcase-top{
                position: relative;
                z-index: 2;
                height: 90px;
            }
            
            .showcase-top img{
                width: 140px;
                position: absolute;
                top: 50%;
                left: 0;
                transform: translate(40% , -50%);
            }
            
            .showcase-top a{
                position: absolute;
                top: 50%;
                right: 0;
                transform: translate(-60% , -50%);
            }
            
            .showcase-content{
                position: relative;
                margin: 0 26%;
                z-index: 2;
                display: flex;
                flex-direction: column;
                justify-content: center;
                text-align: center;
                align-items: center;
                margin-top: 9rem;
            }
            
            .showcase-content h1{
                font-weight: 700;
                font-size: 64px;
                margin: 0 30px;
                max-width: 800px;
                line-height: 74.5px;
            }
            
            .showcase-content h3{
                color: white;
                font-size: 25px;
                margin: 16px 0;
            }
            
            .showcase-content p{
                font-size: 19.2px;
                font-weight: 300;
                padding-top: 0.5rem;
                padding-bottom: 1rem;
            }
            
            .showcase-content input{
                position: absolute;
                left: 0;
                bottom: -8vh;
                width: 454px;
                height: 3rem;
                font-size: 1rem;
                padding-left: 0.5rem;
            }
            
            .btn{
                display: inline-block;
                background: var(--primary-color);
                color: white;
                padding: 0.5rem 1.2rem;
                font-size: 1rem;
                text-align: center;
                border: none;
                cursor: pointer;
                border-radius: 2px;
                margin-right: 0.5rem;
                outline: none;
                box-shadow: 0 5px 3px rgba(0, 0, 0, 0.45);
            }
            
            .btn:hover{
                opacity: 0.9;
            }
            
            .btn-rounded{
                border-radius: 5px;
            }
            
            .showcase-content .btn-lg{
                position: absolute;
                right: 0;
                bottom: -8vh;
                padding: 0.5rem 1.2rem;
                font-size: 1.5rem;
                text-transform: uppercase;
                height: 36px;
                width: 14rem;
            }
            .mover1{
                position:relative;
                right:10%;
                top: 51%;
            }
            
            .card-3{
                border-top: 8px rgb(69, 69, 69) solid;
                padding: 50px;
            }
            
            .card-0{
                position: relative;
                display: inline-grid;
                grid-template-columns: 40% 50%;
                text-align: left;
                align-items: center;
                padding: 25px 45px 50px;
            }
            
            .desc-0{
                padding-left: 100px;
            }
            
            .card-1{
                position: relative;
                display: inline-grid;
                grid-template-columns: 50% 40%;
                text-align: left;
                align-items: center;
                padding: 25px 45px 50px;
            }
            
            .desc-1{
                padding-left: 80px;
            }
            
            .style-cards h1{
                font-size: 3rem;
                padding: 1rem;
                padding-left: 0;
            }
            
            .style-cards h3{
                font-size: 1.6rem;
                line-height: 2rem;
            }
            
            .card-1 video{
                position: relative;
                width: 100%;
                height: 54%;
                grid-column: 2/2;
                grid-row: 1/2;
                z-index: -1;
            }
            
            .card-1 img{
                grid-column: 2/2;
                grid-row: 1/2;
            }
            
            
            .card-3{
                position: relative;
                display: inline-grid;
                grid-template-columns: 50% 40%;
                text-align: left;
                align-items: center;
                padding: 25px 45px 50px;
            }
            
            .desc-3{
                padding-left: 80px;
                padding-right: 20px;
            }
            
            .card-3 img{
                width: 110%;
                grid-column: 2/2;
                grid-row: 1/2;
            }
            
            .card-3 video{
                position: relative;
                top: -87px;
                left: 125px;
                width: 65%;
                height: 78%;
                grid-column: 2/2;
                grid-row: 1/2;
                z-index: -1;
            }
            
            .faq{
                text-align: center;
            }
            
            .faq h1{
                padding-bottom: 40px;
                font-size: 3rem;
            }
            
            .questions{
                display: flex;
                flex-direction: column;
                flex-basis: 40%;
                align-items: center;
            }
            
            .questions li{
                padding: 20px 30px;
                margin: 5px;
                font-size: 1.6rem;
                background-color: #303030;
                color: white;
                text-align: left;
                width: 50%;
            }
            
            .faq p{
                padding-top: 60px;
                font-size: 1.2rem;
                font-weight: 200;
            }
            
            .input{
                display: inline-grid;
                align-items: center;
                grid-template-columns: 50% 40%;
            }
            
            .input input{
                width: 600px;
                height: 3rem;
            }
            
            .input button{
                height: 3.25rem;
                width: 320px;
                left: 20px;
                text-align: center;
                background-color: var(--primary-color);
                font-size: 1.5rem;
                padding: 15px 32px;
                border: none;
                border-radius: 2px;
                color: white;
            }
            
            .footer{
                max-width: 70%;
                margin: 1rem auto;
                overflow: auto;
            }
            
            .footer ,
            .footer a{
                color: #999999;
                font-size: 0.9rem;
            }
            
            .footer p{
                margin-bottom: 1.5rem;
            }
            
            .footer .footer-cols{
                display: grid;
                grid-template-columns: repeat(4 , 1fr);
                grid-gap: 2rem;
            }
            
            .footer li{
                line-height: 2.4;
            }
            
            
            
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
            body{
                line-height: 1.5;
                font-family: 'Poppins', sans-serif;
            }
            *{
                margin:0;
                padding:0;
                box-sizing: border-box;
            }
            .container{
                max-width: 1170px;
                margin:auto;
            }
            .row{
                display: flex;
                flex-wrap: wrap;
            }
            ul{
                list-style: none;
            }
            .footer{
                background-color: #24262b;
                padding: 20px 0;
            }
            .footer-col{
               width: 25%;
               padding: 0 15px;
            }
            .footer-col h4{
                font-size: 18px;
                color: #ffffff;
                text-transform: capitalize;
                margin-bottom: 35px;
                font-weight: 500;
                position: relative;
            }
            .footer-col h4::before{
                content: '';
                position: absolute;
                left:0;
                bottom: -10px;
                background-color: #e91e63;
                height: 2px;
                box-sizing: border-box;
                width: 50px;
            }
            .footer-col ul li:not(:last-child){
                margin-bottom: 10px;
            }
            .footer-col ul li a{
                font-size: 16px;
                text-transform: capitalize;
                color: #ffffff;
                text-decoration: none;
                font-weight: 300;
                color: #bbbbbb;
                display: block;
                transition: all 0.3s ease;
            }
            .footer-col ul li a:hover{
                color: #ffffff;
                padding-left: 8px;
            }
            .footer-col .social-links a{
                display: inline-block;
                height: 40px;
                width: 40px;
                background-color: rgba(255,255,255,0.2);
                margin:0 10px 10px 0;
                text-align: center;
                line-height: 40px;
                border-radius: 50%;
                color: #ffffff;
                transition: all 0.5s ease;
            }
            .footer-col .social-links a:hover{
                color: #24262b;
                background-color: #ffffff;
            }
            
            /*responsive*/
            @media(max-width: 767px){
              .footer-col{
                width: 50%;
                margin-bottom: 30px;
            }
            }
            @media(max-width: 574px){
              .footer-col{
                width: 100%;
            }
            } 
        </style>
    </head>
    <body>
        <header class="showcase">
            <div class="showcase-top">
                <img src="{{asset('/img/logo.png')}}" alt="Netflix Logo">
                    <div class="mover1">
                        <a href="{{ route('login') }}" class="btn btn-rounded">Login</a>
                    </div>
                        <div>
                            <a href="{{ route('register') }}" class="btn btn-rounded">Registrer</a>
                        </div>
            </div>

            <div class="showcase-content">
                <h1>Películas y series ilimitadas y mucho más</h1>
                <h3>Disfruta donde quieras. Cancela cuando quieras.</h3>
                <p>¿Quieres ver Netflix ya? Ingresa tu email y tu contraseña para y visualiza el contenido ilimitado que te ofrecemos.</p>
            </div>
        </header>
    
        <section class="style-cards">
            <div class="card-1">
                <div class="desc-1">
                    <h1>Disfruta en tu TV.</h1>
                    <h3>Míralo en televisores inteligentes, PlayStation, Xbox, Chromecast, Apple TV, reproductores de Blu-ray y más.</h3>
                </div>
                <img src="{{asset('/img/tv.png')}}" alt="Netflix TV">
                <video class="video-1" autoplay="" playsinline="" muted="" loop=""><source src="{{asset('/img/1.m4v')}}" type="video/mp4"></video>
            </div>
        </section>
    
        <section class="lastsec">
            <div class="faq">
                <h1>PREGUNTAS FRECUENTES</h1>
                <ul class="questions">
                    <li>¿Qué es Netflix?</li>
                    <li>¿Cuánto cuesta Netflix?</li>
                    <li>¿Dónde puedo mirar?</li>
                    <li>¿Cómo cancelo?</li>
                    <li>¿Qué puedo ver en Netflix?</li>
                </ul>
            </div>
        </section>
        <!--PIE DE PAGINA -->
    
        <footer class="footer">
           <div class="container">
               <div class="row">
                   <div class="footer-col">
                       <h4>INTEGRANTES</h4>
                       <ul>
                           <li><a href="#">ALUMNO 1</a></li>
                           <li><a href="#">ALUMNO 2</a></li>
                           <li><a href="#">ALUMNO 3</a></li>
                           <li><a href="#">ALUMNO 4</a></li>
                       </ul>
                   </div>
                   <div class="footer-col">
                       <h4>SIGUENOS EN</h4>
                       <div class="social-links">
                           <a href="#"><i class="fab fa-facebook-f"></i></a>
                           <a href="#"><i class="fab fa-twitter"></i></a>
                           <a href="#"><i class="fab fa-instagram"></i></a>
                           <a href="#"><i class="fab fa-linkedin-in"></i></a>
                       </div>
                   </div>
               </div>
           </div>
      </footer>
    </body>
</html>