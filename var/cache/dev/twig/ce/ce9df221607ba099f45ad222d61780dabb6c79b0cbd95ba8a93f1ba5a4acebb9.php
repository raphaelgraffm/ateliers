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
        $__internal_9774c00eb0cfd8f4c76438d1af1b751d420f79eaa25ac6667b1a90f236df83e0 = $this->env->getExtension("native_profiler");
        $__internal_9774c00eb0cfd8f4c76438d1af1b751d420f79eaa25ac6667b1a90f236df83e0->enter($__internal_9774c00eb0cfd8f4c76438d1af1b751d420f79eaa25ac6667b1a90f236df83e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9774c00eb0cfd8f4c76438d1af1b751d420f79eaa25ac6667b1a90f236df83e0->leave($__internal_9774c00eb0cfd8f4c76438d1af1b751d420f79eaa25ac6667b1a90f236df83e0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b3ac25c61ba41de1ae30dfa6f5f5c2464ab0f2cce20c003470e7fd2eca090e9b = $this->env->getExtension("native_profiler");
        $__internal_b3ac25c61ba41de1ae30dfa6f5f5c2464ab0f2cce20c003470e7fd2eca090e9b->enter($__internal_b3ac25c61ba41de1ae30dfa6f5f5c2464ab0f2cce20c003470e7fd2eca090e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b3ac25c61ba41de1ae30dfa6f5f5c2464ab0f2cce20c003470e7fd2eca090e9b->leave($__internal_b3ac25c61ba41de1ae30dfa6f5f5c2464ab0f2cce20c003470e7fd2eca090e9b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c948a62d7ef556210a4e9540db97889f49a32966b41808d340ab2886e1779dcd = $this->env->getExtension("native_profiler");
        $__internal_c948a62d7ef556210a4e9540db97889f49a32966b41808d340ab2886e1779dcd->enter($__internal_c948a62d7ef556210a4e9540db97889f49a32966b41808d340ab2886e1779dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c948a62d7ef556210a4e9540db97889f49a32966b41808d340ab2886e1779dcd->leave($__internal_c948a62d7ef556210a4e9540db97889f49a32966b41808d340ab2886e1779dcd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f94333e8b03575f70e5b41a4cd88a411db5c9c58b0e90765cc9256df35b72ebe = $this->env->getExtension("native_profiler");
        $__internal_f94333e8b03575f70e5b41a4cd88a411db5c9c58b0e90765cc9256df35b72ebe->enter($__internal_f94333e8b03575f70e5b41a4cd88a411db5c9c58b0e90765cc9256df35b72ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f94333e8b03575f70e5b41a4cd88a411db5c9c58b0e90765cc9256df35b72ebe->leave($__internal_f94333e8b03575f70e5b41a4cd88a411db5c9c58b0e90765cc9256df35b72ebe_prof);

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
