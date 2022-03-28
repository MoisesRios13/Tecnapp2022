var btnAbrirPopup = document.getElementById('btn-abrir-popup1'),
	overlay = document.getElementById('overlay1'),
	popup = document.getElementById('popup1'),
    btnCerrarPopup = document.getElementById('btn-cerrar-popup1');
    
    btnAbrirPopup.addEventListener('click', function(){
        overlay.classList.add('active');
        popup.classList.add('active');
    });

    btnCerrarPopup.addEventListener('click', function(){
   
        overlay.classList.remove('active');
        popup.classList.remove('active');
    });

    var btnAbrirPopup2 = document.getElementById('btn-abrir-popup2'),
	overlay2 = document.getElementById('overlay2'),
	popup2 = document.getElementById('popup2'),
    btnCerrarPopup2 = document.getElementById('btn-cerrar-popup2');
    
    btnAbrirPopup2.addEventListener('click', function(){
        overlay2.classList.add('active');
        popup2.classList.add('active');
    });

    btnCerrarPopup2.addEventListener('click', function(){
   
        overlay2.classList.remove('active');
        popup2.classList.remove('active');
    });

    var btnAbrirPopup3 = document.getElementById('btn-abrir-popup3'),
	overlay3 = document.getElementById('overlay3'),
	popup3 = document.getElementById('popup3'),
    btnCerrarPopup3 = document.getElementById('btn-cerrar-popup3');
    
    btnAbrirPopup3.addEventListener('click', function(){
        overlay3.classList.add('active');
        popup3.classList.add('active');
    });

    btnCerrarPopup3.addEventListener('click', function(){
   
        overlay3.classList.remove('active');
        popup3.classList.remove('active');
    });

    var btnAbrirPopup4 = document.getElementById('btn-abrir-popup4'),
	overlay4 = document.getElementById('overlay4'),
	popup4 = document.getElementById('popup4'),
    btnCerrarPopup4 = document.getElementById('btn-cerrar-popup4');
    
    btnAbrirPopup4.addEventListener('click', function(){
        overlay4.classList.add('active');
        popup4.classList.add('active');
    });

    btnCerrarPopup4.addEventListener('click', function(){
   
        overlay4.classList.remove('active');
        popup4.classList.remove('active');
    });
