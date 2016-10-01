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
        $__internal_a47db394cd1b3f319dea366eceb949703f19f7fd43c935480157ccec3759f3d2 = $this->env->getExtension("native_profiler");
        $__internal_a47db394cd1b3f319dea366eceb949703f19f7fd43c935480157ccec3759f3d2->enter($__internal_a47db394cd1b3f319dea366eceb949703f19f7fd43c935480157ccec3759f3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a47db394cd1b3f319dea366eceb949703f19f7fd43c935480157ccec3759f3d2->leave($__internal_a47db394cd1b3f319dea366eceb949703f19f7fd43c935480157ccec3759f3d2_prof);

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
