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
        $__internal_6b239b19639491d47cd22955f2be6127374c4fc2e2a894433875145c89fea4e1 = $this->env->getExtension("native_profiler");
        $__internal_6b239b19639491d47cd22955f2be6127374c4fc2e2a894433875145c89fea4e1->enter($__internal_6b239b19639491d47cd22955f2be6127374c4fc2e2a894433875145c89fea4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6b239b19639491d47cd22955f2be6127374c4fc2e2a894433875145c89fea4e1->leave($__internal_6b239b19639491d47cd22955f2be6127374c4fc2e2a894433875145c89fea4e1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d74ef46e6138c253a0a8880709628cc76a789dfc1d0b426125107a7f60f3859c = $this->env->getExtension("native_profiler");
        $__internal_d74ef46e6138c253a0a8880709628cc76a789dfc1d0b426125107a7f60f3859c->enter($__internal_d74ef46e6138c253a0a8880709628cc76a789dfc1d0b426125107a7f60f3859c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d74ef46e6138c253a0a8880709628cc76a789dfc1d0b426125107a7f60f3859c->leave($__internal_d74ef46e6138c253a0a8880709628cc76a789dfc1d0b426125107a7f60f3859c_prof);

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
