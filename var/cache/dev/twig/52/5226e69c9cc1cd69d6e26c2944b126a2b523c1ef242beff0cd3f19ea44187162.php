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
        $__internal_4fd39f1f28ba37b19c2a010d44f152d27126818af1e93e78d81038ee042401cc = $this->env->getExtension("native_profiler");
        $__internal_4fd39f1f28ba37b19c2a010d44f152d27126818af1e93e78d81038ee042401cc->enter($__internal_4fd39f1f28ba37b19c2a010d44f152d27126818af1e93e78d81038ee042401cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fd39f1f28ba37b19c2a010d44f152d27126818af1e93e78d81038ee042401cc->leave($__internal_4fd39f1f28ba37b19c2a010d44f152d27126818af1e93e78d81038ee042401cc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2fedba7050da160c8c589375e2c9cddb8b528b58ba24014c3d1c559a9529a1dc = $this->env->getExtension("native_profiler");
        $__internal_2fedba7050da160c8c589375e2c9cddb8b528b58ba24014c3d1c559a9529a1dc->enter($__internal_2fedba7050da160c8c589375e2c9cddb8b528b58ba24014c3d1c559a9529a1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2fedba7050da160c8c589375e2c9cddb8b528b58ba24014c3d1c559a9529a1dc->leave($__internal_2fedba7050da160c8c589375e2c9cddb8b528b58ba24014c3d1c559a9529a1dc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_42b3d7a408b78e58c33d960268bbb3cd9376199d04e2cd5b2c6250c3d0c0a801 = $this->env->getExtension("native_profiler");
        $__internal_42b3d7a408b78e58c33d960268bbb3cd9376199d04e2cd5b2c6250c3d0c0a801->enter($__internal_42b3d7a408b78e58c33d960268bbb3cd9376199d04e2cd5b2c6250c3d0c0a801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_42b3d7a408b78e58c33d960268bbb3cd9376199d04e2cd5b2c6250c3d0c0a801->leave($__internal_42b3d7a408b78e58c33d960268bbb3cd9376199d04e2cd5b2c6250c3d0c0a801_prof);

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
