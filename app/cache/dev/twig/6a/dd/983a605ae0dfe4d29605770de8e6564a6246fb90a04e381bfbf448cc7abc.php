<?php

/* CensoBundle:Seguridad:correo_no_valido.html.twig */
class __TwigTemplate_6add983a605ae0dfe4d29605770de8e6564a6246fb90a04e381bfbf448cc7abc extends Twig_Template
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
        <div class=\"panel panel-danger\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Correo no válido</h3>
            </div>
            <div class=\"panel-body\">
                El correo \"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["correo"]) ? $context["correo"] : $this->getContext($context, "correo")), "html", null, true);
        echo "\" no esta registrado en nuestra base de datos.
                <br></br>
                Por favor intente  nuevamente.                                                                
                <br></br>
                Gracias y disculpe las molestias.
                <br></br>
                <a class=\"btn btn-success\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("contrasenia");
        echo "\">Olvido de contraseña</a>
            </div>
        </div>
    ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <!-- Bootstrap validator js -->
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recibo/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "CensoBundle:Seguridad:correo_no_valido.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 34,  93 => 32,  90 => 31,  82 => 26,  73 => 20,  61 => 11,  57 => 9,  54 => 8,  48 => 6,  42 => 5,  35 => 3,  32 => 2,);
    }
}
