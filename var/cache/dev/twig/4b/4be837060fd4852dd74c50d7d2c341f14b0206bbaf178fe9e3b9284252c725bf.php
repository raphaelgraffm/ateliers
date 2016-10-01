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
        $__internal_4aad21aa81dddd17242432c6c469d8bb3fe54b785f0489d05f9aa8b84f21019e = $this->env->getExtension("native_profiler");
        $__internal_4aad21aa81dddd17242432c6c469d8bb3fe54b785f0489d05f9aa8b84f21019e->enter($__internal_4aad21aa81dddd17242432c6c469d8bb3fe54b785f0489d05f9aa8b84f21019e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4aad21aa81dddd17242432c6c469d8bb3fe54b785f0489d05f9aa8b84f21019e->leave($__internal_4aad21aa81dddd17242432c6c469d8bb3fe54b785f0489d05f9aa8b84f21019e_prof);

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
