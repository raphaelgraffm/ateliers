<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_40a964b171ce8b0549c2d8d4c4bacca96ca0831e7c6d902b4b3a15d714240b76 extends Twig_Template
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
        $__internal_d78981108ac1369079b6c867e3495bbb9c8889f5075f3d4b1cab31264a96f7da = $this->env->getExtension("native_profiler");
        $__internal_d78981108ac1369079b6c867e3495bbb9c8889f5075f3d4b1cab31264a96f7da->enter($__internal_d78981108ac1369079b6c867e3495bbb9c8889f5075f3d4b1cab31264a96f7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d78981108ac1369079b6c867e3495bbb9c8889f5075f3d4b1cab31264a96f7da->leave($__internal_d78981108ac1369079b6c867e3495bbb9c8889f5075f3d4b1cab31264a96f7da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
