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
        $__internal_6bbe0b88649b8d5fe780d1c5cae048a8fa3cff7225e07966c7108d9171b72724 = $this->env->getExtension("native_profiler");
        $__internal_6bbe0b88649b8d5fe780d1c5cae048a8fa3cff7225e07966c7108d9171b72724->enter($__internal_6bbe0b88649b8d5fe780d1c5cae048a8fa3cff7225e07966c7108d9171b72724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6bbe0b88649b8d5fe780d1c5cae048a8fa3cff7225e07966c7108d9171b72724->leave($__internal_6bbe0b88649b8d5fe780d1c5cae048a8fa3cff7225e07966c7108d9171b72724_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_eb33d0e2b062f9e5f8f9a1fc1171434a21a29e19074b1c05c027eb12f18ea1c7 = $this->env->getExtension("native_profiler");
        $__internal_eb33d0e2b062f9e5f8f9a1fc1171434a21a29e19074b1c05c027eb12f18ea1c7->enter($__internal_eb33d0e2b062f9e5f8f9a1fc1171434a21a29e19074b1c05c027eb12f18ea1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_eb33d0e2b062f9e5f8f9a1fc1171434a21a29e19074b1c05c027eb12f18ea1c7->leave($__internal_eb33d0e2b062f9e5f8f9a1fc1171434a21a29e19074b1c05c027eb12f18ea1c7_prof);

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
