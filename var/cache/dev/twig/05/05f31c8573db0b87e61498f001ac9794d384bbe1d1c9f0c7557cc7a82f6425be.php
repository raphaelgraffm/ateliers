<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0a693d0fdc79e4cec291283979910eb74a78c73144a3f0e7a8f7fb86f0839759 extends Twig_Template
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
        $__internal_75a2ba79be54a02728e3b269d6946a36ede0b5d8a5d1822dcda819cd9dd42f61 = $this->env->getExtension("native_profiler");
        $__internal_75a2ba79be54a02728e3b269d6946a36ede0b5d8a5d1822dcda819cd9dd42f61->enter($__internal_75a2ba79be54a02728e3b269d6946a36ede0b5d8a5d1822dcda819cd9dd42f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_75a2ba79be54a02728e3b269d6946a36ede0b5d8a5d1822dcda819cd9dd42f61->leave($__internal_75a2ba79be54a02728e3b269d6946a36ede0b5d8a5d1822dcda819cd9dd42f61_prof);

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
