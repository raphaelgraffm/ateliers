<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_11e8ca67e13183d616aa4abc9fec2d15b4c295e13a5ee7ebdd2bd92312d673df extends Twig_Template
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
        $__internal_eb0eba82613ceff0bbd92620e6bc6696f608fe7c51945f55fd1abb6b2c420f19 = $this->env->getExtension("native_profiler");
        $__internal_eb0eba82613ceff0bbd92620e6bc6696f608fe7c51945f55fd1abb6b2c420f19->enter($__internal_eb0eba82613ceff0bbd92620e6bc6696f608fe7c51945f55fd1abb6b2c420f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_eb0eba82613ceff0bbd92620e6bc6696f608fe7c51945f55fd1abb6b2c420f19->leave($__internal_eb0eba82613ceff0bbd92620e6bc6696f608fe7c51945f55fd1abb6b2c420f19_prof);

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
