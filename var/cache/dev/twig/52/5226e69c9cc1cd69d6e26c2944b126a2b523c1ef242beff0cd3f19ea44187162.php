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
        $__internal_1be60b779d88235c8355838987e59b34065dd1db5da46951de728e2051a36ce5 = $this->env->getExtension("native_profiler");
        $__internal_1be60b779d88235c8355838987e59b34065dd1db5da46951de728e2051a36ce5->enter($__internal_1be60b779d88235c8355838987e59b34065dd1db5da46951de728e2051a36ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1be60b779d88235c8355838987e59b34065dd1db5da46951de728e2051a36ce5->leave($__internal_1be60b779d88235c8355838987e59b34065dd1db5da46951de728e2051a36ce5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d36bb421c9ed59cfb18692c12c78ec932fbd7cb77392dddbc9645dec46a5172 = $this->env->getExtension("native_profiler");
        $__internal_8d36bb421c9ed59cfb18692c12c78ec932fbd7cb77392dddbc9645dec46a5172->enter($__internal_8d36bb421c9ed59cfb18692c12c78ec932fbd7cb77392dddbc9645dec46a5172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8d36bb421c9ed59cfb18692c12c78ec932fbd7cb77392dddbc9645dec46a5172->leave($__internal_8d36bb421c9ed59cfb18692c12c78ec932fbd7cb77392dddbc9645dec46a5172_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c313391ec5504dee7352cedebde8ebc8390a98a7c368872259d58912fb9435c7 = $this->env->getExtension("native_profiler");
        $__internal_c313391ec5504dee7352cedebde8ebc8390a98a7c368872259d58912fb9435c7->enter($__internal_c313391ec5504dee7352cedebde8ebc8390a98a7c368872259d58912fb9435c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c313391ec5504dee7352cedebde8ebc8390a98a7c368872259d58912fb9435c7->leave($__internal_c313391ec5504dee7352cedebde8ebc8390a98a7c368872259d58912fb9435c7_prof);

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
