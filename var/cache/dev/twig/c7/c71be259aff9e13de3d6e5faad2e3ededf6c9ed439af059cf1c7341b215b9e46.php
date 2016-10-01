<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_88aaa892517800a7107a3ef4ebfd0130cbc719d050164f3a9a6fe2da71436cd9 extends Twig_Template
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
        $__internal_3e058ae7a45daa21e64843c8703ed0040722860139752bf63858f0cd7a3cfcb2 = $this->env->getExtension("native_profiler");
        $__internal_3e058ae7a45daa21e64843c8703ed0040722860139752bf63858f0cd7a3cfcb2->enter($__internal_3e058ae7a45daa21e64843c8703ed0040722860139752bf63858f0cd7a3cfcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3e058ae7a45daa21e64843c8703ed0040722860139752bf63858f0cd7a3cfcb2->leave($__internal_3e058ae7a45daa21e64843c8703ed0040722860139752bf63858f0cd7a3cfcb2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
