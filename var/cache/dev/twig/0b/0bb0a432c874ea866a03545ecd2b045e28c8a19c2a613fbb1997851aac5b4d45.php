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
        $__internal_fd9e9ebe12df8de9d4e7d299f0d5b0c607ee1882d3dafe86773a70bf24cceb8f = $this->env->getExtension("native_profiler");
        $__internal_fd9e9ebe12df8de9d4e7d299f0d5b0c607ee1882d3dafe86773a70bf24cceb8f->enter($__internal_fd9e9ebe12df8de9d4e7d299f0d5b0c607ee1882d3dafe86773a70bf24cceb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_fd9e9ebe12df8de9d4e7d299f0d5b0c607ee1882d3dafe86773a70bf24cceb8f->leave($__internal_fd9e9ebe12df8de9d4e7d299f0d5b0c607ee1882d3dafe86773a70bf24cceb8f_prof);

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
