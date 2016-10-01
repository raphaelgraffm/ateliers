<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_716950ee7e4aa8c6028868b39cb3ad407acaf03af7ea0ba13c92724f14cee1f0 extends Twig_Template
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
        $__internal_ae9dddd402d726a762ad414b4eea763cab3ee3e0b920e9d54e881d63434a9602 = $this->env->getExtension("native_profiler");
        $__internal_ae9dddd402d726a762ad414b4eea763cab3ee3e0b920e9d54e881d63434a9602->enter($__internal_ae9dddd402d726a762ad414b4eea763cab3ee3e0b920e9d54e881d63434a9602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ae9dddd402d726a762ad414b4eea763cab3ee3e0b920e9d54e881d63434a9602->leave($__internal_ae9dddd402d726a762ad414b4eea763cab3ee3e0b920e9d54e881d63434a9602_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
