<?php

/* CensoBundle:Familias:index.html.twig */
class __TwigTemplate_4daae4750fa1fbf0b99f37975f60fe67e596e7191c203832d02ff5ef3993dbcf extends Twig_Template
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
        echo "<h1 class=\"page-header, fi-torsos-all-female\">Listado de Familias</h1>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    Datos de Familias 
                </div>
                <div class=\"panel-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                              <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Apellidos</th>
                                    <th>Telefono local</th>
                                    <th>Direccion</th>
                                    <th>Sector</th>
                                    <th>Nombre de la comunidad</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <tbody>
        ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 35
            echo "
            <tr class=\"odd gradeX\">
                <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("familias_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellidos", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telefonoLocal", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "direccion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sector", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombresComunidad", array()), "html", null, true);
            echo "</td>
                <td>
                    <td class=\"print\">
        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("familias_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-zoom-in col-md-4 col-md-4\"></i> </a>
        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("familias_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-pencil col-md-4 col-md-offset-4\"></i></a>
     </td>
            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </tbody>

</table>

<div class=\"col-md-offset-7\">
    <div id=\"dataTables-example_paginate\" class=\"dataTables_paginate paging_simple_numbers\">
        <ul class=\"pagination\">
            <li id=\"dataTables-example_previous\" tabindex=\"0\" aria-controls=\"dataTables-example\" class=\"paginate_button previous\">
                <a href=\"#\">Previous</a>
            </li>
            <li tabindex=\"0\" aria-controls=\"dataTables-example\" class=\"paginate_button \"><a href=\"#\">1</a></li>
            <li tabindex=\"0\" aria-controls=\"dataTables-example\" class=\"paginate_button \"><a href=\"#\">2</a></li>
            <li tabindex=\"0\" aria-controls=\"dataTables-example\" class=\"paginate_button \"><a href=\"#\">3</a></li>
            <li tabindex=\"0\" aria-controls=\"dataTables-example\" class=\"paginate_button \"><a href=\"#\">4</a></li>
            <li tabindex=\"0\" aria-controls=\"dataTables-example\" class=\"paginate_button \"><a href=\"#\">5</a></li>
            <li tabindex=\"0\" aria-controls=\"dataTables-example\" class=\"paginate_button \"><a href=\"#\">6</a></li>
            <li id=\"dataTables-example_next\" tabindex=\"0\" aria-controls=\"dataTables-example\" class=\"paginate_button next\">
                <a href=\"#\">Next</a>
            </li>
        </ul>
    </div>
</div>

<ul>

    <a class=\"btn btn-success\" href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("familias_new");
        echo "\">Agregar nueva Familia </a>


</ul>

";
    }

    public function getTemplateName()
    {
        return "CensoBundle:Familias:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 76,  114 => 51,  103 => 46,  99 => 45,  93 => 42,  89 => 41,  85 => 40,  81 => 39,  77 => 38,  71 => 37,  67 => 35,  63 => 34,  31 => 4,  28 => 3,);
    }
}
