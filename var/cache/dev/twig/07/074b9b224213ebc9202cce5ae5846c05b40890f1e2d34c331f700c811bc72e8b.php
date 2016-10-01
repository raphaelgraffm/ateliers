<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6940a49e00f5f201b67bdc533810c4c6b28a302ef6edb52506b56c1d38c642b8 extends Twig_Template
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
        $__internal_cdc11b97744e14005d33293cd59c5058f6fc8997bd04f51505eb4933e12292a6 = $this->env->getExtension("native_profiler");
        $__internal_cdc11b97744e14005d33293cd59c5058f6fc8997bd04f51505eb4933e12292a6->enter($__internal_cdc11b97744e14005d33293cd59c5058f6fc8997bd04f51505eb4933e12292a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cdc11b97744e14005d33293cd59c5058f6fc8997bd04f51505eb4933e12292a6->leave($__internal_cdc11b97744e14005d33293cd59c5058f6fc8997bd04f51505eb4933e12292a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
