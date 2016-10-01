<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_de962d20b0296b5f253ae251dfb86a2ed79db67a5d083aa91f3b427fc3b4a1c1 extends Twig_Template
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
        $__internal_f5b0b1531120484119a7c693c2044312d02789497a774ebd87a28c69bada60a1 = $this->env->getExtension("native_profiler");
        $__internal_f5b0b1531120484119a7c693c2044312d02789497a774ebd87a28c69bada60a1->enter($__internal_f5b0b1531120484119a7c693c2044312d02789497a774ebd87a28c69bada60a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f5b0b1531120484119a7c693c2044312d02789497a774ebd87a28c69bada60a1->leave($__internal_f5b0b1531120484119a7c693c2044312d02789497a774ebd87a28c69bada60a1_prof);

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
