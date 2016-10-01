<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_1f3440d20f29501e274185693a2510fddf7cdc77626cbaf3d98feb468bcd8dcb extends Twig_Template
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
        $__internal_1288c4426a5e6d221024e399c386ae170ad776ef790ea8cda749e0c99bf7fd9c = $this->env->getExtension("native_profiler");
        $__internal_1288c4426a5e6d221024e399c386ae170ad776ef790ea8cda749e0c99bf7fd9c->enter($__internal_1288c4426a5e6d221024e399c386ae170ad776ef790ea8cda749e0c99bf7fd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1288c4426a5e6d221024e399c386ae170ad776ef790ea8cda749e0c99bf7fd9c->leave($__internal_1288c4426a5e6d221024e399c386ae170ad776ef790ea8cda749e0c99bf7fd9c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
