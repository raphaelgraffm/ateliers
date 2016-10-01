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
        $__internal_5e5c88d9b1e5767da5a92b04feb5fe2b71cc62726e28e4ca528632ff27ea964a = $this->env->getExtension("native_profiler");
        $__internal_5e5c88d9b1e5767da5a92b04feb5fe2b71cc62726e28e4ca528632ff27ea964a->enter($__internal_5e5c88d9b1e5767da5a92b04feb5fe2b71cc62726e28e4ca528632ff27ea964a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e5c88d9b1e5767da5a92b04feb5fe2b71cc62726e28e4ca528632ff27ea964a->leave($__internal_5e5c88d9b1e5767da5a92b04feb5fe2b71cc62726e28e4ca528632ff27ea964a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9b863d3f6ceed999f19ccde11df2048f6a3196dfc472013d41301f1a7a159bdf = $this->env->getExtension("native_profiler");
        $__internal_9b863d3f6ceed999f19ccde11df2048f6a3196dfc472013d41301f1a7a159bdf->enter($__internal_9b863d3f6ceed999f19ccde11df2048f6a3196dfc472013d41301f1a7a159bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9b863d3f6ceed999f19ccde11df2048f6a3196dfc472013d41301f1a7a159bdf->leave($__internal_9b863d3f6ceed999f19ccde11df2048f6a3196dfc472013d41301f1a7a159bdf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1ed68a43fc12d67ae88af1161ba477b4deca3fbc3818058f78d9d0f0ef9a1288 = $this->env->getExtension("native_profiler");
        $__internal_1ed68a43fc12d67ae88af1161ba477b4deca3fbc3818058f78d9d0f0ef9a1288->enter($__internal_1ed68a43fc12d67ae88af1161ba477b4deca3fbc3818058f78d9d0f0ef9a1288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1ed68a43fc12d67ae88af1161ba477b4deca3fbc3818058f78d9d0f0ef9a1288->leave($__internal_1ed68a43fc12d67ae88af1161ba477b4deca3fbc3818058f78d9d0f0ef9a1288_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ade23be0d0e8a4aa876bb1170e55f6f9f28cded08f351e18544de0040e229ad = $this->env->getExtension("native_profiler");
        $__internal_5ade23be0d0e8a4aa876bb1170e55f6f9f28cded08f351e18544de0040e229ad->enter($__internal_5ade23be0d0e8a4aa876bb1170e55f6f9f28cded08f351e18544de0040e229ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5ade23be0d0e8a4aa876bb1170e55f6f9f28cded08f351e18544de0040e229ad->leave($__internal_5ade23be0d0e8a4aa876bb1170e55f6f9f28cded08f351e18544de0040e229ad_prof);

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
