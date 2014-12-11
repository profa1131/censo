<?php

/* CensoBundle:Seguridad:login.html.twig */
class __TwigTemplate_5f1068f3152976762f530867e166aca252cdf1c0f994c438af4131acb63c34ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base2.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        echo "  
    <div class=\"col-md-10\">  
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading primary \">
                <h3 class=\"panel-title \"> Sistema de Gestion y Censo Para las Comunas y Consejos Comunales</h3>
            </div>
            <div class=\"panel-body\">       
                <div class=\"col-md-6\">
                    <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                        <!-- Indicators -->
                        <ol class=\"carousel-indicators\">
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"3\"></li>
                            
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class=\"carousel-inner azul1Inv panel\">
                            <div class=\"item active\">                      
                                <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/images/slider3.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 100%; height: 350px;\">                    
                                <div class=\"carousel-caption\">                        
                                    <h2>Reportes</h2>                        
                                    <p>Genera y Descarga los Reportes de tu Comuna</p>
                                </div>
                            </div>
                            <div class=\"item \">                      
                                <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/images/slider2.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 100%; height: 350px;\">                    
                                <div class=\"carousel-caption\">                        
                                    <h3>Constancia, Cartas y Formatos</h3>                        
                                    <p>Descarga e imprime tu constancia, Cartas y otros Formatos</p>
                                </div>
                            </div>
                            <div class=\"item \">                      
                                <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/images/slider1.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 100%; height: 350px;\">                    
                                <div class=\"carousel-caption\">
                                    <h1>Censo</h1>
                                    <p>Regitro Socio Economico para Comunas y Consejos Comnales</p>
                                </div>
                            </div>
                                <div class=\"item \">                      
                                <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/images/cuaderno.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 100%; height: 350px;\">                    
                                <div class=\"carousel-caption\">
                                    <h3>Cuaderno Electoral</h3>
                                    <p>Genera el Cuaderno de Votación Correspondiente a tu Consejo Comunal</p>
                                </div>
                            </div>                                 
                        </div>

                        <!-- Controls -->
                        <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                            <span class=\"glyphicon glyphicon-circle-arrow-left\" style=\"margin-top: 150px\"></span>
                        </a>
                        <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                            <span class=\"glyphicon glyphicon-circle-arrow-right\" style=\"margin-top: 150px\"></span>
                        </a>
                    </div>


                </div>

                <div class=\"col-md-6\"> 
                    <div class=\"panel panel-primary\" style=\"min-height: 350px;\">    
                        <div class=\"panel-heading azul1\" >Iniciar Sesión</div>
                        <div class=\"panel-body\">
                            <form class=\"col-md-12\" id=\"verificar\" name=\"verificar\" class=\"form-horizontal\" action=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">                
                                <div class=\"row\">
                                    <div class=\"form-group\">
                                        <label class=\"control-label required\">* Correo Electrónico</label>
                                        <div class='input-group'>
                                            <span class=\"input-group-addon\">
                                                <span class=\"glyphicon glyphicon-envelope\"></span>
                                            </span>
                                            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"nombre@ejemplo.com\" onkeyup=\"cambiaMinuscula(this.value)\"/>
                                            <span class=\"input-group-addon\">
                                                <span class=\"glyphicon glyphicon-asterisk\"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group\">
                                        <label class=\"control-label required\">* Contraseña</label>
                                        <div class='input-group'>
                                            <span class=\"input-group-addon\">
                                                <span class=\"glyphicon glyphicon-lock\"></span>
                                            </span>
                                            <input type=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Contraseña\" />
                                            <span class=\"input-group-addon\">
                                                <span class=\"glyphicon glyphicon-asterisk\"></span>
                                            </span>
                                        </div>
                                    </div>                           
                                    <br>
                                    <div class=\"\">
                                        <button type=\"submit\" class=\"btn btn-primary col-lg-12 azul1\">Ingresar <i class=\"glyphicon glyphicon-check\"></i></button>              
                                    </div>
                                     
                          <div class=\"col-md-12\">
                              <br> 
                              <a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("contrasenia");
        echo "\"><i class=\"glyphicon glyphicon-question-sign\"></i>  ¿Olvido su Contraseña? &raquo;</a>
                                                              
                            </div>  
                                    
                                   
                                
                                </div>
                                             ";
        // line 109
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            echo "   
                                    <div class=\"row\">          
                                        <div class=\"alert alert-danger\">
                                            <a class=\"close\" data-dismiss=\"alert\">×</a>  
                                            <strong>Error!</strong> ";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "                                  
                                        </div> 
                                    </div>
                                ";
        }
        // line 116
        echo "  
                            </form>                    
                        </div>
                        <div class=\"col-md-12\">

                            <br>
                        </div>    
                    </div> 
                    <div class=\"row\">

                    </div>
                </div>

            </div>

          
        </div><!-- Fin del  col-md-8 col-md-offset-2    -->
    </div><!-- Fin del Container -->          




";
    }

    // line 140
    public function block_javascripts($context, array $blocks = array())
    {
        // line 141
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>

        function cambiaMinuscula(valor) {
            var val = valor;
            document.getElementById('username').value = val.toLowerCase();
        }

        \$(document).ready(function () {
            \$('#verificar').bootstrapValidator({
                message: 'This value is not valid',
                fields: {
                    _username: {
                        validators: {
                            notEmpty: {
                                message: 'La direccion de correo es requerido'
                            },
                            emailAddress: {
                                message: 'La direccion de correo no es válida, ej: usuario@dominio.com'
                            },
                            regexp: {
                                regexp: /^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-z][.][a-z]{2,4}\$/, ///^[a-zA-Z0-9_\\.]+\$/,                                
                                message: 'El nombre de usuario sólo puede ser un correo'
                            }

                        }
                    },
                    _password: {
                        validators: {
                            stringLength: {
                                min: 6,
                                max: 15,
                                message: 'La contraseña debe tener entre 6 y 15 caracteres'
                            },
                            notEmpty: {
                                message: 'La contraseña es requerida'
                            }
                        }
                    }
                }
            });
        });


    </script>
    <!-- Bootstrap validator js -->
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/bootstrapValidator.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "CensoBundle:Seguridad:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 188,  254 => 187,  204 => 141,  201 => 140,  175 => 116,  168 => 113,  161 => 109,  151 => 102,  122 => 76,  111 => 68,  84 => 44,  74 => 37,  64 => 30,  54 => 23,  29 => 2,);
    }
}
