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
        $__internal_f4030dedcda0be51158f760b5d602dadf01edf5abeb15d062cec9658f3ba32e0 = $this->env->getExtension("native_profiler");
        $__internal_f4030dedcda0be51158f760b5d602dadf01edf5abeb15d062cec9658f3ba32e0->enter($__internal_f4030dedcda0be51158f760b5d602dadf01edf5abeb15d062cec9658f3ba32e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f4030dedcda0be51158f760b5d602dadf01edf5abeb15d062cec9658f3ba32e0->leave($__internal_f4030dedcda0be51158f760b5d602dadf01edf5abeb15d062cec9658f3ba32e0_prof);

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
