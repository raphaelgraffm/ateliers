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
        $__internal_cc45810849ed4e9ffcc73c2ef093b210f65567b066f212d3a478344083161e0c = $this->env->getExtension("native_profiler");
        $__internal_cc45810849ed4e9ffcc73c2ef093b210f65567b066f212d3a478344083161e0c->enter($__internal_cc45810849ed4e9ffcc73c2ef093b210f65567b066f212d3a478344083161e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_cc45810849ed4e9ffcc73c2ef093b210f65567b066f212d3a478344083161e0c->leave($__internal_cc45810849ed4e9ffcc73c2ef093b210f65567b066f212d3a478344083161e0c_prof);

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
