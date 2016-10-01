<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_0a9d86dcfe8b19ead3c51114815e26aad1a45d1dd77fceaed7dc8b7c13d9691b extends Twig_Template
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
        $__internal_ed9c7ebf3c17001ef90c7a48728f12e6ea84bc4ee49f287cbfad6a21b82a6142 = $this->env->getExtension("native_profiler");
        $__internal_ed9c7ebf3c17001ef90c7a48728f12e6ea84bc4ee49f287cbfad6a21b82a6142->enter($__internal_ed9c7ebf3c17001ef90c7a48728f12e6ea84bc4ee49f287cbfad6a21b82a6142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ed9c7ebf3c17001ef90c7a48728f12e6ea84bc4ee49f287cbfad6a21b82a6142->leave($__internal_ed9c7ebf3c17001ef90c7a48728f12e6ea84bc4ee49f287cbfad6a21b82a6142_prof);

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
