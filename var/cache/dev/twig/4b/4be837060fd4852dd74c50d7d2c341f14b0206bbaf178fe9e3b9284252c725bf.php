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
        $__internal_5cd3b04721351c24bf728e2ae2301f380f4ba6ff2cfeb5ec82f2722351122f9c = $this->env->getExtension("native_profiler");
        $__internal_5cd3b04721351c24bf728e2ae2301f380f4ba6ff2cfeb5ec82f2722351122f9c->enter($__internal_5cd3b04721351c24bf728e2ae2301f380f4ba6ff2cfeb5ec82f2722351122f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5cd3b04721351c24bf728e2ae2301f380f4ba6ff2cfeb5ec82f2722351122f9c->leave($__internal_5cd3b04721351c24bf728e2ae2301f380f4ba6ff2cfeb5ec82f2722351122f9c_prof);

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
