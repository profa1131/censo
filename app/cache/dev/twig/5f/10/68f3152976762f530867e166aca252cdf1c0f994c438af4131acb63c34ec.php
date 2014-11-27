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

    // line 4
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
                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"4\"></li>
                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"5\"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class=\"carousel-inner azul1Inv panel\">
                                <div class=\"item active\">                      
                                    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recibo/imagenes/slider1.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 100%; height: 350px;\">                    
                                    <div class=\"carousel-caption\">

                                        <h2>C</h2>                        
                                        <p>Sistema de Gestion y Censo Para las Comunas y Consejos Comunales</p>
                                    </div>
                                </div>
                                <div class=\"item \">                      
                                    <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recibo/imagenes/slider3.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 100%; height: 350px;\">                    
                                    <div class=\"carousel-caption\">                        
                                        <h2>Recibo de Pago</h2>                        
                                        <p>Descarga tus Recibos de Pago en cualquier momento</p>
                                    </div>
                                </div>
                                <div class=\"item \">                      
                                    <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recibo/imagenes/slider2.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 100%; height: 350px;\">                    
                                    <div class=\"carousel-caption\">                        
                                        <h2>Constancia de Trabajo</h2>                        
                                        <p>Descarga e imprime tu constancia de desde la comodidad de tu oficina</p>
                                    </div>
                                </div>
                                <div class=\"item \">                      
                                    <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recibo/imagenes/slider4.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 100%; height: 350px;\">                    
                                    <div class=\"carousel-caption\">                        
                                        <h2>Seguros Federal</h2>                        
                                        <p>Conoce el listado de cl&iacute;nicas IPSS afiliadas</p>
                                    </div>
                                </div>
                                <div class=\"item \">                      
                                    <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recibo/imagenes/slider5.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 100%; height: 350px;\">                    
                                    <div class=\"carousel-caption\">                        
                                        <h2>Directorio Telef&oacute;nico</h2>                        
                                        <p>Consulta el listado de extensiones por departamentos</p>
                                    </div>
                                </div>
                                <div class=\"item \">                      
                                    <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recibo/imagenes/slider6.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 100%; height: 350px;\">                    
                                    <div class=\"carousel-caption\">                        
                                        <h2>Portal Web UBV</h2>                        
                                        <p>Visite www.ubv.edu.ve</p>
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
        // line 87
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
        // line 95
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"prueba@ubv.edu.ve\" onkeyup=\"cambiaMinuscula(this.value)\"/>
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
                                    </div>
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

                <!-- Modal -->
                <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        
                    </div>
                </div>

                <!--</div> -->




            </div><!-- Fin del  col-md-8 col-md-offset-2    -->
        </div><!-- Fin del Container -->          




    ";
    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        // line 154
        echo "        ";
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
                                    message: 'La direccion de correo UBV es requerido'
                                },
                                emailAddress: {
                                    message: 'La direccion de correo UBV no es válida, ej: usuario@ubv.edu.ve'
                                },
                                regexp: {
                                    regexp: /^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][ubv]+([.][edu]+)*[.][ve]{2,4}\$/, ///^[a-zA-Z0-9_\\.]+\$/,                                
                                    message: 'El nombre de usuario sólo puede ser un correo UBV'
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
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 201
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
        return array (  263 => 201,  259 => 200,  209 => 154,  206 => 153,  145 => 95,  134 => 87,  107 => 63,  97 => 56,  87 => 49,  77 => 42,  67 => 35,  56 => 27,  29 => 4,);
    }
}
