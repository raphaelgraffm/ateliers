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
        $__internal_a853798e0e1c01e3130ae320764ef3e5d1500d82a19edb2135aef402ec7cec83 = $this->env->getExtension("native_profiler");
        $__internal_a853798e0e1c01e3130ae320764ef3e5d1500d82a19edb2135aef402ec7cec83->enter($__internal_a853798e0e1c01e3130ae320764ef3e5d1500d82a19edb2135aef402ec7cec83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_a853798e0e1c01e3130ae320764ef3e5d1500d82a19edb2135aef402ec7cec83->leave($__internal_a853798e0e1c01e3130ae320764ef3e5d1500d82a19edb2135aef402ec7cec83_prof);

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
