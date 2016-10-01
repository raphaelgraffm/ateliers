<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_236e0289764dd6e53fc35353acb3e07f3a22ad5dcc8157bdced037d15e32762b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c437da5538ee168f0b05b90e71f583a071b9b44aa2aa29d46946e52faef7364 = $this->env->getExtension("native_profiler");
        $__internal_2c437da5538ee168f0b05b90e71f583a071b9b44aa2aa29d46946e52faef7364->enter($__internal_2c437da5538ee168f0b05b90e71f583a071b9b44aa2aa29d46946e52faef7364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2c437da5538ee168f0b05b90e71f583a071b9b44aa2aa29d46946e52faef7364->leave($__internal_2c437da5538ee168f0b05b90e71f583a071b9b44aa2aa29d46946e52faef7364_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_68f0980faa974118fd06b1d8fb904e3bcc7a95b0112adfdfb21aa4cafee71fe9 = $this->env->getExtension("native_profiler");
        $__internal_68f0980faa974118fd06b1d8fb904e3bcc7a95b0112adfdfb21aa4cafee71fe9->enter($__internal_68f0980faa974118fd06b1d8fb904e3bcc7a95b0112adfdfb21aa4cafee71fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_68f0980faa974118fd06b1d8fb904e3bcc7a95b0112adfdfb21aa4cafee71fe9->leave($__internal_68f0980faa974118fd06b1d8fb904e3bcc7a95b0112adfdfb21aa4cafee71fe9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
