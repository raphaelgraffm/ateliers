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
        $__internal_da9ebb120021d9373656f0afa4f5950fe37de5fc9b53cc411f20cf0a8782d694 = $this->env->getExtension("native_profiler");
        $__internal_da9ebb120021d9373656f0afa4f5950fe37de5fc9b53cc411f20cf0a8782d694->enter($__internal_da9ebb120021d9373656f0afa4f5950fe37de5fc9b53cc411f20cf0a8782d694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_da9ebb120021d9373656f0afa4f5950fe37de5fc9b53cc411f20cf0a8782d694->leave($__internal_da9ebb120021d9373656f0afa4f5950fe37de5fc9b53cc411f20cf0a8782d694_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7a9e9685ceaddfad2565b4271f92b57e69e56a761450569fd908b6f4168f432 = $this->env->getExtension("native_profiler");
        $__internal_b7a9e9685ceaddfad2565b4271f92b57e69e56a761450569fd908b6f4168f432->enter($__internal_b7a9e9685ceaddfad2565b4271f92b57e69e56a761450569fd908b6f4168f432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b7a9e9685ceaddfad2565b4271f92b57e69e56a761450569fd908b6f4168f432->leave($__internal_b7a9e9685ceaddfad2565b4271f92b57e69e56a761450569fd908b6f4168f432_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eee16d1522653868ac554351746800e274cfea23a100a23c2fdcba2868552aab = $this->env->getExtension("native_profiler");
        $__internal_eee16d1522653868ac554351746800e274cfea23a100a23c2fdcba2868552aab->enter($__internal_eee16d1522653868ac554351746800e274cfea23a100a23c2fdcba2868552aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_eee16d1522653868ac554351746800e274cfea23a100a23c2fdcba2868552aab->leave($__internal_eee16d1522653868ac554351746800e274cfea23a100a23c2fdcba2868552aab_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_eeb8f27e002efadcdf39a381e048c4fa69427f4ac83fa65f3ec1791a5466f315 = $this->env->getExtension("native_profiler");
        $__internal_eeb8f27e002efadcdf39a381e048c4fa69427f4ac83fa65f3ec1791a5466f315->enter($__internal_eeb8f27e002efadcdf39a381e048c4fa69427f4ac83fa65f3ec1791a5466f315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eeb8f27e002efadcdf39a381e048c4fa69427f4ac83fa65f3ec1791a5466f315->leave($__internal_eeb8f27e002efadcdf39a381e048c4fa69427f4ac83fa65f3ec1791a5466f315_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6e6ab58074aa19e864fe7df0a4b05364eeb3325f4a5b07dac42913550b1a19cf = $this->env->getExtension("native_profiler");
        $__internal_6e6ab58074aa19e864fe7df0a4b05364eeb3325f4a5b07dac42913550b1a19cf->enter($__internal_6e6ab58074aa19e864fe7df0a4b05364eeb3325f4a5b07dac42913550b1a19cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6e6ab58074aa19e864fe7df0a4b05364eeb3325f4a5b07dac42913550b1a19cf->leave($__internal_6e6ab58074aa19e864fe7df0a4b05364eeb3325f4a5b07dac42913550b1a19cf_prof);

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
