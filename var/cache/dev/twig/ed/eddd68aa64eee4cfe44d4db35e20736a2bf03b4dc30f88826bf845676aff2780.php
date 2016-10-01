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
        $__internal_ef0d648b4cf00383a015888c108e25c26704bca5ca2cee698276c407769d07c0 = $this->env->getExtension("native_profiler");
        $__internal_ef0d648b4cf00383a015888c108e25c26704bca5ca2cee698276c407769d07c0->enter($__internal_ef0d648b4cf00383a015888c108e25c26704bca5ca2cee698276c407769d07c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_ef0d648b4cf00383a015888c108e25c26704bca5ca2cee698276c407769d07c0->leave($__internal_ef0d648b4cf00383a015888c108e25c26704bca5ca2cee698276c407769d07c0_prof);

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
