<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_bdd0809ac7a1e5a095ece115c391ca6d715d5b1a4c5c24eaa100591905c92e3d extends Twig_Template
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
        $__internal_980c504b89c0b6cf7bc644ded2817d367ab49340df027ae0f9d90cebe2aa78c3 = $this->env->getExtension("native_profiler");
        $__internal_980c504b89c0b6cf7bc644ded2817d367ab49340df027ae0f9d90cebe2aa78c3->enter($__internal_980c504b89c0b6cf7bc644ded2817d367ab49340df027ae0f9d90cebe2aa78c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_980c504b89c0b6cf7bc644ded2817d367ab49340df027ae0f9d90cebe2aa78c3->leave($__internal_980c504b89c0b6cf7bc644ded2817d367ab49340df027ae0f9d90cebe2aa78c3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
