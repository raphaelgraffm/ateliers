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
        $__internal_e0818b885fb0142657268348e4a834adaa70446d75de88895dccf2b22abba58d = $this->env->getExtension("native_profiler");
        $__internal_e0818b885fb0142657268348e4a834adaa70446d75de88895dccf2b22abba58d->enter($__internal_e0818b885fb0142657268348e4a834adaa70446d75de88895dccf2b22abba58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e0818b885fb0142657268348e4a834adaa70446d75de88895dccf2b22abba58d->leave($__internal_e0818b885fb0142657268348e4a834adaa70446d75de88895dccf2b22abba58d_prof);

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
