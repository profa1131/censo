<?php

/* CensoBundle:RegistroSocioeconomico:show.html.twig */
class __TwigTemplate_708b07e60d3fd10d3875323a6d226a41b6b3e5cc5431c3c23ebec66a8e212ef7 extends Twig_Template
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
        echo "<h1>RegistroSocioeconomico</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ingresofamiliar</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ingresoFamiliar", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Actividadcomercialviviendaid</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "actividadComercialViviendaId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Habitacionesvivienda</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "habitacionesVivienda", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ninoscalle</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ninosCalle", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Indigentes</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "indigentes", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Enfermosterminales</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enfermosTerminales", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Discapacitados</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "discapacitados", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Terceraedad</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "terceraEdad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ayudasalud</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ayudaSalud", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ayudavivienda</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ayudaVivienda", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Aguasblancas</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aguasBlancas", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tanque</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tanque", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ltstanque</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ltsTanque", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tipotanque</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoTanque", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pipotes</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pipotes", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cuantos</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cuantos", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tipopipotes</th>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoPipotes", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Medidoragua</th>
                <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "medidorAgua", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Gas</th>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gas", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Empresagas</th>
                <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "empresaGas", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cantidadcilindros</th>
                <td>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cantidadCilindros", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Capacidadcilindro</th>
                <td>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "capacidadCilindro", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Duracioncilindro</th>
                <td>";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "duracionCilindro", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Preciocilindro</th>
                <td>";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "precioCilindro", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sistemaelectrico</th>
                <td>";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sistemaElectrico", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Medidor</th>
                <td>";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "medidor", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Bombillosahorradores</th>
                <td>";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bombillosAhorradores", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cuantosbobillosnecesita</th>
                <td>";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cuantosBobillosNecesita", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mecanismoinformacionid</th>
                <td>";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mecanismoInformacionId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Organizacionescounitarias</th>
                <td>";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "organizacionesCounitarias", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 134
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Registrosocioeconomico</th>
                <td>";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "registroSocioeconomico", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("registrosocioeconomico");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registrosocioeconomico_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 154
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "CensoBundle:RegistroSocioeconomico:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 154,  281 => 150,  273 => 145,  263 => 138,  256 => 134,  249 => 130,  242 => 126,  235 => 122,  228 => 118,  221 => 114,  214 => 110,  207 => 106,  200 => 102,  193 => 98,  186 => 94,  179 => 90,  172 => 86,  165 => 82,  158 => 78,  151 => 74,  144 => 70,  137 => 66,  130 => 62,  123 => 58,  116 => 54,  109 => 50,  102 => 46,  95 => 42,  88 => 38,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,);
    }
}
