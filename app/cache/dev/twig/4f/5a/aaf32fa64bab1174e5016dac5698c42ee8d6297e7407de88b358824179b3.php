<?php

/* CensoBundle:Habitantes:new.html.twig */
class __TwigTemplate_4f5aaaf32fa64bab1174e5016dac5698c42ee8d6297e7407de88b358824179b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1 class=\"page-header, fi-torsos-all-female\">Agregar Habitantes</h1>
    <ul class=\"record_actions\"></ul>
    <div class=\"col-lg-12\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                Agregar Habitantes
            </div>
            <div class=\"panel-body\">

        ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("onSubmit" => "return formHabitantes()")));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <div class=\"form-group col-md-4\">       
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "familias", array()), 'label');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "familias", array()), 'errors');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "familias", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group col-md-4\">       
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jefeGrupoFamiliar", array()), 'label');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jefeGrupoFamiliar", array()), 'errors');
        echo "
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jefeGrupoFamiliar", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group col-md-4 \">       
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parentesco", array()), 'label');
        echo "
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parentesco", array()), 'errors');
        echo "
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parentesco", array()), 'widget');
        echo "
        </div>
         <div class=\"form-group col-md-4\">       
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nacionalidad", array()), 'label');
        echo "
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nacionalidad", array()), 'errors');
        echo "
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nacionalidad", array()), 'widget');
        echo "
        </div>
         <div class=\"form-group col-md-4\">       
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cedula", array()), 'label');
        echo "
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cedula", array()), 'errors');
        echo "
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cedula", array()), 'widget');
        echo "
        </div>
         <div class=\"form-group col-md-4\">       
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNacimiento", array()), 'label');
        echo "
        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNacimiento", array()), 'errors');
        echo "
        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNacimiento", array()), 'widget');
        echo "
        </div>
         <div class=\"form-group col-md-6\">       
        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "
        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget');
        echo "
        </div>
         <div class=\"form-group col-md-6\">       
        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "segundoNombre", array()), 'label');
        echo "
        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "segundoNombre", array()), 'errors');
        echo "
        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "segundoNombre", array()), 'widget');
        echo "
        </div>
         <div class=\"form-group col-md-6\">       
        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'label');
        echo "
        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'errors');
        echo "
        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'widget');
        echo "
        </div>
         <div class=\"form-group col-md-6\">       
        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "segundoApellido", array()), 'label');
        echo "
        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "segundoApellido", array()), 'errors');
        echo "
        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "segundoApellido", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group col-md-4\">       
        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edoCivil", array()), 'label');
        echo "
        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edoCivil", array()), 'errors');
        echo "
        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edoCivil", array()), 'widget');
        echo "
        </div>
         <div class=\"form-group col-md-4\">       
        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "genero", array()), 'label');
        echo "
        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "genero", array()), 'errors');
        echo "
        ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "genero", array()), 'widget');
        echo "
        </div>
         <div class=\"form-group col-md-4\">       
        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "embarazo", array()), 'label');
        echo "
        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "embarazo", array()), 'errors');
        echo "
        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "embarazo", array()), 'widget');
        echo "
        </div>
         <div class=\"form-group col-md-4\">       
        ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gradoDeInstruccion", array()), 'label');
        echo "
        ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gradoDeInstruccion", array()), 'errors');
        echo "
        ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gradoDeInstruccion", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group col-md-4\">       
        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profaciones", array()), 'label');
        echo "
        ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profaciones", array()), 'errors');
        echo "
        ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profaciones", array()), 'widget');
        echo "
        </div>
         <div class=\"form-group col-md-4\">       
        ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "empleo", array()), 'label');
        echo "
        ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "empleo", array()), 'errors');
        echo "
        ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "empleo", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group col-md-4\">       
        ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pensionado", array()), 'label');
        echo "
        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pensionado", array()), 'errors');
        echo "
        ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pensionado", array()), 'widget');
        echo "
        </div>
        
        <div class=\"form-group col-md-4\">       
        ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areasDeTrabajos", array()), 'label');
        echo "
        ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areasDeTrabajos", array()), 'errors');
        echo "
        ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areasDeTrabajos", array()), 'widget');
        echo "
        </div>
         <div class=\"form-group col-md-4\">       
        ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "leyPoliticaHabitacional", array()), 'label');
        echo "
        ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "leyPoliticaHabitacional", array()), 'errors');
        echo "
        ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "leyPoliticaHabitacional", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group col-md-4\">       
        ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoDeIngreso", array()), 'label');
        echo "
        ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoDeIngreso", array()), 'errors');
        echo "
        ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoDeIngreso", array()), 'widget');
        echo "
        </div>
         <div class=\"form-group col-md-4\">       
        ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingresoMensual", array()), 'label');
        echo "
        ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingresoMensual", array()), 'errors');
        echo "
        ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingresoMensual", array()), 'widget');
        echo "
        </div>
        
        <div class=\"form-group col-md-4\">       
        ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoCelular", array()), 'label');
        echo "
        ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoCelular", array()), 'errors');
        echo "
        ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoCelular", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group col-md-4\">       
        ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoOficina", array()), 'label');
        echo "
        ";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoOficina", array()), 'errors');
        echo "
        ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoOficina", array()), 'widget');
        echo "
        </div>
         <div class=\"form-group col-md-4\">       
        ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correoElectronico", array()), 'label');
        echo "
        ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correoElectronico", array()), 'errors');
        echo "
        ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correoElectronico", array()), 'widget');
        echo "
        </div><div class=\"form-group col-md-4\">       
        ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cne", array()), 'label');
        echo "
        ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cne", array()), 'errors');
        echo "
        ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cne", array()), 'widget');
        echo "
        </div>
         <div class=\"form-group col-md-4\">       
        ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tiempoEnLaComunidad", array()), 'label');
        echo "
        ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tiempoEnLaComunidad", array()), 'errors');
        echo "
        ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tiempoEnLaComunidad", array()), 'widget');
        echo "
        </div>
        
         <div class=\"form-group col-md-4\">       
        ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "participaOrganizacion", array()), 'label');
        echo "
        ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "participaOrganizacion", array()), 'errors');
        echo "
        ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "participaOrganizacion", array()), 'widget');
        echo "
        </div>
         
         
         <div class=\"form-group col-md-4\">       
        ";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vocerias", array()), 'label');
        echo "
        ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vocerias", array()), 'errors');
        echo "
        ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vocerias", array()), 'widget');
        echo "
        </div>
         <div class=\"form-group col-md-12\">         
        ";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enfermedades", array()), 'label');
        echo "
        ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enfermedades", array()), 'errors');
        echo "
        ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enfermedades", array()), 'widget');
        echo "
         </div>
         <div class=\"form-group col-md-6\">       
        ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "discapacidades", array()), 'label');
        echo "
        ";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "discapacidades", array()), 'errors');
        echo "
        ";
        // line 169
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "discapacidades", array()), 'widget');
        echo "
        </div>
         
        
              
          ";
        // line 174
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
          <div>
              <a class=\"col-md-12 btn btn-primary\" href=\"";
        // line 176
        echo $this->env->getExtension('routing')->getPath("habitantes");
        echo "\">Volver a la Lista </a>
          </div>  
          </div>
          
        </div>

    ";
    }

    // line 183
    public function block_javascripts($context, array $blocks = array())
    {
        echo "      
        <script type=\"text/javascript\">
            \$(document).on('ready', function () {                
               
        \$('#censo_censobundle_habitantes_telefonoCelular').mask(\"(0999) 999-9999\");
        \$('#censo_censobundle_habitantes_cedula').mask(\"999999999\");
        \$('#censo_censobundle_habitantes_telefonoOficina').mask(\"(0999) 999-9999\");
        \$('#censo_censobundle_habitantes_ingresoMensual').mask(\"000.000.000.000.000 bs\");
                    
                
            });
                
            
        </script>    
    ";
    }

    public function getTemplateName()
    {
        return "CensoBundle:Habitantes:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  494 => 183,  483 => 176,  478 => 174,  470 => 169,  466 => 168,  462 => 167,  456 => 164,  452 => 163,  448 => 162,  442 => 159,  438 => 158,  434 => 157,  426 => 152,  422 => 151,  418 => 150,  411 => 146,  407 => 145,  403 => 144,  397 => 141,  393 => 140,  389 => 139,  384 => 137,  380 => 136,  376 => 135,  370 => 132,  366 => 131,  362 => 130,  356 => 127,  352 => 126,  348 => 125,  341 => 121,  337 => 120,  333 => 119,  327 => 116,  323 => 115,  319 => 114,  313 => 111,  309 => 110,  305 => 109,  299 => 106,  295 => 105,  291 => 104,  284 => 100,  280 => 99,  276 => 98,  270 => 95,  266 => 94,  262 => 93,  256 => 90,  252 => 89,  248 => 88,  242 => 85,  238 => 84,  234 => 83,  228 => 80,  224 => 79,  220 => 78,  214 => 75,  210 => 74,  206 => 73,  200 => 70,  196 => 69,  192 => 68,  186 => 65,  182 => 64,  178 => 63,  172 => 60,  168 => 59,  164 => 58,  158 => 55,  154 => 54,  150 => 53,  144 => 50,  140 => 49,  136 => 48,  130 => 45,  126 => 44,  122 => 43,  116 => 40,  112 => 39,  108 => 38,  102 => 35,  98 => 34,  94 => 33,  88 => 30,  84 => 29,  80 => 28,  74 => 25,  70 => 24,  66 => 23,  60 => 20,  56 => 19,  52 => 18,  47 => 16,  43 => 15,  32 => 6,  29 => 3,);
    }
}
