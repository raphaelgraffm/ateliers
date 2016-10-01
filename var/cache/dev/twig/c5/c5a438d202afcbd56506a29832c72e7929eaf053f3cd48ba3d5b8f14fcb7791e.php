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
        $__internal_a2ea033ce5b08883555016312662838db4584eb2b5dd0de75e55e0e5ae61cca0 = $this->env->getExtension("native_profiler");
        $__internal_a2ea033ce5b08883555016312662838db4584eb2b5dd0de75e55e0e5ae61cca0->enter($__internal_a2ea033ce5b08883555016312662838db4584eb2b5dd0de75e55e0e5ae61cca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_a2ea033ce5b08883555016312662838db4584eb2b5dd0de75e55e0e5ae61cca0->leave($__internal_a2ea033ce5b08883555016312662838db4584eb2b5dd0de75e55e0e5ae61cca0_prof);

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
