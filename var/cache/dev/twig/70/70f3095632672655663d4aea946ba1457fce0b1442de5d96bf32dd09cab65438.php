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
        $__internal_9950f72acbb1a10714b9d3314ea02be07acdd32bfc6c38d01567dbfda70b4dcc = $this->env->getExtension("native_profiler");
        $__internal_9950f72acbb1a10714b9d3314ea02be07acdd32bfc6c38d01567dbfda70b4dcc->enter($__internal_9950f72acbb1a10714b9d3314ea02be07acdd32bfc6c38d01567dbfda70b4dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_9950f72acbb1a10714b9d3314ea02be07acdd32bfc6c38d01567dbfda70b4dcc->leave($__internal_9950f72acbb1a10714b9d3314ea02be07acdd32bfc6c38d01567dbfda70b4dcc_prof);

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
