<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_b6e5b3e93fc606f9060d125a425d618d8d992c4fd669c82c82559101e0da11d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6d03f5bafe363608cc4025b0a755748db8c3206c0a0598428ea0921958cfbf11 = $this->env->getExtension("native_profiler");
        $__internal_6d03f5bafe363608cc4025b0a755748db8c3206c0a0598428ea0921958cfbf11->enter($__internal_6d03f5bafe363608cc4025b0a755748db8c3206c0a0598428ea0921958cfbf11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d03f5bafe363608cc4025b0a755748db8c3206c0a0598428ea0921958cfbf11->leave($__internal_6d03f5bafe363608cc4025b0a755748db8c3206c0a0598428ea0921958cfbf11_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c82bcf66c3d1fb15141c0c99f70f37d8edab5e7406c49fa5de47d7e55d0a56a2 = $this->env->getExtension("native_profiler");
        $__internal_c82bcf66c3d1fb15141c0c99f70f37d8edab5e7406c49fa5de47d7e55d0a56a2->enter($__internal_c82bcf66c3d1fb15141c0c99f70f37d8edab5e7406c49fa5de47d7e55d0a56a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c82bcf66c3d1fb15141c0c99f70f37d8edab5e7406c49fa5de47d7e55d0a56a2->leave($__internal_c82bcf66c3d1fb15141c0c99f70f37d8edab5e7406c49fa5de47d7e55d0a56a2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b237b5ca69e687f4a5184bd06ab69fab4e01552ddbd3f2bbbc4884a6d98ff4d2 = $this->env->getExtension("native_profiler");
        $__internal_b237b5ca69e687f4a5184bd06ab69fab4e01552ddbd3f2bbbc4884a6d98ff4d2->enter($__internal_b237b5ca69e687f4a5184bd06ab69fab4e01552ddbd3f2bbbc4884a6d98ff4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b237b5ca69e687f4a5184bd06ab69fab4e01552ddbd3f2bbbc4884a6d98ff4d2->leave($__internal_b237b5ca69e687f4a5184bd06ab69fab4e01552ddbd3f2bbbc4884a6d98ff4d2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1b28f13dc5e9c07adf094980ecfb956ac85d3941879615102641034bdf6323a9 = $this->env->getExtension("native_profiler");
        $__internal_1b28f13dc5e9c07adf094980ecfb956ac85d3941879615102641034bdf6323a9->enter($__internal_1b28f13dc5e9c07adf094980ecfb956ac85d3941879615102641034bdf6323a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1b28f13dc5e9c07adf094980ecfb956ac85d3941879615102641034bdf6323a9->leave($__internal_1b28f13dc5e9c07adf094980ecfb956ac85d3941879615102641034bdf6323a9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
