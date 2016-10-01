<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_f02cb75c0706db7ee800f09f418d97c056d25f70b34a3902f3a7424f71b463b2 extends Twig_Template
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
        $__internal_30ec1f530bed6cbc8e8e86f3d51a3c60044ad91aafdbe10455e0820064f918ed = $this->env->getExtension("native_profiler");
        $__internal_30ec1f530bed6cbc8e8e86f3d51a3c60044ad91aafdbe10455e0820064f918ed->enter($__internal_30ec1f530bed6cbc8e8e86f3d51a3c60044ad91aafdbe10455e0820064f918ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_30ec1f530bed6cbc8e8e86f3d51a3c60044ad91aafdbe10455e0820064f918ed->leave($__internal_30ec1f530bed6cbc8e8e86f3d51a3c60044ad91aafdbe10455e0820064f918ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
