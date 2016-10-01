<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_661ef3b43e4d28d81cfa41aab7429a5f3c5085a712d00377bd8b5de5de99b850 extends Twig_Template
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
        $__internal_6c9561062c05a50ad859b89342094d07c76ecf5b2f141e582388513304c7bfd7 = $this->env->getExtension("native_profiler");
        $__internal_6c9561062c05a50ad859b89342094d07c76ecf5b2f141e582388513304c7bfd7->enter($__internal_6c9561062c05a50ad859b89342094d07c76ecf5b2f141e582388513304c7bfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_6c9561062c05a50ad859b89342094d07c76ecf5b2f141e582388513304c7bfd7->leave($__internal_6c9561062c05a50ad859b89342094d07c76ecf5b2f141e582388513304c7bfd7_prof);

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
