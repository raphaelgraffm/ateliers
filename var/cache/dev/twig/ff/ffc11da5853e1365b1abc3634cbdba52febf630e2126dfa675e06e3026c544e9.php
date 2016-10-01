<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_264011e5d3820fe2e3cc9f5241226829c09bf9e9d822b5851526b201297374ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc417aec2b9e37ea54fec689fb97202e53c33eff6b55f1f4a0e180884214029e = $this->env->getExtension("native_profiler");
        $__internal_dc417aec2b9e37ea54fec689fb97202e53c33eff6b55f1f4a0e180884214029e->enter($__internal_dc417aec2b9e37ea54fec689fb97202e53c33eff6b55f1f4a0e180884214029e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_dc417aec2b9e37ea54fec689fb97202e53c33eff6b55f1f4a0e180884214029e->leave($__internal_dc417aec2b9e37ea54fec689fb97202e53c33eff6b55f1f4a0e180884214029e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
