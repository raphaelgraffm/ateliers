<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_f3d8e92031a7707c44e9dc5b825bbe9d42e71470edcc03db05cef4581dd2e835 extends Twig_Template
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
        $__internal_28edc32d2dddbc34d3cf21d27792498fb41891d0c77d3e6e70f552c779dce9e8 = $this->env->getExtension("native_profiler");
        $__internal_28edc32d2dddbc34d3cf21d27792498fb41891d0c77d3e6e70f552c779dce9e8->enter($__internal_28edc32d2dddbc34d3cf21d27792498fb41891d0c77d3e6e70f552c779dce9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_28edc32d2dddbc34d3cf21d27792498fb41891d0c77d3e6e70f552c779dce9e8->leave($__internal_28edc32d2dddbc34d3cf21d27792498fb41891d0c77d3e6e70f552c779dce9e8_prof);

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
