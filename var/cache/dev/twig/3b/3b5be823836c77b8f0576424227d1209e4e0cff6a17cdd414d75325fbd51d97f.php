<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_08fffbde79bda4c1e18d5762f80d0feb6e6fd400f73946dede166838e439827a extends Twig_Template
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
        $__internal_64ff9dc16bd947581dd91aec98548771adcfa3e3418d67c865d9a98e36d78408 = $this->env->getExtension("native_profiler");
        $__internal_64ff9dc16bd947581dd91aec98548771adcfa3e3418d67c865d9a98e36d78408->enter($__internal_64ff9dc16bd947581dd91aec98548771adcfa3e3418d67c865d9a98e36d78408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_64ff9dc16bd947581dd91aec98548771adcfa3e3418d67c865d9a98e36d78408->leave($__internal_64ff9dc16bd947581dd91aec98548771adcfa3e3418d67c865d9a98e36d78408_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
