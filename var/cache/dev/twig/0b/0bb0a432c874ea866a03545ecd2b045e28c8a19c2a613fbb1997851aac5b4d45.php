<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_44c05910cd1851fb2bd6804dde52db49a01ebee3743b470dd8470739243a0f76 extends Twig_Template
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
        $__internal_6bad0ccea7a1246e5720f4b3eab5741203d2e4e8564764cdf1aba753dd58b9ff = $this->env->getExtension("native_profiler");
        $__internal_6bad0ccea7a1246e5720f4b3eab5741203d2e4e8564764cdf1aba753dd58b9ff->enter($__internal_6bad0ccea7a1246e5720f4b3eab5741203d2e4e8564764cdf1aba753dd58b9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6bad0ccea7a1246e5720f4b3eab5741203d2e4e8564764cdf1aba753dd58b9ff->leave($__internal_6bad0ccea7a1246e5720f4b3eab5741203d2e4e8564764cdf1aba753dd58b9ff_prof);

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
