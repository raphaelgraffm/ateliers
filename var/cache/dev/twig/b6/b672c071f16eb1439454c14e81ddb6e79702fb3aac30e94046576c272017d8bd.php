<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_300bd3fa30f2ce8e2e160a5a00f42874da8f0a64adb076a018378206990b5da7 extends Twig_Template
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
        $__internal_22b460a273cbee85dafe9dc4e3318f493532dfd418ab24dabd3f8703a0b235e4 = $this->env->getExtension("native_profiler");
        $__internal_22b460a273cbee85dafe9dc4e3318f493532dfd418ab24dabd3f8703a0b235e4->enter($__internal_22b460a273cbee85dafe9dc4e3318f493532dfd418ab24dabd3f8703a0b235e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_22b460a273cbee85dafe9dc4e3318f493532dfd418ab24dabd3f8703a0b235e4->leave($__internal_22b460a273cbee85dafe9dc4e3318f493532dfd418ab24dabd3f8703a0b235e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
