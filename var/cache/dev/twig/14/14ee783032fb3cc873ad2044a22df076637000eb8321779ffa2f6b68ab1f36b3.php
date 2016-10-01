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
        $__internal_264d12d7c40ee171235c6c17e4ca73e9ba06577d16cf2a026f82a24ad4ab424d = $this->env->getExtension("native_profiler");
        $__internal_264d12d7c40ee171235c6c17e4ca73e9ba06577d16cf2a026f82a24ad4ab424d->enter($__internal_264d12d7c40ee171235c6c17e4ca73e9ba06577d16cf2a026f82a24ad4ab424d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_264d12d7c40ee171235c6c17e4ca73e9ba06577d16cf2a026f82a24ad4ab424d->leave($__internal_264d12d7c40ee171235c6c17e4ca73e9ba06577d16cf2a026f82a24ad4ab424d_prof);

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
