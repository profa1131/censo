<?php

/* CensoBundle:Seguridad:confirmacion.html.twig */
class __TwigTemplate_f4f3c1544de275b12258d062637d7238dfc2dca11f0ea611ecbbfbf50a985b68 extends Twig_Template
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
        // line 59
        echo twig_escape_filter($this->env, (isset($context["imagen"]) ? $context["imagen"] : $this->getContext($context, "imagen")), "html", null, true);
        echo "\" alt=\"Logo de la Universidad Bolivarian de Venezuela\" title=\"Logo de la Universidad Bolivarian de Venezuela\">
            </div>
            <div>
            <h1 align=\"center\">Confirmación de Cuenta</h1>
            <p>Estimado(a), <b>";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["nombre_completo"]) ? $context["nombre_completo"] : $this->getContext($context, "nombre_completo")), "html", null, true);
        echo "</b>.</p> 
            <p>Para confirmar la creación de la cuenta debe ingresar al siguiente botón:</p> 
            <a class=\"link azulC\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, ((("http://intranet.ubv.edu.ve/confirmacion/" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "/") . (isset($context["cod"]) ? $context["cod"] : $this->getContext($context, "cod"))), "html", null, true);
        echo "\">Confirmar Creación de Cuenta &raquo;</a>                        
            <p>Si tiene problemas puede ingresar copie el siguiente enlace: <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, ((("http://intranet.ubv.edu.ve/confirmacion/" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "/") . (isset($context["cod"]) ? $context["cod"] : $this->getContext($context, "cod"))), "html", null, true);
        echo "\" target=\"_blank\" title=\"Confirmar Creación de Cuenta\">";
        echo twig_escape_filter($this->env, ((("http:/intranet.ubv.edu.ve/confirmacion/" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "/") . (isset($context["cod"]) ? $context["cod"] : $this->getContext($context, "cod"))), "html", null, true);
        echo "</a></p><p><b>Nota:</b> Si no hiciste la solicitud de Creación de Cuenta, ignora este mensaje.</p>                        
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
        return "CensoBundle:Seguridad:confirmacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 66,  91 => 65,  86 => 63,  79 => 59,  19 => 1,);
    }
}
