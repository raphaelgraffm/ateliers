<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_b0a9a89ad54b7b1de6318fea3eb8e3e5ffc76f95a156963b38d97a9ed29117ab extends Twig_Template
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
        $__internal_94e3d4d8ac3a29161e4719f00949bd41ad1041f86069992cf03b0656bb82fefb = $this->env->getExtension("native_profiler");
        $__internal_94e3d4d8ac3a29161e4719f00949bd41ad1041f86069992cf03b0656bb82fefb->enter($__internal_94e3d4d8ac3a29161e4719f00949bd41ad1041f86069992cf03b0656bb82fefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_94e3d4d8ac3a29161e4719f00949bd41ad1041f86069992cf03b0656bb82fefb->leave($__internal_94e3d4d8ac3a29161e4719f00949bd41ad1041f86069992cf03b0656bb82fefb_prof);

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