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
        $__internal_e26c82d55f9d55e89c6c6d8218136159f06c6501a15debde46a1a4379c7be6fb = $this->env->getExtension("native_profiler");
        $__internal_e26c82d55f9d55e89c6c6d8218136159f06c6501a15debde46a1a4379c7be6fb->enter($__internal_e26c82d55f9d55e89c6c6d8218136159f06c6501a15debde46a1a4379c7be6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e26c82d55f9d55e89c6c6d8218136159f06c6501a15debde46a1a4379c7be6fb->leave($__internal_e26c82d55f9d55e89c6c6d8218136159f06c6501a15debde46a1a4379c7be6fb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_05380dcd84c1beca1ea95f6f2bcd81fd3cd91f8576e1f91731aaa173ac97f488 = $this->env->getExtension("native_profiler");
        $__internal_05380dcd84c1beca1ea95f6f2bcd81fd3cd91f8576e1f91731aaa173ac97f488->enter($__internal_05380dcd84c1beca1ea95f6f2bcd81fd3cd91f8576e1f91731aaa173ac97f488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_05380dcd84c1beca1ea95f6f2bcd81fd3cd91f8576e1f91731aaa173ac97f488->leave($__internal_05380dcd84c1beca1ea95f6f2bcd81fd3cd91f8576e1f91731aaa173ac97f488_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_811284504e0c39530f03a8527d19cad287670451668359ac11452fec373f3cee = $this->env->getExtension("native_profiler");
        $__internal_811284504e0c39530f03a8527d19cad287670451668359ac11452fec373f3cee->enter($__internal_811284504e0c39530f03a8527d19cad287670451668359ac11452fec373f3cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_811284504e0c39530f03a8527d19cad287670451668359ac11452fec373f3cee->leave($__internal_811284504e0c39530f03a8527d19cad287670451668359ac11452fec373f3cee_prof);

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
