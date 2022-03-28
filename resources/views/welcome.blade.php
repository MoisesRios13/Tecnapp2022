<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tecnapp</title>

        <link rel="shortcut icon" href="{{asset('imgs/tecnapp.png')}}">
        <link rel="shortcut icon" sizes="16x16" href="{{asset('imgs/tecnapp.png')}}">
        <link rel="shortcut icon" sizes="32x32" href="{{asset('imgs/tecnapp.png')}}">
        <link rel="apple-touch-icon" href="{{asset('favicon_io/apple-touch-icon.png')}}">
        <link rel="icon" href="{{asset('imgs/tecnapp.png')}}" sizes="192x192">
        <link rel="icon" href="{{asset('imgs/tecnapp.png')}}" sizes="512x512">
       

        <!-- Fonts -->
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            html{line-height:1.15;-webkit-text-size-adjust:100%}a{background-color:transparent}[hidden]{display:none}
            html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,
                Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before
                {box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}
                video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
                
                body{
                    background-size: cover; 
                    background-repeat: no-repeat; 
                    margin:0; 
                    background-image: url({{asset('imgs/fondo-inicio.png')}});
                    font-family: 'Nunito';
                }
                .barra {
                    background-color: rgba(255, 255, 255,0.6);
                    width: 100%;
                    height: 10%;
                    display: flex;
                    justify-content: space-around;
                   
                    align-items: center;
                    
                  
                   
                }
                .contenedor-padre{
                    display: flex;
                    flex-direction: column;
                    ;
                    justify-content: space-between;;
                    align-items: center;
                    height: 500px;
                    
                }
                .logo-login{
                    display: flex;
                    flex-direction: column;
                    border-radius: 20px;
                    padding: 10px;
                    align-items: center;
                    justify-content: center;
                    background-color: rgba(255, 255, 255,0.6);
                    
                    font-family: 'Nunito';
                    
                }
                .publico1, .publico2, .publico3, .publico4{
                    border-radius: 10px;
                   height: 40px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .publico1:hover, .publico2:hover, .publico3:hover, .publico4:hover{
                    background-color: rgba(255, 255, 255, 0.8);
                    cursor: pointer;
                }
                .boton-login{
                    border-radius: 10px;
                   height: 50px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    background-color: rgba(255, 255, 255, 0.7);
                }
                .boton-login:hover{
                    background-color: rgba(255, 255, 255, 1);
                    cursor: pointer;
                }
                a{
                    font-family: 'Nunito';
                }
/* inicio estilos del POP-UP */ 
                .overlay1{
    background-color: rgba(0, 0, 0, 0.3); 
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    visibility: hidden;
} 

.overlay1.active{
    visibility: visible;
}

.popup1 {
    background-image: url("MATERIAL PAGINA/fondos-jardin/publica.png");
    background-size: cover;
    
    box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.3);
    border-radius: 3px;
    font-family: 'Mulish', sans-serif;
    padding: 20px;
    text-align: center;
    width: 600px;
    border-radius: 30px;
    opacity: 0;
    transition: .5s ease all;
transform: scale(0.7);
} 

.popup1::before{
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.7);
    opacity: 1;
    top: 0;
    left: 0;
    border-radius: 30px;
    background-size: cover;
 }

.popup1 .btn-cerrar-popup1 {
    display: flex;
    flex-direction: row-reverse;
  
    
}

.btn-cerrar-popup1 img{
    width: 30px;
   opacity: 0.9;
}

.popup1 h2{
    font-size: 36px;
    margin-bottom: 50px;
    opacity: 0;
transition: 0.3s ease all;


}



.popup1 p{
    font-size: 26px;
    margin-bottom: 30px;
   
 opacity: 0;


}

.overlay2{
    background-color: rgba(0, 0, 0, 0.3); 
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    visibility: hidden;
} 

.overlay2.active{
    visibility: visible;
}

.popup2 {
    background-image: url("MATERIAL PAGINA/fondos-jardin/publica.png");
    background-size: cover;
    border-radius: 3px;
    font-family: 'Mulish', sans-serif;
    padding: 20px;
    text-align: center;
    width: 600px;
    border-radius: 30px;
    opacity: 0;
    transition: .5s ease all;
transform: scale(0.7);
} 

.popup2::before{
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.7);
    opacity: 1;
    top: 0;
    left: 0;
    border-radius: 30px;
    background-size: cover;
 }


.popup2 .btn-cerrar-popup2 {
    display: flex;
    flex-direction: row-reverse;
  
    
}

.btn-cerrar-popup2 img{
    width: 30px;
   opacity: 0.9;
}

.popup2 h2{
    font-size: 36px;
    margin-bottom: 50px;
    opacity: 0;
transition: 0.3s ease all;


}



.popup2 p{
    font-size: 26px;
    margin-bottom: 30px;
   
 opacity: 0;


}

.overlay3{
    background-color: rgba(0, 0, 0, 0.3); 
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    visibility: hidden;
} 

.overlay3.active{
    visibility: visible;
}

.popup3 {
    background-image: url("MATERIAL PAGINA/fondos-jardin/publica.png");
    background-size: cover;
    border-radius: 3px;
    font-family: 'Mulish', sans-serif;
    padding: 20px;
    text-align: center;
    width: 600px;
    border-radius: 30px;
    opacity: 0;
    transition: .5s ease all;
transform: scale(0.7);
} 

.popup3::before{
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.7);
    opacity: 1;
    top: 0;
    left: 0;
    border-radius: 30px;
    background-size: cover;
 }

.popup3 .btn-cerrar-popup3 {
    display: flex;
    flex-direction: row-reverse;
  
    
}

.btn-cerrar-popup3 img{
    width: 30px;
   opacity: 0.9;
}

.popup3 h2{
    font-size: 36px;
    margin-bottom: 50px;
    opacity: 0;
transition: 0.3s ease all;


}



.popup3 p{
    font-size: 26px;
    margin-bottom: 30px;
   
 opacity: 0;


}

.overlay4{
    background-color: rgba(0, 0, 0, 0.3); 
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    visibility: hidden;
} 

.overlay4.active{
    visibility: visible;
}

.popup4 {
    background-image: url("MATERIAL PAGINA/fondos-jardin/publica.png");
    background-size: cover;
    border-radius: 3px;
    font-family: 'Mulish', sans-serif;
    padding: 20px;
    text-align: center;
    width: 800px;
    border-radius: 30px;
    opacity: 0;
    transition: .5s ease all;
transform: scale(0.7);
} 

.popup4::before{
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.7);
    opacity: 1;
    top: 0;
    left: 0;
    border-radius: 30px;
    background-size: cover;
 }

.popup4 .btn-cerrar-popup4 {
    display: flex;
    flex-direction: row-reverse;

}

.btn-cerrar-popup4 img{
    width: 30px;
   opacity: 0.9;
}

.popup4 h2{
    font-size: 36px;
    margin-bottom: 50px;
    opacity: 0;
transition: 0.3s ease all;


}



.popup4 p{
    font-size: 26px;
    margin-bottom: 30px;
   
 opacity: 0;


}
.popup4 iframe{
 opacity: 0.9;


}

/*animaciones*/

.popup1.active {
opacity: 1;
transform: scale(1);
}

.popup1.active h2{
    animation: entradatitulo .8s ease .5s forwards;
}
.popup1.active p{
    animation: entradatext .8s ease .5s forwards;
}

@keyframes entradatitulo{
    from {
        transform: translateY(-25px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes entradatext{
    from {
        transform: translateY(25px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.popup2.active {
    opacity: 1;
    transform: scale(1);
    }
    
    .popup2.active h2{
        animation: entradatitulo .8s ease .5s forwards;
    }
    .popup2.active p{
        animation: entradatext .8s ease .5s forwards;
    }
    
    @keyframes entradatitulo{
        from {
            transform: translateY(-25px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
    
    @keyframes entradatext{
        from {
            transform: translateY(25px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .popup3.active {
        opacity: 1;
        transform: scale(1);
        }
        
        .popup3.active h2{
            animation: entradatitulo .8s ease .5s forwards;
        }
        .popup3.active p{
            animation: entradatext .8s ease .5s forwards;
        }
        
        @keyframes entradatitulo{
            from {
                transform: translateY(-25px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        @keyframes entradatext{
            from {
                transform: translateY(25px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .popup4.active {
            opacity: 1;
            transform: scale(1);
            }
            
            .popup4.active h2{
                animation: entradatitulo .8s ease .5s forwards;
            }
            .popup4.active p{
                animation: entradatext .8s ease .5s forwards;
            }
            
            @keyframes entradatitulo{
                from {
                    transform: translateY(-25px);
                    opacity: 0;
                }
                to {
                    transform: translateY(0);
                    opacity: 1;
                }
            }


            
            @keyframes entradatext{
                from {
                    transform: translateY(25px);
                    opacity: 0;
                }
                to {
                    transform: translateY(0);
                    opacity: 1;
                }
            } /* fin estilos del POP-UP */ 
        </style>

        
    </head>
    <body  >
        <div class="contenedor-padre"><!-- inicio contenedor padre -->
            
                
            <!-- barra de metodologia, vision, mision y contactos -->
                <div class="barra">
                    <div class="publico1" id="btn-abrir-popup1">
                        <h3>Metodologia</h3>

                    </div>
                    <div class="publico2" id="btn-abrir-popup2">
                        <h3>Mision</h3>

                    </div>
                    <div class="publico3" id="btn-abrir-popup3">
                        <h3>Vision</h3>

                    </div>
                    <div class="publico4" id="btn-abrir-popup4">
                        <h3>Contactenos</h3>
  
                    </div>
                </div>
            <!-- FIN barra de metodologia, vision, mision y contactos -->

            <!-- LOGOTIPOS Y BOTON DE LOGIN -->
            
                <div class="logo-login">
                    <div class="" style="">
						<img src="{{asset('imgs/tecnapp-jardin.png')}}"  width="500px">
                    </div>
                    <div class="boton-login">
                        <a
                        href="{{ route('login') }}" >
                        Iniciar sesion
                        </a>
                    </div>
                </div>
            <div>
            <!-- pie de pagina -->
            </div>
            <!-- FIN LOGOSTIPOS Y BOTON DE LOGIN -->

        </div><!-- fin contenedor padre -->

        <!-- POP UP INICIO --> 
<div class="overlay1" id="overlay1">
<div class="popup1" id="popup1">
  <a href="#" id="btn-cerrar-popup1" class="btn-cerrar-popup1"><img src="{{asset('imgs/close.png')}}"  alt="" class="fas fa-times"></a>
  <h2>Metodologia</h2>
  <p>Promover el bienestar integral de nuestros beneficiarios, ampliando y diversificando nuevos conocimientos, en un ambiente
    protegido y seguro, diseñado especialmente para fortalecer valores, principios y nuevos aprendizajes a travez de las experiencias.
  </p>

  </div>
</div>

<div class="overlay2" id="overlay2">
  <div class="popup2" id="popup2">
    <a href="#" id="btn-cerrar-popup2" class="btn-cerrar-popup2"><img src="{{asset('imgs/close.png')}}"  alt="" class="fas fa-times"></a>
    <h2>Mision</h2>
    <p>Prestar un servicio con amor y responsabilidad, donde el desarrollo integral a la primera infancia, el trabajo con la familia y los jovenes es nuestro principal objetivo. Establecemos acciones pedagogicas 
      y ludicas mediante estandares educativos de alta calidad, apoyados en un equipo de profesionales idoneos, que trabajan respetando las diferencias multiculturales y los procesos de aprendizaje de los beneficios que nos acompañan.
    </p>
  
    </div>
  </div>

  <div class="overlay3" id="overlay3">
    <div class="popup3" id="popup3">
      <a href="#" id="btn-cerrar-popup3" class="btn-cerrar-popup3"><img src="{{asset('imgs/close.png')}}"  alt="" class="fas fa-times"></a>
      <h2>Vision</h2>
      <p>Seremos reconocidos como lideres en la atencion integral a la primera infancia y el trabajo con la comunidad, mediante el fortalecimiento del talento humano,
        el mejoramiento continuo de los estandares de calidad y al acondicionamiento de espacios seguros, que nos permitan brindar un servicio con exelencia.
      </p>
    
      </div>
    </div>

    <div class="overlay4" id="overlay4">
      <div class="popup4" id="popup4">
        <a href="#" id="btn-cerrar-popup4" class="btn-cerrar-popup4"><img src="{{asset('imgs/close.png')}}"  alt="" class="fas fa-times"></a>
        <h2>Contactenos</h2>
        <p>Diagonal 43 sur # 20-36 <br>
        Santa Lucia <br>
      Bogota DC <BR>
      Cel: 3183819029</BR></p>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.09901672771!2d-74.12542058474935!3d4.576233543997253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f990345968a8b%3A0xe3766d6d2bdcf439!2sMARCAR%20Y%20BORDAR!5e0!3m2!1ses!2sco!4v1632622747275!5m2!1ses!2sco" 
           width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>

</div>
<!-- POP UP FIN --> 
<script src="{{asset('imgs/java.js')}}"></script>
    </body>
</html>
