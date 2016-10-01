<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_1cb2d39014d0f7325013c935addb885601eac6c21840a31c4500a71d145dafc5 extends Twig_Template
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
        $__internal_18325224009f37cfcbcf8704545ae78fcc2b8017bd8398a33456cb0ec24fd395 = $this->env->getExtension("native_profiler");
        $__internal_18325224009f37cfcbcf8704545ae78fcc2b8017bd8398a33456cb0ec24fd395->enter($__internal_18325224009f37cfcbcf8704545ae78fcc2b8017bd8398a33456cb0ec24fd395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_18325224009f37cfcbcf8704545ae78fcc2b8017bd8398a33456cb0ec24fd395->leave($__internal_18325224009f37cfcbcf8704545ae78fcc2b8017bd8398a33456cb0ec24fd395_prof);

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
