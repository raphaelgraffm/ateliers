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
        $__internal_40896c121e9e63a0fcaafa9c5c785b6fd995e8bfa0bd5325c7c4b751f69d962b = $this->env->getExtension("native_profiler");
        $__internal_40896c121e9e63a0fcaafa9c5c785b6fd995e8bfa0bd5325c7c4b751f69d962b->enter($__internal_40896c121e9e63a0fcaafa9c5c785b6fd995e8bfa0bd5325c7c4b751f69d962b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_40896c121e9e63a0fcaafa9c5c785b6fd995e8bfa0bd5325c7c4b751f69d962b->leave($__internal_40896c121e9e63a0fcaafa9c5c785b6fd995e8bfa0bd5325c7c4b751f69d962b_prof);

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
