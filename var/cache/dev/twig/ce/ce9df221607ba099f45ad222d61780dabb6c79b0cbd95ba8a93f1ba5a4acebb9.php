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
        $__internal_382421e55a841ea8860941ed61f6a3a0242f04b03f29ab1e65d75f4febe4bc82 = $this->env->getExtension("native_profiler");
        $__internal_382421e55a841ea8860941ed61f6a3a0242f04b03f29ab1e65d75f4febe4bc82->enter($__internal_382421e55a841ea8860941ed61f6a3a0242f04b03f29ab1e65d75f4febe4bc82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_382421e55a841ea8860941ed61f6a3a0242f04b03f29ab1e65d75f4febe4bc82->leave($__internal_382421e55a841ea8860941ed61f6a3a0242f04b03f29ab1e65d75f4febe4bc82_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c74b2578f582fbf1b1f0864cf2c083f5bfc5e38f8184eae6d7666cae2275d77a = $this->env->getExtension("native_profiler");
        $__internal_c74b2578f582fbf1b1f0864cf2c083f5bfc5e38f8184eae6d7666cae2275d77a->enter($__internal_c74b2578f582fbf1b1f0864cf2c083f5bfc5e38f8184eae6d7666cae2275d77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c74b2578f582fbf1b1f0864cf2c083f5bfc5e38f8184eae6d7666cae2275d77a->leave($__internal_c74b2578f582fbf1b1f0864cf2c083f5bfc5e38f8184eae6d7666cae2275d77a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4b11d53240a6a1f69d28de160acd9817d14b4f388846543a6b2e04f601e4f2a = $this->env->getExtension("native_profiler");
        $__internal_f4b11d53240a6a1f69d28de160acd9817d14b4f388846543a6b2e04f601e4f2a->enter($__internal_f4b11d53240a6a1f69d28de160acd9817d14b4f388846543a6b2e04f601e4f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f4b11d53240a6a1f69d28de160acd9817d14b4f388846543a6b2e04f601e4f2a->leave($__internal_f4b11d53240a6a1f69d28de160acd9817d14b4f388846543a6b2e04f601e4f2a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f02a69d88dbb9092c5b412e4d1d9286e8f5214e0c8b283356ca62c155cea339 = $this->env->getExtension("native_profiler");
        $__internal_9f02a69d88dbb9092c5b412e4d1d9286e8f5214e0c8b283356ca62c155cea339->enter($__internal_9f02a69d88dbb9092c5b412e4d1d9286e8f5214e0c8b283356ca62c155cea339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9f02a69d88dbb9092c5b412e4d1d9286e8f5214e0c8b283356ca62c155cea339->leave($__internal_9f02a69d88dbb9092c5b412e4d1d9286e8f5214e0c8b283356ca62c155cea339_prof);

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
