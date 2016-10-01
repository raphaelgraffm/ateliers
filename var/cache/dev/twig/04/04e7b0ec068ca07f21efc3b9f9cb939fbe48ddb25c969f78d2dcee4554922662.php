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
        $__internal_ccc8849feca9d4cc9ef0d5e75c772a8c86313ca3d8ffa55b9a2a12f982a36271 = $this->env->getExtension("native_profiler");
        $__internal_ccc8849feca9d4cc9ef0d5e75c772a8c86313ca3d8ffa55b9a2a12f982a36271->enter($__internal_ccc8849feca9d4cc9ef0d5e75c772a8c86313ca3d8ffa55b9a2a12f982a36271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ccc8849feca9d4cc9ef0d5e75c772a8c86313ca3d8ffa55b9a2a12f982a36271->leave($__internal_ccc8849feca9d4cc9ef0d5e75c772a8c86313ca3d8ffa55b9a2a12f982a36271_prof);

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
