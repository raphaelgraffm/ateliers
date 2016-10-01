<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e5555da4b133bf0d24472516fa6ce74f8236c32a35c0ea9af98cca60c0a67e8b extends Twig_Template
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
        $__internal_a1527bc0ddb7bcbd41f128539df7d495fe6e5d810beb431fa4bbf464b87fca61 = $this->env->getExtension("native_profiler");
        $__internal_a1527bc0ddb7bcbd41f128539df7d495fe6e5d810beb431fa4bbf464b87fca61->enter($__internal_a1527bc0ddb7bcbd41f128539df7d495fe6e5d810beb431fa4bbf464b87fca61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a1527bc0ddb7bcbd41f128539df7d495fe6e5d810beb431fa4bbf464b87fca61->leave($__internal_a1527bc0ddb7bcbd41f128539df7d495fe6e5d810beb431fa4bbf464b87fca61_prof);

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
