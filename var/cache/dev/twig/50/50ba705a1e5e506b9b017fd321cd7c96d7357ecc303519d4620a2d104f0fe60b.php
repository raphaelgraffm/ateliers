<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_af4f4620e0ab9f5b0badaba2c974338775725309be64d42c6d577cdc0c94d2ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc6eb99818ef21341e7901955d934481f6499309359800a1e9eb7db96a3866cd = $this->env->getExtension("native_profiler");
        $__internal_bc6eb99818ef21341e7901955d934481f6499309359800a1e9eb7db96a3866cd->enter($__internal_bc6eb99818ef21341e7901955d934481f6499309359800a1e9eb7db96a3866cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc6eb99818ef21341e7901955d934481f6499309359800a1e9eb7db96a3866cd->leave($__internal_bc6eb99818ef21341e7901955d934481f6499309359800a1e9eb7db96a3866cd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a3887cab405974f8e95cec1f7725dfe872e6cd4ccc8bb16df7bfdab4beae204c = $this->env->getExtension("native_profiler");
        $__internal_a3887cab405974f8e95cec1f7725dfe872e6cd4ccc8bb16df7bfdab4beae204c->enter($__internal_a3887cab405974f8e95cec1f7725dfe872e6cd4ccc8bb16df7bfdab4beae204c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a3887cab405974f8e95cec1f7725dfe872e6cd4ccc8bb16df7bfdab4beae204c->leave($__internal_a3887cab405974f8e95cec1f7725dfe872e6cd4ccc8bb16df7bfdab4beae204c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_70f9d861805dfe34476206ab57eeb2a74e56857a9d318bec4a79101ba180608c = $this->env->getExtension("native_profiler");
        $__internal_70f9d861805dfe34476206ab57eeb2a74e56857a9d318bec4a79101ba180608c->enter($__internal_70f9d861805dfe34476206ab57eeb2a74e56857a9d318bec4a79101ba180608c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_70f9d861805dfe34476206ab57eeb2a74e56857a9d318bec4a79101ba180608c->leave($__internal_70f9d861805dfe34476206ab57eeb2a74e56857a9d318bec4a79101ba180608c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f0748d724e1e3adc0ba89adf1d318f41a617c26da634d5fc6269eecbfa5f81c = $this->env->getExtension("native_profiler");
        $__internal_8f0748d724e1e3adc0ba89adf1d318f41a617c26da634d5fc6269eecbfa5f81c->enter($__internal_8f0748d724e1e3adc0ba89adf1d318f41a617c26da634d5fc6269eecbfa5f81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8f0748d724e1e3adc0ba89adf1d318f41a617c26da634d5fc6269eecbfa5f81c->leave($__internal_8f0748d724e1e3adc0ba89adf1d318f41a617c26da634d5fc6269eecbfa5f81c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
