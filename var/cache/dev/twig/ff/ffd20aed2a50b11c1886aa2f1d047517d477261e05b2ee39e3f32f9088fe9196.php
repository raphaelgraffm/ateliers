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
        $__internal_41485c59a5b225750f6781b3423a34ba716570176e7084038f90d7aeae8307fd = $this->env->getExtension("native_profiler");
        $__internal_41485c59a5b225750f6781b3423a34ba716570176e7084038f90d7aeae8307fd->enter($__internal_41485c59a5b225750f6781b3423a34ba716570176e7084038f90d7aeae8307fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_41485c59a5b225750f6781b3423a34ba716570176e7084038f90d7aeae8307fd->leave($__internal_41485c59a5b225750f6781b3423a34ba716570176e7084038f90d7aeae8307fd_prof);

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
