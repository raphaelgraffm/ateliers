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
        $__internal_a3d4735f62a82e9a9c43f8c9c2fcf04f29e4a1d0a12de230769515aac6a367c4 = $this->env->getExtension("native_profiler");
        $__internal_a3d4735f62a82e9a9c43f8c9c2fcf04f29e4a1d0a12de230769515aac6a367c4->enter($__internal_a3d4735f62a82e9a9c43f8c9c2fcf04f29e4a1d0a12de230769515aac6a367c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a3d4735f62a82e9a9c43f8c9c2fcf04f29e4a1d0a12de230769515aac6a367c4->leave($__internal_a3d4735f62a82e9a9c43f8c9c2fcf04f29e4a1d0a12de230769515aac6a367c4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7385be0cfbd9518c21bcbd9ef2f18275c51317d01def9d96e10c0b801c95d581 = $this->env->getExtension("native_profiler");
        $__internal_7385be0cfbd9518c21bcbd9ef2f18275c51317d01def9d96e10c0b801c95d581->enter($__internal_7385be0cfbd9518c21bcbd9ef2f18275c51317d01def9d96e10c0b801c95d581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7385be0cfbd9518c21bcbd9ef2f18275c51317d01def9d96e10c0b801c95d581->leave($__internal_7385be0cfbd9518c21bcbd9ef2f18275c51317d01def9d96e10c0b801c95d581_prof);

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
