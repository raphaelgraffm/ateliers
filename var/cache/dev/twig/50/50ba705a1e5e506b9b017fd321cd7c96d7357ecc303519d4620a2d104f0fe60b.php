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
        $__internal_ea10135e5cbdf3a5fddb49f141ca5e47e87962a18f92ac2e638d9d0a2527b1fb = $this->env->getExtension("native_profiler");
        $__internal_ea10135e5cbdf3a5fddb49f141ca5e47e87962a18f92ac2e638d9d0a2527b1fb->enter($__internal_ea10135e5cbdf3a5fddb49f141ca5e47e87962a18f92ac2e638d9d0a2527b1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea10135e5cbdf3a5fddb49f141ca5e47e87962a18f92ac2e638d9d0a2527b1fb->leave($__internal_ea10135e5cbdf3a5fddb49f141ca5e47e87962a18f92ac2e638d9d0a2527b1fb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8b0e9c472d8d88b7c42776e120560554fb99f2792e2df586c3a570ee3ab4ea21 = $this->env->getExtension("native_profiler");
        $__internal_8b0e9c472d8d88b7c42776e120560554fb99f2792e2df586c3a570ee3ab4ea21->enter($__internal_8b0e9c472d8d88b7c42776e120560554fb99f2792e2df586c3a570ee3ab4ea21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8b0e9c472d8d88b7c42776e120560554fb99f2792e2df586c3a570ee3ab4ea21->leave($__internal_8b0e9c472d8d88b7c42776e120560554fb99f2792e2df586c3a570ee3ab4ea21_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_16b9a7bdabdaf5b1ca283dcdfd9fd3836545e1564079ae7024b11e9b53767539 = $this->env->getExtension("native_profiler");
        $__internal_16b9a7bdabdaf5b1ca283dcdfd9fd3836545e1564079ae7024b11e9b53767539->enter($__internal_16b9a7bdabdaf5b1ca283dcdfd9fd3836545e1564079ae7024b11e9b53767539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_16b9a7bdabdaf5b1ca283dcdfd9fd3836545e1564079ae7024b11e9b53767539->leave($__internal_16b9a7bdabdaf5b1ca283dcdfd9fd3836545e1564079ae7024b11e9b53767539_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_178d4d6b755eb18084b43501f0d6b8e7ba929c262d813a9ba517bb19b4e55c8e = $this->env->getExtension("native_profiler");
        $__internal_178d4d6b755eb18084b43501f0d6b8e7ba929c262d813a9ba517bb19b4e55c8e->enter($__internal_178d4d6b755eb18084b43501f0d6b8e7ba929c262d813a9ba517bb19b4e55c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_178d4d6b755eb18084b43501f0d6b8e7ba929c262d813a9ba517bb19b4e55c8e->leave($__internal_178d4d6b755eb18084b43501f0d6b8e7ba929c262d813a9ba517bb19b4e55c8e_prof);

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
