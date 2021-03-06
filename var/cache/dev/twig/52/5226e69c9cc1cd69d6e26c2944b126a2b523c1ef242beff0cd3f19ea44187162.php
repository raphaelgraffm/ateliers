<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c045b493564c27517ec019c9f4c91b18592b15333f3acf73285c1b31e2c56e35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e571f6b4975f0e047c8902ef5162d244940b39af347f5898702d229408802819 = $this->env->getExtension("native_profiler");
        $__internal_e571f6b4975f0e047c8902ef5162d244940b39af347f5898702d229408802819->enter($__internal_e571f6b4975f0e047c8902ef5162d244940b39af347f5898702d229408802819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e571f6b4975f0e047c8902ef5162d244940b39af347f5898702d229408802819->leave($__internal_e571f6b4975f0e047c8902ef5162d244940b39af347f5898702d229408802819_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e13bb012cb3cf4c40ed16b25c0f4212d239ed9d5d997bf2f31f166f496ddbe5 = $this->env->getExtension("native_profiler");
        $__internal_4e13bb012cb3cf4c40ed16b25c0f4212d239ed9d5d997bf2f31f166f496ddbe5->enter($__internal_4e13bb012cb3cf4c40ed16b25c0f4212d239ed9d5d997bf2f31f166f496ddbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4e13bb012cb3cf4c40ed16b25c0f4212d239ed9d5d997bf2f31f166f496ddbe5->leave($__internal_4e13bb012cb3cf4c40ed16b25c0f4212d239ed9d5d997bf2f31f166f496ddbe5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8761947a5cb138c3f4ecc60e3b295e1923535e4dbd342250a021319e1bc591a = $this->env->getExtension("native_profiler");
        $__internal_d8761947a5cb138c3f4ecc60e3b295e1923535e4dbd342250a021319e1bc591a->enter($__internal_d8761947a5cb138c3f4ecc60e3b295e1923535e4dbd342250a021319e1bc591a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d8761947a5cb138c3f4ecc60e3b295e1923535e4dbd342250a021319e1bc591a->leave($__internal_d8761947a5cb138c3f4ecc60e3b295e1923535e4dbd342250a021319e1bc591a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
