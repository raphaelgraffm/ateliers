<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_d44abfbc2a34e84e534b2e0420fe393db3a262d970df2b6af09f616d29e583ec extends Twig_Template
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
        $__internal_e1185af2970f4bf468ec314855b3323aebbd0d991c5ab7a98abefa11e0d8c277 = $this->env->getExtension("native_profiler");
        $__internal_e1185af2970f4bf468ec314855b3323aebbd0d991c5ab7a98abefa11e0d8c277->enter($__internal_e1185af2970f4bf468ec314855b3323aebbd0d991c5ab7a98abefa11e0d8c277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e1185af2970f4bf468ec314855b3323aebbd0d991c5ab7a98abefa11e0d8c277->leave($__internal_e1185af2970f4bf468ec314855b3323aebbd0d991c5ab7a98abefa11e0d8c277_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
