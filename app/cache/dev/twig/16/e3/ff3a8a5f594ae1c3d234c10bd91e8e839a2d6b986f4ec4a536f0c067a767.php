<?php

/* CensoBundle:Habitantes:edit.html.twig */
class __TwigTemplate_16e3ff3a8a5f594ae1c3d234c10bd91e8e839a2d6b986f4ec4a536f0c067a767 extends Twig_Template
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
        echo "<h1 class=\"page-header, fi-torsos\">Editar Habitante</h1>
         <ul class=\"record_actions\"></ul>
            <div class=\"col-lg-12\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    Editar Habitantes
                </div>
                <div class=\"panel-body\">
                   
</a>

    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        
    
        <a class=\" col-md-12 mt btn btn-primary\" href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("habitantes");
        echo "\">Volver a la Lista </a>
        
    
    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "

                </div></div></div>
";
    }

    public function getTemplateName()
    {
        return "CensoBundle:Habitantes:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 22,  51 => 19,  44 => 15,  31 => 4,  28 => 3,);
    }
}
