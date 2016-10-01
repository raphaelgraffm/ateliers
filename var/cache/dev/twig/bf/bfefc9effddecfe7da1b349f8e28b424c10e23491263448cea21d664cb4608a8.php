<?php

/* ::base.html.twig */
class __TwigTemplate_46fb87cdfe8623696774181b99c2a31c75f1b51d74dbe7a313c9f383e3ba38d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_648328799584c4f410a194baa9d69f9129b0bae3229e71f9c80b5c8dbe4110c0 = $this->env->getExtension("native_profiler");
        $__internal_648328799584c4f410a194baa9d69f9129b0bae3229e71f9c80b5c8dbe4110c0->enter($__internal_648328799584c4f410a194baa9d69f9129b0bae3229e71f9c80b5c8dbe4110c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_648328799584c4f410a194baa9d69f9129b0bae3229e71f9c80b5c8dbe4110c0->leave($__internal_648328799584c4f410a194baa9d69f9129b0bae3229e71f9c80b5c8dbe4110c0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb4b2e21b5a88dfc1f7231589c92a2eb879ca96c799927d7d038c0d8169b0d51 = $this->env->getExtension("native_profiler");
        $__internal_eb4b2e21b5a88dfc1f7231589c92a2eb879ca96c799927d7d038c0d8169b0d51->enter($__internal_eb4b2e21b5a88dfc1f7231589c92a2eb879ca96c799927d7d038c0d8169b0d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_eb4b2e21b5a88dfc1f7231589c92a2eb879ca96c799927d7d038c0d8169b0d51->leave($__internal_eb4b2e21b5a88dfc1f7231589c92a2eb879ca96c799927d7d038c0d8169b0d51_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d8bc28f630c17c9f10b389a8a12a0e913f2bcca8144b8e3399a3ab899fd75810 = $this->env->getExtension("native_profiler");
        $__internal_d8bc28f630c17c9f10b389a8a12a0e913f2bcca8144b8e3399a3ab899fd75810->enter($__internal_d8bc28f630c17c9f10b389a8a12a0e913f2bcca8144b8e3399a3ab899fd75810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d8bc28f630c17c9f10b389a8a12a0e913f2bcca8144b8e3399a3ab899fd75810->leave($__internal_d8bc28f630c17c9f10b389a8a12a0e913f2bcca8144b8e3399a3ab899fd75810_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_248170670c96aa3c52286a48dabd2e13debaea39356fa88254f883a4bbaffe17 = $this->env->getExtension("native_profiler");
        $__internal_248170670c96aa3c52286a48dabd2e13debaea39356fa88254f883a4bbaffe17->enter($__internal_248170670c96aa3c52286a48dabd2e13debaea39356fa88254f883a4bbaffe17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_248170670c96aa3c52286a48dabd2e13debaea39356fa88254f883a4bbaffe17->leave($__internal_248170670c96aa3c52286a48dabd2e13debaea39356fa88254f883a4bbaffe17_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e3e757afbdce74f3fd4d21aa5c34ec93728d2cef4efccb84ca2c23a8a9f34fc6 = $this->env->getExtension("native_profiler");
        $__internal_e3e757afbdce74f3fd4d21aa5c34ec93728d2cef4efccb84ca2c23a8a9f34fc6->enter($__internal_e3e757afbdce74f3fd4d21aa5c34ec93728d2cef4efccb84ca2c23a8a9f34fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e3e757afbdce74f3fd4d21aa5c34ec93728d2cef4efccb84ca2c23a8a9f34fc6->leave($__internal_e3e757afbdce74f3fd4d21aa5c34ec93728d2cef4efccb84ca2c23a8a9f34fc6_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
