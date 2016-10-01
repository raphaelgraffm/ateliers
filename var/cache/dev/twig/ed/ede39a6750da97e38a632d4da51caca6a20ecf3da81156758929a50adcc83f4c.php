<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_1c17dab1cb115dae14f1323def9086243ad10e4eb2b218050c3f761f9469b784 extends Twig_Template
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
        $__internal_b45c0bbae2c6b216e25cb1a355fdb16669bacb9512aaf1136735dd7b3128286c = $this->env->getExtension("native_profiler");
        $__internal_b45c0bbae2c6b216e25cb1a355fdb16669bacb9512aaf1136735dd7b3128286c->enter($__internal_b45c0bbae2c6b216e25cb1a355fdb16669bacb9512aaf1136735dd7b3128286c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b45c0bbae2c6b216e25cb1a355fdb16669bacb9512aaf1136735dd7b3128286c->leave($__internal_b45c0bbae2c6b216e25cb1a355fdb16669bacb9512aaf1136735dd7b3128286c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
