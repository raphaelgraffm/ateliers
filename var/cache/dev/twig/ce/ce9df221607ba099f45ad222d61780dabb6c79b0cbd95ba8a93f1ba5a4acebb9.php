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
        $__internal_03d167d6922bb23df21681e65002b88c559954a263945f6504d9a2c1d6e92316 = $this->env->getExtension("native_profiler");
        $__internal_03d167d6922bb23df21681e65002b88c559954a263945f6504d9a2c1d6e92316->enter($__internal_03d167d6922bb23df21681e65002b88c559954a263945f6504d9a2c1d6e92316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03d167d6922bb23df21681e65002b88c559954a263945f6504d9a2c1d6e92316->leave($__internal_03d167d6922bb23df21681e65002b88c559954a263945f6504d9a2c1d6e92316_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1dbdc636e81131a352832fa4f5661ca25891dbbf26d4658b8926d2bffe47fcee = $this->env->getExtension("native_profiler");
        $__internal_1dbdc636e81131a352832fa4f5661ca25891dbbf26d4658b8926d2bffe47fcee->enter($__internal_1dbdc636e81131a352832fa4f5661ca25891dbbf26d4658b8926d2bffe47fcee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1dbdc636e81131a352832fa4f5661ca25891dbbf26d4658b8926d2bffe47fcee->leave($__internal_1dbdc636e81131a352832fa4f5661ca25891dbbf26d4658b8926d2bffe47fcee_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1915e2c1bcd840438deffd6ba9ce18109bb0d221485c443f2d90043353edeeda = $this->env->getExtension("native_profiler");
        $__internal_1915e2c1bcd840438deffd6ba9ce18109bb0d221485c443f2d90043353edeeda->enter($__internal_1915e2c1bcd840438deffd6ba9ce18109bb0d221485c443f2d90043353edeeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1915e2c1bcd840438deffd6ba9ce18109bb0d221485c443f2d90043353edeeda->leave($__internal_1915e2c1bcd840438deffd6ba9ce18109bb0d221485c443f2d90043353edeeda_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_58669cbf905a3f326b45851de113727a2b66eedc334320fa67661633ac0c167b = $this->env->getExtension("native_profiler");
        $__internal_58669cbf905a3f326b45851de113727a2b66eedc334320fa67661633ac0c167b->enter($__internal_58669cbf905a3f326b45851de113727a2b66eedc334320fa67661633ac0c167b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_58669cbf905a3f326b45851de113727a2b66eedc334320fa67661633ac0c167b->leave($__internal_58669cbf905a3f326b45851de113727a2b66eedc334320fa67661633ac0c167b_prof);

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
