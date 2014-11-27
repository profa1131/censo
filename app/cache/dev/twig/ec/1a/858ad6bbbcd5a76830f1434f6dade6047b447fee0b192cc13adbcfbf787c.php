<?php

/* CensoBundle:Comunas:new.html.twig */
class __TwigTemplate_ec1a858ad6bbbcd5a76830f1434f6dade6047b447fee0b192cc13adbcfbf787c extends Twig_Template
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
        echo "<h1 class=\"page-header, fi-\">Agregar Comuna</h1>
    <ul class=\"record_actions\"></ul>
    <div class=\"col-lg-12\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                Agregar Comunas
            </div>
            <div class=\"panel-body\">
                <p>
    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <a class=\" col-md-12 mt btn btn-primary\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("comunas");
        echo "\">Volver a la Lista </a>
        
    </p>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "CensoBundle:Comunas:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 15,  42 => 13,  31 => 4,  28 => 3,);
    }
}
