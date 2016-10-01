<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_90603273028094c24b3bef39a875cfe8247e7e2709bf97c77f81296503462c72 extends Twig_Template
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
        $__internal_dda24f2c75f0244e61ec17a42332f1de539203970627cd9e6f95407012be55e3 = $this->env->getExtension("native_profiler");
        $__internal_dda24f2c75f0244e61ec17a42332f1de539203970627cd9e6f95407012be55e3->enter($__internal_dda24f2c75f0244e61ec17a42332f1de539203970627cd9e6f95407012be55e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_dda24f2c75f0244e61ec17a42332f1de539203970627cd9e6f95407012be55e3->leave($__internal_dda24f2c75f0244e61ec17a42332f1de539203970627cd9e6f95407012be55e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
