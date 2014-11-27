<?php

/* CensoBundle:Habitantes:index.html.twig */
class __TwigTemplate_9bd58b7434db38890c82e8cda09675640ef7b76e4a7a1ede235181ba19558a08 extends Twig_Template
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
        echo "<!-- jQuery -->
        

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

    // line 29
    public function block_body($context, array $blocks = array())
    {
        echo "    
    <h1 class=\"page-header, fi-torsos-all-female\">Listado de Habitantes</h1>
    
    
        <div class=\"col-lg-12\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    Datos de Habitantes 
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
                            
                            <th>Nombre Completo</th>
                            <th class=\"filter-select filter-exact\" data-placeholder=\"-seleccione-\">Genero</th>
                           
                            <th>Edades</th>
                            <th class=\"filter-select filter-exact\" data-placeholder=\"-seleccione-\">Embarazo</th>
                            <th>Cedula</th>
                            <th class=\"filter-select filter-exact\" data-placeholder=\"-seleccione-\">Jefe de familia</th>
                            <th>Tlf Celular</th>
                            <th class=\"filter-select filter-exact\" data-placeholder=\"-seleccione-\">Discapacidades</th>
                            <th class=\"filter-select filter-exact\" data-placeholder=\"-seleccione-\">Voceros</th>
                            <th class=\"print\">Acciones</th>
                        </tr>
                    </thead>



<tbody>
    ";
        // line 71
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 72
            echo "        <tr>
            
            <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellido", array()), "html", null, true);
            echo "</td>            
            <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "genero", array()), "html", null, true);
            echo "</td>            
            <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "edad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "embarazo", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cedula", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jefeGrupoFamiliar", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telefonoCelular", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "discapacidades", array()), "nombre", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "participaOrganizacion", array()), "html", null, true);
            echo "</td>
            
            <td class=\"print\">
        <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("habitantes_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-zoom-in col-md-4 col-md-4\"></i> </a>
        <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("habitantes_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-pencil col-md-4 col-md-offset-4\"></i></a>
     </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "</tbody>
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
            <select class=\"pagenum input-mini\" title=\"Select page number\"></select>
        </th>
    </tr>
</tfoot>
</table>


    <a class=\"col-md-12 btn btn-success print\" href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("habitantes_new");
        echo "\">Agregar nuevo Habitantes </a>
   
   
    <button type=\"button\" onClick=\"window.print()\" class=\"reset col-md-12 mt btn btn-warning print\"<i class=\"glyphicon glyphicon-torso\"></i> Imprimir Reporte</button>


</div>
    <!-- /.panel-body -->
            </div>
<!-- /.panel -->
</div>
<!-- /.col-lg-12 -->

<div class=\"col-md-offset-7\">
    <div id=\"dataTables-example_paginate\" class=\"dataTables_paginate paging_simple_numbers\">

    </div>
</div>


";
    }

    // line 134
    public function block_footerscript($context, array $blocks = array())
    {
        // line 135
        echo "<!-- jQuery -->
    <!--<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/js/jquery-1.4.4.min.js"), "html", null, true);
        echo "\"></script>-->

    <!-- Demo stuff -->
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/js/prettify.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/js/docs.js"), "html", null, true);
        echo "\"></script>

    <!-- Tablesorter: required for bootstrap -->
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/js/jquery.tablesorter.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/js/jquery.tablesorter.widgets.js"), "html", null, true);
        echo "\"></script>
        
    <!-- Tablesorter: optional -->
    <script src=\"";
        // line 147
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
        return "CensoBundle:Habitantes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 147,  275 => 144,  271 => 143,  265 => 140,  261 => 139,  255 => 136,  252 => 135,  249 => 134,  224 => 113,  199 => 90,  189 => 86,  185 => 85,  179 => 82,  175 => 81,  171 => 80,  167 => 79,  163 => 78,  159 => 77,  155 => 76,  151 => 75,  145 => 74,  141 => 72,  137 => 71,  91 => 29,  83 => 25,  79 => 24,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  53 => 13,  49 => 12,  44 => 10,  39 => 8,  33 => 4,  30 => 3,);
    }
}
