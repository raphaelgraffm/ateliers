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
        $__internal_71cc498feb63f57a225cc955c67a1a319a1de59294f03c9cffe963b9400f4504 = $this->env->getExtension("native_profiler");
        $__internal_71cc498feb63f57a225cc955c67a1a319a1de59294f03c9cffe963b9400f4504->enter($__internal_71cc498feb63f57a225cc955c67a1a319a1de59294f03c9cffe963b9400f4504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_71cc498feb63f57a225cc955c67a1a319a1de59294f03c9cffe963b9400f4504->leave($__internal_71cc498feb63f57a225cc955c67a1a319a1de59294f03c9cffe963b9400f4504_prof);

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
