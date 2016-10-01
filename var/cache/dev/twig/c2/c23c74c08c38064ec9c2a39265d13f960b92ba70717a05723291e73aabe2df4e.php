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
        $__internal_53a820d7b8dfc37ea1444e160c63d34c2cab20849cc0124602e4ef21d4742b6b = $this->env->getExtension("native_profiler");
        $__internal_53a820d7b8dfc37ea1444e160c63d34c2cab20849cc0124602e4ef21d4742b6b->enter($__internal_53a820d7b8dfc37ea1444e160c63d34c2cab20849cc0124602e4ef21d4742b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_53a820d7b8dfc37ea1444e160c63d34c2cab20849cc0124602e4ef21d4742b6b->leave($__internal_53a820d7b8dfc37ea1444e160c63d34c2cab20849cc0124602e4ef21d4742b6b_prof);

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
