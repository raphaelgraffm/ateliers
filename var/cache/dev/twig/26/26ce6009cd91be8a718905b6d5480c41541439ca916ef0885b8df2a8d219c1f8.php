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
        $__internal_e2208095b0366217bd4577d5863b1d533a44d7bc4867cae75dea04f580e0f753 = $this->env->getExtension("native_profiler");
        $__internal_e2208095b0366217bd4577d5863b1d533a44d7bc4867cae75dea04f580e0f753->enter($__internal_e2208095b0366217bd4577d5863b1d533a44d7bc4867cae75dea04f580e0f753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_e2208095b0366217bd4577d5863b1d533a44d7bc4867cae75dea04f580e0f753->leave($__internal_e2208095b0366217bd4577d5863b1d533a44d7bc4867cae75dea04f580e0f753_prof);

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
