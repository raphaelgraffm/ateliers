<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_72d83119039a4a070c473889ec85ea1d5a37ee5e31d1e3bb1241a2c715fbab8c extends Twig_Template
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
        $__internal_6614d1040592156844579def9ed67df2d320a946837a9fa82320ed221c1684eb = $this->env->getExtension("native_profiler");
        $__internal_6614d1040592156844579def9ed67df2d320a946837a9fa82320ed221c1684eb->enter($__internal_6614d1040592156844579def9ed67df2d320a946837a9fa82320ed221c1684eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_6614d1040592156844579def9ed67df2d320a946837a9fa82320ed221c1684eb->leave($__internal_6614d1040592156844579def9ed67df2d320a946837a9fa82320ed221c1684eb_prof);

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
