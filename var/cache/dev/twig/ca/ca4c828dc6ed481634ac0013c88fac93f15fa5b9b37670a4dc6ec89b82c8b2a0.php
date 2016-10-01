<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c8d8c2c7917d4f1fdcd7463c09a3e7d71a0149a3ecf38ae51d11c881b7d8d631 extends Twig_Template
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
        $__internal_a1ab6fe2ae77208b91ab40bfc87a29c3c702144ddc92a616559d4af1057fb59d = $this->env->getExtension("native_profiler");
        $__internal_a1ab6fe2ae77208b91ab40bfc87a29c3c702144ddc92a616559d4af1057fb59d->enter($__internal_a1ab6fe2ae77208b91ab40bfc87a29c3c702144ddc92a616559d4af1057fb59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a1ab6fe2ae77208b91ab40bfc87a29c3c702144ddc92a616559d4af1057fb59d->leave($__internal_a1ab6fe2ae77208b91ab40bfc87a29c3c702144ddc92a616559d4af1057fb59d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
