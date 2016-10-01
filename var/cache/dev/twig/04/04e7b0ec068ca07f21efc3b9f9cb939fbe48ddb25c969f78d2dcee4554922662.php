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
        $__internal_4d2e0fc7c7fe5b138b860085834aa28fd568ecb6ff2fa41bec1f5aa63a018d7e = $this->env->getExtension("native_profiler");
        $__internal_4d2e0fc7c7fe5b138b860085834aa28fd568ecb6ff2fa41bec1f5aa63a018d7e->enter($__internal_4d2e0fc7c7fe5b138b860085834aa28fd568ecb6ff2fa41bec1f5aa63a018d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4d2e0fc7c7fe5b138b860085834aa28fd568ecb6ff2fa41bec1f5aa63a018d7e->leave($__internal_4d2e0fc7c7fe5b138b860085834aa28fd568ecb6ff2fa41bec1f5aa63a018d7e_prof);

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
