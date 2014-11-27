<?php

/* CensoBundle:Seguridad:mensajeOlvidoContrasenia.html.twig */
class __TwigTemplate_01cdf5663b59e192ad81bc197b5e6f69aced46b2037dc1268fe6c8ed20bbe0a0 extends Twig_Template
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
        <div class=\"container \">  
            <hr>
            <div class=\"col-md-6 col-md-offset-3 alert alert-info\">
                <div class=\"col-md-4\">               
                    <img align=\"right\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recibo/imagenes/ubv.png"), "html", null, true);
        echo "\" alt=\"Logo UBV\">                
                </div>
                <div class=\"col-md-8\">
                    <h4 class=\"text-primary\">Solicitud de Olvido de Contraseña</h4>
                    <p>Se le ha enviado un correo electrónico con las instrucciones a seguir.</p>
                    <p>Gracias por su Tiempo.</p>
                    <a class=\"btn btn-info\" href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\"><i class=\"glyphicon glyphicon-arrow-left\"></i> Volver al Inicio</a>
                </div>
            </div>
        </div>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "CensoBundle:Seguridad:mensajeOlvidoContrasenia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 39,  62 => 33,  42 => 16,  37 => 14,  31 => 11,  19 => 1,);
    }
}
