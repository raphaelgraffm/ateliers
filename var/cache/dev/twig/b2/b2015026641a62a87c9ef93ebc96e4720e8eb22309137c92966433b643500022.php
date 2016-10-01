<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ac698132999c16921af4f9d0d46b248fa2d77617d970a01e6322fe4aa870b15e extends Twig_Template
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
        $__internal_e13be051fd45ba7507c7719a2311c5c757a825350ebb945c18d39c6a6161cbc4 = $this->env->getExtension("native_profiler");
        $__internal_e13be051fd45ba7507c7719a2311c5c757a825350ebb945c18d39c6a6161cbc4->enter($__internal_e13be051fd45ba7507c7719a2311c5c757a825350ebb945c18d39c6a6161cbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e13be051fd45ba7507c7719a2311c5c757a825350ebb945c18d39c6a6161cbc4->leave($__internal_e13be051fd45ba7507c7719a2311c5c757a825350ebb945c18d39c6a6161cbc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
