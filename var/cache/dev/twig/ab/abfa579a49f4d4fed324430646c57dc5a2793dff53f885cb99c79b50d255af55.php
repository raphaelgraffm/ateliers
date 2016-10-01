<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_fc8ae194802592603f763365953a3985dbd7016d8c78dd4a496b93ae804ef2d2 extends Twig_Template
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
        $__internal_08f0a0ae8d7f793b29a5cf8496f6f6a6b2a0a7ab6e476adc965825c7a47de836 = $this->env->getExtension("native_profiler");
        $__internal_08f0a0ae8d7f793b29a5cf8496f6f6a6b2a0a7ab6e476adc965825c7a47de836->enter($__internal_08f0a0ae8d7f793b29a5cf8496f6f6a6b2a0a7ab6e476adc965825c7a47de836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_08f0a0ae8d7f793b29a5cf8496f6f6a6b2a0a7ab6e476adc965825c7a47de836->leave($__internal_08f0a0ae8d7f793b29a5cf8496f6f6a6b2a0a7ab6e476adc965825c7a47de836_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
