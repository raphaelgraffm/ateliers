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
        $__internal_d5e29303224e67cf10c21364e1935576b2ca92b0d89f8f5da93b6e45520b6deb = $this->env->getExtension("native_profiler");
        $__internal_d5e29303224e67cf10c21364e1935576b2ca92b0d89f8f5da93b6e45520b6deb->enter($__internal_d5e29303224e67cf10c21364e1935576b2ca92b0d89f8f5da93b6e45520b6deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5e29303224e67cf10c21364e1935576b2ca92b0d89f8f5da93b6e45520b6deb->leave($__internal_d5e29303224e67cf10c21364e1935576b2ca92b0d89f8f5da93b6e45520b6deb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_347be93dbcc1cb096816fb76d1314bd274b4858c1873daf03c9f39fa010194b4 = $this->env->getExtension("native_profiler");
        $__internal_347be93dbcc1cb096816fb76d1314bd274b4858c1873daf03c9f39fa010194b4->enter($__internal_347be93dbcc1cb096816fb76d1314bd274b4858c1873daf03c9f39fa010194b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_347be93dbcc1cb096816fb76d1314bd274b4858c1873daf03c9f39fa010194b4->leave($__internal_347be93dbcc1cb096816fb76d1314bd274b4858c1873daf03c9f39fa010194b4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_294e8961b2ef081b8b03e2b73fb9daa125d5e73f1caa3071344e18cdf9a665b3 = $this->env->getExtension("native_profiler");
        $__internal_294e8961b2ef081b8b03e2b73fb9daa125d5e73f1caa3071344e18cdf9a665b3->enter($__internal_294e8961b2ef081b8b03e2b73fb9daa125d5e73f1caa3071344e18cdf9a665b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_294e8961b2ef081b8b03e2b73fb9daa125d5e73f1caa3071344e18cdf9a665b3->leave($__internal_294e8961b2ef081b8b03e2b73fb9daa125d5e73f1caa3071344e18cdf9a665b3_prof);

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
