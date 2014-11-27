<?php

/* CensoBundle:Habitantes:new.html.twig */
class __TwigTemplate_4f5aaaf32fa64bab1174e5016dac5698c42ee8d6297e7407de88b358824179b3 extends Twig_Template
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
        // line 5
        echo "<h1 class=\"page-header, fi-torsos-all-female\">Agregar Habitantes</h1>
    <ul class=\"record_actions\"></ul>
    <div class=\"col-lg-12\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                Agregar Habitantes
            </div>
            <div class=\"panel-body\">
       
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    
    
    <br> 
    <br>
    <br>
    <a class=\"col-md-12 btn btn-primary\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("habitantes");
        echo "\">Volver a la Lista </a>
    </div>
 </div>
  
";
    }

    public function getTemplateName()
    {
        return "CensoBundle:Habitantes:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 20,  42 => 14,  31 => 5,  28 => 3,);
    }
}
