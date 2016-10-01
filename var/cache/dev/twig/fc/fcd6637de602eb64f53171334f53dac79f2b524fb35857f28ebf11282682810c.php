<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_530deda6147b03b7e5f6132ec6c5e5efcf9447471300c876f555360dab13dc3d extends Twig_Template
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
        $__internal_a1d86d3fd7a57df93bb3adb392ac0870a1fedb78b382fe44258f0675a05e4c3d = $this->env->getExtension("native_profiler");
        $__internal_a1d86d3fd7a57df93bb3adb392ac0870a1fedb78b382fe44258f0675a05e4c3d->enter($__internal_a1d86d3fd7a57df93bb3adb392ac0870a1fedb78b382fe44258f0675a05e4c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_a1d86d3fd7a57df93bb3adb392ac0870a1fedb78b382fe44258f0675a05e4c3d->leave($__internal_a1d86d3fd7a57df93bb3adb392ac0870a1fedb78b382fe44258f0675a05e4c3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
    }
}
