<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_9c3abd3acadf6e19a2c0de7e6f0d8dcba6e46c97e0f168e3262972290eba5178 extends Twig_Template
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
        $__internal_f8ae6c8450dac88b5b6fdec9db9f12b65ab1a33d43de5c50407c14e95fa2e3a6 = $this->env->getExtension("native_profiler");
        $__internal_f8ae6c8450dac88b5b6fdec9db9f12b65ab1a33d43de5c50407c14e95fa2e3a6->enter($__internal_f8ae6c8450dac88b5b6fdec9db9f12b65ab1a33d43de5c50407c14e95fa2e3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_f8ae6c8450dac88b5b6fdec9db9f12b65ab1a33d43de5c50407c14e95fa2e3a6->leave($__internal_f8ae6c8450dac88b5b6fdec9db9f12b65ab1a33d43de5c50407c14e95fa2e3a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
    }
}
