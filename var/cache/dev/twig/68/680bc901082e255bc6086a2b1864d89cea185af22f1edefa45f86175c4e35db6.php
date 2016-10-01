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
        $__internal_2040fd96a068f7ba851f186c84e355b1306b9968390630b8e927fcde67f0a62a = $this->env->getExtension("native_profiler");
        $__internal_2040fd96a068f7ba851f186c84e355b1306b9968390630b8e927fcde67f0a62a->enter($__internal_2040fd96a068f7ba851f186c84e355b1306b9968390630b8e927fcde67f0a62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_2040fd96a068f7ba851f186c84e355b1306b9968390630b8e927fcde67f0a62a->leave($__internal_2040fd96a068f7ba851f186c84e355b1306b9968390630b8e927fcde67f0a62a_prof);

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
