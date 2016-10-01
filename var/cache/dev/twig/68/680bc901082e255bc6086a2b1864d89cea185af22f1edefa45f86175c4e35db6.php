<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_afb11cc853b61f8b5c16027dd9182a7bd15235bd8dbc7b3a2828349fa65bfaf3 extends Twig_Template
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
        $__internal_43b7435c5fe879b65506a87f19fc01ca7a40a1b6e0536784d7832ba76e138a05 = $this->env->getExtension("native_profiler");
        $__internal_43b7435c5fe879b65506a87f19fc01ca7a40a1b6e0536784d7832ba76e138a05->enter($__internal_43b7435c5fe879b65506a87f19fc01ca7a40a1b6e0536784d7832ba76e138a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_43b7435c5fe879b65506a87f19fc01ca7a40a1b6e0536784d7832ba76e138a05->leave($__internal_43b7435c5fe879b65506a87f19fc01ca7a40a1b6e0536784d7832ba76e138a05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
