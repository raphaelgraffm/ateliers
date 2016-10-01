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
        $__internal_e1fb54af0faf13cd4eea9846d0af9788ebbfb69b3c6c62b08055182f972af95d = $this->env->getExtension("native_profiler");
        $__internal_e1fb54af0faf13cd4eea9846d0af9788ebbfb69b3c6c62b08055182f972af95d->enter($__internal_e1fb54af0faf13cd4eea9846d0af9788ebbfb69b3c6c62b08055182f972af95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e1fb54af0faf13cd4eea9846d0af9788ebbfb69b3c6c62b08055182f972af95d->leave($__internal_e1fb54af0faf13cd4eea9846d0af9788ebbfb69b3c6c62b08055182f972af95d_prof);

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
