<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_857a436611f1b43cfb02157da272df09100347e5b1a7171ca60a5b94c9110cf4 extends Twig_Template
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
        $__internal_f6c856567834e5276fc0f882553e56f3b9a9bcd2a2260574e0641cfe4a1d4329 = $this->env->getExtension("native_profiler");
        $__internal_f6c856567834e5276fc0f882553e56f3b9a9bcd2a2260574e0641cfe4a1d4329->enter($__internal_f6c856567834e5276fc0f882553e56f3b9a9bcd2a2260574e0641cfe4a1d4329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f6c856567834e5276fc0f882553e56f3b9a9bcd2a2260574e0641cfe4a1d4329->leave($__internal_f6c856567834e5276fc0f882553e56f3b9a9bcd2a2260574e0641cfe4a1d4329_prof);

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
