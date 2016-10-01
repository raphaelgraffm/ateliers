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
        $__internal_b6bee71cf0b051bb35adddff531cbe2470d53a8a6a05e66607974814da5490c7 = $this->env->getExtension("native_profiler");
        $__internal_b6bee71cf0b051bb35adddff531cbe2470d53a8a6a05e66607974814da5490c7->enter($__internal_b6bee71cf0b051bb35adddff531cbe2470d53a8a6a05e66607974814da5490c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6bee71cf0b051bb35adddff531cbe2470d53a8a6a05e66607974814da5490c7->leave($__internal_b6bee71cf0b051bb35adddff531cbe2470d53a8a6a05e66607974814da5490c7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2fa90115df96e429df1d594a0df34dd197a8f5f49a2f9ffd075e1f3dce093348 = $this->env->getExtension("native_profiler");
        $__internal_2fa90115df96e429df1d594a0df34dd197a8f5f49a2f9ffd075e1f3dce093348->enter($__internal_2fa90115df96e429df1d594a0df34dd197a8f5f49a2f9ffd075e1f3dce093348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2fa90115df96e429df1d594a0df34dd197a8f5f49a2f9ffd075e1f3dce093348->leave($__internal_2fa90115df96e429df1d594a0df34dd197a8f5f49a2f9ffd075e1f3dce093348_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_323b463cc1f0d5fd11d7ac0a036405d805613e7914f1a636ccca262127abe861 = $this->env->getExtension("native_profiler");
        $__internal_323b463cc1f0d5fd11d7ac0a036405d805613e7914f1a636ccca262127abe861->enter($__internal_323b463cc1f0d5fd11d7ac0a036405d805613e7914f1a636ccca262127abe861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_323b463cc1f0d5fd11d7ac0a036405d805613e7914f1a636ccca262127abe861->leave($__internal_323b463cc1f0d5fd11d7ac0a036405d805613e7914f1a636ccca262127abe861_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_872f1901a4cad8c2623ebdfed4610af343e260c638d66ca5099e8ca90ca62a05 = $this->env->getExtension("native_profiler");
        $__internal_872f1901a4cad8c2623ebdfed4610af343e260c638d66ca5099e8ca90ca62a05->enter($__internal_872f1901a4cad8c2623ebdfed4610af343e260c638d66ca5099e8ca90ca62a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_872f1901a4cad8c2623ebdfed4610af343e260c638d66ca5099e8ca90ca62a05->leave($__internal_872f1901a4cad8c2623ebdfed4610af343e260c638d66ca5099e8ca90ca62a05_prof);

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
