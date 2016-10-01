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
        $__internal_3cc8420b5b7b770047ee55dcfe208aeb773999fa671f103576ab8acce62504d7 = $this->env->getExtension("native_profiler");
        $__internal_3cc8420b5b7b770047ee55dcfe208aeb773999fa671f103576ab8acce62504d7->enter($__internal_3cc8420b5b7b770047ee55dcfe208aeb773999fa671f103576ab8acce62504d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3cc8420b5b7b770047ee55dcfe208aeb773999fa671f103576ab8acce62504d7->leave($__internal_3cc8420b5b7b770047ee55dcfe208aeb773999fa671f103576ab8acce62504d7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_30504800c89512a3a6bbf9a09f258f0c4b233774f54d90e84a261265b553f1f6 = $this->env->getExtension("native_profiler");
        $__internal_30504800c89512a3a6bbf9a09f258f0c4b233774f54d90e84a261265b553f1f6->enter($__internal_30504800c89512a3a6bbf9a09f258f0c4b233774f54d90e84a261265b553f1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_30504800c89512a3a6bbf9a09f258f0c4b233774f54d90e84a261265b553f1f6->leave($__internal_30504800c89512a3a6bbf9a09f258f0c4b233774f54d90e84a261265b553f1f6_prof);

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
