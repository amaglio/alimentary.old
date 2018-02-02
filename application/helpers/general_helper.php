<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if(!function_exists('buscar_foto_persona'))
{
    //formateamos la fecha y la hora, función de cesarcancino.com
    function buscar_foto_persona($id_persona)
    {
        // if(isset($id_persona)):

        //     $db_fotos['hostname'] = 'dbfotos.ucema.edu.ar';
        //     $db_fotos['username'] = 'fotoslectura';
        //     $db_fotos['password'] = 'fotoslectura';
        //     $db_fotos['database'] = 'fotos';
        //     $db_fotos['dbdriver'] = 'mysqli';
        //     $db_fotos['dbprefix'] = '';
        //     $db_fotos['pconnect'] = FALSE;
        //     $db_fotos['db_debug'] = TRUE;
        //     $db_fotos['cache_on'] = FALSE;
        //     $db_fotos['cachedir'] = '';
        //     $db_fotos['char_set'] = 'utf8';
        //     $db_fotos['dbcollat'] = 'utf8_general_ci';
        //     $db_fotos['swap_pre'] = '';
        //     $db_fotos['autoinit'] = FALSE;
        //     $db_fotos['stricton'] = FALSE;

        //     $CI =& get_instance();

        //     $CI->db = $CI->load->database($db_fotos, TRUE, TRUE); 

        //     //echo "SELECT img FROM fotos WHERE erased = 0 AND selected = 1 AND user_id = $id_persona LIMIT 1";

        //     $qry = $CI->db->query("SELECT img FROM fotos WHERE erased = 0 AND selected = 1 AND user_id = $id_persona LIMIT 1");
        //     $fila = $qry->row();

        //     if( $qry->num_rows() > 0  ) // Tiene foro
        //         $foto = "<img src=\"data:image/jpg;base64," . base64_encode($fila->img). "\" width=80, height=80, class='img-circle' style='padding:2px; border: 1px solid #e4e4e4' >";
        //     else 
        //         $foto = "<img src='".base_url()."assets/images/usuario_sin_foto.jpg' class='img-circle' style='padding:2px; border: 1px solid #e4e4e4; width:80px; height:80px' />";

        //     $CI->db->close();

        //     $CI->db = $CI->load->database($CI->session->userdata('DB'),TRUE, TRUE);
            
            $foto = "<i style='width:60px, height:60px' class='fa fa-user fa-3x'></i>";
           
        // else:

        //    $foto = "<img src='".base_url()."assets/images/usuario_sin_foto.jpg' class='img-circle' style='padding:2px; border: 1px solid #e4e4e4; width:80px; height:80px' />";

        // endif;

        return $foto;
    }
}






if(!function_exists('limpiar_cadena'))
{
 
    function limpiar_cadena($string)
    {
        $string = trim($string);
 
        $string = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $string
        );
     
        $string = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $string
        );
     
        $string = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $string
        );
     
        $string = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $string
        );
     
        $string = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $string
        );
     
        $string = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C',),
            $string
        );
     
        //Esta parte se encarga de eliminar cualquier caracter extraño
        /*
        $string = str_replace(
            array("\", "¨", "º", "-", "~",
                 "#", "@", "|", "!", """,
                 "·", "$", "%", "&", "/",
                 "(", ")", "?", "'", "¡",
                 "¿", "[", "^", "<code>", "]",
                 "+", "}", "{", "¨", "´",
                 ">", "< ", ";", ",", ":",
                 ".", " "),
            '',
            $string);*/
     
     
        return $string;
    }
}


if(!function_exists('armar_json_educacion_modal'))
{

    function armar_json_educacion_modal($row)
    {
        $datos_modal =  array();

        $datos_modal['id_educacion_crm'] = $row['ID_EDUCACION_CRM'];
        $datos_modal['id_nivel'] = utf8_encode($row['ID_NIVEL_EDUCACION']);

        if(isset($row['ID_EMPRESA']))
            $datos_modal['id_empresa'] = utf8_encode($row['ID_EMPRESA']);

        $nombre = str_replace("\"", "\"", $row['NOMBRE']);
        $datos_modal['nombre'] = utf8_encode($nombre);

        $carrera = str_replace("\"", "\"", $row['CARRERA']);
        $datos_modal['carrera'] = utf8_encode($carrera);

        $datos_json = json_encode($datos_modal);
        $datos_json_reemplazados = str_replace("\"", "&", $datos_json);



        return $datos_json_reemplazados;
    }
}

if(!function_exists('armar_json_email_modal'))
{

    function armar_json_email_modal($row)
    {
        $datos_modal =  array();

        $datos_modal['id_email_crm'] = $row['ID_EMAIL_CRM'];
        $datos_modal['id_tipo_email'] = utf8_encode($row['ID_TIPO_EMAIL']);
        $datos_modal['email'] = utf8_encode($row['EMAIL']);

        $datos_json = json_encode($datos_modal);
        $datos_json_reemplazados = str_replace("\"", "&", $datos_json);

        return $datos_json_reemplazados;
    }
}


if(!function_exists('armar_json_telefono_modal'))
{

    function armar_json_telefono_modal($row)
    {
        $datos_modal =  array();

        $datos_modal['id_telefono_crm'] = $row['ID_TELEFONO_CRM'];
        $datos_modal['id_tipo_telefono'] = utf8_encode($row['ID_TIPO_TELEFONO']);
        $datos_modal['telefono'] = utf8_encode($row['TELEFONO']);

        $datos_json = json_encode($datos_modal);
        $datos_json_reemplazados = str_replace("\"", "&", $datos_json);

        return $datos_json_reemplazados;
    }
}

if(!function_exists('armar_json_email_plantilla_modal'))
{

    function armar_json_email_plantilla_modal($row)
    {
        $datos_modal =  array();

        $datos_modal['id_crm_email_plantilla'] = $row->ID_CRM_EMAIL_PLANTILLA;
        $datos_modal['titulo'] = utf8_encode($row->TITULO);
        $datos_modal['asunto'] = utf8_encode($row->ASUNTO);

        $texto = str_replace("\"", "\"", $row->TEXTO); // Escapo caracter comilla doble// Es
        $datos_modal['texto'] = utf8_encode($texto);

        $datos_json = json_encode($datos_modal);
        $datos_json_reemplazados = str_replace("\"", "&", $datos_json);

        return $datos_json_reemplazados;
    }
}


if(!function_exists('armar_json_documento_modal'))
{

    function armar_json_documento_modal($row)
    {
        $datos_modal =  array();

        $datos_modal['id_documento_crm'] = $row['ID_CRM_DOCUMENTO'];
        $datos_modal['id_tipo_documento'] = utf8_encode($row['ID_TIPO_DOCUMENTO']);
        $datos_modal['numero'] = utf8_encode($row['NUMERO']);

        $datos_json = json_encode($datos_modal);
        $datos_json_reemplazados = str_replace("\"", "&", $datos_json);

        return $datos_json_reemplazados;
    }
}

if(!function_exists('armar_json_tipo_evento_modal'))
{

    function armar_json_tipo_evento_modal($row)
    {
        chrome_log("helper");
        $datos_modal =  array();

        $datos_modal['id_tipo_evento'] = $row->ID_TIPO_EVENTO; 
        $datos_modal['nombre'] = utf8_encode($row->DESCRIPCION);

        $datos_json = json_encode($datos_modal);
        $datos_json_reemplazados = str_replace("\"", "&", $datos_json);

        return $datos_json_reemplazados;
    }
}


// Mensaje de error de las variables flash session
if(!function_exists('mensaje_resultado'))
{
    function mensaje_resultado($mensaje)
    {
        if ($mensaje): ?>
                <div class="callout callout-success mensaje_resultado" style="padding:5px 30px 5px 15px">
                  <h5><?=$mensaje?></h5>
                </div>
        <?php  endif;  
    }
}

 

if(!function_exists('enviar_email'))
{
    function enviar_email($email_to, $email_operador, $subject, $texto, $nombre_operador=NULL, $nombre_persona=NULL )
    {   
        $CI =& get_instance();

        $CI->load->library("email"); 

        $configuracion_ucema = array(
            'protocol' => 'smtp',
            'smtp_host' => '10.0.0.3',
            'smtp_port' => 25,
            'smtp_user' => '',
            'smtp_pass' => '',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        );

        //Cargamos la configuración 

        $CI->email->initialize($configuracion_ucema);
        $CI->email->from($email_operador,  $nombre_operador);
        $CI->email->subject($subject);
        $mensaje_email = '';

        $texto = html_entity_decode( $texto , ENT_QUOTES, "UTF-8");
       
        $CI->email->to($email_to); 

        // REEMPLAZAMOS LAS MARCAS EN EL EMAIL

        $texto_modificado = $texto;

  
        $texto_modificado = str_replace("[Nombre y Apellido operador]", $nombre_operador, $texto_modificado );
        $texto_modificado = str_replace("[Email Operador]", $email_operador, $texto_modificado );
        $texto_modificado = str_replace("[Fecha envio]", date("d/m/Y") , $texto_modificado );
        $texto_modificado = str_replace("[Nombre usuario]", $nombre_persona , $texto_modificado );

        //echo $texto_modificado;
             

        $CI->email->message($texto_modificado);
        
        /*
        if( $CI->email->send() ):

            chrome_log("ENVIO EL EMAIL"); 
            $mensaje_resultado = "<span> &#9658; El email a ".$email_to." fue enviado exitosamente. </span> <br>";
         
        else:
            
            chrome_log("NO ENVIO EL EMAIL");
            $mensaje_resultado = "<span> &#9658; El email a ".$email_to." NO fue enviado exitosamente. </span> <br>";
        
        endif; */

         $mensaje_resultado = "<span> &#9658; El email a ".$email_to." fue enviado exitosamente. </span> <br>";

        return $mensaje_resultado;
    }
}

// Mensaje de error de las variables flash session
if(!function_exists('devolver_icono_tipo_log'))
{
    function devolver_icono_tipo_log($id_tipo_log)
    {
         switch ($id_tipo_log) {
            
            case 1: // Se cargo
                return "<i class='bg-blue fa fa-calendar-check-o' aria-hidden='true'></i>";
                break;
             
            case 2: // Se importo
                return "<i class='bg-blue fa fa-exchange' aria-hidden='true'></i>";
                break;

            case 3: // Se envio email individual
                return "<i class='bg-blue fa fa-at' aria-hidden='true'></i>";
                break;

            case 4: // Se tomo la consulta
                return "<i class='bg-blue fa fa-handshake-o' aria-hidden='true'></i>";
                break;

            case 5: // Se cambio el periodo
                return "<i class='bg-blue fa fa-pencil-square-o' aria-hidden='true'></i>";
                break;

            case 6: // Se cambio el programa
                return "<i class='bg-blue fa fa-plus-square' aria-hidden='true'></i>";
                break;

            case 7: // Se cambio para como contactar
                return "<i class='bg-blue fa fa-share-square' aria-hidden='true'></i>";
                break;

            case 8: // Se cambio el estado
                return "<i class='bg-blue fa fa-thermometer-half' aria-hidden='true'></i>";
                break;

            case 9: // Se cambio informacion de interes
                return "<i class='bg-blue fa fa-list' aria-hidden='true'></i>";
                break;

            case 10: // Se envió un email masivo
                return "<i class='bg-blue fa fa-reply-all' aria-hidden='true'></i>";
                break;

            case 11: // Se envió un email por un programa
                return "<i class='bg-blue fa fa-trash-o' aria-hidden='true'></i>";
                break;

            case 12: // Se cargo una persona
                return "<i class='bg-blue fa fa-calendar-check-o' aria-hidden='true'></i>";
                break;

            case 13: // Se lo envio a sigeu
                return "<i class='bg-blue fa fa-fighter-jet' aria-hidden='true'></i>";
                break;

            case 14: // Se lo anoto a un evento
                return "<i class='bg-blue fa fa fa-ticket' aria-hidden='true'></i>";
                break;

            case 15: // Se fusiono con un contacto web
                return "<i class='bg-blue fa fa-code-fork' aria-hidden='true'></i>";
                break;

            case 16: // Se lo viculó con un contacto SIGEU
                return "<i class='bg-blue fa fa-link' aria-hidden='true'></i>";
                break;

            case 17: // Se fusiono con un contacto SIGEU
                return "<i class='bg-blue fa fa-code-fork' aria-hidden='true'></i>";
                break;

            case 18: // Se fusiono con un contacto CRM
                return "<i class='bg-blue fa fa-code-fork' aria-hidden='true'></i>";
                break;

            case 19: // Se fusiono con un contacto CRM
                return "<i class='bg-blue fa fa-file-excel-o' aria-hidden='true'></i>";
                break;

            case 20: // Se fusiono con un contacto CRM
                return "<i class='bg-blue fa fa-file-excel-o' aria-hidden='true'></i>";
                break;

             case 21: // Se fusiono con un contacto CRM
                return "<i class='bg-blue fa fa-file-excel-o' aria-hidden='true'></i>";
                break;

        }
         
    }
}
