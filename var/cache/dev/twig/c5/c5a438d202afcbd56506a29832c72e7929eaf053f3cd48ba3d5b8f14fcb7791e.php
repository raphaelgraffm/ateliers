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
        $__internal_c26b231da1665f3d93bf3fab2fd3db9d67f9b3f9cade08afc119a77be490cdbb = $this->env->getExtension("native_profiler");
        $__internal_c26b231da1665f3d93bf3fab2fd3db9d67f9b3f9cade08afc119a77be490cdbb->enter($__internal_c26b231da1665f3d93bf3fab2fd3db9d67f9b3f9cade08afc119a77be490cdbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c26b231da1665f3d93bf3fab2fd3db9d67f9b3f9cade08afc119a77be490cdbb->leave($__internal_c26b231da1665f3d93bf3fab2fd3db9d67f9b3f9cade08afc119a77be490cdbb_prof);

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
