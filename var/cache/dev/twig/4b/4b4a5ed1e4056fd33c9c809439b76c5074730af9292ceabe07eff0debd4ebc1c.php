<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_512bdeb1c4c4b7cd21fc45386cb17135bf6446da8fa540fac071bafb3e45bf52 extends Twig_Template
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
        $__internal_d0ca0d7f11c0ac9ca185f0ebd3d421328ab293a26740e2a8d38d76c9503c4e24 = $this->env->getExtension("native_profiler");
        $__internal_d0ca0d7f11c0ac9ca185f0ebd3d421328ab293a26740e2a8d38d76c9503c4e24->enter($__internal_d0ca0d7f11c0ac9ca185f0ebd3d421328ab293a26740e2a8d38d76c9503c4e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_d0ca0d7f11c0ac9ca185f0ebd3d421328ab293a26740e2a8d38d76c9503c4e24->leave($__internal_d0ca0d7f11c0ac9ca185f0ebd3d421328ab293a26740e2a8d38d76c9503c4e24_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
