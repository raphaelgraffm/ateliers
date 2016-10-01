<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_530deda6147b03b7e5f6132ec6c5e5efcf9447471300c876f555360dab13dc3d extends Twig_Template
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
        $__internal_0d1567efff96009c87f132e3139c1acf4761c885d0486fe8b782d11d33a2c6a5 = $this->env->getExtension("native_profiler");
        $__internal_0d1567efff96009c87f132e3139c1acf4761c885d0486fe8b782d11d33a2c6a5->enter($__internal_0d1567efff96009c87f132e3139c1acf4761c885d0486fe8b782d11d33a2c6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_0d1567efff96009c87f132e3139c1acf4761c885d0486fe8b782d11d33a2c6a5->leave($__internal_0d1567efff96009c87f132e3139c1acf4761c885d0486fe8b782d11d33a2c6a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
    }
}
