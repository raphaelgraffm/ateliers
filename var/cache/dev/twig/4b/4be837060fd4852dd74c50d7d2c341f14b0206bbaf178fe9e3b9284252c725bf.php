<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_22314d3a4a3bfd84851d359598064288834254e4adf16553e053d6081401a32e extends Twig_Template
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
        $__internal_3f228d17e00da67636c81d196f710b049ec4cdf9aa2b66f49ccfa2fcc126c782 = $this->env->getExtension("native_profiler");
        $__internal_3f228d17e00da67636c81d196f710b049ec4cdf9aa2b66f49ccfa2fcc126c782->enter($__internal_3f228d17e00da67636c81d196f710b049ec4cdf9aa2b66f49ccfa2fcc126c782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3f228d17e00da67636c81d196f710b049ec4cdf9aa2b66f49ccfa2fcc126c782->leave($__internal_3f228d17e00da67636c81d196f710b049ec4cdf9aa2b66f49ccfa2fcc126c782_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
