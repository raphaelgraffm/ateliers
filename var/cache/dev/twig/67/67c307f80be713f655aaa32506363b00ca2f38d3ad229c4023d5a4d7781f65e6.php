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
        $__internal_8a7caf89b19b0e36d66bba6b555cc120cdc28acd4f1293bbe737f754834b0551 = $this->env->getExtension("native_profiler");
        $__internal_8a7caf89b19b0e36d66bba6b555cc120cdc28acd4f1293bbe737f754834b0551->enter($__internal_8a7caf89b19b0e36d66bba6b555cc120cdc28acd4f1293bbe737f754834b0551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8a7caf89b19b0e36d66bba6b555cc120cdc28acd4f1293bbe737f754834b0551->leave($__internal_8a7caf89b19b0e36d66bba6b555cc120cdc28acd4f1293bbe737f754834b0551_prof);

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
