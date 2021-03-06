<?php

/* CensoBundle:Seguridad:olvidoContrasenia.html.twig */
class __TwigTemplate_1abe7d20c2b2a3de1b72ded3dad079b936c980e8ee6e4afd71f6b977f6b04148 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <meta name=\"description\" content=\"\"/>
    <meta name=\"author\" content=\"\"/>        
    <title>UBV</title>            
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recibo/css/bootstrap.css"), "html", null, true);
        echo "\"
          
    <!-- Custom styles for this template -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recibo/css/signin.css"), "html", null, true);
        echo "\"          
    
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />  
    
     <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src=\"../../docs-assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
    
    </head>
    <body>
        <style>
            #mensaje { 
                float: left;
                width: 99%;
                margin: 10px auto;
                border:#ccc solid 1px;
                box-shadow: 0 0 3px #CCC;
                color:#333;
                padding: 0.5%;
                border-radius: 5px;
                background: #ffffff; /* Old browsers */
background: -moz-linear-gradient(top, #ffffff 0%, #f6f6f6 47%, #ededed 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(47%,#f6f6f6), color-stop(100%,#ededed)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #ffffff 0%,#f6f6f6 47%,#ededed 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #ffffff 0%,#f6f6f6 47%,#ededed 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, #ffffff 0%,#f6f6f6 47%,#ededed 100%); /* IE10+ */
background: linear-gradient(to bottom, #ffffff 0%,#f6f6f6 47%,#ededed 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed',GradientType=0 ); /* IE6-9 */
            }
            #mensaje div.img {float: left; width: 15%;}
            #mensaje div {width: 85%; float: left;}
            #mensaje img { margin: 4px; padding: 0; float:left;}
            #mensaje h1 { float: left; width: 100%; font-family:Times; font-size: 18px; text-align: left; color: #1F75C2;}
            #mensaje h2 { float: left; width: 100%; font-family:Times; font-size: 15px; text-align: left; color: #1F75C2; margin: 3px 0px;}        
            #mensaje p {float: left; width: 100%;}
            
            #mensaje a.link { text-decoration:none; float: left; width: auto; padding: 10px; box-shadow: 0 0 2px #ccc; color: #FFF; text-align: center;}
            #mensaje p b {font-weight: bold; color:#1F75C2; }
            .azulC {
                background: #00b7ea; /* Old browsers */
background: -moz-linear-gradient(top, #00b7ea 0%, #009ec3 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#00b7ea), color-stop(100%,#009ec3)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #00b7ea 0%,#009ec3 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #00b7ea 0%,#009ec3 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, #00b7ea 0%,#009ec3 100%); /* IE10+ */
background: linear-gradient(to bottom, #00b7ea 0%,#009ec3 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00b7ea', endColorstr='#009ec3',GradientType=0 ); /* IE6-9 */
            color: #FFF;
            }
            .important{ font-weight: bold;}            
            
            hr { border: 1px dashed blue;}
            
        </style>
        <div id=\"mensaje\" class=\"container_login_\">     
            <div class=\"img\">
            <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["imagen"]) ? $context["imagen"] : $this->getContext($context, "imagen")), "html", null, true);
        echo "\" alt=\"Logo de la Universidad Bolivarian de Venezuela\" title=\"Logo de la Universidad Bolivarian de Venezuela\">
            </div>
            <div>
            <h1 align=\"center\">Solicitud de Cambio de Contraseña</h1>
            <p>Estimado(a), <b>";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["nombre_completo"]) ? $context["nombre_completo"] : $this->getContext($context, "nombre_completo")), "html", null, true);
        echo "</b>.</p> 
            <p>Este es un sistema de correo automático. Por favor, no responda este mensaje. </p>
            <p>Recibimos una solicitud de cambio de contraseña de su cuenta <b>Intranet</b>. Para completar este proceso por favor presione en el siguiente botón:</p> 
            <a class=\"link azulC\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, ((("http://intranet.ubv.edu.ve/restablecer_contrasenia/" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "/") . (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "html", null, true);
        echo "\">Cambiar Contraseña &raquo;</a>                        
            <p>Si tiene problemas puede ingresar copie el siguiente enlace: <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, ((("http://intranet.ubv.edu.ve/restablecer_contrasenia/" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "/") . (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "html", null, true);
        echo "\" target=\"_blank\" title=\"Cambio de Contraseña\">";
        echo twig_escape_filter($this->env, ((("http:/intranet.ubv.edu.ve/restablecer_contrasenia/" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "/") . (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "html", null, true);
        echo "</a></p>
            <p>En la mayoría de los programas de correo electrónico el enlace anterior aparecerá como una línea de texto en azul sobre la que puede hacer clic. Si eso no sucede, copie y pegue la dirección en la barra de direcciones de su navegador. </p>                       
            <p><b>Nota:</b> Si no hiciste la solicitud de cambio de contraseña, ignora este mensaje.</p>                        
            <p>Esta es una cuenta de correo no monitoreada. Por favor, no responda ni reenvíe mensajes a esta cuenta.</p>
            <hr>
            <h2>Aviso de Confidencialidad:</h2>
            <p class=\"important\">Tanto este mensaje como todos los posibles documentos adjuntos al mismo son confidenciales y dirigidos exclusivamente a los destinatarios de los mismos. Por favor, si Ud. no es uno de dichos destinatarios, sírvase notificarnos este hecho y elimínelo de su sistema. Queda prohibida la copia, difusión o revelación de su contenido a terceros, sin el previo consentimiento por escrito de la Universidad Bolivariana de Venezuela.</p>            
            <hr>
            </div>
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "CensoBundle:Seguridad:olvidoContrasenia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 83,  117 => 82,  111 => 79,  104 => 75,  42 => 16,  37 => 14,  31 => 11,  19 => 1,);
    }
}
