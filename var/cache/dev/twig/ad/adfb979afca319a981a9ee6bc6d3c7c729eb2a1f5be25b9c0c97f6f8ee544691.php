<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d02fd75b39ca00c86228140e89e8c3bddb1c78b3dc4e1b985a92c0d0bf7d7a13 extends Twig_Template
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
        $__internal_cdb2117641da6fd7d33a29fbe08b46c2dfba17f313f0adc20d911c14a4286e96 = $this->env->getExtension("native_profiler");
        $__internal_cdb2117641da6fd7d33a29fbe08b46c2dfba17f313f0adc20d911c14a4286e96->enter($__internal_cdb2117641da6fd7d33a29fbe08b46c2dfba17f313f0adc20d911c14a4286e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_cdb2117641da6fd7d33a29fbe08b46c2dfba17f313f0adc20d911c14a4286e96->leave($__internal_cdb2117641da6fd7d33a29fbe08b46c2dfba17f313f0adc20d911c14a4286e96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
