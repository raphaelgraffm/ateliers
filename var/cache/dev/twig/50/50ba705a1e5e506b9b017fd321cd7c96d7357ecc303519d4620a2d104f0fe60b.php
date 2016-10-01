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
        $__internal_364b983f320f00b7b34a547eefb851bc3503b4bcac258fb977f2b5167b360d16 = $this->env->getExtension("native_profiler");
        $__internal_364b983f320f00b7b34a547eefb851bc3503b4bcac258fb977f2b5167b360d16->enter($__internal_364b983f320f00b7b34a547eefb851bc3503b4bcac258fb977f2b5167b360d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_364b983f320f00b7b34a547eefb851bc3503b4bcac258fb977f2b5167b360d16->leave($__internal_364b983f320f00b7b34a547eefb851bc3503b4bcac258fb977f2b5167b360d16_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4146f8e2f4354b96f726af49f94ee6345f56ff8c6cbea2a12a9cbad8a3a082f2 = $this->env->getExtension("native_profiler");
        $__internal_4146f8e2f4354b96f726af49f94ee6345f56ff8c6cbea2a12a9cbad8a3a082f2->enter($__internal_4146f8e2f4354b96f726af49f94ee6345f56ff8c6cbea2a12a9cbad8a3a082f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4146f8e2f4354b96f726af49f94ee6345f56ff8c6cbea2a12a9cbad8a3a082f2->leave($__internal_4146f8e2f4354b96f726af49f94ee6345f56ff8c6cbea2a12a9cbad8a3a082f2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e004ff878a33f256a7a4333b498066ac0dbd4dd3f4e3ad3b8101353f40563525 = $this->env->getExtension("native_profiler");
        $__internal_e004ff878a33f256a7a4333b498066ac0dbd4dd3f4e3ad3b8101353f40563525->enter($__internal_e004ff878a33f256a7a4333b498066ac0dbd4dd3f4e3ad3b8101353f40563525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e004ff878a33f256a7a4333b498066ac0dbd4dd3f4e3ad3b8101353f40563525->leave($__internal_e004ff878a33f256a7a4333b498066ac0dbd4dd3f4e3ad3b8101353f40563525_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6870bb52109a002afe8d94c1236041a495a481c812583f4cbb99572f7a5339d4 = $this->env->getExtension("native_profiler");
        $__internal_6870bb52109a002afe8d94c1236041a495a481c812583f4cbb99572f7a5339d4->enter($__internal_6870bb52109a002afe8d94c1236041a495a481c812583f4cbb99572f7a5339d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6870bb52109a002afe8d94c1236041a495a481c812583f4cbb99572f7a5339d4->leave($__internal_6870bb52109a002afe8d94c1236041a495a481c812583f4cbb99572f7a5339d4_prof);

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
