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
        $__internal_b87688caaa803915e2c343f35f38462aea0d09933c37de7c0ae9f3f55a97d2fd = $this->env->getExtension("native_profiler");
        $__internal_b87688caaa803915e2c343f35f38462aea0d09933c37de7c0ae9f3f55a97d2fd->enter($__internal_b87688caaa803915e2c343f35f38462aea0d09933c37de7c0ae9f3f55a97d2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b87688caaa803915e2c343f35f38462aea0d09933c37de7c0ae9f3f55a97d2fd->leave($__internal_b87688caaa803915e2c343f35f38462aea0d09933c37de7c0ae9f3f55a97d2fd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c508393e84135352324f18448c71b3ad1b3317eb24de6e9f2de9fbb08b4efe4 = $this->env->getExtension("native_profiler");
        $__internal_5c508393e84135352324f18448c71b3ad1b3317eb24de6e9f2de9fbb08b4efe4->enter($__internal_5c508393e84135352324f18448c71b3ad1b3317eb24de6e9f2de9fbb08b4efe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5c508393e84135352324f18448c71b3ad1b3317eb24de6e9f2de9fbb08b4efe4->leave($__internal_5c508393e84135352324f18448c71b3ad1b3317eb24de6e9f2de9fbb08b4efe4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_97c0d9da2cdb48a920483feac516289e5843dc8272fece6c1299899da3d94dbe = $this->env->getExtension("native_profiler");
        $__internal_97c0d9da2cdb48a920483feac516289e5843dc8272fece6c1299899da3d94dbe->enter($__internal_97c0d9da2cdb48a920483feac516289e5843dc8272fece6c1299899da3d94dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_97c0d9da2cdb48a920483feac516289e5843dc8272fece6c1299899da3d94dbe->leave($__internal_97c0d9da2cdb48a920483feac516289e5843dc8272fece6c1299899da3d94dbe_prof);

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
