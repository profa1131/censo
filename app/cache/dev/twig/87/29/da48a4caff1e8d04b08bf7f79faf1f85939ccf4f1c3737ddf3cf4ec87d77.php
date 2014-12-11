<?php

/* CensoBundle:Usuarios:index.html.twig */
class __TwigTemplate_8729da48a4caff1e8d04b08bf7f79faf1f85939ccf4f1c3737ddf3cf4ec87d77 extends Twig_Template
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
        echo "<h1 class=\"page-header, fi-torsos-all-female\">Usuarios</h1>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    Usuarios 
                </div>
                <div class=\"panel-body\">
                    <div class=\"table-responsive col-md-12\">
                        <table class=\"table table-striped table-bordered table-hover \" id=\"dataTables-example\">
                            <thead>
                                <tr>
                                    <!--<th>Id</th>
                                    <th>Nombre de Usuario</th>-->
                                   <!-- <th>Salt</th>
                                    <th>Password</th>-->
                                    <th>Correo</th>
                                    <!--<th>estatus</th>-->
                                    <th>Nombre</th>
                                    <th>Codigo</th>
                                    <!--<th>Fechaactivacion</th>-->
                                    <th>FechaIngreso</th>
                                    <th>Telefono</th>
                                    <th>Telefonomovil</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <tbody>
        ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 38
            echo "            <tr>
               <!-- <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuarios_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
            echo "</a></td>-->
               <!-- <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()), "html", null, true);
            echo "</td>-->
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
            echo "</td>
                <!--<td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isActive", array()), "html", null, true);
            echo "</td>-->
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codigo", array()), "html", null, true);
            echo "</td>
                <!--<td>";
            // line 45
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaActivacion", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaActivacion", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>-->
                <td>";
            // line 46
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaIngreso", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaIngreso", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telefono", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telefonoMovil", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuarios_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">Mostrar</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuarios_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        // line 61
        echo "    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("usuarios_new");
        echo "\">
            Ingresar
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "CensoBundle:Usuarios:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 66,  140 => 61,  128 => 55,  122 => 52,  115 => 48,  111 => 47,  105 => 46,  99 => 45,  95 => 44,  91 => 43,  87 => 42,  83 => 41,  79 => 40,  73 => 39,  70 => 38,  66 => 37,  31 => 4,  28 => 3,);
    }
}
