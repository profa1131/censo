<?php

/* CensoBundle:Usuarios:new.html.twig */
class __TwigTemplate_29673bf402f5821bf97cda8bc268f2b48478c3463b650960a40a398b31f973bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1 class=\"page-header, fi-torsos-all-female\">Agregar Usuarios</h1>
    <ul class=\"record_actions\"></ul>
    <div class=\"col-lg-12\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                Agregar Usuarios
            </div>
            <div class=\"panel-body\">
   

   
    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo " 
        <div class=\"form-group col-md-6 \">       
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
        
        </div>
        <div class=\"form-group col-md-6 \">       
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label');
        echo "
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget');
        echo "
        
        </div>
        <div class=\"form-group col-md-6\">       
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
        
        </div>
        <div class=\"form-group col-md-6 \">       
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget');
        echo "
        
        </div>
        <div class=\"form-group col-md-6 \">       
        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo", array()), 'label');
        echo "
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo", array()), 'errors');
        echo "
        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo", array()), 'widget');
        echo "
        
        </div>
        <div class=\"form-group col-md-6 \">       
        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'label');
        echo "
        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'errors');
        echo "
        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'widget');
        echo "
        
        </div>
        <div class=\"form-group col-md-6 \">       
        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoMovil", array()), 'label');
        echo "
        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoMovil", array()), 'errors');
        echo "
        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoMovil", array()), 'widget');
        echo "
        
        </div>
        <div class=\"form-group col-md-6 \">       
        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parroquia", array()), 'label');
        echo "
        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parroquia", array()), 'errors');
        echo "
        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parroquia", array()), 'widget');
        echo "
        
        </div>
        <div class=\"form-group col-md-6 \">       
        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "group", array()), 'label');
        echo "
        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "group", array()), 'errors');
        echo "
        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "group", array()), 'widget');
        echo "
        
        </div>
        ";
        // line 71
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        

        <ul class=\"record_actions\">
    <li>
         <a class=\"col-md-12 btn btn-primary\" href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("usuarios");
        echo "\">Volver a la Lista </a>
        </div>
        </div>
    </li>
</ul>
";
    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        echo "      
        <script type=\"text/javascript\">
            \$(document).on('ready', function () {                
               
        \$('#censo_censobundle_usuarios_telefonoCelular').mask(\"(0999) 999-9999\");
        \$('#censo_censobundle_usuarios_cedula').mask(\"999999999\");
        \$('#censo_censobundle_usuarios_telefonoOficina').mask(\"(0999) 999-9999\");
        \$('#censo_censobundle_usuarios_ingresoMensual').mask(\"000.000.000.000.000 bs\");
                  censo_censobundle_usuarios_email
                
            });
            
            
        </script>    
    ";
    }

    public function getTemplateName()
    {
        return "CensoBundle:Usuarios:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 83,  196 => 76,  188 => 71,  182 => 68,  178 => 67,  174 => 66,  167 => 62,  163 => 61,  159 => 60,  152 => 56,  148 => 55,  144 => 54,  137 => 50,  133 => 49,  129 => 48,  122 => 44,  118 => 43,  114 => 42,  107 => 38,  103 => 37,  99 => 36,  92 => 32,  88 => 31,  84 => 30,  77 => 26,  73 => 25,  69 => 24,  62 => 20,  58 => 19,  54 => 18,  49 => 16,  45 => 15,  32 => 4,  29 => 3,);
    }
}
