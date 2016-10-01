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
        $__internal_0aaa9e156ab65852a0ca930e81a4efcb61f3d178a834aa61ed05f76982c272ad = $this->env->getExtension("native_profiler");
        $__internal_0aaa9e156ab65852a0ca930e81a4efcb61f3d178a834aa61ed05f76982c272ad->enter($__internal_0aaa9e156ab65852a0ca930e81a4efcb61f3d178a834aa61ed05f76982c272ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0aaa9e156ab65852a0ca930e81a4efcb61f3d178a834aa61ed05f76982c272ad->leave($__internal_0aaa9e156ab65852a0ca930e81a4efcb61f3d178a834aa61ed05f76982c272ad_prof);

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
