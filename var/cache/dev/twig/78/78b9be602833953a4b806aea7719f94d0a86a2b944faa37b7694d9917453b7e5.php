<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_c4e4d76d6b63d9045b3f78f34c24052e98b22b717a2b0a16e3afba163791ef71 extends Twig_Template
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
        $__internal_35d18ed9b58403b3ad9cebbf9dcc5a130e1c11f446a8000d6d3e3c523e1557c6 = $this->env->getExtension("native_profiler");
        $__internal_35d18ed9b58403b3ad9cebbf9dcc5a130e1c11f446a8000d6d3e3c523e1557c6->enter($__internal_35d18ed9b58403b3ad9cebbf9dcc5a130e1c11f446a8000d6d3e3c523e1557c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_35d18ed9b58403b3ad9cebbf9dcc5a130e1c11f446a8000d6d3e3c523e1557c6->leave($__internal_35d18ed9b58403b3ad9cebbf9dcc5a130e1c11f446a8000d6d3e3c523e1557c6_prof);

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
