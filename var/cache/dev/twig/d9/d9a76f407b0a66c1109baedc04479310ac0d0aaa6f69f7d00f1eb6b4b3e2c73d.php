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
        $__internal_6afdafac88f892eb83fe07d7e1dd44e5d91e30e325d264b4d9ad1175ed2ab1a0 = $this->env->getExtension("native_profiler");
        $__internal_6afdafac88f892eb83fe07d7e1dd44e5d91e30e325d264b4d9ad1175ed2ab1a0->enter($__internal_6afdafac88f892eb83fe07d7e1dd44e5d91e30e325d264b4d9ad1175ed2ab1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6afdafac88f892eb83fe07d7e1dd44e5d91e30e325d264b4d9ad1175ed2ab1a0->leave($__internal_6afdafac88f892eb83fe07d7e1dd44e5d91e30e325d264b4d9ad1175ed2ab1a0_prof);

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
