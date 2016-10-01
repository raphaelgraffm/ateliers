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
        $__internal_f00d078e9f8c7f0ed087258a088071884317d64044f27a539b2886dcd73947ae = $this->env->getExtension("native_profiler");
        $__internal_f00d078e9f8c7f0ed087258a088071884317d64044f27a539b2886dcd73947ae->enter($__internal_f00d078e9f8c7f0ed087258a088071884317d64044f27a539b2886dcd73947ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f00d078e9f8c7f0ed087258a088071884317d64044f27a539b2886dcd73947ae->leave($__internal_f00d078e9f8c7f0ed087258a088071884317d64044f27a539b2886dcd73947ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b789b319ec0bf4a8e15ef06195aeed931a758a766cc0ccce2a57b271c74f1b74 = $this->env->getExtension("native_profiler");
        $__internal_b789b319ec0bf4a8e15ef06195aeed931a758a766cc0ccce2a57b271c74f1b74->enter($__internal_b789b319ec0bf4a8e15ef06195aeed931a758a766cc0ccce2a57b271c74f1b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b789b319ec0bf4a8e15ef06195aeed931a758a766cc0ccce2a57b271c74f1b74->leave($__internal_b789b319ec0bf4a8e15ef06195aeed931a758a766cc0ccce2a57b271c74f1b74_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dda472b53d752a8a84a28b67a6d69d7430a6c9007584953c922d0e5ece5b66cf = $this->env->getExtension("native_profiler");
        $__internal_dda472b53d752a8a84a28b67a6d69d7430a6c9007584953c922d0e5ece5b66cf->enter($__internal_dda472b53d752a8a84a28b67a6d69d7430a6c9007584953c922d0e5ece5b66cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_dda472b53d752a8a84a28b67a6d69d7430a6c9007584953c922d0e5ece5b66cf->leave($__internal_dda472b53d752a8a84a28b67a6d69d7430a6c9007584953c922d0e5ece5b66cf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_31b38d731667c3905f0e9b8ebe040c3ea25b9e4a0a5effda1c4da1573a76c14b = $this->env->getExtension("native_profiler");
        $__internal_31b38d731667c3905f0e9b8ebe040c3ea25b9e4a0a5effda1c4da1573a76c14b->enter($__internal_31b38d731667c3905f0e9b8ebe040c3ea25b9e4a0a5effda1c4da1573a76c14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_31b38d731667c3905f0e9b8ebe040c3ea25b9e4a0a5effda1c4da1573a76c14b->leave($__internal_31b38d731667c3905f0e9b8ebe040c3ea25b9e4a0a5effda1c4da1573a76c14b_prof);

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
