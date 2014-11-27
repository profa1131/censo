<?php

/* CensoBundle:Seguridad:cambioContrasenia.html.twig */
class __TwigTemplate_57928b6a52a46ad0fb54792547664a786ce38dcc880c910936b5e74b07657d44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

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
        return "::base.html.twig";
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
        // line 11
        echo "<div class=\"container\">
    <div class=\"col-md-2 col-md-offset-1\" align=\"center\">               
        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recibo/imagenes/ubv.png"), "html", null, true);
        echo "\" alt=\"Logo UBV\">
    </div>
    <div class=\"col-md-8\">            
            <div class=\"panel panel-primary\">    
                <div class=\"panel-heading\"><i class=\"glyphicon glyphicon-lock\"></i> Crear Nueva Contraseña</div>
                <div class=\"panel-body\">  
                    <div class=\"col-md-12\">
                          <p class=\"text-danger text-right\"><i class=\"glyphicon glyphicon-asterisk\"></i> Campo Obligatorio</p>
                      </div>
             
                  <div class=\"edit-crear\">
    

    <form  id=\"verificar\" name=\"verificar\" class=\"form-signin\" action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("cambio_contrasenia");
        echo "\" method=\"post\">
                
                <input type=\"hidden\" id=\"id\" name=\"id\" value=";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " class=\"form-control\">
                
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <label for=\"password\">* Ingrese su Nueva Contraseña</label>
                        <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Ingrese su Nueva Contraseña\" />                
                    </div>
                </div>
                
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <label for=\"password\">* Repita su Nueva Contraseña</label>
                        <input type=\"password\" class=\"form-control\" name=\"confirmPassword\" placeholder=\"Repita su Nueva Contraseña\" />
                    </div>
                </div>
                
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                         <button class=\"btn btn-primary azul1\" type=\"submit\">Cambiar Contraseña</button>
                    </div>
                </div>
                
            </form> 
            </div>
        </div>                
    </div>        
</div>
</div>
";
    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    

<script>



\$(document).ready(function() {
    \$('#verificar').bootstrapValidator({
        message: 'This value is not valid',
        fields: {                      
            password: {
                validators: {
                    stringLength: {
                        min: 8,
                        max: 15,
                        message: 'La contraseña debe tener entre 8 y 15 caracteres'
                    },
                    notEmpty: {
                        message: 'La contraseña es requerida'
                    },
                    identical: {
                        field: 'confirmPassword',
                        message: 'La contraseña y la confirmación de la contraseña no son iguales'
                    }
                }
            },
            confirmPassword: {
                validators: {
                  \tstringLength: {
                        min: 8,
                        max: 15,
                        message: 'La confirmacion de la contraseña debe tener entre 8 y 15 caracteres'
                    },
                    notEmpty: {
                        message: 'La confirmacion de la contraseña es requerida'
                    },
                    identical: {
                        field: 'password',
                        message: 'La contraseña y la confirmación de la contraseña no son iguales'
                    }
                }
            }
        }
    });
});


</script>
<!-- Bootstrap validator js -->
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recibo/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recibo/js/bootstrapValidator.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "CensoBundle:Seguridad:cambioContrasenia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 111,  175 => 110,  120 => 59,  117 => 58,  84 => 28,  79 => 26,  63 => 13,  59 => 11,  56 => 10,  50 => 8,  44 => 7,  35 => 3,  32 => 2,);
    }
}
