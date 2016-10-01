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
        $__internal_d764f8ed6f17916f240e14d6588e6803e0999df153bb0fd67fbadece56efab3a = $this->env->getExtension("native_profiler");
        $__internal_d764f8ed6f17916f240e14d6588e6803e0999df153bb0fd67fbadece56efab3a->enter($__internal_d764f8ed6f17916f240e14d6588e6803e0999df153bb0fd67fbadece56efab3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d764f8ed6f17916f240e14d6588e6803e0999df153bb0fd67fbadece56efab3a->leave($__internal_d764f8ed6f17916f240e14d6588e6803e0999df153bb0fd67fbadece56efab3a_prof);

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
