<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_22d3f5fa11a5fd33d1efbbdb98ea468c11d0349dbc975c9f930df119b57e4419 extends Twig_Template
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
        $__internal_5f83a35b7096cf43165ba23890c82493856a8fdbaca2bf917104fa4818cf8bcf = $this->env->getExtension("native_profiler");
        $__internal_5f83a35b7096cf43165ba23890c82493856a8fdbaca2bf917104fa4818cf8bcf->enter($__internal_5f83a35b7096cf43165ba23890c82493856a8fdbaca2bf917104fa4818cf8bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_5f83a35b7096cf43165ba23890c82493856a8fdbaca2bf917104fa4818cf8bcf->leave($__internal_5f83a35b7096cf43165ba23890c82493856a8fdbaca2bf917104fa4818cf8bcf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
    }
}
