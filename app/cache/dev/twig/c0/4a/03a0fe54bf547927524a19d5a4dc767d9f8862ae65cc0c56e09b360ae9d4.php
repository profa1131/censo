<?php

/* CensoBundle:Seguridad:novalido.html.twig */
class __TwigTemplate_c04a03a0fe54bf547927524a19d5a4dc767d9f8862ae65cc0c56e09b360ae9d4 extends Twig_Template
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

    // line 5
    public function block_bootstrap($context, array $blocks = array())
    {
        echo " ";
    }

    // line 6
    public function block__body($context, array $blocks = array())
    {
        echo "   ";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"container\">
        <div >               
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recibo/imagenes/ubv.png"), "html", null, true);
        echo "\" alt=\"Logo UBV\">
        </div>
        </br>
        </br>
        <div class=\"panel panel-warning\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Registro no válido</h3>
            </div>
            <div class=\"panel-body\">
                Su código de verificación es incorrecto o su tiempo de vida expiró (mayor a 48 horas).
                <br></br>
                Por favor registrese nuevamente.                                                
                <a class=\"btn btn-success\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("cuenta", array("solicitud" => "registro"));
        echo "\">Registro</a>
                <br></br>
                Gracias y disculpe las molestias.
            </div>
        </div>
    ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <!-- Bootstrap validator js -->
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recibo/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "CensoBundle:Seguridad:novalido.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  89 => 31,  86 => 30,  76 => 23,  61 => 11,  57 => 9,  54 => 8,  48 => 6,  42 => 5,  35 => 3,  32 => 2,);
    }
}
