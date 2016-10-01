<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f5454355a13b7650602b8b5649e055fbba7ecdbc253a7fd3855efd90a127febf extends Twig_Template
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
        $__internal_e80f76b0b1e24260f7a6ddb25b4aa6d667327148da06bbcd5c51d50d27ca7d64 = $this->env->getExtension("native_profiler");
        $__internal_e80f76b0b1e24260f7a6ddb25b4aa6d667327148da06bbcd5c51d50d27ca7d64->enter($__internal_e80f76b0b1e24260f7a6ddb25b4aa6d667327148da06bbcd5c51d50d27ca7d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e80f76b0b1e24260f7a6ddb25b4aa6d667327148da06bbcd5c51d50d27ca7d64->leave($__internal_e80f76b0b1e24260f7a6ddb25b4aa6d667327148da06bbcd5c51d50d27ca7d64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
