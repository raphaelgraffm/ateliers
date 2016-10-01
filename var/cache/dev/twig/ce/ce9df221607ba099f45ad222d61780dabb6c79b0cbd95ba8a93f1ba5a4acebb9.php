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
        $__internal_abacb069ebf97535925af00018f76a5f14776e854d473316e9f06b1c65619713 = $this->env->getExtension("native_profiler");
        $__internal_abacb069ebf97535925af00018f76a5f14776e854d473316e9f06b1c65619713->enter($__internal_abacb069ebf97535925af00018f76a5f14776e854d473316e9f06b1c65619713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abacb069ebf97535925af00018f76a5f14776e854d473316e9f06b1c65619713->leave($__internal_abacb069ebf97535925af00018f76a5f14776e854d473316e9f06b1c65619713_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_47d20dcad07d5b48b20b9c79e0996ff975bd2cc9ce14a5b8dc1b6df27dd0eda2 = $this->env->getExtension("native_profiler");
        $__internal_47d20dcad07d5b48b20b9c79e0996ff975bd2cc9ce14a5b8dc1b6df27dd0eda2->enter($__internal_47d20dcad07d5b48b20b9c79e0996ff975bd2cc9ce14a5b8dc1b6df27dd0eda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_47d20dcad07d5b48b20b9c79e0996ff975bd2cc9ce14a5b8dc1b6df27dd0eda2->leave($__internal_47d20dcad07d5b48b20b9c79e0996ff975bd2cc9ce14a5b8dc1b6df27dd0eda2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f02671f782af1e6f35d672e4f8cea328d9179598f73f90032784c5505954aa19 = $this->env->getExtension("native_profiler");
        $__internal_f02671f782af1e6f35d672e4f8cea328d9179598f73f90032784c5505954aa19->enter($__internal_f02671f782af1e6f35d672e4f8cea328d9179598f73f90032784c5505954aa19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f02671f782af1e6f35d672e4f8cea328d9179598f73f90032784c5505954aa19->leave($__internal_f02671f782af1e6f35d672e4f8cea328d9179598f73f90032784c5505954aa19_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3774afc6f3f0f933c0bb20da30b4f7b4b1026c4b446b9484193960c278fea1a = $this->env->getExtension("native_profiler");
        $__internal_f3774afc6f3f0f933c0bb20da30b4f7b4b1026c4b446b9484193960c278fea1a->enter($__internal_f3774afc6f3f0f933c0bb20da30b4f7b4b1026c4b446b9484193960c278fea1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f3774afc6f3f0f933c0bb20da30b4f7b4b1026c4b446b9484193960c278fea1a->leave($__internal_f3774afc6f3f0f933c0bb20da30b4f7b4b1026c4b446b9484193960c278fea1a_prof);

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
