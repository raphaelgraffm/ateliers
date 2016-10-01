<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_6de643138cd9c05cb694d7daecd057799259b7e67370d787a30fe6f68f9c467e extends Twig_Template
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
        $__internal_fc62b5e84bccef5cba859d0f8459e7a24654e62344127dd70e16ca224630fac7 = $this->env->getExtension("native_profiler");
        $__internal_fc62b5e84bccef5cba859d0f8459e7a24654e62344127dd70e16ca224630fac7->enter($__internal_fc62b5e84bccef5cba859d0f8459e7a24654e62344127dd70e16ca224630fac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fc62b5e84bccef5cba859d0f8459e7a24654e62344127dd70e16ca224630fac7->leave($__internal_fc62b5e84bccef5cba859d0f8459e7a24654e62344127dd70e16ca224630fac7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
