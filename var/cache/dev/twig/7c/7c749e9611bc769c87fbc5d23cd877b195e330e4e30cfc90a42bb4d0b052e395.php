<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_9e06f016c150665dc2acf496fe95cbbf4c1b2f662999cd23924f8860c4883f83 extends Twig_Template
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
        $__internal_e3f2de98ee9ca6388a4963819f40eaa5b5b80a4026a6f5d26885f09f9c1ee7da = $this->env->getExtension("native_profiler");
        $__internal_e3f2de98ee9ca6388a4963819f40eaa5b5b80a4026a6f5d26885f09f9c1ee7da->enter($__internal_e3f2de98ee9ca6388a4963819f40eaa5b5b80a4026a6f5d26885f09f9c1ee7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e3f2de98ee9ca6388a4963819f40eaa5b5b80a4026a6f5d26885f09f9c1ee7da->leave($__internal_e3f2de98ee9ca6388a4963819f40eaa5b5b80a4026a6f5d26885f09f9c1ee7da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
