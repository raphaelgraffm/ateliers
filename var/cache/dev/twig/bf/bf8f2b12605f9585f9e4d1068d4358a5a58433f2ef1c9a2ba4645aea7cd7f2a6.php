<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d0e0d179daf582bc1ede09e6c39000f66a352ab92b03b21476aa68a7cf964f60 extends Twig_Template
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
        $__internal_c2dc8165d3457e0ef094b3cb17a6908d67a9e0626d2c061f0fc1220299216ce7 = $this->env->getExtension("native_profiler");
        $__internal_c2dc8165d3457e0ef094b3cb17a6908d67a9e0626d2c061f0fc1220299216ce7->enter($__internal_c2dc8165d3457e0ef094b3cb17a6908d67a9e0626d2c061f0fc1220299216ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c2dc8165d3457e0ef094b3cb17a6908d67a9e0626d2c061f0fc1220299216ce7->leave($__internal_c2dc8165d3457e0ef094b3cb17a6908d67a9e0626d2c061f0fc1220299216ce7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
