<?php

/* CensoBundle:Seguridad:contrasenia.html.twig */
class __TwigTemplate_633c268dc81a55dbfd7de3dd8cabc530012147eca844f6de7cdd1e4851558f82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base2.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'bootstrap' => array($this, 'block_bootstrap'),
            '_body' => array($this, 'block__body'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    
   
";
    }

    // line 7
    public function block_bootstrap($context, array $blocks = array())
    {
        echo " ";
    }

    // line 8
    public function block__body($context, array $blocks = array())
    {
        echo "   ";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        echo "      
<div class=\"container col-md-10\">
     <!--<div class=\"row\">
        <div align=\"center\">
            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\" ALT=\"Logo\">
            <hr>
        </div>
     </div>-->
    <div class=\"col-md-10  col-md-offset-1\">
        <!--
            <div class=\"col-md-12\">
                <div class=\"row\">
                          <a class=\"btn btn-info\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\"><i class=\"glyphicon glyphicon-arrow-left\"></i> Regresar al Inicio</a> 
                          <hr>
                </div>
            </div>
        -->
            <div class=\"panel panel-primary\">    
                <div class=\"panel-heading azul1\"><i class=\"glyphicon glyphicon-user\"></i> Recuperación de Contraseña</div>
                <div class=\"panel-body\">  
                    <div class=\"col-md-12\">
                          <p class=\"text-danger text-right\"><i class=\"glyphicon glyphicon-asterisk\"></i> Campo Obligatorio</p>
                      </div>
             
                  <div class=\"edit-crear\">
                      <p class=\"alert alert-info\">El sistema le enviará un correo electrónico con la información necesaria para recuperar su contraseña</p>
            
    
<!-- Formuario -->
    <form class=\"col-lg-12 form-signin\" id=\"verificar\" name=\"verificar\" action=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("olvido_contrasenia");
        echo "\" method=\"post\">  
        
        <div class=\"form-group\">
                                <label class=\"control-label required\">* Ingrese su Correo Electrónico </label>
                                <div class='input-group'>
                                    <span class=\"input-group-addon\">
                                        <span class=\"glyphicon glyphicon-envelope\"></span>
                                    </span>
                                    <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" required=\"required\" placeholder=\"ejemplo@dominio.com\" onkeyup=\"cambiaMinuscula(this.value)\"/>
                                    <span class=\"input-group-addon\">
                                        <span class=\"glyphicon glyphicon-asterisk\"></span>
                                    </span>
                                </div>
                            </div>
        
        <div class=\"row\">
\t\t<div class=\"form-group col-lg-12\">
                    
\t\t</div>
        </div>
                

        <div class=\"row\">
            <div class=\"form-group col-lg-12\">
              <button type=\"submit\" class=\"btn btn-primary col-lg-12 azul1\">Enviar</button>
              
            </div>
        </div>
        
        
        
     </form>

     <!-- end Formulario -->
   
            </div>
        </div>                
    </div>
    
        <div class=\"col-md-12\">
                <div class=\"row\">
                          <a class=\"btn btn-info\" href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\"><i class=\"glyphicon glyphicon-arrow-left\"></i> Regresar al Inicio</a> 
                         
                </div>
            </div>
    
    </div>
</div>

";
    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        // line 91
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>

function cambiaMinuscula(valor){
    var val = valor;
    document.getElementById('username').value = val.toLowerCase(); 
}

\$(document).ready(function() {
    \$('#verificar').bootstrapValidator({
        message: 'This value is not valid',
        fields: {            
            email: {
                validators: {
                    notEmpty: {
                        message: 'La direccion de correo es requerido'
                    },
                    emailAddress: {
                        message: 'La direccion de correo no es válida, ej: ejemplo@'
                    }
                }
            }                   
        }
    });
});


</script>
<!-- Bootstrap validator js -->
        <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recibo/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recibo/js/bootstrapValidator.js"), "html", null, true);
        echo "\"></script>
    
";
    }

    public function getTemplateName()
    {
        return "CensoBundle:Seguridad:contrasenia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 121,  188 => 120,  155 => 91,  152 => 90,  139 => 80,  95 => 39,  75 => 22,  64 => 14,  56 => 10,  50 => 8,  44 => 7,  35 => 3,  32 => 2,);
    }
}
