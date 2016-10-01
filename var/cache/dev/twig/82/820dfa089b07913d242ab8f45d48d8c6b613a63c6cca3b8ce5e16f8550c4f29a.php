<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_815efa18ad0f2da8bf0518f38467268747b20f66631a3036087c21d374ec826b extends Twig_Template
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
        $__internal_eeb364144ebb5656a3ea65d395bae936cee3d5cf052744c101a66a53c532fc30 = $this->env->getExtension("native_profiler");
        $__internal_eeb364144ebb5656a3ea65d395bae936cee3d5cf052744c101a66a53c532fc30->enter($__internal_eeb364144ebb5656a3ea65d395bae936cee3d5cf052744c101a66a53c532fc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_eeb364144ebb5656a3ea65d395bae936cee3d5cf052744c101a66a53c532fc30->leave($__internal_eeb364144ebb5656a3ea65d395bae936cee3d5cf052744c101a66a53c532fc30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
