<?php

/* CensoBundle:Habitantes:show.html.twig */
class __TwigTemplate_f968f15960de865925ee15961e575008e6efa49aa53337e7457e4880115708f0 extends Twig_Template
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
        echo "<h1 class=\"page-header, fi-torsos\"> Detalles de Habitantes</h1>

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    Datos de Habitntes
                </div>
                <div class=\"panel-body\"> 
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
                            <th>Nombre</th>
                            <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Segundonombre</th>
                            <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "segundoNombre", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Apellido</th>
                            <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellido", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Segundoapellido</th>
                            <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "segundoApellido", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Genero</th>
                            <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "genero", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Nacionalidad</th>
                            <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nacionalidad", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Cedula</th>
                            <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cedula", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Empleo</th>
                            <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "empleo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Fechanacimiento</th>
                            <td>";
        // line 53
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaNacimiento", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Embarazo</th>
                            <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "embarazo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Parentesco</th>
                            <td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parentesco", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Gradodeinstruccion</th>
                            <td>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gradoDeInstruccion", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Cne</th>
                            <td>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cne", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Pensionado</th>
                            <td>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pensionado", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Tipodeingreso</th>
                            <td>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoDeIngreso", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Ingresomensual</th>
                            <td>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ingresoMensual", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Jefegrupofamiliar</th>
                            <td>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jefeGrupoFamiliar", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Edocivil</th>
                            <td>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "edoCivil", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Telefonocelular</th>
                            <td>";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telefonoCelular", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Correoelectronico</th>
                            <td>";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "correoElectronico", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Telefonooficina</th>
                            <td>";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telefonoOficina", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Tiempoenlacomunidad</th>
                            <td>";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tiempoEnLaComunidad", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Leypoliticahabitacional</th>
                            <td>";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "leyPoliticaHabitacional", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Participaorganizacion</th>
                            <td>";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "participaOrganizacion", array()), "html", null, true);
        echo "</td>
                        </tr>
                        
                    </tbody>
                
            

    <tfoot>
         
    <tr class=\"print\">
            <th colspan=\"7\" class=\"ts-pager form-horizontal\">
                <button type=\"button\" class=\"btn first\"><i class=\"icon-step-backward glyphicon glyphicon-step-backward\"></i></button>
                <button type=\"button\" class=\"btn prev\"><i class=\"icon-arrow-left glyphicon glyphicon-backward\"></i></button>
                <span class=\"pagedisplay\"></span> <!-- this can be any element, including an input -->
                <button type=\"button\" class=\"btn next\"><i class=\"glyphicon glyphicon-forward\"></i></button>
                <button type=\"button\" class=\"btn last\"><i class=\"icon-step-forward glyphicon glyphicon-step-forward\"></i></button>
                <select class=\"pagesize input-mini\" title=\"Select page size\">
                    <option selected=\"selected\" value=\"10\">10</option>
                    <option value=\"20\">20</option>
                    <option value=\"30\">30</option>
                    <option value=\"40\">40</option>
                </select>

            </th>
    </tr>
    </tfoot>
                </table>
   

        <a class=\" col-md-12 btn btn-primary\" href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("habitantes");
        echo "\">Volver a la Lista </a> <br>
        </a>


        <a class=\" col-md-12 mt btn btn-success\" href=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("habitantes_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">Editar Registro </a>


        ";
        // line 149
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
   
    </div>
            </div>
        </div>
    </div>

    
";
    }

    public function getTemplateName()
    {
        return "CensoBundle:Habitantes:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 149,  253 => 146,  246 => 142,  214 => 113,  207 => 109,  200 => 105,  193 => 101,  186 => 97,  179 => 93,  172 => 89,  165 => 85,  158 => 81,  151 => 77,  144 => 73,  137 => 69,  130 => 65,  123 => 61,  116 => 57,  109 => 53,  102 => 49,  95 => 45,  88 => 41,  81 => 37,  74 => 33,  67 => 29,  60 => 25,  53 => 21,  46 => 17,  31 => 4,  28 => 3,);
    }
}
