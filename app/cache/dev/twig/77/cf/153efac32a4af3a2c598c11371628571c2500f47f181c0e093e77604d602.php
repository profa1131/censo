<?php

/* CensoBundle:Familias:edit.html.twig */
class __TwigTemplate_77cf153efac32a4af3a2c598c11371628571c2500f47f181c0e093e77604d602 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
        echo "<h1 class=\"page-header, fi-torsos-all-female\">Editar Familia</h1>
         <ul class=\"record_actions\"></ul>
            <div class=\"col-lg-12\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    Editar Familia
                </div>
                <div class=\"panel-body\">
                    <p>
    
        ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo " 
        
       <a class=\"btn btn-primary\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("familias");
        echo "\">Volver a la Lista </a>
          
   
    ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</p>
                </div>
            </div>
        </div>

   
   
";
    }

    public function getTemplateName()
    {
        return "CensoBundle:Familias:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 19,  48 => 16,  43 => 14,  31 => 4,  28 => 3,);
    }
}
