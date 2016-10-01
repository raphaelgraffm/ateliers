<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d7bb9649a42b6d0e0247470d9db5606f802b466af99e31a4d073abc78cf74f26 extends Twig_Template
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
        $__internal_7ddbb0bd2caa846cecb9bf9032659e46a904823c75880316b5564565b3b1b9d4 = $this->env->getExtension("native_profiler");
        $__internal_7ddbb0bd2caa846cecb9bf9032659e46a904823c75880316b5564565b3b1b9d4->enter($__internal_7ddbb0bd2caa846cecb9bf9032659e46a904823c75880316b5564565b3b1b9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ddbb0bd2caa846cecb9bf9032659e46a904823c75880316b5564565b3b1b9d4->leave($__internal_7ddbb0bd2caa846cecb9bf9032659e46a904823c75880316b5564565b3b1b9d4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_04292cbc88733378c2b7e84b02c28cbec19da0655304cac61d3ffacaa0be0b14 = $this->env->getExtension("native_profiler");
        $__internal_04292cbc88733378c2b7e84b02c28cbec19da0655304cac61d3ffacaa0be0b14->enter($__internal_04292cbc88733378c2b7e84b02c28cbec19da0655304cac61d3ffacaa0be0b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_04292cbc88733378c2b7e84b02c28cbec19da0655304cac61d3ffacaa0be0b14->leave($__internal_04292cbc88733378c2b7e84b02c28cbec19da0655304cac61d3ffacaa0be0b14_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_31194b9c5055e78868949f4c229dc802f1249a282ae4239eb77cc4cefe86a4a0 = $this->env->getExtension("native_profiler");
        $__internal_31194b9c5055e78868949f4c229dc802f1249a282ae4239eb77cc4cefe86a4a0->enter($__internal_31194b9c5055e78868949f4c229dc802f1249a282ae4239eb77cc4cefe86a4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_31194b9c5055e78868949f4c229dc802f1249a282ae4239eb77cc4cefe86a4a0->leave($__internal_31194b9c5055e78868949f4c229dc802f1249a282ae4239eb77cc4cefe86a4a0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3de7377ed83c7ce9ab7e2b76015b628955de613a4dae03ecfd08dce9ec87dcce = $this->env->getExtension("native_profiler");
        $__internal_3de7377ed83c7ce9ab7e2b76015b628955de613a4dae03ecfd08dce9ec87dcce->enter($__internal_3de7377ed83c7ce9ab7e2b76015b628955de613a4dae03ecfd08dce9ec87dcce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3de7377ed83c7ce9ab7e2b76015b628955de613a4dae03ecfd08dce9ec87dcce->leave($__internal_3de7377ed83c7ce9ab7e2b76015b628955de613a4dae03ecfd08dce9ec87dcce_prof);

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
