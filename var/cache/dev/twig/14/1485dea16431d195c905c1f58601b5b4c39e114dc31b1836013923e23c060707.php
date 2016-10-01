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
        $__internal_736a4444e000193c4d5d43740d01a281adbbd328666fa7f31f5b6b07beeab3e9 = $this->env->getExtension("native_profiler");
        $__internal_736a4444e000193c4d5d43740d01a281adbbd328666fa7f31f5b6b07beeab3e9->enter($__internal_736a4444e000193c4d5d43740d01a281adbbd328666fa7f31f5b6b07beeab3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_736a4444e000193c4d5d43740d01a281adbbd328666fa7f31f5b6b07beeab3e9->leave($__internal_736a4444e000193c4d5d43740d01a281adbbd328666fa7f31f5b6b07beeab3e9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e05b2a1ae6c9a906a1a927f0192983ddce0012fbac730185330dcff1ab0097fb = $this->env->getExtension("native_profiler");
        $__internal_e05b2a1ae6c9a906a1a927f0192983ddce0012fbac730185330dcff1ab0097fb->enter($__internal_e05b2a1ae6c9a906a1a927f0192983ddce0012fbac730185330dcff1ab0097fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e05b2a1ae6c9a906a1a927f0192983ddce0012fbac730185330dcff1ab0097fb->leave($__internal_e05b2a1ae6c9a906a1a927f0192983ddce0012fbac730185330dcff1ab0097fb_prof);

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
