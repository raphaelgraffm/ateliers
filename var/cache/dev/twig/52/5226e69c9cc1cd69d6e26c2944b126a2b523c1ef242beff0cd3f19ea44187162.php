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
        $__internal_b0e06f02478a0844467ebcddfd19f0f159122964f80c2ceb04118d6ad400e34f = $this->env->getExtension("native_profiler");
        $__internal_b0e06f02478a0844467ebcddfd19f0f159122964f80c2ceb04118d6ad400e34f->enter($__internal_b0e06f02478a0844467ebcddfd19f0f159122964f80c2ceb04118d6ad400e34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0e06f02478a0844467ebcddfd19f0f159122964f80c2ceb04118d6ad400e34f->leave($__internal_b0e06f02478a0844467ebcddfd19f0f159122964f80c2ceb04118d6ad400e34f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_df39ab0b7bb1b45950cbd904f21fca8a6ba5066b48d8f0b4b80a5f009a0fa2be = $this->env->getExtension("native_profiler");
        $__internal_df39ab0b7bb1b45950cbd904f21fca8a6ba5066b48d8f0b4b80a5f009a0fa2be->enter($__internal_df39ab0b7bb1b45950cbd904f21fca8a6ba5066b48d8f0b4b80a5f009a0fa2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_df39ab0b7bb1b45950cbd904f21fca8a6ba5066b48d8f0b4b80a5f009a0fa2be->leave($__internal_df39ab0b7bb1b45950cbd904f21fca8a6ba5066b48d8f0b4b80a5f009a0fa2be_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eaa4a7a9cf93a77b5cfebd1f9ec8bb01ada01561c3176c85f60c51b07f9f4202 = $this->env->getExtension("native_profiler");
        $__internal_eaa4a7a9cf93a77b5cfebd1f9ec8bb01ada01561c3176c85f60c51b07f9f4202->enter($__internal_eaa4a7a9cf93a77b5cfebd1f9ec8bb01ada01561c3176c85f60c51b07f9f4202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eaa4a7a9cf93a77b5cfebd1f9ec8bb01ada01561c3176c85f60c51b07f9f4202->leave($__internal_eaa4a7a9cf93a77b5cfebd1f9ec8bb01ada01561c3176c85f60c51b07f9f4202_prof);

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
