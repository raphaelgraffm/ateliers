<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_a5eb82fa1fd9c7b7c5ae748720b2864a52290751094d3b092aec053c271722e3 extends Twig_Template
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
        $__internal_d0a09b613ef45e2d60c0ad3aecce62d4d4b978724f848286f5c6f78ff842017f = $this->env->getExtension("native_profiler");
        $__internal_d0a09b613ef45e2d60c0ad3aecce62d4d4b978724f848286f5c6f78ff842017f->enter($__internal_d0a09b613ef45e2d60c0ad3aecce62d4d4b978724f848286f5c6f78ff842017f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d0a09b613ef45e2d60c0ad3aecce62d4d4b978724f848286f5c6f78ff842017f->leave($__internal_d0a09b613ef45e2d60c0ad3aecce62d4d4b978724f848286f5c6f78ff842017f_prof);

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
