<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_cf60c198fa7b2a5745099dc0ce26124c5851f26865766fc3e48de48371d77429 extends Twig_Template
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
        $__internal_9f2c44c9e7b782306df862e4fe3e4f774e52f19b6170a4c0f4d98ec829c55c05 = $this->env->getExtension("native_profiler");
        $__internal_9f2c44c9e7b782306df862e4fe3e4f774e52f19b6170a4c0f4d98ec829c55c05->enter($__internal_9f2c44c9e7b782306df862e4fe3e4f774e52f19b6170a4c0f4d98ec829c55c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_9f2c44c9e7b782306df862e4fe3e4f774e52f19b6170a4c0f4d98ec829c55c05->leave($__internal_9f2c44c9e7b782306df862e4fe3e4f774e52f19b6170a4c0f4d98ec829c55c05_prof);

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
