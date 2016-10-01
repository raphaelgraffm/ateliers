<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_236e0289764dd6e53fc35353acb3e07f3a22ad5dcc8157bdced037d15e32762b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ead74153d00e51ac7d5fadc309aa74d3af76813a035bee568a6a1b172f586786 = $this->env->getExtension("native_profiler");
        $__internal_ead74153d00e51ac7d5fadc309aa74d3af76813a035bee568a6a1b172f586786->enter($__internal_ead74153d00e51ac7d5fadc309aa74d3af76813a035bee568a6a1b172f586786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ead74153d00e51ac7d5fadc309aa74d3af76813a035bee568a6a1b172f586786->leave($__internal_ead74153d00e51ac7d5fadc309aa74d3af76813a035bee568a6a1b172f586786_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b778637a6fe7571f842c79c67a2abf37d8654959cda61988dc2c692d6b27b443 = $this->env->getExtension("native_profiler");
        $__internal_b778637a6fe7571f842c79c67a2abf37d8654959cda61988dc2c692d6b27b443->enter($__internal_b778637a6fe7571f842c79c67a2abf37d8654959cda61988dc2c692d6b27b443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b778637a6fe7571f842c79c67a2abf37d8654959cda61988dc2c692d6b27b443->leave($__internal_b778637a6fe7571f842c79c67a2abf37d8654959cda61988dc2c692d6b27b443_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
