<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_8c7ff07a1ff38cfe73a28e4e8f18bacd648c011b71d028262268c9e5454c71e0 extends Twig_Template
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
        $__internal_f33d025b8e2eed4b938474e11e59adbeba6ed46f5238a78dbf943ae689ffff00 = $this->env->getExtension("native_profiler");
        $__internal_f33d025b8e2eed4b938474e11e59adbeba6ed46f5238a78dbf943ae689ffff00->enter($__internal_f33d025b8e2eed4b938474e11e59adbeba6ed46f5238a78dbf943ae689ffff00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f33d025b8e2eed4b938474e11e59adbeba6ed46f5238a78dbf943ae689ffff00->leave($__internal_f33d025b8e2eed4b938474e11e59adbeba6ed46f5238a78dbf943ae689ffff00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
