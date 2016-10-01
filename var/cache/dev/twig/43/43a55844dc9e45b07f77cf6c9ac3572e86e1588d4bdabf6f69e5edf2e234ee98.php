<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_bf272b547c2621afe8d941211011746a7e9e4e31fef1eb9d808445923f452785 extends Twig_Template
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
        $__internal_72a80e26b0aa12b2b6c0ea8d0ad82650ea3ee66ab31ddb1b3555a6dbe07687b9 = $this->env->getExtension("native_profiler");
        $__internal_72a80e26b0aa12b2b6c0ea8d0ad82650ea3ee66ab31ddb1b3555a6dbe07687b9->enter($__internal_72a80e26b0aa12b2b6c0ea8d0ad82650ea3ee66ab31ddb1b3555a6dbe07687b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_72a80e26b0aa12b2b6c0ea8d0ad82650ea3ee66ab31ddb1b3555a6dbe07687b9->leave($__internal_72a80e26b0aa12b2b6c0ea8d0ad82650ea3ee66ab31ddb1b3555a6dbe07687b9_prof);

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
