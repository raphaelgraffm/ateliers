<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_76852a447cd585b3543e8b96a2e78d6d3e705b40225782a0705c7a3124e77650 extends Twig_Template
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
        $__internal_a8e1a0717a756d797ccde74c431be1113a569a55a7839fb9fb7f778d75553f3e = $this->env->getExtension("native_profiler");
        $__internal_a8e1a0717a756d797ccde74c431be1113a569a55a7839fb9fb7f778d75553f3e->enter($__internal_a8e1a0717a756d797ccde74c431be1113a569a55a7839fb9fb7f778d75553f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a8e1a0717a756d797ccde74c431be1113a569a55a7839fb9fb7f778d75553f3e->leave($__internal_a8e1a0717a756d797ccde74c431be1113a569a55a7839fb9fb7f778d75553f3e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
