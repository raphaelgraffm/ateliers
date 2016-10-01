<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_fde72605f07798ed482b69853b7c154dfe309bf141531d8b2fd687a278c101b8 extends Twig_Template
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
        $__internal_5b65655e06b26229df33df4add008acfc182b2b06fe6b7da408d82a7ea660e6e = $this->env->getExtension("native_profiler");
        $__internal_5b65655e06b26229df33df4add008acfc182b2b06fe6b7da408d82a7ea660e6e->enter($__internal_5b65655e06b26229df33df4add008acfc182b2b06fe6b7da408d82a7ea660e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_5b65655e06b26229df33df4add008acfc182b2b06fe6b7da408d82a7ea660e6e->leave($__internal_5b65655e06b26229df33df4add008acfc182b2b06fe6b7da408d82a7ea660e6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
