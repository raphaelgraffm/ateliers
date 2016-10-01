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
        $__internal_f93a97bc5af3af9227de038619a888fbeeba4990824790b3fd6ad9d04ae8aa7b = $this->env->getExtension("native_profiler");
        $__internal_f93a97bc5af3af9227de038619a888fbeeba4990824790b3fd6ad9d04ae8aa7b->enter($__internal_f93a97bc5af3af9227de038619a888fbeeba4990824790b3fd6ad9d04ae8aa7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f93a97bc5af3af9227de038619a888fbeeba4990824790b3fd6ad9d04ae8aa7b->leave($__internal_f93a97bc5af3af9227de038619a888fbeeba4990824790b3fd6ad9d04ae8aa7b_prof);

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
