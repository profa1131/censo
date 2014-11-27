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
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
            <a class=\"btn btn-primary\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("registrosocioeconomico");
        echo "\">Volver a la Lista </a>                 
                </p>
            </div>
        </div>
    </div>                    
";
    }

    // line 20
    public function block_footerscript($context, array $blocks = array())
    {
        // line 21
        $this->displayParentBlock("footerscript", $context, $blocks);
        echo "
        <script>
/*
            function cambiaMinuscula(valor) {
                var val = valor;
                document.getElementById('username').value = val.toLowerCase();
            }
*/
            \$(document).ready(function () {
                \$('#verificar').bootstrapValidator({
                    message: 'This value is not valid',
                    fields: {
                        _username: {
                            validators: {
                                notEmpty: {
                                    message: 'La direccion de correo UBV es requerido'
                                },
                                emailAddress: {
                                    message: 'La direccion de correo UBV no es válida, ej: usuario@ubv.edu.ve'
                                },
                                regexp: {
                                    regexp: /^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][ubv]+([.][edu]+)*[.][ve]{2,4}\$/, ///^[a-zA-Z0-9_\\.]+\$/,                                
                                    message: 'El nombre de usuario sólo puede ser un correo UBV'
                                }

                            }
                        },
                        _password: {
                            validators: {
                                stringLength: {
                                    min: 6,
                                    max: 15,
                                    message: 'La contraseña debe tener entre 6 y 15 caracteres'
                                },
                                notEmpty: {
                                    message: 'La contraseña es requerida'
                                }
                            }
                        }
                    }
                });
            });


        </script>
        <!-- Bootstrap validator js -->
        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/bootstrapValidator.js"), "html", null, true);
        echo "\"></script>
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
        return array (  113 => 68,  109 => 67,  60 => 21,  57 => 20,  47 => 14,  43 => 13,  32 => 4,  29 => 3,);
    }
}
