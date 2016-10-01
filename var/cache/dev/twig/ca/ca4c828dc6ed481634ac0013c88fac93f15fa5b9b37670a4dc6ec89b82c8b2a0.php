<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c8d8c2c7917d4f1fdcd7463c09a3e7d71a0149a3ecf38ae51d11c881b7d8d631 extends Twig_Template
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
        $__internal_0c2e829d8048472501432f369a55833fae1591c790f0b662599aed1964869cc3 = $this->env->getExtension("native_profiler");
        $__internal_0c2e829d8048472501432f369a55833fae1591c790f0b662599aed1964869cc3->enter($__internal_0c2e829d8048472501432f369a55833fae1591c790f0b662599aed1964869cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0c2e829d8048472501432f369a55833fae1591c790f0b662599aed1964869cc3->leave($__internal_0c2e829d8048472501432f369a55833fae1591c790f0b662599aed1964869cc3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
