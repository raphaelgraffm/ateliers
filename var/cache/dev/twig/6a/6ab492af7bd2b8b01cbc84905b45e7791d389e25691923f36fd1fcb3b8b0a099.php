<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f3e47d68b56f1cb9b09cb2e569fdcfaf1ca605e462783028e6771c206025524b extends Twig_Template
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
        $__internal_cbed93f0cbe4d6b9ce2577a81e1bcb4834675d3972e30cfa348cf4d049fd77a9 = $this->env->getExtension("native_profiler");
        $__internal_cbed93f0cbe4d6b9ce2577a81e1bcb4834675d3972e30cfa348cf4d049fd77a9->enter($__internal_cbed93f0cbe4d6b9ce2577a81e1bcb4834675d3972e30cfa348cf4d049fd77a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_cbed93f0cbe4d6b9ce2577a81e1bcb4834675d3972e30cfa348cf4d049fd77a9->leave($__internal_cbed93f0cbe4d6b9ce2577a81e1bcb4834675d3972e30cfa348cf4d049fd77a9_prof);

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
