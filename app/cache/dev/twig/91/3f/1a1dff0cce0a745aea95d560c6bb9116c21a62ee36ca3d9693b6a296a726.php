<?php

/* ::base.html.twig */
class __TwigTemplate_913f1a1dff0cce0a745aea95d560c6bb9116c21a62ee36ca3d9693b6a296a726 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headscript' => array($this, 'block_headscript'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footerscript' => array($this, 'block_footerscript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "r<!DOCTYPE html>
<html lang=\"es\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>     
    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- MetisMenu CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/css/plugins/metisMenu/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/font-awesome-4.1.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Iconos - Fonts Foundation Zurb -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/css/foundation-icons/foundation-icons/foundation-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Estilos Propios -->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/css/estilos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    ";
        // line 35
        $this->displayBlock('headscript', $context, $blocks);
        echo " 
  </head>
  <body>
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div id=\"wrapper\">

        <!-- Navigation -->
        <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">Censo Comunas</a>
            </div>
            <!-- /.navbar-header -->
<!-- barra superior-->
            <ul class=\"nav navbar-top-links navbar-right\">
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"fa fa-envelope fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-messages\">
                        <li>
                            <a href=\"#\">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class=\"pull-right text-muted\">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class=\"pull-right text-muted\">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class=\"pull-right text-muted\">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a class=\"text-center\" href=\"#\">
                                <strong>Read All Messages</strong>
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                
                </li>
                <!-- /.dropdown -->
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"fa fa-user fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-user\">
                        <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> User Profile</a>
                        </li>
                        <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Settings</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 117
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
               
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <!-- Fin barra superior-->

            <div class=\"navbar-default sidebar\" role=\"navigation\">
                <div class=\"sidebar-nav navbar-collapse\">
                    <ul class=\"nav\" id=\"side-menu\">
                        
                        <li>
                            <a href=\"/consejocomunal/index.php\"><i class=\"fi-universal-access\"></i> Inicio</a>
                        </li>
                        <li>
                            
                            <a href=\"#\"><i class=\"fi-torsos-all-female\"></i> Familias<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"/censo/web/app_dev.php/familias\">Listado de Familias</a>
                                </li>
                                <li>
                                    <a href=\"/censo/web/app_dev.php/familias/new\">Registrar Familia</a>
                                </li>
                                                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href=\"#\"><i class=\"fi-torsos\"></i> Habitantes<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"/censo/web/app_dev.php/habitantes\">Lista de Habitantes</a>
                                </li>
                                <li>
                                    <a href=\"/censo/web/app_dev.php/habitantes/new\">Agregar nuevo Habitante</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fi-page-edit\"></i> Registro Socioeconimico<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"/censo/web/app_dev.php/registrosocioeconomico\">Ver Registros Socioeconomicos </a>
                                </li>
                                <li>
                                    <a href=\"/censo/web/app_dev.php/registrosocioeconomico/new\">Agregar nuevo Registro Socioeconomico a Familia</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-table fa-fw\"></i> Administracion de Tablas<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"/censo/web/app_dev.php/vocerias\">Vocerias</a>
                                </li>
                                <li>
                                    <a href=\"/censo/web/app_dev.php/enseres\">Enseres</a>
                                </li>
                                <li>
                                    <a href=\"/censo/web/app_dev.php/servicioscomunales\">Servicios Comunales</a>
                                </li>
                                <li>
                                    <a href=\"/censo/web/app_dev.php/transportes\">Transportes</a>
                                </li>
                                <li>
                                    <a href=\"/censo/web/app_dev.php/telefonias\">Telefonias</a>
                                </li>
                                <li>
                                    <a href=\"/censo/web/app_dev.php/areasdetrabajos\">Areas De Trabajos</a>
                                </li>
                                <li>
                                    <a href=\"/censo/web/app.php/recoleccionbasura\">Recoleccion de Basura</a>
                                </li><li>
                                    <a href=\"/censo/web/app.php/aguasservidas\">Aguas Servidas</a>
                                </li><li>
                                    <a href=\"/censo/web/app.php/enfermedades\">Enfermedades</a>
                                </li><li>
                                    <a href=\"/censo/web/app.php/condicionessalubridad\">Condiciones de Salubridad</a>
                                </li><li>
                                    <a href=\"/censo/web/app.php/formatenencia\">Forma de Tenencias</a>
                                </li><li>
                                    <a href=\"/censo/web/app.php/actividadcomercialvivienda\">Actividad Comercial en Vivienda</a>
                                </li><li>
                                    <a href=\"/censo/web/app.php/condicionterrenos\">Condicion del Terreno</a>
                                </li><li>
                                    <a href=\"/censo/web/app_dev.php/animales\">Animales</a>
                                </li><li>
                                    <a href=\"/censo/web/app_dev.php/plagas\">Plagas</a>
                                </li>
                                <li>
                                    <a href=\"/censo/web/app_dev.php/tipoparedes\">TipoParedes</a>
                                </li>
                                <li>
                                    <a href=\"/censo/web/app_dev.php/tipotechos\">TipoTechos</a>
                                </li>
                                <li>
                                    <a href=\"/censo/web/app_dev.php/tipoviviendas\">TipoViviendas</a>
                                </li>
                                
                                <li>
                                    <a href=\"/censo/web/app_dev.php/profesiones\">Profesiones</a>
                                </li>
                                <li>
                                    <a href=\"/censo/web/app_dev.php/preguntas\">Preguntas</a>
                                </li>
                                <li>
                                    <a href=\"/censo/web/app_dev.php/misiones\">Misiones</a>
                                </li>
                                
                            </ul>
              <!-- /.nav-second-level -->
                        </li>
                        <!--<li>
                            <a href=\"tables.html\"><i class=\"fa fa-table fa-fw\"></i> Administracion de Tablas</a>
                        </li>
                        <li>
                            <a href=\"forms.html\"><i class=\"fa fa-edit fa-fw\"></i> Forms</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-wrench fa-fw\"></i> UI Elements<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"panels-wells.html\">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href=\"buttons.html\">Buttons</a>
                                </li>
                                <li>
                                    <a href=\"notifications.html\">Notifications</a>
                                </li>
                                <li>
                                    <a href=\"typography.html\">Typography</a>
                                </li>
                                <li>
                                    <a href=\"grid.html\">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level --> <!--
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-sitemap fa-fw\"></i> Multi-Level Dropdown<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"#\">Second Level Item</a>
                                </li>
                                <li>
                                    <a href=\"#\">Second Level Item</a>
                                </li>
                                <li>
                                    <a href=\"#\">Third Level <span class=\"fa arrow\"></span></a>
                                    <ul class=\"nav nav-third-level\">
                                        <li>
                                            <a href=\"#\">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level --> <!-- 
                                </li>
                            </ul>
                            <!-- /.nav-second-level --> <!--
                        </li>
                        <li class=\"active\">
                            <a href=\"#\"><i class=\"fa fa-files-o fa-fw\"></i> Sample Pages<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a class=\"active\" href=\"blank.html\">Blank Page</a>
                                </li>
                                <li>
                                    <a href=\"login.html\">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>         

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- Contenido -->
<!-- Page Content --><br><br>

        <div id=\"page-wrapper\">
\t<div class=\"row\">
                <div class=\"col-lg-12\">
                  
                 ";
        // line 320
        $this->displayBlock('body', $context, $blocks);
        echo " 
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                  
        </div>
        <!-- /#page-wrapper -->  
<!-- Fin Contenido -->
     </div>
    <!-- /#wrapper -->
    <!-- jQuery Version 1.11.0 -->
    <script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/jquery-1.11.0.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/plugins/metisMenu/metisMenu.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
    <!-- Mask JavaScript -->
    <script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/jquery.mask.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap validator js -->
     
   <script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/bootstrapValidator.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/funciones.js"), "html", null, true);
        echo "\"></script>
   
   
   ";
        // line 350
        $this->displayBlock('javascripts', $context, $blocks);
        // line 353
        echo "   
   
   ";
        // line 355
        $this->displayBlock('footerscript', $context, $blocks);
        // line 357
        echo "
</body>

</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenidos";
    }

    // line 35
    public function block_headscript($context, array $blocks = array())
    {
    }

    // line 320
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 350
    public function block_javascripts($context, array $blocks = array())
    {
        // line 351
        echo "        
   ";
    }

    // line 355
    public function block_footerscript($context, array $blocks = array())
    {
        // line 356
        echo "   ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  470 => 356,  467 => 355,  462 => 351,  459 => 350,  453 => 320,  448 => 35,  442 => 10,  434 => 357,  432 => 355,  428 => 353,  426 => 350,  420 => 347,  416 => 346,  410 => 343,  405 => 341,  399 => 338,  393 => 335,  387 => 332,  372 => 320,  166 => 117,  81 => 35,  70 => 27,  64 => 24,  58 => 21,  52 => 18,  46 => 15,  40 => 12,  35 => 10,  24 => 1,);
    }
}
