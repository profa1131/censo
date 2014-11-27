<?php

/* CensoBundle:RegistroSocioeconomico:index.html.twig */
class __TwigTemplate_9d43c093ba9f5bab991728aa703973baf4ba7f11579c87d1252aa2c6ec04d4e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'headscript' => array($this, 'block_headscript'),
            'body' => array($this, 'block_body'),
            'footerscript' => array($this, 'block_footerscript'),
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
    public function block_headscript($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- jQuery -->


    <!-- Demo stuff -->
    <!--<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/css/ccs/jq.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">-->

    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/css/ccs/prettify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<!--<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/js/prettify.js"), "html", null, true);
        echo "\"></script>-->
<!--<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/js/docs.js"), "html", null, true);
        echo "\"></script>-->


    <!-- Tablesorter: required for bootstrap -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/css/css/theme.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/js/jquery.tablesorter.js"), "html", null, true);
        echo "\"></script>-->
    <!--<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/js/jquery.tablesorter.widgets.js"), "html", null, true);
        echo "\"></script>-->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/css/css/print.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"print\">


    <!-- Tablesorter: optional -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/css/ccs/jquery.tablesorter.pager.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/js/jquery.tablesorter.widgets.js"), "html", null, true);
        echo "\"></script>-->


";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "<h1 class=\"page-header, glyphicon glyphicon-list-alt\"> Registro Socioeconomico</h1>
    <br>
    <br>

    <div class=\"col-lg-12\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                Registro Socieconomico
            </div>
            <div class=\"panel-body\">
            <br>
            <br>

            <span class=\"print\">
                <div class=\"bootstrap_buttons\">
                    <button type=\"button\" class=\"reset btn btn-primary\" data-column=\"0\" data-filter=\"\"><i class=\"icon-white icon-refresh glyphicon glyphicon-refresh\"></i> Reiniciar filtros</button>
                </div>
            </span>
            <!-- use the filter_reset : '.reset' option or include data-filter=\"\" using the filter button demo code to reset the filters -->
            <br>

            <table class=\"tablesorter\">

                <thead>
                    <tr>
                        <th>Familias</th>
                        <th class=\"filter-select filter-exact\" data-placeholder=\"-seleccione-\">Tipo de Vivienda</th>
                        <!--<th>Ingresofamiliar</th>
                        <th>Actividadcomercialviviendaid</th>
                        <th>Habitaciones en la Vivienda</th>
                        <th>Ninoscalle</th>
                        <th>Indigentes</th>
                        <th>Enfermosterminales</th>
                        <th>Discapacitados</th>
                        <th>Terceraedad</th>
                        <th>Ayudasalud</th>
                        <th>Ayudavivienda</th>-->
                        <th class=\"filter-select filter-exact\" data-placeholder=\"-seleccione-\">Aguas Blancas</th>
                        <th class=\"filter-select filter-exact\" data-placeholder=\"-seleccione-\">Aguas Servidas</th>
                        <!-- <th>Tanque</th>
                         <th>Ltstanque</th>
                         <th>Tipotanque</th>
                         <th>Pipotes</th>
                         <th>Cuantos</th>
                         <th>Tipopipotes</th>
                         <th>Medidor de Agua</th>-->
                        <th class=\"filter-select filter-exact\" data-placeholder=\"-seleccione-\">Gas</th>
                        <!--<th>Empresagas</th>
                        <th>Cantidadcilindros</th>
                        <th>Capacidadcilindro</th>
                        <th>Duracioncilindro</th>
                        <th>Preciocilindro</th>-->
                        <th class=\"filter-select filter-exact\" data-placeholder=\"-seleccione-\">Sistema Electrico</th>
                        <!--<th>Medidor</th>
                        <th>Bombillosahorradores</th>
                        <th>Cuantosbobillosnecesita</th>
                        <th>Mecanismoinformacionid</th>
                        <th>Organizacionescounitarias</th>-->
                        <th class=\"filter-select filter-exact\" data-placeholder=\"-seleccione-\">Recoleccion de basura</th>
                        <!--<th>Fecha</th>
                        <th>Registrosocioeconomico</th>-->
                        <th class=\"print\">Accion</th>
                    </tr>
                </thead>




                <tbody>
                    ";
        // line 100
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 101
            echo "                        <tr>
                            <td><a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registrosocioeconomico_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
            echo "\">
                                    ";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
            echo "</a>
                            </td>
                            <td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "familias", array()), "apellidos", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipoVivienda", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "ingresoFamiliar", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "actividadComercialViviendaId", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "habitacionesVivienda", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "ninosCalle", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "indigentes", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "enfermosTerminales", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "discapacitados", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "terceraEdad", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "ayudaSalud", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "ayudaVivienda", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "aguasBlancas", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "aguasServidad", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tanque", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "ltsTanque", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipoTanque", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pipotes", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cuantos", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipoPipotes", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "medidorAgua", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "gas", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "empresaGas", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cantidadCilindros", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "capacidadCilindro", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "duracionCilindro", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "precioCilindro", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sistemaElectrico", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "medidor", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "bombillosAhorradores", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cuantosBobillosNecesita", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "mecanismoInformacionId", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "organizacionesCounitarias", array()), "html", null, true);
            echo "</td>-->
                            <td>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "recoleccionBasura", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 139
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "registroSocioeconomico", array()), "html", null, true);
            echo "</td>
                            <td class=\"print\">
                                <a href=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("habitantes_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-zoom-in col-md-4 col-md-4\"></i> </a>
                                <a href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("habitantes_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-pencil col-md-4 col-md-offset-4\"></i></a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "                </tbody>

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
            

        <a class=\" col-md-12 btn btn-success print\" href=\"";
        // line 171
        echo $this->env->getExtension('routing')->getPath("registrosocioeconomico_new");
        echo "\">Agregar nuevo Registro </a>
        <button type=\"button\" onClick=\"window.print()\" class=\"reset col-md-12 mt btn btn-warning print\"<i class=\"glyphicon glyphicon-torso\"></i> Imprimir Reporte</button>

    
        </div>
        
    </div>
    <!-- /.col-lg-12 -->

    <div class=\"col-md-offset-7\">
        <div id=\"dataTables-example_paginate\" class=\"dataTables_paginate paging_simple_numbers\">

        </div>
    </div>

    

";
    }

    // line 189
    public function block_footerscript($context, array $blocks = array())
    {
        // line 190
        echo "    <!-- jQuery -->
        <!--<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/js/jquery-1.4.4.min.js"), "html", null, true);
        echo "\"></script>-->

    <!-- Demo stuff -->
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/js/prettify.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/js/docs.js"), "html", null, true);
        echo "\"></script>

    <!-- Tablesorter: required for bootstrap -->
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/js/jquery.tablesorter.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/js/jquery.tablesorter.widgets.js"), "html", null, true);
        echo "\"></script>

    <!-- Tablesorter: optional -->
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/js/jquery.tablesorter.pager.js"), "html", null, true);
        echo "\"></script>


    <script id=\"js\">\$(function () {

                \$.extend(\$.tablesorter.themes.bootstrap, {
                    // these classes are added to the table. To see other table classes available,
                    // look here: http://twitter.github.com/bootstrap/base-css.html#tables
                    table: 'table table-bordered',
                    caption: 'caption',
                    header: 'bootstrap-header', // give the header a gradient background
                    footerRow: '',
                    footerCells: '',
                    icons: '', // add \"icon-white\" to make them white; this icon class is added to the <i> in the header
                    sortNone: 'bootstrap-icon-unsorted',
                    sortAsc: 'icon-chevron-up glyphicon glyphicon-chevron-up', // includes classes for Bootstrap v2 & v3
                    sortDesc: 'icon-chevron-down glyphicon glyphicon-chevron-down', // includes classes for Bootstrap v2 & v3
                    active: '', // applied when column is sorted
                    hover: '', // use custom css here - bootstrap class may not override it
                    filterRow: '', // filter row class
                    even: '', // odd row zebra striping
                    odd: ''  // even row zebra striping
                });

                // call the tablesorter plugin and apply the uitheme widget
                \$(\"table\").tablesorter({
                    // this will apply the bootstrap theme if \"uitheme\" widget is included
                    // the widgetOptions.uitheme is no longer required to be set
                    theme: \"bootstrap\",
                    widthFixed: true,
                    headerTemplate: '{content} {icon}', // new in v2.7. Needed to add the bootstrap icon!

                    // widget code contained in the jquery.tablesorter.widgets.js file
                    // use the zebra stripe widget if you plan on hiding any rows (filter widget)
                    widgets: [\"uitheme\", \"filter\", \"zebra\"],
                    widgetOptions: {
                        // using the default zebra striping class name, so it actually isn't included in the theme variable above
                        // this is ONLY needed for bootstrap theming if you are using the filter widget, because rows are hidden
                        zebra: [\"even\", \"odd\"],
                        // reset filters button
                        filter_reset: \".reset\"

                                // set the uitheme widget to use the bootstrap theme class names
                                // this is no longer required, if theme is set
                                // ,uitheme : \"bootstrap\"

                    }
                })
                        .tablesorterPager({
                            // target the pager markup - see the HTML block below
                            container: \$(\".ts-pager\"),
                            // target the pager page select dropdown - choose a page
                            cssGoto: \".pagenum\",
                            // remove rows from the table to speed up the sort of large tables.
                            // setting this to false, only hides the non-visible rows; needed if you plan to add/remove rows with the pager enabled.
                            removeRows: false,
                            // output string - default is '{page}/{totalPages}';
                            // possible variables: {page}, {totalPages}, {filteredPages}, {startRow}, {endRow}, {filteredRows} and {totalRows}
                            output: '{startRow} - {endRow} / {filteredRows} ({totalRows})'

                        });

            });</script>
    <script>
        \$(function () {

            // filter button demo code
            \$('button.filter').click(function () {
                var col = \$(this).data('column'),
                        txt = \$(this).data('filter');
                \$('table').find('.tablesorter-filter').val('').eq(col).val(txt);
                \$('table').trigger('search', false);
                return false;
            });

            // toggle zebra widget
            \$('button.zebra').click(function () {
                var t = \$(this).hasClass('btn-success');
//\t\t\tif (t) {
                // removing classes applied by the zebra widget
                // you shouldn't ever need to use this code, it is only for this demo
//\t\t\t\t\$('table').find('tr').removeClass('odd even');
//\t\t\t}
                \$('table')
                        .toggleClass('table-striped')[0]
                        .config.widgets = (t) ? [\"uitheme\", \"filter\"] : [\"uitheme\", \"filter\", \"zebra\"];
                \$(this)
                        .toggleClass('btn-danger btn-success')
                        .find('i')
                        .toggleClass('icon-ok icon-remove glyphicon-ok glyphicon-remove').end()
                        .find('span')
                        .text(t ? 'disabled' : 'enabled');
                \$('table').trigger('refreshWidgets', [false]);
                return false;
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "CensoBundle:RegistroSocioeconomico:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 202,  416 => 199,  412 => 198,  406 => 195,  402 => 194,  396 => 191,  393 => 190,  390 => 189,  368 => 171,  342 => 147,  332 => 143,  328 => 142,  323 => 140,  317 => 139,  313 => 138,  309 => 137,  305 => 136,  301 => 135,  297 => 134,  293 => 133,  289 => 132,  285 => 131,  281 => 130,  277 => 129,  273 => 128,  269 => 127,  265 => 126,  261 => 125,  257 => 124,  253 => 123,  249 => 122,  245 => 121,  241 => 120,  237 => 119,  233 => 118,  229 => 117,  225 => 116,  221 => 115,  217 => 114,  213 => 113,  209 => 112,  205 => 111,  201 => 110,  197 => 109,  193 => 108,  189 => 107,  185 => 106,  181 => 105,  176 => 103,  172 => 102,  169 => 101,  165 => 100,  94 => 31,  91 => 30,  83 => 25,  79 => 24,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  53 => 13,  49 => 12,  44 => 10,  39 => 8,  33 => 4,  30 => 3,);
    }
}
