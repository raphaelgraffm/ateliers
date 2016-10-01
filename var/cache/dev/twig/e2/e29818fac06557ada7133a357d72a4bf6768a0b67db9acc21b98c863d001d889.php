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
        $__internal_3de5f18b9d23f535fb15bdad29208cfb4033ce42f4192a0015c6ed9153f6fe47 = $this->env->getExtension("native_profiler");
        $__internal_3de5f18b9d23f535fb15bdad29208cfb4033ce42f4192a0015c6ed9153f6fe47->enter($__internal_3de5f18b9d23f535fb15bdad29208cfb4033ce42f4192a0015c6ed9153f6fe47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_3de5f18b9d23f535fb15bdad29208cfb4033ce42f4192a0015c6ed9153f6fe47->leave($__internal_3de5f18b9d23f535fb15bdad29208cfb4033ce42f4192a0015c6ed9153f6fe47_prof);

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
