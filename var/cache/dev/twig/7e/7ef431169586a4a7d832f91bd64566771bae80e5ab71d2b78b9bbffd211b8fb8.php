<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b26208109d52ad59d24a9841ccfff9f749955292240b48c67dd3e923cba129d1 extends Twig_Template
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
        $__internal_3ff77ae3b6e5a3164acd1a48fde2b45c629513e4e2624bc48d313ce1abc7f2a9 = $this->env->getExtension("native_profiler");
        $__internal_3ff77ae3b6e5a3164acd1a48fde2b45c629513e4e2624bc48d313ce1abc7f2a9->enter($__internal_3ff77ae3b6e5a3164acd1a48fde2b45c629513e4e2624bc48d313ce1abc7f2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_3ff77ae3b6e5a3164acd1a48fde2b45c629513e4e2624bc48d313ce1abc7f2a9->leave($__internal_3ff77ae3b6e5a3164acd1a48fde2b45c629513e4e2624bc48d313ce1abc7f2a9_prof);

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
