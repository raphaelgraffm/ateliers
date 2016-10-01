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
        $__internal_afc1fa435802debe1e5a29cb85bfb65e10af71925a0b28a879d0dd270f959e08 = $this->env->getExtension("native_profiler");
        $__internal_afc1fa435802debe1e5a29cb85bfb65e10af71925a0b28a879d0dd270f959e08->enter($__internal_afc1fa435802debe1e5a29cb85bfb65e10af71925a0b28a879d0dd270f959e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afc1fa435802debe1e5a29cb85bfb65e10af71925a0b28a879d0dd270f959e08->leave($__internal_afc1fa435802debe1e5a29cb85bfb65e10af71925a0b28a879d0dd270f959e08_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_10b239d18bb6e4ea68c5a22fcd62605100ca8927bdeae89b27ad655adfbbe2ba = $this->env->getExtension("native_profiler");
        $__internal_10b239d18bb6e4ea68c5a22fcd62605100ca8927bdeae89b27ad655adfbbe2ba->enter($__internal_10b239d18bb6e4ea68c5a22fcd62605100ca8927bdeae89b27ad655adfbbe2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_10b239d18bb6e4ea68c5a22fcd62605100ca8927bdeae89b27ad655adfbbe2ba->leave($__internal_10b239d18bb6e4ea68c5a22fcd62605100ca8927bdeae89b27ad655adfbbe2ba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e9c4d111c194343caabf5ebf84307fa2afadd7fe9697cf9a718a8a06df780f92 = $this->env->getExtension("native_profiler");
        $__internal_e9c4d111c194343caabf5ebf84307fa2afadd7fe9697cf9a718a8a06df780f92->enter($__internal_e9c4d111c194343caabf5ebf84307fa2afadd7fe9697cf9a718a8a06df780f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e9c4d111c194343caabf5ebf84307fa2afadd7fe9697cf9a718a8a06df780f92->leave($__internal_e9c4d111c194343caabf5ebf84307fa2afadd7fe9697cf9a718a8a06df780f92_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_025e7c4140cad97521a9101197b0942eea2e89d6d726154309d2e3f53601dc58 = $this->env->getExtension("native_profiler");
        $__internal_025e7c4140cad97521a9101197b0942eea2e89d6d726154309d2e3f53601dc58->enter($__internal_025e7c4140cad97521a9101197b0942eea2e89d6d726154309d2e3f53601dc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_025e7c4140cad97521a9101197b0942eea2e89d6d726154309d2e3f53601dc58->leave($__internal_025e7c4140cad97521a9101197b0942eea2e89d6d726154309d2e3f53601dc58_prof);

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
