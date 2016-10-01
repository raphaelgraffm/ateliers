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
        $__internal_bfc85a902ff1916c6a31205bee47d0bb9f2bb6b87fdddd44cdc5abc0705deec0 = $this->env->getExtension("native_profiler");
        $__internal_bfc85a902ff1916c6a31205bee47d0bb9f2bb6b87fdddd44cdc5abc0705deec0->enter($__internal_bfc85a902ff1916c6a31205bee47d0bb9f2bb6b87fdddd44cdc5abc0705deec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_bfc85a902ff1916c6a31205bee47d0bb9f2bb6b87fdddd44cdc5abc0705deec0->leave($__internal_bfc85a902ff1916c6a31205bee47d0bb9f2bb6b87fdddd44cdc5abc0705deec0_prof);

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
