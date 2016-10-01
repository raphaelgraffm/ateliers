<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_33bb79c19a0d404daf3ccb57b334a881030b17af64c6948636d395fb55070653 extends Twig_Template
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
        $__internal_71e554f6d0767523c1e173698d737a5dae4543fb82fd80ffac58102c4763f79f = $this->env->getExtension("native_profiler");
        $__internal_71e554f6d0767523c1e173698d737a5dae4543fb82fd80ffac58102c4763f79f->enter($__internal_71e554f6d0767523c1e173698d737a5dae4543fb82fd80ffac58102c4763f79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_71e554f6d0767523c1e173698d737a5dae4543fb82fd80ffac58102c4763f79f->leave($__internal_71e554f6d0767523c1e173698d737a5dae4543fb82fd80ffac58102c4763f79f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
