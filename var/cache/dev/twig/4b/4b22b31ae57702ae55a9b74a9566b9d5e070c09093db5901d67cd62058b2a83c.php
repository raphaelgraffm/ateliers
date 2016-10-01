<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d405a35d131d6113f380bd6db2a9265f83783b0b3b1c6af598f25054248ac988 extends Twig_Template
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
        $__internal_14edd65b232789820d5d060201b80f1dc0770f43af3d6f5f5dc8abcd72d186f1 = $this->env->getExtension("native_profiler");
        $__internal_14edd65b232789820d5d060201b80f1dc0770f43af3d6f5f5dc8abcd72d186f1->enter($__internal_14edd65b232789820d5d060201b80f1dc0770f43af3d6f5f5dc8abcd72d186f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_14edd65b232789820d5d060201b80f1dc0770f43af3d6f5f5dc8abcd72d186f1->leave($__internal_14edd65b232789820d5d060201b80f1dc0770f43af3d6f5f5dc8abcd72d186f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
