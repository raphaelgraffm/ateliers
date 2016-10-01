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
        $__internal_a57c72e52985c4c247abc1df23b94f20af8f4d57d1db0330882174ff2e791696 = $this->env->getExtension("native_profiler");
        $__internal_a57c72e52985c4c247abc1df23b94f20af8f4d57d1db0330882174ff2e791696->enter($__internal_a57c72e52985c4c247abc1df23b94f20af8f4d57d1db0330882174ff2e791696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a57c72e52985c4c247abc1df23b94f20af8f4d57d1db0330882174ff2e791696->leave($__internal_a57c72e52985c4c247abc1df23b94f20af8f4d57d1db0330882174ff2e791696_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d9e8c1a65b09e6423044ddc38f0b9c971061c59f527185801d83b66232a83df = $this->env->getExtension("native_profiler");
        $__internal_9d9e8c1a65b09e6423044ddc38f0b9c971061c59f527185801d83b66232a83df->enter($__internal_9d9e8c1a65b09e6423044ddc38f0b9c971061c59f527185801d83b66232a83df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9d9e8c1a65b09e6423044ddc38f0b9c971061c59f527185801d83b66232a83df->leave($__internal_9d9e8c1a65b09e6423044ddc38f0b9c971061c59f527185801d83b66232a83df_prof);

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
