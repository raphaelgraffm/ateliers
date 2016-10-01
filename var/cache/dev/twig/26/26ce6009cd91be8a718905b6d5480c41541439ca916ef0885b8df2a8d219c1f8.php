<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_8f31d9e1b5d896c65ce3c8ac069e19509b02d0c6bf78fe7bafa7391f132e9b58 extends Twig_Template
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
        $__internal_efc60b1f7e58913353318257b3b635a8955711a23fab5ef5508c1a08431c5c5c = $this->env->getExtension("native_profiler");
        $__internal_efc60b1f7e58913353318257b3b635a8955711a23fab5ef5508c1a08431c5c5c->enter($__internal_efc60b1f7e58913353318257b3b635a8955711a23fab5ef5508c1a08431c5c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_efc60b1f7e58913353318257b3b635a8955711a23fab5ef5508c1a08431c5c5c->leave($__internal_efc60b1f7e58913353318257b3b635a8955711a23fab5ef5508c1a08431c5c5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
    }
}
