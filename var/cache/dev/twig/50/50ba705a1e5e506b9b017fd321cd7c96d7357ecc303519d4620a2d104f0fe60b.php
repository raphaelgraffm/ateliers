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
        $__internal_9a8d49876f86b22d3d6d337d21641ebb219536448ad431f4062f998aa40010e5 = $this->env->getExtension("native_profiler");
        $__internal_9a8d49876f86b22d3d6d337d21641ebb219536448ad431f4062f998aa40010e5->enter($__internal_9a8d49876f86b22d3d6d337d21641ebb219536448ad431f4062f998aa40010e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a8d49876f86b22d3d6d337d21641ebb219536448ad431f4062f998aa40010e5->leave($__internal_9a8d49876f86b22d3d6d337d21641ebb219536448ad431f4062f998aa40010e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_78e70b19b8eb8c4d9010124fca1c407dc105bfb2fd6cea5c7b5a96c08ce354c9 = $this->env->getExtension("native_profiler");
        $__internal_78e70b19b8eb8c4d9010124fca1c407dc105bfb2fd6cea5c7b5a96c08ce354c9->enter($__internal_78e70b19b8eb8c4d9010124fca1c407dc105bfb2fd6cea5c7b5a96c08ce354c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_78e70b19b8eb8c4d9010124fca1c407dc105bfb2fd6cea5c7b5a96c08ce354c9->leave($__internal_78e70b19b8eb8c4d9010124fca1c407dc105bfb2fd6cea5c7b5a96c08ce354c9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_877a1367f3456421d67e64a024dbdcb23c812a8a5c7321dc8cf5d7c6a8412437 = $this->env->getExtension("native_profiler");
        $__internal_877a1367f3456421d67e64a024dbdcb23c812a8a5c7321dc8cf5d7c6a8412437->enter($__internal_877a1367f3456421d67e64a024dbdcb23c812a8a5c7321dc8cf5d7c6a8412437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_877a1367f3456421d67e64a024dbdcb23c812a8a5c7321dc8cf5d7c6a8412437->leave($__internal_877a1367f3456421d67e64a024dbdcb23c812a8a5c7321dc8cf5d7c6a8412437_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce4353b9328ba085f0f13bc5b70350d66c84fe866db885d2832774357f925e47 = $this->env->getExtension("native_profiler");
        $__internal_ce4353b9328ba085f0f13bc5b70350d66c84fe866db885d2832774357f925e47->enter($__internal_ce4353b9328ba085f0f13bc5b70350d66c84fe866db885d2832774357f925e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ce4353b9328ba085f0f13bc5b70350d66c84fe866db885d2832774357f925e47->leave($__internal_ce4353b9328ba085f0f13bc5b70350d66c84fe866db885d2832774357f925e47_prof);

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
