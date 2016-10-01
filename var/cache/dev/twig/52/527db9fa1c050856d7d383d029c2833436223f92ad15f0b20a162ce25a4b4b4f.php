<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_c5f4c4261f1e2ef0d456fc73bf0ea245dc9d5b4a07ca3300efdf0d1875bcbd49 extends Twig_Template
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
        $__internal_af428a839d0762a0cae881eeb078c6732321c14e47984bae08d9266319e2d403 = $this->env->getExtension("native_profiler");
        $__internal_af428a839d0762a0cae881eeb078c6732321c14e47984bae08d9266319e2d403->enter($__internal_af428a839d0762a0cae881eeb078c6732321c14e47984bae08d9266319e2d403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af428a839d0762a0cae881eeb078c6732321c14e47984bae08d9266319e2d403->leave($__internal_af428a839d0762a0cae881eeb078c6732321c14e47984bae08d9266319e2d403_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1cb4c91c202b12ed5d09b10cc82013bddb05315dfae6d5cb637f4a846f4a3f65 = $this->env->getExtension("native_profiler");
        $__internal_1cb4c91c202b12ed5d09b10cc82013bddb05315dfae6d5cb637f4a846f4a3f65->enter($__internal_1cb4c91c202b12ed5d09b10cc82013bddb05315dfae6d5cb637f4a846f4a3f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1cb4c91c202b12ed5d09b10cc82013bddb05315dfae6d5cb637f4a846f4a3f65->leave($__internal_1cb4c91c202b12ed5d09b10cc82013bddb05315dfae6d5cb637f4a846f4a3f65_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_63bb665f63125f6b84a3c2dfbdd4ad50b422daca29252c5e1a16992ea1dd7088 = $this->env->getExtension("native_profiler");
        $__internal_63bb665f63125f6b84a3c2dfbdd4ad50b422daca29252c5e1a16992ea1dd7088->enter($__internal_63bb665f63125f6b84a3c2dfbdd4ad50b422daca29252c5e1a16992ea1dd7088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_63bb665f63125f6b84a3c2dfbdd4ad50b422daca29252c5e1a16992ea1dd7088->leave($__internal_63bb665f63125f6b84a3c2dfbdd4ad50b422daca29252c5e1a16992ea1dd7088_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c11497a129d746e013859386b1cdbe5dcd0d1c20c32a103387d347c8a9467048 = $this->env->getExtension("native_profiler");
        $__internal_c11497a129d746e013859386b1cdbe5dcd0d1c20c32a103387d347c8a9467048->enter($__internal_c11497a129d746e013859386b1cdbe5dcd0d1c20c32a103387d347c8a9467048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c11497a129d746e013859386b1cdbe5dcd0d1c20c32a103387d347c8a9467048->leave($__internal_c11497a129d746e013859386b1cdbe5dcd0d1c20c32a103387d347c8a9467048_prof);

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
