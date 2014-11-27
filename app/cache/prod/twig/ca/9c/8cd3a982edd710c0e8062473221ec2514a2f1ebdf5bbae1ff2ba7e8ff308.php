<?php

/* CensoBundle:Familias:new.html.twig */
class __TwigTemplate_ca9c8cd3a982edd710c0e8062473221ec2514a2f1ebdf5bbae1ff2ba7e8ff308 extends Twig_Template
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
        echo "<h1 class=\"page-header, fi-torsos-all-female\">Agregar Familia</h1>
    <ul class=\"record_actions\"></ul>
    <div class=\"col-lg-12\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                Agregar Familias
            </div>
            <div class=\"panel-body\">
                <p>
                    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "
            <a class=\"btn btn-primary\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("familias");
        echo "\">Volver a la Lista </a>
                </p>
            </div>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "CensoBundle:Familias:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  42 => 13,  31 => 4,  28 => 3,);
    }
}
