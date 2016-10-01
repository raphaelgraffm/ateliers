<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d7857ed38ef2cd71bfbfd2ed4ad8170f5992e05c2e0c73e8c455cb6cbd4b1e53 extends Twig_Template
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
        $__internal_22408f460fec2277df40322448505341b8ab65e5b475eceb7d0069cfd8af34ad = $this->env->getExtension("native_profiler");
        $__internal_22408f460fec2277df40322448505341b8ab65e5b475eceb7d0069cfd8af34ad->enter($__internal_22408f460fec2277df40322448505341b8ab65e5b475eceb7d0069cfd8af34ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_22408f460fec2277df40322448505341b8ab65e5b475eceb7d0069cfd8af34ad->leave($__internal_22408f460fec2277df40322448505341b8ab65e5b475eceb7d0069cfd8af34ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
