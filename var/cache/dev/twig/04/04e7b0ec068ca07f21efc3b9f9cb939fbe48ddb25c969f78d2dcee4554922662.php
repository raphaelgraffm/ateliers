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
        $__internal_ad542b339b1b8a2d96081fa131bc9e8d1115cbf616ce1f4f0cc40a6b70415541 = $this->env->getExtension("native_profiler");
        $__internal_ad542b339b1b8a2d96081fa131bc9e8d1115cbf616ce1f4f0cc40a6b70415541->enter($__internal_ad542b339b1b8a2d96081fa131bc9e8d1115cbf616ce1f4f0cc40a6b70415541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ad542b339b1b8a2d96081fa131bc9e8d1115cbf616ce1f4f0cc40a6b70415541->leave($__internal_ad542b339b1b8a2d96081fa131bc9e8d1115cbf616ce1f4f0cc40a6b70415541_prof);

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
