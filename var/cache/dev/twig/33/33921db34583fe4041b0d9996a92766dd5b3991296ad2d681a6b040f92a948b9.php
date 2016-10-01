<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_4fcf64f1d228808f1b57616e808289cbc425fae6d5c40955356fa4881131140d extends Twig_Template
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
        $__internal_7d4f3a27467d8a4d607de5847db86871f9587e25e424d19d2efafda0e874f46e = $this->env->getExtension("native_profiler");
        $__internal_7d4f3a27467d8a4d607de5847db86871f9587e25e424d19d2efafda0e874f46e->enter($__internal_7d4f3a27467d8a4d607de5847db86871f9587e25e424d19d2efafda0e874f46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7d4f3a27467d8a4d607de5847db86871f9587e25e424d19d2efafda0e874f46e->leave($__internal_7d4f3a27467d8a4d607de5847db86871f9587e25e424d19d2efafda0e874f46e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
