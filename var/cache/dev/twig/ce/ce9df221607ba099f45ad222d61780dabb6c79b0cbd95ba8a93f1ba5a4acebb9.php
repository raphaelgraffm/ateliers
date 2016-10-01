<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c7e1b5383caebf5b38c4deb9e4a04055b43169f5478f0190a696fb2eed4f32d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_af25ddb0b3655062b4043d13487461e1b67ba66b0d70863dffa838f6dcb1f5ef = $this->env->getExtension("native_profiler");
        $__internal_af25ddb0b3655062b4043d13487461e1b67ba66b0d70863dffa838f6dcb1f5ef->enter($__internal_af25ddb0b3655062b4043d13487461e1b67ba66b0d70863dffa838f6dcb1f5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af25ddb0b3655062b4043d13487461e1b67ba66b0d70863dffa838f6dcb1f5ef->leave($__internal_af25ddb0b3655062b4043d13487461e1b67ba66b0d70863dffa838f6dcb1f5ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_11b39bb66fee4224d29751fb781b87e6fa0264a8a80a7138bd03a2128f2df2e8 = $this->env->getExtension("native_profiler");
        $__internal_11b39bb66fee4224d29751fb781b87e6fa0264a8a80a7138bd03a2128f2df2e8->enter($__internal_11b39bb66fee4224d29751fb781b87e6fa0264a8a80a7138bd03a2128f2df2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_11b39bb66fee4224d29751fb781b87e6fa0264a8a80a7138bd03a2128f2df2e8->leave($__internal_11b39bb66fee4224d29751fb781b87e6fa0264a8a80a7138bd03a2128f2df2e8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7039bfba2e457ef239badbe5a747df70107bc4707d07c75643ab7ad22395dff7 = $this->env->getExtension("native_profiler");
        $__internal_7039bfba2e457ef239badbe5a747df70107bc4707d07c75643ab7ad22395dff7->enter($__internal_7039bfba2e457ef239badbe5a747df70107bc4707d07c75643ab7ad22395dff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7039bfba2e457ef239badbe5a747df70107bc4707d07c75643ab7ad22395dff7->leave($__internal_7039bfba2e457ef239badbe5a747df70107bc4707d07c75643ab7ad22395dff7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_784f93153df1d08d46691997960fb79b6b2b080d6ef4248a8e372f8d0625e367 = $this->env->getExtension("native_profiler");
        $__internal_784f93153df1d08d46691997960fb79b6b2b080d6ef4248a8e372f8d0625e367->enter($__internal_784f93153df1d08d46691997960fb79b6b2b080d6ef4248a8e372f8d0625e367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_784f93153df1d08d46691997960fb79b6b2b080d6ef4248a8e372f8d0625e367->leave($__internal_784f93153df1d08d46691997960fb79b6b2b080d6ef4248a8e372f8d0625e367_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
