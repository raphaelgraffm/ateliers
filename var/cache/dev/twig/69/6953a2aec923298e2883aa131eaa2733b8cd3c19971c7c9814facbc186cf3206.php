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
        $__internal_1298f9057a04f7b7ac279e20e67e596b5f80425d013ba8011ae91dad13accfea = $this->env->getExtension("native_profiler");
        $__internal_1298f9057a04f7b7ac279e20e67e596b5f80425d013ba8011ae91dad13accfea->enter($__internal_1298f9057a04f7b7ac279e20e67e596b5f80425d013ba8011ae91dad13accfea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1298f9057a04f7b7ac279e20e67e596b5f80425d013ba8011ae91dad13accfea->leave($__internal_1298f9057a04f7b7ac279e20e67e596b5f80425d013ba8011ae91dad13accfea_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8938536cfafd337a059062d3618a874d0f6f3ee8ba1958be5c6d9c30665e76c = $this->env->getExtension("native_profiler");
        $__internal_f8938536cfafd337a059062d3618a874d0f6f3ee8ba1958be5c6d9c30665e76c->enter($__internal_f8938536cfafd337a059062d3618a874d0f6f3ee8ba1958be5c6d9c30665e76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f8938536cfafd337a059062d3618a874d0f6f3ee8ba1958be5c6d9c30665e76c->leave($__internal_f8938536cfafd337a059062d3618a874d0f6f3ee8ba1958be5c6d9c30665e76c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_35b39e37b132cbfad8906d2f1be16013af79cafa267fd0905f6d0a807407ad67 = $this->env->getExtension("native_profiler");
        $__internal_35b39e37b132cbfad8906d2f1be16013af79cafa267fd0905f6d0a807407ad67->enter($__internal_35b39e37b132cbfad8906d2f1be16013af79cafa267fd0905f6d0a807407ad67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_35b39e37b132cbfad8906d2f1be16013af79cafa267fd0905f6d0a807407ad67->leave($__internal_35b39e37b132cbfad8906d2f1be16013af79cafa267fd0905f6d0a807407ad67_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe2360714a9dc169dc7ecac87503fc93e7c7ad02ad8ef3188c1b5b5552e34fb1 = $this->env->getExtension("native_profiler");
        $__internal_fe2360714a9dc169dc7ecac87503fc93e7c7ad02ad8ef3188c1b5b5552e34fb1->enter($__internal_fe2360714a9dc169dc7ecac87503fc93e7c7ad02ad8ef3188c1b5b5552e34fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fe2360714a9dc169dc7ecac87503fc93e7c7ad02ad8ef3188c1b5b5552e34fb1->leave($__internal_fe2360714a9dc169dc7ecac87503fc93e7c7ad02ad8ef3188c1b5b5552e34fb1_prof);

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
