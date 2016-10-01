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
        $__internal_e9516c3adea573c08d731935c2dd6020014b8229ec8c9b8205cacdb31273da3f = $this->env->getExtension("native_profiler");
        $__internal_e9516c3adea573c08d731935c2dd6020014b8229ec8c9b8205cacdb31273da3f->enter($__internal_e9516c3adea573c08d731935c2dd6020014b8229ec8c9b8205cacdb31273da3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e9516c3adea573c08d731935c2dd6020014b8229ec8c9b8205cacdb31273da3f->leave($__internal_e9516c3adea573c08d731935c2dd6020014b8229ec8c9b8205cacdb31273da3f_prof);

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
