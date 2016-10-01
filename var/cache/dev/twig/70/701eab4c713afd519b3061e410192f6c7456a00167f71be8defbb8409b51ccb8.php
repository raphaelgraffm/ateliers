<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_4b3e120d50bc4b109dabae696970aa139cf67aece63921add69645eee5062e5a extends Twig_Template
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
        $__internal_f75a55e6873175009c1bf65d486e8f7b5957fb5f8a0bbae204bc2712b00c595d = $this->env->getExtension("native_profiler");
        $__internal_f75a55e6873175009c1bf65d486e8f7b5957fb5f8a0bbae204bc2712b00c595d->enter($__internal_f75a55e6873175009c1bf65d486e8f7b5957fb5f8a0bbae204bc2712b00c595d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_f75a55e6873175009c1bf65d486e8f7b5957fb5f8a0bbae204bc2712b00c595d->leave($__internal_f75a55e6873175009c1bf65d486e8f7b5957fb5f8a0bbae204bc2712b00c595d_prof);

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
