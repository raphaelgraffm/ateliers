<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e5abfa1d65fe2bcf786e76b88232e3b4a3f608f5f7879d734c0038fea9a8f43c extends Twig_Template
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
        $__internal_b237588741f2c236916ebf8f799e6e2da68c3e2fbcabacfbc135f6d148785092 = $this->env->getExtension("native_profiler");
        $__internal_b237588741f2c236916ebf8f799e6e2da68c3e2fbcabacfbc135f6d148785092->enter($__internal_b237588741f2c236916ebf8f799e6e2da68c3e2fbcabacfbc135f6d148785092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b237588741f2c236916ebf8f799e6e2da68c3e2fbcabacfbc135f6d148785092->leave($__internal_b237588741f2c236916ebf8f799e6e2da68c3e2fbcabacfbc135f6d148785092_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec8cd7150acf3f6591ca2348d02065c2929d1e4b5e1e07b30a4e39e8e07b6c5b = $this->env->getExtension("native_profiler");
        $__internal_ec8cd7150acf3f6591ca2348d02065c2929d1e4b5e1e07b30a4e39e8e07b6c5b->enter($__internal_ec8cd7150acf3f6591ca2348d02065c2929d1e4b5e1e07b30a4e39e8e07b6c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ec8cd7150acf3f6591ca2348d02065c2929d1e4b5e1e07b30a4e39e8e07b6c5b->leave($__internal_ec8cd7150acf3f6591ca2348d02065c2929d1e4b5e1e07b30a4e39e8e07b6c5b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ba9e7aa467e9331b7924695f047d173ab5e085c97828020d3164ee223bd314d = $this->env->getExtension("native_profiler");
        $__internal_8ba9e7aa467e9331b7924695f047d173ab5e085c97828020d3164ee223bd314d->enter($__internal_8ba9e7aa467e9331b7924695f047d173ab5e085c97828020d3164ee223bd314d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8ba9e7aa467e9331b7924695f047d173ab5e085c97828020d3164ee223bd314d->leave($__internal_8ba9e7aa467e9331b7924695f047d173ab5e085c97828020d3164ee223bd314d_prof);

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
