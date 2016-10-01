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
        $__internal_3eca3c3aa520c0cee3b8009cba3e2dd1cead361b39399495eb64042268ec7a51 = $this->env->getExtension("native_profiler");
        $__internal_3eca3c3aa520c0cee3b8009cba3e2dd1cead361b39399495eb64042268ec7a51->enter($__internal_3eca3c3aa520c0cee3b8009cba3e2dd1cead361b39399495eb64042268ec7a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3eca3c3aa520c0cee3b8009cba3e2dd1cead361b39399495eb64042268ec7a51->leave($__internal_3eca3c3aa520c0cee3b8009cba3e2dd1cead361b39399495eb64042268ec7a51_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_16695a47ad6b0375d258fb7198bb08a06e88b2a9bcaeaca587cce673e23fc111 = $this->env->getExtension("native_profiler");
        $__internal_16695a47ad6b0375d258fb7198bb08a06e88b2a9bcaeaca587cce673e23fc111->enter($__internal_16695a47ad6b0375d258fb7198bb08a06e88b2a9bcaeaca587cce673e23fc111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_16695a47ad6b0375d258fb7198bb08a06e88b2a9bcaeaca587cce673e23fc111->leave($__internal_16695a47ad6b0375d258fb7198bb08a06e88b2a9bcaeaca587cce673e23fc111_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_90d8eee611d4a8d9c6f744ff924885151f196abf23200254f209278b438dfa4d = $this->env->getExtension("native_profiler");
        $__internal_90d8eee611d4a8d9c6f744ff924885151f196abf23200254f209278b438dfa4d->enter($__internal_90d8eee611d4a8d9c6f744ff924885151f196abf23200254f209278b438dfa4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_90d8eee611d4a8d9c6f744ff924885151f196abf23200254f209278b438dfa4d->leave($__internal_90d8eee611d4a8d9c6f744ff924885151f196abf23200254f209278b438dfa4d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f595b659c3927714c3d309d13b98c47706d015b74f5509d4235f6d2018d0a692 = $this->env->getExtension("native_profiler");
        $__internal_f595b659c3927714c3d309d13b98c47706d015b74f5509d4235f6d2018d0a692->enter($__internal_f595b659c3927714c3d309d13b98c47706d015b74f5509d4235f6d2018d0a692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f595b659c3927714c3d309d13b98c47706d015b74f5509d4235f6d2018d0a692->leave($__internal_f595b659c3927714c3d309d13b98c47706d015b74f5509d4235f6d2018d0a692_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a68f883e628bce6b979ce0dde2efd5bdf5ff33f2afdce452fde08ce4f68ff6db = $this->env->getExtension("native_profiler");
        $__internal_a68f883e628bce6b979ce0dde2efd5bdf5ff33f2afdce452fde08ce4f68ff6db->enter($__internal_a68f883e628bce6b979ce0dde2efd5bdf5ff33f2afdce452fde08ce4f68ff6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a68f883e628bce6b979ce0dde2efd5bdf5ff33f2afdce452fde08ce4f68ff6db->leave($__internal_a68f883e628bce6b979ce0dde2efd5bdf5ff33f2afdce452fde08ce4f68ff6db_prof);

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
