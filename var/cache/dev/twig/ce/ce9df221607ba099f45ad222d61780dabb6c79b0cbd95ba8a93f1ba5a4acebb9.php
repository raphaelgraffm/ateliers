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
        $__internal_64bf2912fd3bfc9a180eb0d22e3585e377e2edb8c94a0d62a2d01dd6414a0ec3 = $this->env->getExtension("native_profiler");
        $__internal_64bf2912fd3bfc9a180eb0d22e3585e377e2edb8c94a0d62a2d01dd6414a0ec3->enter($__internal_64bf2912fd3bfc9a180eb0d22e3585e377e2edb8c94a0d62a2d01dd6414a0ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64bf2912fd3bfc9a180eb0d22e3585e377e2edb8c94a0d62a2d01dd6414a0ec3->leave($__internal_64bf2912fd3bfc9a180eb0d22e3585e377e2edb8c94a0d62a2d01dd6414a0ec3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_44e989ce7153fc2aa52c5624b92703193b78b9276c1ee438269d69c36615ccdb = $this->env->getExtension("native_profiler");
        $__internal_44e989ce7153fc2aa52c5624b92703193b78b9276c1ee438269d69c36615ccdb->enter($__internal_44e989ce7153fc2aa52c5624b92703193b78b9276c1ee438269d69c36615ccdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_44e989ce7153fc2aa52c5624b92703193b78b9276c1ee438269d69c36615ccdb->leave($__internal_44e989ce7153fc2aa52c5624b92703193b78b9276c1ee438269d69c36615ccdb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e4617092c8bd6abc0193fe981ee41e6db8ef486f5a18b07728d95a930311cc4 = $this->env->getExtension("native_profiler");
        $__internal_9e4617092c8bd6abc0193fe981ee41e6db8ef486f5a18b07728d95a930311cc4->enter($__internal_9e4617092c8bd6abc0193fe981ee41e6db8ef486f5a18b07728d95a930311cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9e4617092c8bd6abc0193fe981ee41e6db8ef486f5a18b07728d95a930311cc4->leave($__internal_9e4617092c8bd6abc0193fe981ee41e6db8ef486f5a18b07728d95a930311cc4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa00b7a56b50dbef550793547b003fea8f0b3256372f7d6017ad5119f8fd8e83 = $this->env->getExtension("native_profiler");
        $__internal_fa00b7a56b50dbef550793547b003fea8f0b3256372f7d6017ad5119f8fd8e83->enter($__internal_fa00b7a56b50dbef550793547b003fea8f0b3256372f7d6017ad5119f8fd8e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_fa00b7a56b50dbef550793547b003fea8f0b3256372f7d6017ad5119f8fd8e83->leave($__internal_fa00b7a56b50dbef550793547b003fea8f0b3256372f7d6017ad5119f8fd8e83_prof);

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
