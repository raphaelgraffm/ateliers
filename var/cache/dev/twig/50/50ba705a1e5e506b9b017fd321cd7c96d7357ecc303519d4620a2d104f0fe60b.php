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
        $__internal_759741ee820e9083dbca03868ec3dae0b4ad492408cc15943c667d1883c6a8a8 = $this->env->getExtension("native_profiler");
        $__internal_759741ee820e9083dbca03868ec3dae0b4ad492408cc15943c667d1883c6a8a8->enter($__internal_759741ee820e9083dbca03868ec3dae0b4ad492408cc15943c667d1883c6a8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_759741ee820e9083dbca03868ec3dae0b4ad492408cc15943c667d1883c6a8a8->leave($__internal_759741ee820e9083dbca03868ec3dae0b4ad492408cc15943c667d1883c6a8a8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dc28d679f0055080ed0133638bb054db2797671428168493ae532afc98b9d0a7 = $this->env->getExtension("native_profiler");
        $__internal_dc28d679f0055080ed0133638bb054db2797671428168493ae532afc98b9d0a7->enter($__internal_dc28d679f0055080ed0133638bb054db2797671428168493ae532afc98b9d0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dc28d679f0055080ed0133638bb054db2797671428168493ae532afc98b9d0a7->leave($__internal_dc28d679f0055080ed0133638bb054db2797671428168493ae532afc98b9d0a7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cc20381389df755d22ed023e83a540cdf9065dc7d6133bf8f1675bd3649c23e5 = $this->env->getExtension("native_profiler");
        $__internal_cc20381389df755d22ed023e83a540cdf9065dc7d6133bf8f1675bd3649c23e5->enter($__internal_cc20381389df755d22ed023e83a540cdf9065dc7d6133bf8f1675bd3649c23e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cc20381389df755d22ed023e83a540cdf9065dc7d6133bf8f1675bd3649c23e5->leave($__internal_cc20381389df755d22ed023e83a540cdf9065dc7d6133bf8f1675bd3649c23e5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_17cd6a8e74e5727a75a5d28c4d96e41574acbf2122c49acea907042b2f82cc4e = $this->env->getExtension("native_profiler");
        $__internal_17cd6a8e74e5727a75a5d28c4d96e41574acbf2122c49acea907042b2f82cc4e->enter($__internal_17cd6a8e74e5727a75a5d28c4d96e41574acbf2122c49acea907042b2f82cc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_17cd6a8e74e5727a75a5d28c4d96e41574acbf2122c49acea907042b2f82cc4e->leave($__internal_17cd6a8e74e5727a75a5d28c4d96e41574acbf2122c49acea907042b2f82cc4e_prof);

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
