<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_18b85bfe0dcf6bd7c20bd0c6eecda086b214141217c54dfdfe34b4dbf82130c5 extends Twig_Template
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
        $__internal_2afa71417827600ea49599467d9e563bf9477fe80bb6bd9f837cbd29338fa7a3 = $this->env->getExtension("native_profiler");
        $__internal_2afa71417827600ea49599467d9e563bf9477fe80bb6bd9f837cbd29338fa7a3->enter($__internal_2afa71417827600ea49599467d9e563bf9477fe80bb6bd9f837cbd29338fa7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2afa71417827600ea49599467d9e563bf9477fe80bb6bd9f837cbd29338fa7a3->leave($__internal_2afa71417827600ea49599467d9e563bf9477fe80bb6bd9f837cbd29338fa7a3_prof);

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
