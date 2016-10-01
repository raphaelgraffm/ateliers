<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c7803756c658172f5eb9fca7b59a3d6a9345ff71baaacd627d18730f5d6e47b5 extends Twig_Template
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
        $__internal_9a2e3dfc8ba0de4a5630c3b62b5dcc281172328f97dde3b15e15c5880844cf06 = $this->env->getExtension("native_profiler");
        $__internal_9a2e3dfc8ba0de4a5630c3b62b5dcc281172328f97dde3b15e15c5880844cf06->enter($__internal_9a2e3dfc8ba0de4a5630c3b62b5dcc281172328f97dde3b15e15c5880844cf06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9a2e3dfc8ba0de4a5630c3b62b5dcc281172328f97dde3b15e15c5880844cf06->leave($__internal_9a2e3dfc8ba0de4a5630c3b62b5dcc281172328f97dde3b15e15c5880844cf06_prof);

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
