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
        $__internal_9ba406499539ff3f28c1c849cf4ea119f03bb95ac1a441144c3be2a01b532d45 = $this->env->getExtension("native_profiler");
        $__internal_9ba406499539ff3f28c1c849cf4ea119f03bb95ac1a441144c3be2a01b532d45->enter($__internal_9ba406499539ff3f28c1c849cf4ea119f03bb95ac1a441144c3be2a01b532d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_9ba406499539ff3f28c1c849cf4ea119f03bb95ac1a441144c3be2a01b532d45->leave($__internal_9ba406499539ff3f28c1c849cf4ea119f03bb95ac1a441144c3be2a01b532d45_prof);

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
