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
        $__internal_a3f658e5e0f4b942cfe45522b95051ff47322406963041dec83dbf6d96c4ce58 = $this->env->getExtension("native_profiler");
        $__internal_a3f658e5e0f4b942cfe45522b95051ff47322406963041dec83dbf6d96c4ce58->enter($__internal_a3f658e5e0f4b942cfe45522b95051ff47322406963041dec83dbf6d96c4ce58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3f658e5e0f4b942cfe45522b95051ff47322406963041dec83dbf6d96c4ce58->leave($__internal_a3f658e5e0f4b942cfe45522b95051ff47322406963041dec83dbf6d96c4ce58_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d2abaa282347a3fe2af596bd2892501101010fdf2543c991ba01e0b7840d392 = $this->env->getExtension("native_profiler");
        $__internal_0d2abaa282347a3fe2af596bd2892501101010fdf2543c991ba01e0b7840d392->enter($__internal_0d2abaa282347a3fe2af596bd2892501101010fdf2543c991ba01e0b7840d392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0d2abaa282347a3fe2af596bd2892501101010fdf2543c991ba01e0b7840d392->leave($__internal_0d2abaa282347a3fe2af596bd2892501101010fdf2543c991ba01e0b7840d392_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_16685aabeaeed1e1c97ce04629587f6263779d156dc612ab1e47b87b40800561 = $this->env->getExtension("native_profiler");
        $__internal_16685aabeaeed1e1c97ce04629587f6263779d156dc612ab1e47b87b40800561->enter($__internal_16685aabeaeed1e1c97ce04629587f6263779d156dc612ab1e47b87b40800561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_16685aabeaeed1e1c97ce04629587f6263779d156dc612ab1e47b87b40800561->leave($__internal_16685aabeaeed1e1c97ce04629587f6263779d156dc612ab1e47b87b40800561_prof);

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
