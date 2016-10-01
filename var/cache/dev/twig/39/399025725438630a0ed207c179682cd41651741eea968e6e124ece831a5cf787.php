<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d906328613d04f2b5deca763a4debc04ebd4471602c9e148c57423acaaaacc0b extends Twig_Template
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
        $__internal_5867b0132fc0da2c2d458aefbb81d9126e0457813157f437124098b6358004ac = $this->env->getExtension("native_profiler");
        $__internal_5867b0132fc0da2c2d458aefbb81d9126e0457813157f437124098b6358004ac->enter($__internal_5867b0132fc0da2c2d458aefbb81d9126e0457813157f437124098b6358004ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_5867b0132fc0da2c2d458aefbb81d9126e0457813157f437124098b6358004ac->leave($__internal_5867b0132fc0da2c2d458aefbb81d9126e0457813157f437124098b6358004ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
