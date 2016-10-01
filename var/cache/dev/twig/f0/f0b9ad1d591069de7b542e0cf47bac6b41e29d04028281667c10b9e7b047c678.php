<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_d44abfbc2a34e84e534b2e0420fe393db3a262d970df2b6af09f616d29e583ec extends Twig_Template
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
        $__internal_127fc4a624db2da5e54522df4554757e11c0750b2454dd08a9812163f2653aa9 = $this->env->getExtension("native_profiler");
        $__internal_127fc4a624db2da5e54522df4554757e11c0750b2454dd08a9812163f2653aa9->enter($__internal_127fc4a624db2da5e54522df4554757e11c0750b2454dd08a9812163f2653aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_127fc4a624db2da5e54522df4554757e11c0750b2454dd08a9812163f2653aa9->leave($__internal_127fc4a624db2da5e54522df4554757e11c0750b2454dd08a9812163f2653aa9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
