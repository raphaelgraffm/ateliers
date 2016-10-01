<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_d63b9781124c99349eed3c0272213b3f8421ae913d164f38b058f8d6441c3268 extends Twig_Template
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
        $__internal_bc0cabff1114a2cba3a3f4a788d70f21c242348f541cc2f72e3775ead6403795 = $this->env->getExtension("native_profiler");
        $__internal_bc0cabff1114a2cba3a3f4a788d70f21c242348f541cc2f72e3775ead6403795->enter($__internal_bc0cabff1114a2cba3a3f4a788d70f21c242348f541cc2f72e3775ead6403795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_bc0cabff1114a2cba3a3f4a788d70f21c242348f541cc2f72e3775ead6403795->leave($__internal_bc0cabff1114a2cba3a3f4a788d70f21c242348f541cc2f72e3775ead6403795_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
