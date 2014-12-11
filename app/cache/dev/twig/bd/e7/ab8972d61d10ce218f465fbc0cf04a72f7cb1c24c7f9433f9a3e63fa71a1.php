<?php

/* CensoBundle:Vocerias:index.html.twig */
class __TwigTemplate_bde7ab8972d61d10ce218f465fbc0cf04a72f7cb1c24c7f9433f9a3e63fa71a1 extends Twig_Template
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
        echo "<h1 class=\"page-header, fi-torsos-all-female\">Vocerias</h1>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    Datos de Vocerias
                </div>
                <div class=\"panel-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <tbody>
        ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "            <tr>
                <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vocerias_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vocerias_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">Mostrar</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vocerias_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">Editar</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </tbody>
</table>

<ul>
    <li >
         <a class=\"btn btn-success col-md-12\" href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("vocerias_new");
        echo "\">Agregar nueva Vocerias </a>
        
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "CensoBundle:Vocerias:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 50,  96 => 45,  84 => 39,  78 => 36,  71 => 32,  65 => 31,  62 => 30,  58 => 29,  31 => 4,  28 => 3,);
    }
}
