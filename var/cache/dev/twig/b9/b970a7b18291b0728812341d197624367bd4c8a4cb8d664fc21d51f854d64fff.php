<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_55449bc050e0fcb1ce79f6d7de5b7ebb936e3d818d9d8d6954d2306a87f1104b extends Twig_Template
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
        $__internal_88704ae018c05dce09d19e14aa026be2b7e4bb47e12918dc11ee2c08c1fb039c = $this->env->getExtension("native_profiler");
        $__internal_88704ae018c05dce09d19e14aa026be2b7e4bb47e12918dc11ee2c08c1fb039c->enter($__internal_88704ae018c05dce09d19e14aa026be2b7e4bb47e12918dc11ee2c08c1fb039c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_88704ae018c05dce09d19e14aa026be2b7e4bb47e12918dc11ee2c08c1fb039c->leave($__internal_88704ae018c05dce09d19e14aa026be2b7e4bb47e12918dc11ee2c08c1fb039c_prof);

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
