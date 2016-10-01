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
        $__internal_a3708b99f0c501c66a169d60d08048cce2c377f585d48ff50dadc35e0a4a91ad = $this->env->getExtension("native_profiler");
        $__internal_a3708b99f0c501c66a169d60d08048cce2c377f585d48ff50dadc35e0a4a91ad->enter($__internal_a3708b99f0c501c66a169d60d08048cce2c377f585d48ff50dadc35e0a4a91ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a3708b99f0c501c66a169d60d08048cce2c377f585d48ff50dadc35e0a4a91ad->leave($__internal_a3708b99f0c501c66a169d60d08048cce2c377f585d48ff50dadc35e0a4a91ad_prof);

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
