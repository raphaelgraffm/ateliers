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
        $__internal_bb093b1dd6e58efaa9a52d8fdc0374c331ef2b71c0f6631f60e58ea33d935910 = $this->env->getExtension("native_profiler");
        $__internal_bb093b1dd6e58efaa9a52d8fdc0374c331ef2b71c0f6631f60e58ea33d935910->enter($__internal_bb093b1dd6e58efaa9a52d8fdc0374c331ef2b71c0f6631f60e58ea33d935910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb093b1dd6e58efaa9a52d8fdc0374c331ef2b71c0f6631f60e58ea33d935910->leave($__internal_bb093b1dd6e58efaa9a52d8fdc0374c331ef2b71c0f6631f60e58ea33d935910_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8901c4d7aab04d539227fda00b75f34081cd6b7628507547cafcff99acd01b8a = $this->env->getExtension("native_profiler");
        $__internal_8901c4d7aab04d539227fda00b75f34081cd6b7628507547cafcff99acd01b8a->enter($__internal_8901c4d7aab04d539227fda00b75f34081cd6b7628507547cafcff99acd01b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8901c4d7aab04d539227fda00b75f34081cd6b7628507547cafcff99acd01b8a->leave($__internal_8901c4d7aab04d539227fda00b75f34081cd6b7628507547cafcff99acd01b8a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee9f2d3f47e60333294679409e3d00755c4200f9ef596f85a8f1ad7663b9fa0d = $this->env->getExtension("native_profiler");
        $__internal_ee9f2d3f47e60333294679409e3d00755c4200f9ef596f85a8f1ad7663b9fa0d->enter($__internal_ee9f2d3f47e60333294679409e3d00755c4200f9ef596f85a8f1ad7663b9fa0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ee9f2d3f47e60333294679409e3d00755c4200f9ef596f85a8f1ad7663b9fa0d->leave($__internal_ee9f2d3f47e60333294679409e3d00755c4200f9ef596f85a8f1ad7663b9fa0d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e37de585e33aa4a60e0df9a44c4fe26af9b07ac66647a15921aec6f265030cf = $this->env->getExtension("native_profiler");
        $__internal_0e37de585e33aa4a60e0df9a44c4fe26af9b07ac66647a15921aec6f265030cf->enter($__internal_0e37de585e33aa4a60e0df9a44c4fe26af9b07ac66647a15921aec6f265030cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0e37de585e33aa4a60e0df9a44c4fe26af9b07ac66647a15921aec6f265030cf->leave($__internal_0e37de585e33aa4a60e0df9a44c4fe26af9b07ac66647a15921aec6f265030cf_prof);

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
