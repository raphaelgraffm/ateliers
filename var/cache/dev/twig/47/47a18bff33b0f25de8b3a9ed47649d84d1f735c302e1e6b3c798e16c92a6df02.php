<?php

/* ::base.html.twig */
class __TwigTemplate_47bffe403e5ac0425e289bd0361c1bbe8061189a73031dfc307626eb373e23b8 extends Twig_Template
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
        $__internal_ef2dff84291451a779f4817b98e65b66b3ee1a08d6accffbf9ac2dfa89eeddd1 = $this->env->getExtension("native_profiler");
        $__internal_ef2dff84291451a779f4817b98e65b66b3ee1a08d6accffbf9ac2dfa89eeddd1->enter($__internal_ef2dff84291451a779f4817b98e65b66b3ee1a08d6accffbf9ac2dfa89eeddd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_ef2dff84291451a779f4817b98e65b66b3ee1a08d6accffbf9ac2dfa89eeddd1->leave($__internal_ef2dff84291451a779f4817b98e65b66b3ee1a08d6accffbf9ac2dfa89eeddd1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa60fd2113372f60164dbbc53f08e3689fd5641ded3a6c45722c9d20706dc92a = $this->env->getExtension("native_profiler");
        $__internal_fa60fd2113372f60164dbbc53f08e3689fd5641ded3a6c45722c9d20706dc92a->enter($__internal_fa60fd2113372f60164dbbc53f08e3689fd5641ded3a6c45722c9d20706dc92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fa60fd2113372f60164dbbc53f08e3689fd5641ded3a6c45722c9d20706dc92a->leave($__internal_fa60fd2113372f60164dbbc53f08e3689fd5641ded3a6c45722c9d20706dc92a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_21d71d1b87a352660f39856a51579ef8b544cf948f5812e27f220e52af6b511a = $this->env->getExtension("native_profiler");
        $__internal_21d71d1b87a352660f39856a51579ef8b544cf948f5812e27f220e52af6b511a->enter($__internal_21d71d1b87a352660f39856a51579ef8b544cf948f5812e27f220e52af6b511a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_21d71d1b87a352660f39856a51579ef8b544cf948f5812e27f220e52af6b511a->leave($__internal_21d71d1b87a352660f39856a51579ef8b544cf948f5812e27f220e52af6b511a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f9abed16486667339c8d02c421a1f353ba2b384020b3e26059fbe5e4a8af4f4 = $this->env->getExtension("native_profiler");
        $__internal_2f9abed16486667339c8d02c421a1f353ba2b384020b3e26059fbe5e4a8af4f4->enter($__internal_2f9abed16486667339c8d02c421a1f353ba2b384020b3e26059fbe5e4a8af4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2f9abed16486667339c8d02c421a1f353ba2b384020b3e26059fbe5e4a8af4f4->leave($__internal_2f9abed16486667339c8d02c421a1f353ba2b384020b3e26059fbe5e4a8af4f4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2fe1883075c849d021fea8e0558d55a0e4b5cc3308813b4845457e13839cf3b6 = $this->env->getExtension("native_profiler");
        $__internal_2fe1883075c849d021fea8e0558d55a0e4b5cc3308813b4845457e13839cf3b6->enter($__internal_2fe1883075c849d021fea8e0558d55a0e4b5cc3308813b4845457e13839cf3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2fe1883075c849d021fea8e0558d55a0e4b5cc3308813b4845457e13839cf3b6->leave($__internal_2fe1883075c849d021fea8e0558d55a0e4b5cc3308813b4845457e13839cf3b6_prof);

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
