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
        $__internal_d4bda30f4a2d52a09b0c9b75667f4b0eca287a936a72307e4b62f439bfe0b082 = $this->env->getExtension("native_profiler");
        $__internal_d4bda30f4a2d52a09b0c9b75667f4b0eca287a936a72307e4b62f439bfe0b082->enter($__internal_d4bda30f4a2d52a09b0c9b75667f4b0eca287a936a72307e4b62f439bfe0b082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d4bda30f4a2d52a09b0c9b75667f4b0eca287a936a72307e4b62f439bfe0b082->leave($__internal_d4bda30f4a2d52a09b0c9b75667f4b0eca287a936a72307e4b62f439bfe0b082_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6fd860df062670afa08598ff30db9125d5edbc0541f58708237093c3a809ef6a = $this->env->getExtension("native_profiler");
        $__internal_6fd860df062670afa08598ff30db9125d5edbc0541f58708237093c3a809ef6a->enter($__internal_6fd860df062670afa08598ff30db9125d5edbc0541f58708237093c3a809ef6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6fd860df062670afa08598ff30db9125d5edbc0541f58708237093c3a809ef6a->leave($__internal_6fd860df062670afa08598ff30db9125d5edbc0541f58708237093c3a809ef6a_prof);

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
