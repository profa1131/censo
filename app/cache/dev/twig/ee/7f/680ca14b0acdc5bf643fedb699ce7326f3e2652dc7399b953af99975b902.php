<?php

/* CensoBundle:RegistroSocioeconomico:new.html.twig */
class __TwigTemplate_ee7f680ca14b0acdc5bf643fedb699ce7326f3e2652dc7399b953af99975b902 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'footerscript' => array($this, 'block_footerscript'),
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1 class=\"page-header\">Registro Socioeconomico</h1>
    <ul class=\"record_actions\"></ul>
    <div class=\"col-lg-12\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                Registro Socioeconomico
            </div>
            <div class=\"panel-body\">
                <p>
                    
                    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <div class=\"form-group col-md-6\">         
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "familias", array()), 'label');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "familias", array()), 'errors');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "familias", array()), 'widget');
        echo "
         </div>
        <div class=\"form-group col-md-6\">         
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingresoFamiliar", array()), 'label');
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingresoFamiliar", array()), 'errors');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingresoFamiliar", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-6\">         
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoViviendas", array()), 'label');
        echo "
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoViviendas", array()), 'errors');
        echo "
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoViviendas", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-6\">         
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "formaTenencias", array()), 'label');
        echo "
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "formaTenencias", array()), 'errors');
        echo "
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "formaTenencias", array()), 'widget');
        echo "
         </div>
                     <div class=\"form-group col-md-12\">         
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoTechos", array()), 'label');
        echo "
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoTechos", array()), 'errors');
        echo "
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoTechos", array()), 'widget');
        echo "
         </div>
         <div class=\"form-group col-md-12\">         
        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoParedes", array()), 'label');
        echo "
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoParedes", array()), 'errors');
        echo "
        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoParedes", array()), 'widget');
        echo "
         </div> 
         <div class=\"form-group col-md-12\">         
        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enseres", array()), 'label');
        echo "
        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enseres", array()), 'errors');
        echo "
        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enseres", array()), 'widget');
        echo "
         </div>
                
        <div class=\"form-group col-md-6\">         
        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "habitacionesVivienda", array()), 'label');
        echo "
        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "habitacionesVivienda", array()), 'errors');
        echo "
        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "habitacionesVivienda", array()), 'widget');
        echo "
         </div>  
                 <div class=\"form-group col-md-6\">         
        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "condicionTerreno", array()), 'label');
        echo "
        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "condicionTerreno", array()), 'errors');
        echo "
        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "condicionTerreno", array()), 'widget');
        echo "
         </div>
         <div class=\"form-group col-md-12\">         
        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "actividadComercial", array()), 'label');
        echo "
        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "actividadComercial", array()), 'errors');
        echo "
        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "actividadComercial", array()), 'widget');
        echo "
         </div>
         <div class=\"form-group col-md-4\">         
        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aguasBlancas", array()), 'label');
        echo "
        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aguasBlancas", array()), 'errors');
        echo "
        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aguasBlancas", array()), 'widget');
        echo "
         </div>
         <div class=\"form-group col-md-4\">         
        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "medidorAgua", array()), 'label');
        echo "
        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "medidorAgua", array()), 'errors');
        echo "
        ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "medidorAgua", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-4\">         
        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tanque", array()), 'label');
        echo "
        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tanque", array()), 'errors');
        echo "
        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tanque", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-4\">         
        ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ltsTanque", array()), 'label');
        echo "
        ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ltsTanque", array()), 'errors');
        echo "
        ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ltsTanque", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-4\">         
        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoTanque", array()), 'label');
        echo "
        ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoTanque", array()), 'errors');
        echo "
        ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoTanque", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-4\">         
        ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pipotes", array()), 'label');
        echo "
        ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pipotes", array()), 'errors');
        echo "
        ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pipotes", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-6\">         
        ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuantos", array()), 'label');
        echo "
        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuantos", array()), 'errors');
        echo "
        ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuantos", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-6\">         
        ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPipotes", array()), 'label');
        echo "
        ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPipotes", array()), 'errors');
        echo "
        ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPipotes", array()), 'widget');
        echo "
         </div>
         
                <div class=\"form-group col-md-4\">         
        ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gas", array()), 'label');
        echo "
        ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gas", array()), 'errors');
        echo "
        ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gas", array()), 'widget');
        echo "
         </div>
         <div class=\"form-group col-md-4\">         
        ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "medidor", array()), 'label');
        echo "
        ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "medidor", array()), 'errors');
        echo "
        ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "medidor", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-4\">         
        ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "empresaGas", array()), 'label');
        echo "
        ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "empresaGas", array()), 'errors');
        echo "
        ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "empresaGas", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-6\">         
        ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidadCilindros", array()), 'label');
        echo "
        ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidadCilindros", array()), 'errors');
        echo "
        ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidadCilindros", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-6\">         
        ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacidadCilindro", array()), 'label');
        echo "
        ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacidadCilindro", array()), 'errors');
        echo "
        ";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacidadCilindro", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-6\">         
        ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duracionCilindro", array()), 'label');
        echo "
        ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duracionCilindro", array()), 'errors');
        echo "
        ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duracionCilindro", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-6\">         
        ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precioCilindro", array()), 'label');
        echo "
        ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precioCilindro", array()), 'errors');
        echo "
        ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precioCilindro", array()), 'widget');
        echo "
         </div>
         
                <div class=\"form-group col-md-4\">         
        ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recoleccionBasura", array()), 'label');
        echo "
        ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recoleccionBasura", array()), 'errors');
        echo "
        ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recoleccionBasura", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-4\">         
        ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aguasServidas", array()), 'label');
        echo "
        ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aguasServidas", array()), 'errors');
        echo "
        ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aguasServidas", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-4\">         
        ";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "condicionesSalubridad", array()), 'label');
        echo "
        ";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "condicionesSalubridad", array()), 'errors');
        echo "
        ";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "condicionesSalubridad", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-4\">         
        ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizacionesCounitarias", array()), 'label');
        echo "
        ";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizacionesCounitarias", array()), 'errors');
        echo "
        ";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizacionesCounitarias", array()), 'widget');
        echo "
         </div>
         <div class=\"form-group col-md-4\">         
        ";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bombillosAhorradores", array()), 'label');
        echo "
        ";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bombillosAhorradores", array()), 'errors');
        echo "
        ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bombillosAhorradores", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-4\">         
        ";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuantosBobillosNecesita", array()), 'label');
        echo "
        ";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuantosBobillosNecesita", array()), 'errors');
        echo "
        ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuantosBobillosNecesita", array()), 'widget');
        echo "
         </div>
                
        <div class=\"form-group col-md-4\">         
        ";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ninosCalle", array()), 'label');
        echo "
        ";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ninosCalle", array()), 'errors');
        echo "
        ";
        // line 178
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ninosCalle", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-4\">         
        ";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "indigentes", array()), 'label');
        echo "
        ";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "indigentes", array()), 'errors');
        echo "
        ";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "indigentes", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-4\">         
        ";
        // line 186
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enfermosTerminales", array()), 'label');
        echo "
        ";
        // line 187
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enfermosTerminales", array()), 'errors');
        echo "
        ";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enfermosTerminales", array()), 'widget');
        echo "
         </div>
                
                <div class=\"form-group col-md-4\">         
        ";
        // line 192
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ayudaSalud", array()), 'label');
        echo "
        ";
        // line 193
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ayudaSalud", array()), 'errors');
        echo "
        ";
        // line 194
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ayudaSalud", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-4\">         
        ";
        // line 197
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ayudaVivienda", array()), 'label');
        echo "
        ";
        // line 198
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ayudaVivienda", array()), 'errors');
        echo "
        ";
        // line 199
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ayudaVivienda", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-12\">         
        ";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonias", array()), 'label');
        echo "
        ";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonias", array()), 'errors');
        echo "
        ";
        // line 204
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonias", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-12\">         
        ";
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "misiones", array()), 'label');
        echo "
        ";
        // line 208
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "misiones", array()), 'errors');
        echo "
        ";
        // line 209
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "misiones", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-12\">         
        ";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "transporte", array()), 'label');
        echo "
        ";
        // line 213
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "transporte", array()), 'errors');
        echo "
        ";
        // line 214
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "transporte", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-12\">         
        ";
        // line 217
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plagas", array()), 'label');
        echo "
        ";
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plagas", array()), 'errors');
        echo "
        ";
        // line 219
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plagas", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-12\">         
        ";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "serviciosComunales", array()), 'label');
        echo "
        ";
        // line 223
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "serviciosComunales", array()), 'errors');
        echo "
        ";
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "serviciosComunales", array()), 'widget');
        echo "
         </div>
           
                <div class=\"form-group col-md-12\">         
        ";
        // line 228
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mecanismosInformacion", array()), 'label');
        echo "
        ";
        // line 229
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mecanismosInformacion", array()), 'errors');
        echo "
        ";
        // line 230
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mecanismosInformacion", array()), 'widget');
        echo "
         </div>
                <div class=\"form-group col-md-12\">         
        ";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "animales", array()), 'label');
        echo "
        ";
        // line 234
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "animales", array()), 'errors');
        echo "
        ";
        // line 235
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "animales", array()), 'widget');
        echo "
         </div> 
                
                    
               
         
        ";
        // line 241
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        
            <a class=\"btn btn-primary col-md-12\" href=\"";
        // line 243
        echo $this->env->getExtension('routing')->getPath("registrosocioeconomico");
        echo "\">Volver a la Lista </a>                 
                </p>
            </div>
        </div>
    </div>                    
";
    }

    // line 249
    public function block_footerscript($context, array $blocks = array())
    {
    }

    // line 251
    public function block_javascripts($context, array $blocks = array())
    {
        echo "      
        <script type=\"text/javascript\">
            \$(document).on('ready', function () {                
            \$('#censo_censobundle_registrosocioeconomico_ingresoFamiliar').mask(\"999.999.999.999.999,99 bsf\");
            \$('#censo_censobundle_registrosocioeconomico_habitacionesVivienda').mask(\"999\");
            \$('#censo_censobundle_registrosocioeconomico_ltsTanque').mask(\"999.999 lts\");
            \$('#censo_censobundle_registrosocioeconomico_cuantos').mask(\"999.999\");
            \$('#censo_censobundle_registrosocioeconomico_cantidadCilindros').mask(\"999\");
            \$('#censo_censobundle_registrosocioeconomico_capacidadCilindro').mask(\"999 kg\");
            \$('#censo_censobundle_registrosocioeconomico_duracionCilindro').mask(\"999 Dias\");
            \$('#censo_censobundle_registrosocioeconomico_precioCilindro').mask(\"999 bsf\");
        
            
     
            
            
   
                   
                
            });
        </script>    
    ";
    }

    public function getTemplateName()
    {
        return "CensoBundle:RegistroSocioeconomico:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  685 => 251,  680 => 249,  670 => 243,  665 => 241,  656 => 235,  652 => 234,  648 => 233,  642 => 230,  638 => 229,  634 => 228,  627 => 224,  623 => 223,  619 => 222,  613 => 219,  609 => 218,  605 => 217,  599 => 214,  595 => 213,  591 => 212,  585 => 209,  581 => 208,  577 => 207,  571 => 204,  567 => 203,  563 => 202,  557 => 199,  553 => 198,  549 => 197,  543 => 194,  539 => 193,  535 => 192,  528 => 188,  524 => 187,  520 => 186,  514 => 183,  510 => 182,  506 => 181,  500 => 178,  496 => 177,  492 => 176,  485 => 172,  481 => 171,  477 => 170,  471 => 167,  467 => 166,  463 => 165,  457 => 162,  453 => 161,  449 => 160,  443 => 157,  439 => 156,  435 => 155,  429 => 152,  425 => 151,  421 => 150,  415 => 147,  411 => 146,  407 => 145,  400 => 141,  396 => 140,  392 => 139,  386 => 136,  382 => 135,  378 => 134,  372 => 131,  368 => 130,  364 => 129,  358 => 126,  354 => 125,  350 => 124,  344 => 121,  340 => 120,  336 => 119,  330 => 116,  326 => 115,  322 => 114,  316 => 111,  312 => 110,  308 => 109,  301 => 105,  297 => 104,  293 => 103,  287 => 100,  283 => 99,  279 => 98,  273 => 95,  269 => 94,  265 => 93,  259 => 90,  255 => 89,  251 => 88,  245 => 85,  241 => 84,  237 => 83,  231 => 80,  227 => 79,  223 => 78,  217 => 75,  213 => 74,  209 => 73,  203 => 70,  199 => 69,  195 => 68,  189 => 65,  185 => 64,  181 => 63,  175 => 60,  171 => 59,  167 => 58,  161 => 55,  157 => 54,  153 => 53,  146 => 49,  142 => 48,  138 => 47,  132 => 44,  128 => 43,  124 => 42,  118 => 39,  114 => 38,  110 => 37,  104 => 34,  100 => 33,  96 => 32,  90 => 29,  86 => 28,  82 => 27,  76 => 24,  72 => 23,  68 => 22,  62 => 19,  58 => 18,  54 => 17,  49 => 15,  45 => 14,  33 => 4,  30 => 3,);
    }
}
