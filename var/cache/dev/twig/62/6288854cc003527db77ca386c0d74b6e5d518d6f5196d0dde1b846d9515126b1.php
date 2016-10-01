<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_76778afa6178f1e13e65f05ec26700c117ecafc503bbdfd6a850780fefb16047 extends Twig_Template
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
        $__internal_7492e6cb879b001d65a0bfe515a470dffca8e3c8a59742a9dde1b8fbc4a3739f = $this->env->getExtension("native_profiler");
        $__internal_7492e6cb879b001d65a0bfe515a470dffca8e3c8a59742a9dde1b8fbc4a3739f->enter($__internal_7492e6cb879b001d65a0bfe515a470dffca8e3c8a59742a9dde1b8fbc4a3739f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7492e6cb879b001d65a0bfe515a470dffca8e3c8a59742a9dde1b8fbc4a3739f->leave($__internal_7492e6cb879b001d65a0bfe515a470dffca8e3c8a59742a9dde1b8fbc4a3739f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
