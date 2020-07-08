<?php 
/* Template Name: Generador Cotización */ 

/*
    Creado por Jesús Velasco Campos
*/


/** INDICE DE ELEMENTOS 
 * 0 - PLAN
 * 1 - HOSTING
 * 2 - DOMINIOS
 * 3 - SSL
 * 4 - EMAIL
 * 5 - SECCIONES
 * 6 - BLOG
 * 7 - TIENDA
 * 
*/

$jsondata = array();

$data = json_decode(file_get_contents('php://input'));

$esencial_intro = file_get_contents(get_stylesheet_directory().'/templates/cotizacion/esencial-intro.html');
$esencial_requerimientos = file_get_contents(get_stylesheet_directory().'/templates/cotizacion/esencial-requerimientos.html');
$esencial_condiciones = file_get_contents(get_stylesheet_directory().'/templates/cotizacion/esencial-condiciones.html');

/** Caracteristicas */
$hosting_basico = file_get_contents(get_stylesheet_directory().'/templates/cotizacion/caracteristicas/hosting-basico.html');
$hosting_avanzado = file_get_contents(get_stylesheet_directory().'/templates/cotizacion/caracteristicas/hosting-avanzado.html');
$hosting_avanzado_anual = file_get_contents(get_stylesheet_directory().'/templates/cotizacion/caracteristicas/hosting-avanzado-anual.html');
$certificadoSSL = file_get_contents(get_stylesheet_directory().'/templates/cotizacion/caracteristicas/ssl.html');
if( isset($data) ) {

    $jsondata['success'] = true;
    
    if($data[0] == "esencial"){

       
        $redaccion = "<h2>Características técnicas que te incluimos.</h2> <ul>";        
       
        foreach ($data as &$valor) {
            
             /** Hosting */
        switch ($valor) {
            case"Hosting Básico 8GB (Anual)":
                $redaccion .= $hosting_basico;               
                break;
            case "Hosting Avanzado 40 GB SSD (1 Mes)":
                $redaccion .= $hosting_avanzado;               
                break;
            case "Hosting Avanzado 40 GB SSD (12 meses) - Ahorra un 35%":
                $redaccion .= $hosting_avanzado_anual;               
                break;
        }
            
            preg_match("/([0-9]+)/", $valor, $matches);
            
            /** Dominios */
            
            $dominioCom = strpos($valor, 'Dominio .com / anual');
            

            if ($dominioCom !== false) {
                $redaccion .= "<li><p>Registro de dominio .com por <b>". $matches[1]." ".($matches[1] < 2 ? 'año' : 'años')."</b></p></li>";
            }

            $dominioMX = strpos($valor, 'Dominio .mx / anual');

            if ($dominioMX !== false) { 
                $redaccion .= "<li><p>Registro de dominio .mx por <b>". $matches[1]." ".($matches[1] < 2 ? 'año' : 'años')."</b></p></li>";
            }

            $dominioComMx = strpos($valor, 'Dominio .com.mx / Anual');

            if ($dominioComMx !== false) { 
                $redaccion .= "<li><p>Registro de dominio .com.mx por <b>". $matches[1]." ".($matches[1] < 2 ? 'año' : 'años')."</b></p></li>";
            }

            /** SSL */

            $ssl = strpos($valor, 'SSL / Anual');
           
            if ($ssl !== false) { 
                $redaccion .= $certificadoSSL;
            }

            /** Secciones */
            $secciones = strpos($valor, 'Secciones');

            if ($secciones !== false) { 
                $redaccion .= "<li><p>Hasta <b>". $matches[1]."</b> ".($matches[1] < 2 ? 'seccion incluida.' : 'secciones incluidas.'). " <b>(Costo de sección adicional $1,500.00)</b></p></li>";
            }
           
        }

        $redaccion .= "</ul>";

        
        //$cantidad = preg_replace('/[^0-9]/', '', $string);

        //switch($data[2])

       
        
        $jsondata['message'] =  $esencial_intro.                               
                                $redaccion.
                                $esencial_requerimientos.
                                $esencial_condiciones;
    }
    

    //$jsondata['message'] = $data;

    

    //Aunque el content-type no sea un problema en la mayoría de casos, es recomendable especificarlo
    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata);
    exit();
}