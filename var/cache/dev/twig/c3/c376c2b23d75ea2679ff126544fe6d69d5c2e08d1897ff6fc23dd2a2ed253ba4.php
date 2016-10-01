<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_9514942b8fab6a76ca21b394e27448ec50cc218b37706205f4d156a3c356ff60 extends Twig_Template
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
        $__internal_8b76f655930e5a7694dc92fdf307ab96f9fe13c68aeb3987334e2e14637d885d = $this->env->getExtension("native_profiler");
        $__internal_8b76f655930e5a7694dc92fdf307ab96f9fe13c68aeb3987334e2e14637d885d->enter($__internal_8b76f655930e5a7694dc92fdf307ab96f9fe13c68aeb3987334e2e14637d885d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_8b76f655930e5a7694dc92fdf307ab96f9fe13c68aeb3987334e2e14637d885d->leave($__internal_8b76f655930e5a7694dc92fdf307ab96f9fe13c68aeb3987334e2e14637d885d_prof);

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
