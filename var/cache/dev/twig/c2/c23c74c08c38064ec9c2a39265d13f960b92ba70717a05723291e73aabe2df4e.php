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
        $__internal_fac7ab03d18939325c1fe2eb7a61b59ee7b6af435e4a293748481bc3c82c0e27 = $this->env->getExtension("native_profiler");
        $__internal_fac7ab03d18939325c1fe2eb7a61b59ee7b6af435e4a293748481bc3c82c0e27->enter($__internal_fac7ab03d18939325c1fe2eb7a61b59ee7b6af435e4a293748481bc3c82c0e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_fac7ab03d18939325c1fe2eb7a61b59ee7b6af435e4a293748481bc3c82c0e27->leave($__internal_fac7ab03d18939325c1fe2eb7a61b59ee7b6af435e4a293748481bc3c82c0e27_prof);

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
