<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7406d3151d83b190aea544705c6cf556f12d13d3973b6048429f444329ca17ef extends Twig_Template
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
        $__internal_e940343c77a11690998f2ab0ed43b304828884d1b468b7c2ef2ea6ef025ac748 = $this->env->getExtension("native_profiler");
        $__internal_e940343c77a11690998f2ab0ed43b304828884d1b468b7c2ef2ea6ef025ac748->enter($__internal_e940343c77a11690998f2ab0ed43b304828884d1b468b7c2ef2ea6ef025ac748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e940343c77a11690998f2ab0ed43b304828884d1b468b7c2ef2ea6ef025ac748->leave($__internal_e940343c77a11690998f2ab0ed43b304828884d1b468b7c2ef2ea6ef025ac748_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
