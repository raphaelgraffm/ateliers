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
        $__internal_0c3b524c106570927b66f0686f89f6280a7f3a19945a773b4a98d3d788d85c43 = $this->env->getExtension("native_profiler");
        $__internal_0c3b524c106570927b66f0686f89f6280a7f3a19945a773b4a98d3d788d85c43->enter($__internal_0c3b524c106570927b66f0686f89f6280a7f3a19945a773b4a98d3d788d85c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c3b524c106570927b66f0686f89f6280a7f3a19945a773b4a98d3d788d85c43->leave($__internal_0c3b524c106570927b66f0686f89f6280a7f3a19945a773b4a98d3d788d85c43_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff9961ada5171d43d8139fdb6755fe1e42b4a73590b442bfcf9a8e3cacd0496e = $this->env->getExtension("native_profiler");
        $__internal_ff9961ada5171d43d8139fdb6755fe1e42b4a73590b442bfcf9a8e3cacd0496e->enter($__internal_ff9961ada5171d43d8139fdb6755fe1e42b4a73590b442bfcf9a8e3cacd0496e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ff9961ada5171d43d8139fdb6755fe1e42b4a73590b442bfcf9a8e3cacd0496e->leave($__internal_ff9961ada5171d43d8139fdb6755fe1e42b4a73590b442bfcf9a8e3cacd0496e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb8fdfe1994e321abf4ee035e77dd08e74c5a3f849b2dc3b6e7baf57096e43b8 = $this->env->getExtension("native_profiler");
        $__internal_cb8fdfe1994e321abf4ee035e77dd08e74c5a3f849b2dc3b6e7baf57096e43b8->enter($__internal_cb8fdfe1994e321abf4ee035e77dd08e74c5a3f849b2dc3b6e7baf57096e43b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cb8fdfe1994e321abf4ee035e77dd08e74c5a3f849b2dc3b6e7baf57096e43b8->leave($__internal_cb8fdfe1994e321abf4ee035e77dd08e74c5a3f849b2dc3b6e7baf57096e43b8_prof);

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
