<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_933fbece6e297bb25d51645295fa08203bbf2039149b3442d7192b55bf83e715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c59ec8c86fe729fcab80b16ddd08ff52a15e74f3e14f2a2863d5c07b98078f21 = $this->env->getExtension("native_profiler");
        $__internal_c59ec8c86fe729fcab80b16ddd08ff52a15e74f3e14f2a2863d5c07b98078f21->enter($__internal_c59ec8c86fe729fcab80b16ddd08ff52a15e74f3e14f2a2863d5c07b98078f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_c59ec8c86fe729fcab80b16ddd08ff52a15e74f3e14f2a2863d5c07b98078f21->leave($__internal_c59ec8c86fe729fcab80b16ddd08ff52a15e74f3e14f2a2863d5c07b98078f21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
    }
}
