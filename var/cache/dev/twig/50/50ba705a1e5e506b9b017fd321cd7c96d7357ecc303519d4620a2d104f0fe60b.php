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
        $__internal_1d69dd8124cb0daea045fc5206e7503744ba75cbaa33836e069d5f02473d3637 = $this->env->getExtension("native_profiler");
        $__internal_1d69dd8124cb0daea045fc5206e7503744ba75cbaa33836e069d5f02473d3637->enter($__internal_1d69dd8124cb0daea045fc5206e7503744ba75cbaa33836e069d5f02473d3637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d69dd8124cb0daea045fc5206e7503744ba75cbaa33836e069d5f02473d3637->leave($__internal_1d69dd8124cb0daea045fc5206e7503744ba75cbaa33836e069d5f02473d3637_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b083e8c608bd96036f3ebb5fdc666208a7baa70f2aa047e937fa260c3895c01 = $this->env->getExtension("native_profiler");
        $__internal_3b083e8c608bd96036f3ebb5fdc666208a7baa70f2aa047e937fa260c3895c01->enter($__internal_3b083e8c608bd96036f3ebb5fdc666208a7baa70f2aa047e937fa260c3895c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3b083e8c608bd96036f3ebb5fdc666208a7baa70f2aa047e937fa260c3895c01->leave($__internal_3b083e8c608bd96036f3ebb5fdc666208a7baa70f2aa047e937fa260c3895c01_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f06fd11f40b4d182cee55fc831cef47501058791545163e7fa81d6df4aa495e = $this->env->getExtension("native_profiler");
        $__internal_7f06fd11f40b4d182cee55fc831cef47501058791545163e7fa81d6df4aa495e->enter($__internal_7f06fd11f40b4d182cee55fc831cef47501058791545163e7fa81d6df4aa495e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7f06fd11f40b4d182cee55fc831cef47501058791545163e7fa81d6df4aa495e->leave($__internal_7f06fd11f40b4d182cee55fc831cef47501058791545163e7fa81d6df4aa495e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_26caa570d99930dfaf9c850f234200b3d7829b55786b9b2cd76a3e4845ca9d90 = $this->env->getExtension("native_profiler");
        $__internal_26caa570d99930dfaf9c850f234200b3d7829b55786b9b2cd76a3e4845ca9d90->enter($__internal_26caa570d99930dfaf9c850f234200b3d7829b55786b9b2cd76a3e4845ca9d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_26caa570d99930dfaf9c850f234200b3d7829b55786b9b2cd76a3e4845ca9d90->leave($__internal_26caa570d99930dfaf9c850f234200b3d7829b55786b9b2cd76a3e4845ca9d90_prof);

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
