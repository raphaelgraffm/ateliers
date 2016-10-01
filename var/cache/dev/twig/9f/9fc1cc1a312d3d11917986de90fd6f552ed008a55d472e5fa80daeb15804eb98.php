<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_542815bf683ad6f50dc32005450a28928b5e22f7a66c07d59358ba60146bb7fa extends Twig_Template
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
        $__internal_e87024143a5f1258e5b315846fc6365debc5211918756d9786e58aff94f5acd8 = $this->env->getExtension("native_profiler");
        $__internal_e87024143a5f1258e5b315846fc6365debc5211918756d9786e58aff94f5acd8->enter($__internal_e87024143a5f1258e5b315846fc6365debc5211918756d9786e58aff94f5acd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e87024143a5f1258e5b315846fc6365debc5211918756d9786e58aff94f5acd8->leave($__internal_e87024143a5f1258e5b315846fc6365debc5211918756d9786e58aff94f5acd8_prof);

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
