<<<<<<< HEAD
//Remover los title de los a
window.onload = function() {
    var links = document.getElementsByTagName("a");
    for (var i = 0; i < links.length; i++) {
        var link = links[i];
        link.onmouseover = function() {
            this.setAttribute("org_title", this.title);
            this.title = "";
        };
        link.onmouseout = function() {
            this.title = this.getAttribute("org_title");
        };
    }
};

// JavaScript
window.sr = ScrollReveal({ reset: false, mobile: false });


      var hero = {
        origin   : "top",
        distance : "24px",
        duration : 900,
        scale    : 1.05,
      }
      
      
      var clientes = {
        origin   : "top",
        distance : "24px",
        duration : 900,
        scale    : 1.05,
        delay    : 900,
      }

      var intro = {
        origin   : "bottom",
        distance : "64px",
        duration : 900,
        delay    : 400,
        scale    : 1,
      }

      var resaltado = {
        origin   : "left",
        distance : "32px",
        duration : 900,
        delay    : 400,
        scale    : 0,
      }

      
      var aplicaciones = {
        origin   : "top",
        distance : "24px",
        duration : 900,
        scale    : 1.05,
        delay    : 600
      }

      
      var titulo = {
        origin   : "bottom",
        distance : "32px",
        duration : 800,
        delay    : 0,
        scale    : 0,
      }
      
       var subtituloH3 = {
        origin   : "bottom",
        distance : "32px",
        duration : 800,
        delay    : 200,
        scale    : 0,
      }
       
       var subtituloH4 = {
        origin   : "bottom",
        distance : "32px",
        duration : 800,
        delay    : 300,
        scale    : 0,
      }
      
      var imagenes = {
        origin   : "left",
        distance : "32px",
        duration : 400,
        delay    : 300,
        scale    : 0,
      }
      
    var contenido = {
        origin   : "bottom",
        distance : "32px",
        duration : 600,
        delay    : 200,
        scale    : 0,
      }

        
        sr.reveal('#intro h1', intro);
        sr.reveal('#intro p',  { duration: 900, delay: 900 });
        sr.reveal('#intro h2', { duration: 900, delay: 900 });
        sr.reveal('#intro .flex', { duration: 900, delay: 1000 });
        sr.reveal('#aplicaciones img', aplicaciones , 300);
        
        sr.reveal('#imagen-corporativa h2', intro);
        sr.reveal('.tarjetas, #imagen-corporativa .flex', hero);
        
        sr.reveal('#vender h2, #razones-diseno h2', resaltado);
        sr.reveal('#vender .texto',  { origin: "top", duration: 900, delay: 1200 });

        sr.reveal('#suscribete h4', resaltado);
        sr.reveal('#suscribete img',  { origin: "left", scale: 0, duration: 1000, delay: 800 });
        
        sr.reveal('#clientes h3', intro , 200);
        sr.reveal('#clientes img', clientes , 250);
        
        sr.reveal('#razones-diseno .bloque',  { origin: "top", scale: 0, duration: 1000, delay: 600 });
        
        //Animación en general
        sr.reveal('.animacion h2', titulo);
        sr.reveal('.animacion h3', subtituloH3);
        sr.reveal('.animacion h4', subtituloH4);
        sr.reveal('.animacion img', imagenes);
        sr.reveal('.animacion p', contenido);
        sr.reveal('.animacion a.boton', contenido);

      function addCommasToNum( num ){
        return num.toString().replace( /\B(?=(\d{3})+(?!\d))/g, "," )
      }

    
//smooth scroll
jQuery(function( $ ){

	// Smooth scrolling when clicking on a hash link
	$('a[href^="#"').on('click',function (e) {
		e.preventDefault();

		var target = this.hash;
		var $target = $(target);

		if ( $(window).width() > 1023 ) {
			var $scrollTop = $target.offset().top-140;
		} else {
			var $scrollTop = $target.offset().top;
		}

		$('html, body').stop().animate({
			'scrollTop': $scrollTop
		}, 900, 'swing');
	});
    
    
  
    $('.caracteristica').click(function(e) {
  	e.preventDefault();
  
        var $this = $(this);        
        var target = this.hash;        
        var $target = $(target); 
        var posicion = 200;
       

		
  
    if ($this.next().hasClass('show')) {
        $this.next().removeClass('show');
        $this.next().slideUp(350);
        posicion = 200;
         
    } else {
        $this.parent().parent().find('li .detalles').removeClass('show');
        $this.parent().parent().find('li .detalles').slideUp(350);
        $this.next().toggleClass('show');
        $this.next().slideToggle(350);
        
       
    }
    
        
     if ( $(window).width() > 1023 ) {
			var $scrollTop = $this.offset().top - posicion;
		} else {
			var $scrollTop = $this.offset().top - posicion;
		}
        
        
    $('html, body').stop().animate({
			'scrollTop': $scrollTop
		}, 900, 'swing');
        
});
    
     

=======
//Remover los title de los a
window.onload = function() {
    var links = document.getElementsByTagName("a");
    for (var i = 0; i < links.length; i++) {
        var link = links[i];
        link.onmouseover = function() {
            this.setAttribute("org_title", this.title);
            this.title = "";
        };
        link.onmouseout = function() {
            this.title = this.getAttribute("org_title");
        };
    }
};

// JavaScript
window.sr = ScrollReveal({ reset: false, mobile: false });


      var hero = {
        origin   : "top",
        distance : "24px",
        duration : 900,
        scale    : 1.05,
      }
      
      
      var clientes = {
        origin   : "top",
        distance : "24px",
        duration : 900,
        scale    : 1.05,
        delay    : 900,
      }

      var intro = {
        origin   : "bottom",
        distance : "64px",
        duration : 900,
        delay    : 400,
        scale    : 1,
      }

      var resaltado = {
        origin   : "left",
        distance : "32px",
        duration : 900,
        delay    : 400,
        scale    : 0,
      }

      
      var aplicaciones = {
        origin   : "top",
        distance : "24px",
        duration : 900,
        scale    : 1.05,
        delay    : 600
      }

      
      var titulo = {
        origin   : "bottom",
        distance : "32px",
        duration : 800,
        delay    : 0,
        scale    : 0,
      }
      
       var subtituloH3 = {
        origin   : "bottom",
        distance : "32px",
        duration : 800,
        delay    : 200,
        scale    : 0,
      }
       
       var subtituloH4 = {
        origin   : "bottom",
        distance : "32px",
        duration : 800,
        delay    : 300,
        scale    : 0,
      }
      
      var imagenes = {
        origin   : "left",
        distance : "32px",
        duration : 400,
        delay    : 300,
        scale    : 0,
      }
      
    var contenido = {
        origin   : "bottom",
        distance : "32px",
        duration : 600,
        delay    : 200,
        scale    : 0,
      }

        
        sr.reveal('#intro h1', intro);
        sr.reveal('#intro p',  { duration: 900, delay: 900 });
        sr.reveal('#intro h2', { duration: 900, delay: 900 });
        sr.reveal('#intro .flex', { duration: 900, delay: 1000 });
        sr.reveal('#aplicaciones img', aplicaciones , 300);
        
        sr.reveal('#imagen-corporativa h2', intro);
        sr.reveal('.tarjetas, #imagen-corporativa .flex', hero);
        
        sr.reveal('#vender h2, #razones-diseno h2', resaltado);
        sr.reveal('#vender .texto',  { origin: "top", duration: 900, delay: 1200 });

        sr.reveal('#suscribete h4', resaltado);
        sr.reveal('#suscribete img',  { origin: "left", scale: 0, duration: 1000, delay: 800 });
        
        sr.reveal('#clientes h3', intro , 200);
        sr.reveal('#clientes img', clientes , 250);
        
        sr.reveal('#razones-diseno .bloque',  { origin: "top", scale: 0, duration: 1000, delay: 600 });
        
        //Animación en general
        sr.reveal('.animacion h2', titulo);
        sr.reveal('.animacion h3', subtituloH3);
        sr.reveal('.animacion h4', subtituloH4);
        sr.reveal('.animacion img', imagenes);
        sr.reveal('.animacion p', contenido);
        sr.reveal('.animacion a.boton', contenido);

      function addCommasToNum( num ){
        return num.toString().replace( /\B(?=(\d{3})+(?!\d))/g, "," )
      }

    
//smooth scroll
jQuery(function( $ ){

	// Smooth scrolling when clicking on a hash link
	$('a[href^="#"').on('click',function (e) {
		e.preventDefault();

		var target = this.hash;
		var $target = $(target);

		if ( $(window).width() > 1023 ) {
			var $scrollTop = $target.offset().top-140;
		} else {
			var $scrollTop = $target.offset().top;
		}

		$('html, body').stop().animate({
			'scrollTop': $scrollTop
		}, 900, 'swing');
	});
    
    
  
    $('.caracteristica').click(function(e) {
  	e.preventDefault();
  
        var $this = $(this);        
        var target = this.hash;        
        var $target = $(target); 
        var posicion = 200;
       

		
  
    if ($this.next().hasClass('show')) {
        $this.next().removeClass('show');
        $this.next().slideUp(350);
        posicion = 200;
         
    } else {
        $this.parent().parent().find('li .detalles').removeClass('show');
        $this.parent().parent().find('li .detalles').slideUp(350);
        $this.next().toggleClass('show');
        $this.next().slideToggle(350);
        
       
    }
    
        
     if ( $(window).width() > 1023 ) {
			var $scrollTop = $this.offset().top - posicion;
		} else {
			var $scrollTop = $this.offset().top - posicion;
		}
        
        
    $('html, body').stop().animate({
			'scrollTop': $scrollTop
		}, 900, 'swing');
        
});
    
     

>>>>>>> maqueta
});