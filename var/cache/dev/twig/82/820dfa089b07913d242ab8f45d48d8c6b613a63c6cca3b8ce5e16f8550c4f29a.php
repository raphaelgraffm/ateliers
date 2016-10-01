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
        $__internal_d541bb4396faf4050d38e00aaafd83b767b2e33cb27c276702f7841f4ad8dd60 = $this->env->getExtension("native_profiler");
        $__internal_d541bb4396faf4050d38e00aaafd83b767b2e33cb27c276702f7841f4ad8dd60->enter($__internal_d541bb4396faf4050d38e00aaafd83b767b2e33cb27c276702f7841f4ad8dd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d541bb4396faf4050d38e00aaafd83b767b2e33cb27c276702f7841f4ad8dd60->leave($__internal_d541bb4396faf4050d38e00aaafd83b767b2e33cb27c276702f7841f4ad8dd60_prof);

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
