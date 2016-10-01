<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_5deef09af2cfbabba8213a5ab5d4fa047b5f515711f6b3ba24a3d4029b51c155 extends Twig_Template
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
        $__internal_04a0f34dce584e2f92b68778b58f28594ffdc6b6e07c639174c5d9f3a5352c06 = $this->env->getExtension("native_profiler");
        $__internal_04a0f34dce584e2f92b68778b58f28594ffdc6b6e07c639174c5d9f3a5352c06->enter($__internal_04a0f34dce584e2f92b68778b58f28594ffdc6b6e07c639174c5d9f3a5352c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_04a0f34dce584e2f92b68778b58f28594ffdc6b6e07c639174c5d9f3a5352c06->leave($__internal_04a0f34dce584e2f92b68778b58f28594ffdc6b6e07c639174c5d9f3a5352c06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
