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
        $__internal_c967af7503bacb8759094e84762a3639aae15596ec3a78acc55ae1b084936953 = $this->env->getExtension("native_profiler");
        $__internal_c967af7503bacb8759094e84762a3639aae15596ec3a78acc55ae1b084936953->enter($__internal_c967af7503bacb8759094e84762a3639aae15596ec3a78acc55ae1b084936953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c967af7503bacb8759094e84762a3639aae15596ec3a78acc55ae1b084936953->leave($__internal_c967af7503bacb8759094e84762a3639aae15596ec3a78acc55ae1b084936953_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_03596625261a251bea9d54962b438bcb76c740ebf2d53ed13d7b6abbe945c2c5 = $this->env->getExtension("native_profiler");
        $__internal_03596625261a251bea9d54962b438bcb76c740ebf2d53ed13d7b6abbe945c2c5->enter($__internal_03596625261a251bea9d54962b438bcb76c740ebf2d53ed13d7b6abbe945c2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_03596625261a251bea9d54962b438bcb76c740ebf2d53ed13d7b6abbe945c2c5->leave($__internal_03596625261a251bea9d54962b438bcb76c740ebf2d53ed13d7b6abbe945c2c5_prof);

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
