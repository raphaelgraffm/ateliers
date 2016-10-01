<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_3eb15e2f547290939d8f19dfb4ebf9fc8da671c7592ce92b19110a6a8bfb12e2 extends Twig_Template
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
        $__internal_5958e4fc03ae461210e24318775baafcff343dc9fbd0667b4fb85686c324d94a = $this->env->getExtension("native_profiler");
        $__internal_5958e4fc03ae461210e24318775baafcff343dc9fbd0667b4fb85686c324d94a->enter($__internal_5958e4fc03ae461210e24318775baafcff343dc9fbd0667b4fb85686c324d94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5958e4fc03ae461210e24318775baafcff343dc9fbd0667b4fb85686c324d94a->leave($__internal_5958e4fc03ae461210e24318775baafcff343dc9fbd0667b4fb85686c324d94a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
