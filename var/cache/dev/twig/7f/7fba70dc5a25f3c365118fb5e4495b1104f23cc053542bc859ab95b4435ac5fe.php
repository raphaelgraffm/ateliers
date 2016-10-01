<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_2e28223140eea02a27916b04d5ff798de69936c9213a43480c7082070e215b1b extends Twig_Template
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
        $__internal_66f03535b4f2b668cceca022ff9b60ce6d64e497661bea401eff52b5a628f413 = $this->env->getExtension("native_profiler");
        $__internal_66f03535b4f2b668cceca022ff9b60ce6d64e497661bea401eff52b5a628f413->enter($__internal_66f03535b4f2b668cceca022ff9b60ce6d64e497661bea401eff52b5a628f413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_66f03535b4f2b668cceca022ff9b60ce6d64e497661bea401eff52b5a628f413->leave($__internal_66f03535b4f2b668cceca022ff9b60ce6d64e497661bea401eff52b5a628f413_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
