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
        $__internal_c634588508a9d1b6793dff24538669bbcef4bf17c0ee85e2dff6dc12563cc7e0 = $this->env->getExtension("native_profiler");
        $__internal_c634588508a9d1b6793dff24538669bbcef4bf17c0ee85e2dff6dc12563cc7e0->enter($__internal_c634588508a9d1b6793dff24538669bbcef4bf17c0ee85e2dff6dc12563cc7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c634588508a9d1b6793dff24538669bbcef4bf17c0ee85e2dff6dc12563cc7e0->leave($__internal_c634588508a9d1b6793dff24538669bbcef4bf17c0ee85e2dff6dc12563cc7e0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0d1c344393046dcd6d2ae61b68d49153416e176c097d1b41a794de0dc2f0ad86 = $this->env->getExtension("native_profiler");
        $__internal_0d1c344393046dcd6d2ae61b68d49153416e176c097d1b41a794de0dc2f0ad86->enter($__internal_0d1c344393046dcd6d2ae61b68d49153416e176c097d1b41a794de0dc2f0ad86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0d1c344393046dcd6d2ae61b68d49153416e176c097d1b41a794de0dc2f0ad86->leave($__internal_0d1c344393046dcd6d2ae61b68d49153416e176c097d1b41a794de0dc2f0ad86_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_613c9ec4cbe39aba211c3e7e69773a8ee7a50ad68c830131fce070e0be3d52eb = $this->env->getExtension("native_profiler");
        $__internal_613c9ec4cbe39aba211c3e7e69773a8ee7a50ad68c830131fce070e0be3d52eb->enter($__internal_613c9ec4cbe39aba211c3e7e69773a8ee7a50ad68c830131fce070e0be3d52eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_613c9ec4cbe39aba211c3e7e69773a8ee7a50ad68c830131fce070e0be3d52eb->leave($__internal_613c9ec4cbe39aba211c3e7e69773a8ee7a50ad68c830131fce070e0be3d52eb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_02fe8667bf628877df6190bec53b3de914da1b1d3657ce6a12102c476a3e3a9a = $this->env->getExtension("native_profiler");
        $__internal_02fe8667bf628877df6190bec53b3de914da1b1d3657ce6a12102c476a3e3a9a->enter($__internal_02fe8667bf628877df6190bec53b3de914da1b1d3657ce6a12102c476a3e3a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_02fe8667bf628877df6190bec53b3de914da1b1d3657ce6a12102c476a3e3a9a->leave($__internal_02fe8667bf628877df6190bec53b3de914da1b1d3657ce6a12102c476a3e3a9a_prof);

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
