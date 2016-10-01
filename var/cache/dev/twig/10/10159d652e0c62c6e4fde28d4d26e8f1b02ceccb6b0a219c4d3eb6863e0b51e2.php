<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_91e79164d4b87110fc1f46dbc55000e75d88d8fffc1866459578556abd8a47e0 extends Twig_Template
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
        $__internal_0492dc24066178600a183ef865579e6c17ff9dc5c304a4bc6f0d4377acf0efa5 = $this->env->getExtension("native_profiler");
        $__internal_0492dc24066178600a183ef865579e6c17ff9dc5c304a4bc6f0d4377acf0efa5->enter($__internal_0492dc24066178600a183ef865579e6c17ff9dc5c304a4bc6f0d4377acf0efa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0492dc24066178600a183ef865579e6c17ff9dc5c304a4bc6f0d4377acf0efa5->leave($__internal_0492dc24066178600a183ef865579e6c17ff9dc5c304a4bc6f0d4377acf0efa5_prof);

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
