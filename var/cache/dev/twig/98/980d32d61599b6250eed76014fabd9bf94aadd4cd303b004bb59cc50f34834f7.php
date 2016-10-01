<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_5deef09af2cfbabba8213a5ab5d4fa047b5f515711f6b3ba24a3d4029b51c155 extends Twig_Template
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
        $__internal_c3172768f94cdc6bc0f7212badd007c157a263b5f5607a5d3b5119f7c8964abc = $this->env->getExtension("native_profiler");
        $__internal_c3172768f94cdc6bc0f7212badd007c157a263b5f5607a5d3b5119f7c8964abc->enter($__internal_c3172768f94cdc6bc0f7212badd007c157a263b5f5607a5d3b5119f7c8964abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c3172768f94cdc6bc0f7212badd007c157a263b5f5607a5d3b5119f7c8964abc->leave($__internal_c3172768f94cdc6bc0f7212badd007c157a263b5f5607a5d3b5119f7c8964abc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
