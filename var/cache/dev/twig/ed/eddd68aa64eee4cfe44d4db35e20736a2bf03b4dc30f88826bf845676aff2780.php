<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_c67c66c68b49a598a865ae17dbbf7b2b6d686cf24c95c2c7c3b439a3fcd68c87 extends Twig_Template
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
        $__internal_f9053cdc65fd4a90a3bed81c7afff2cc06c265e4e97af039e5fd4df1f657593f = $this->env->getExtension("native_profiler");
        $__internal_f9053cdc65fd4a90a3bed81c7afff2cc06c265e4e97af039e5fd4df1f657593f->enter($__internal_f9053cdc65fd4a90a3bed81c7afff2cc06c265e4e97af039e5fd4df1f657593f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f9053cdc65fd4a90a3bed81c7afff2cc06c265e4e97af039e5fd4df1f657593f->leave($__internal_f9053cdc65fd4a90a3bed81c7afff2cc06c265e4e97af039e5fd4df1f657593f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
