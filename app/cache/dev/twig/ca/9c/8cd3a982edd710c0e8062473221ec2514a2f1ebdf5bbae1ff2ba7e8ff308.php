<?php

/* CensoBundle:Familias:new.html.twig */
class __TwigTemplate_ca9c8cd3a982edd710c0e8062473221ec2514a2f1ebdf5bbae1ff2ba7e8ff308 extends Twig_Template
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
        // line 4
        echo "<h1 class=\"page-header, fi-torsos-all-female\">Agregar Familia</h1>
    <ul class=\"record_actions\"></ul>
    <div class=\"col-lg-12\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                Agregar Familias
            </div>
            <div class=\"panel-body\">
                                  
                 ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo " 
        <div class=\"form-group col-md-6 col-lg-offset-3\">       
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usuarios", array()), 'label');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usuarios", array()), 'errors');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usuarios", array()), 'widget');
        echo "
        </div>
        
        <div class=\"form-group col-md-4\">       
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'label');
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'errors');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group col-md-4\">       
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoLocal", array()), 'label');
        echo "
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoLocal", array()), 'errors');
        echo "
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoLocal", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group col-md-4\">       
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoMovil", array()), 'label');
        echo "
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoMovil", array()), 'errors');
        echo "
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoMovil", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group col-md-4\">       
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sector", array()), 'label');
        echo "
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sector", array()), 'errors');
        echo "
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sector", array()), 'widget');
        echo "
        </div>
        
        <div class=\"form-group col-md-4\">       
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroCasa", array()), 'label');
        echo "
        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroCasa", array()), 'errors');
        echo "
        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroCasa", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group col-md-4\">       
        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombresComunidad", array()), 'label');
        echo "
        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombresComunidad", array()), 'errors');
        echo "
        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombresComunidad", array()), 'widget');
        echo "
        </div>
        
        ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
              
            <a class=\" col-md-12 mt btn btn-primary\" href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("familias");
        echo "\">Volver a la Lista </a>
            
            </div>
        </div>
    </div>
            


";
    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        echo "      
        <script type=\"text/javascript\">
            \$(document).on('ready', function () {                
        \$('#censo_censobundle_familias_telefonoLocal').mask(\"(9999) 999-9999\");
        \$('#censo_censobundle_familias_telefonoMovil').mask(\"(9999) 999-9999\");
        });
                       
        </script>
        
         <script>
             

        function addTagForm(collectionHolder) {
            // Get the data-prototype explained earlier
            var prototype = collectionHolder.data('prototype');

            // get the new index
            var index = collectionHolder.data('index');

            // Replace '__name__' in the prototype's HTML to
            // instead be a number based on how many items we have
            var newForm = prototype.replace(/__name__/g, index);

            // increase the index with one for the next item
            collectionHolder.data('index', index + 1);

            // Display the form in the page in an li, before the \"Add a address\" link li
            var \$newFormLi = \$('<div></div>').append(newForm);
            collectionHolder.append(\$newFormLi);
        }

        // Get the div that holds the collection of addresses
        var collectionHolder = \$('div.habitantes');

        // setup an \"add a address\" link
        var \$newLinkLi = \$('<a href=\"#\" class=\"btn btn-xs btn-info add_habitantes_link\"><i class=\"glyphicon glyphicon-plus glyphicon-white\"></i> Añadir un Habitante</a>');
        
        \$(function(){

            // add the \"add a address\" anchor and li to the addresses div
            collectionHolder.parent().append(\$newLinkLi);

            // count the current form inputs we have (e.g. 2), use that as the new
            // index when inserting a new item (e.g. 2)
            collectionHolder.data('index', collectionHolder.find(':input').length);

            \$newLinkLi.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                // add a new address form (see next code block)
                addTagForm(collectionHolder);
            });
            \$(document).on('click', '.close', function(){
                \$(this).closest('.habitantes').fadeOut(500, function() {
                    \$(this).remove();
                });
            });
        });
        
        function addTagForm(collectionHolder) {
            // Get the data-prototype explained earlier
            var prototype = collectionHolder.data('prototype');

            // get the new index
            var index = collectionHolder.data('index');

            // Replace '__name__' in the prototype's HTML to
            // instead be a number based on how many items we have
            var newForm = prototype.replace(/__name__/g, index);

            // increase the index with one for the next item
            collectionHolder.data('index', index + 1);

            // Display the form in the page in an li, before the \"Add a address\" link li
            var \$newFormLi = \$('<div></div>').append(newForm);
            collectionHolder.append(\$newFormLi);
        }

        // Get the div that holds the collection of addresses
        var collectionHolder2 = \$('div.registroSocioeconomico');

        // setup an \"add a address\" link
        var \$newLinkLi2 = \$('<a href=\"#\" class=\"btn btn-xs btn-warning add_registroSocioeconomico_link\"><i class=\"glyphicon glyphicon-plus glyphicon-white\"></i> Añadir un Registro Socioeconomico</a>');
        
        \$(function(){

            // add the \"add a address\" anchor and li to the addresses div
            collectionHolder2.parent().append(\$newLinkLi2);

            // count the current form inputs we have (e.g. 2), use that as the new
            // index when inserting a new item (e.g. 2)
            collectionHolder2.data('index', collectionHolder2.find(':input').length);

            \$newLinkLi2.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                // add a new address form (see next code block)
                addTagForm(collectionHolder2);
            });
            \$(document).on('click', '.close', function(){
                \$(this).closest('.registroSocioeconomico').fadeOut(500, function() {
                    \$(this).remove();
                });
            });
        });
    </script>
   
       
    ";
    }

    public function getTemplateName()
    {
        return "CensoBundle:Familias:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 65,  157 => 55,  152 => 53,  146 => 50,  142 => 49,  138 => 48,  132 => 45,  128 => 44,  124 => 43,  117 => 39,  113 => 38,  109 => 37,  103 => 34,  99 => 33,  95 => 32,  89 => 29,  85 => 28,  81 => 27,  75 => 24,  71 => 23,  67 => 22,  60 => 18,  56 => 17,  52 => 16,  47 => 14,  43 => 13,  32 => 4,  29 => 3,);
    }
}
