<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_688944b9b4853e9bb7f54a8e14fa0fa78ebaab15e285d2f8046ba95c31fa0206 extends Twig_Template
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
        $__internal_d275d1cd003cf4d6b7b53e96e9b1af9945082f08194321282e97633779d86e32 = $this->env->getExtension("native_profiler");
        $__internal_d275d1cd003cf4d6b7b53e96e9b1af9945082f08194321282e97633779d86e32->enter($__internal_d275d1cd003cf4d6b7b53e96e9b1af9945082f08194321282e97633779d86e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d275d1cd003cf4d6b7b53e96e9b1af9945082f08194321282e97633779d86e32->leave($__internal_d275d1cd003cf4d6b7b53e96e9b1af9945082f08194321282e97633779d86e32_prof);

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
