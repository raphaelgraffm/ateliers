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
        $__internal_7c58d5775cb661ed090879fd41f15ce91507e07b3dc1b1f6e496fa44e4d9e624 = $this->env->getExtension("native_profiler");
        $__internal_7c58d5775cb661ed090879fd41f15ce91507e07b3dc1b1f6e496fa44e4d9e624->enter($__internal_7c58d5775cb661ed090879fd41f15ce91507e07b3dc1b1f6e496fa44e4d9e624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c58d5775cb661ed090879fd41f15ce91507e07b3dc1b1f6e496fa44e4d9e624->leave($__internal_7c58d5775cb661ed090879fd41f15ce91507e07b3dc1b1f6e496fa44e4d9e624_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_78277fd59774129a46ce82f36f93d2d754879b6376cf428ff3b1a24192740081 = $this->env->getExtension("native_profiler");
        $__internal_78277fd59774129a46ce82f36f93d2d754879b6376cf428ff3b1a24192740081->enter($__internal_78277fd59774129a46ce82f36f93d2d754879b6376cf428ff3b1a24192740081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_78277fd59774129a46ce82f36f93d2d754879b6376cf428ff3b1a24192740081->leave($__internal_78277fd59774129a46ce82f36f93d2d754879b6376cf428ff3b1a24192740081_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a935ec8f9f876f4c5a5887d562412050f81f8c390d79aa92a0495188613efaf6 = $this->env->getExtension("native_profiler");
        $__internal_a935ec8f9f876f4c5a5887d562412050f81f8c390d79aa92a0495188613efaf6->enter($__internal_a935ec8f9f876f4c5a5887d562412050f81f8c390d79aa92a0495188613efaf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a935ec8f9f876f4c5a5887d562412050f81f8c390d79aa92a0495188613efaf6->leave($__internal_a935ec8f9f876f4c5a5887d562412050f81f8c390d79aa92a0495188613efaf6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f27536a32b0bff8bbe958c77dfea761e1ad4474161f285ea5c223a9374a00244 = $this->env->getExtension("native_profiler");
        $__internal_f27536a32b0bff8bbe958c77dfea761e1ad4474161f285ea5c223a9374a00244->enter($__internal_f27536a32b0bff8bbe958c77dfea761e1ad4474161f285ea5c223a9374a00244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f27536a32b0bff8bbe958c77dfea761e1ad4474161f285ea5c223a9374a00244->leave($__internal_f27536a32b0bff8bbe958c77dfea761e1ad4474161f285ea5c223a9374a00244_prof);

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
