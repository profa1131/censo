<?php

/* CensoBundle:Familias:show.html.twig */
class __TwigTemplate_9c0462407657e4ee10580b2d0a64a79fc2310f97ac59e96b0595d24f1f72d337 extends Twig_Template
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
        echo "<h1 class=\"page-header, fi-torsos-all-female\"> Detalles de Familias</h1>
   
   <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    Datos de Familias 
                </div>
                <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                     <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellidos</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellidos", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefonolocal</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telefonoLocal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "direccion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sector</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sector", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombrescomunidad</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombresComunidad", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
                </table>
            </div>
         </div>
   </div>

    <table class=\"record_properties\">
       
    </table>

        <ul class=\"record_actions\">
   
            <a class=\"btn btn-primary\" href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("familias");
        echo "\">Volver a la Lista </a> <br>
        </a>
    
   
        <a class=\"btn btn-success\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("familias_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">Editar Registro </a>
        
   
   ";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "CensoBundle:Familias:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 58,  104 => 55,  97 => 51,  80 => 37,  73 => 33,  66 => 29,  59 => 25,  52 => 21,  45 => 17,  31 => 5,  28 => 3,);
    }
}
