<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_7cb303a27c3616bd34003755a1baca66cb3aef88653a898d746149e7713a2ee5 extends Twig_Template
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
        $__internal_a9356ad8d0da62c16faaf1554f8ff80961217adf6b1b0b0be4a171dd8ccd7b2d = $this->env->getExtension("native_profiler");
        $__internal_a9356ad8d0da62c16faaf1554f8ff80961217adf6b1b0b0be4a171dd8ccd7b2d->enter($__internal_a9356ad8d0da62c16faaf1554f8ff80961217adf6b1b0b0be4a171dd8ccd7b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a9356ad8d0da62c16faaf1554f8ff80961217adf6b1b0b0be4a171dd8ccd7b2d->leave($__internal_a9356ad8d0da62c16faaf1554f8ff80961217adf6b1b0b0be4a171dd8ccd7b2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
    }
}
