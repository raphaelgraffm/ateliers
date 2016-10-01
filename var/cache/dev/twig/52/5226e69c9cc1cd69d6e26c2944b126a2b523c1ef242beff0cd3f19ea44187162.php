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
        $__internal_16ae9422a314f36d8e238e92632a14f170289ce418278712f3c73aec27ee96bb = $this->env->getExtension("native_profiler");
        $__internal_16ae9422a314f36d8e238e92632a14f170289ce418278712f3c73aec27ee96bb->enter($__internal_16ae9422a314f36d8e238e92632a14f170289ce418278712f3c73aec27ee96bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16ae9422a314f36d8e238e92632a14f170289ce418278712f3c73aec27ee96bb->leave($__internal_16ae9422a314f36d8e238e92632a14f170289ce418278712f3c73aec27ee96bb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a79b570702f753e717b34866ce1821d4367ff7df9cb110c6bdcda5a63cb3d8c = $this->env->getExtension("native_profiler");
        $__internal_4a79b570702f753e717b34866ce1821d4367ff7df9cb110c6bdcda5a63cb3d8c->enter($__internal_4a79b570702f753e717b34866ce1821d4367ff7df9cb110c6bdcda5a63cb3d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4a79b570702f753e717b34866ce1821d4367ff7df9cb110c6bdcda5a63cb3d8c->leave($__internal_4a79b570702f753e717b34866ce1821d4367ff7df9cb110c6bdcda5a63cb3d8c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b35b007915bec829a2f406a068b04e1ff3ca3bd9bb60aebbfb639552f9757cb = $this->env->getExtension("native_profiler");
        $__internal_8b35b007915bec829a2f406a068b04e1ff3ca3bd9bb60aebbfb639552f9757cb->enter($__internal_8b35b007915bec829a2f406a068b04e1ff3ca3bd9bb60aebbfb639552f9757cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8b35b007915bec829a2f406a068b04e1ff3ca3bd9bb60aebbfb639552f9757cb->leave($__internal_8b35b007915bec829a2f406a068b04e1ff3ca3bd9bb60aebbfb639552f9757cb_prof);

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
