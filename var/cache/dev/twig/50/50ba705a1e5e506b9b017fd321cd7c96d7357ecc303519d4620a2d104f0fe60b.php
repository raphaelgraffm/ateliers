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
        $__internal_30402b5215e108f5d18cd734014d80d826438482e96e9dfbe362f01948a15a4c = $this->env->getExtension("native_profiler");
        $__internal_30402b5215e108f5d18cd734014d80d826438482e96e9dfbe362f01948a15a4c->enter($__internal_30402b5215e108f5d18cd734014d80d826438482e96e9dfbe362f01948a15a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30402b5215e108f5d18cd734014d80d826438482e96e9dfbe362f01948a15a4c->leave($__internal_30402b5215e108f5d18cd734014d80d826438482e96e9dfbe362f01948a15a4c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_193d68df72425cc16639dcb97d95a02c49bf2e92074a7da4fb9cd115bdbe2569 = $this->env->getExtension("native_profiler");
        $__internal_193d68df72425cc16639dcb97d95a02c49bf2e92074a7da4fb9cd115bdbe2569->enter($__internal_193d68df72425cc16639dcb97d95a02c49bf2e92074a7da4fb9cd115bdbe2569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_193d68df72425cc16639dcb97d95a02c49bf2e92074a7da4fb9cd115bdbe2569->leave($__internal_193d68df72425cc16639dcb97d95a02c49bf2e92074a7da4fb9cd115bdbe2569_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc8623fb5dc51fa46fa2bf668f8d0fec7d4612df22ebe37f02bb9fbbef76d07c = $this->env->getExtension("native_profiler");
        $__internal_dc8623fb5dc51fa46fa2bf668f8d0fec7d4612df22ebe37f02bb9fbbef76d07c->enter($__internal_dc8623fb5dc51fa46fa2bf668f8d0fec7d4612df22ebe37f02bb9fbbef76d07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dc8623fb5dc51fa46fa2bf668f8d0fec7d4612df22ebe37f02bb9fbbef76d07c->leave($__internal_dc8623fb5dc51fa46fa2bf668f8d0fec7d4612df22ebe37f02bb9fbbef76d07c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f3d74c0350962542c3d677bbe8d55d7eb9efff9e3303410d8d8b6dbe01416a1c = $this->env->getExtension("native_profiler");
        $__internal_f3d74c0350962542c3d677bbe8d55d7eb9efff9e3303410d8d8b6dbe01416a1c->enter($__internal_f3d74c0350962542c3d677bbe8d55d7eb9efff9e3303410d8d8b6dbe01416a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f3d74c0350962542c3d677bbe8d55d7eb9efff9e3303410d8d8b6dbe01416a1c->leave($__internal_f3d74c0350962542c3d677bbe8d55d7eb9efff9e3303410d8d8b6dbe01416a1c_prof);

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
