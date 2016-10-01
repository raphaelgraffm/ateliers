<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_f02cb75c0706db7ee800f09f418d97c056d25f70b34a3902f3a7424f71b463b2 extends Twig_Template
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
        $__internal_bf3c0d474b4e00f5a13832109a59658b8bd599a3c3051bf540111a8670903318 = $this->env->getExtension("native_profiler");
        $__internal_bf3c0d474b4e00f5a13832109a59658b8bd599a3c3051bf540111a8670903318->enter($__internal_bf3c0d474b4e00f5a13832109a59658b8bd599a3c3051bf540111a8670903318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_bf3c0d474b4e00f5a13832109a59658b8bd599a3c3051bf540111a8670903318->leave($__internal_bf3c0d474b4e00f5a13832109a59658b8bd599a3c3051bf540111a8670903318_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
