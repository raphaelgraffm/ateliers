<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_27f60bcf44a695c616ca46d6d63b9a2d77951ae444775d38f5e7eb7b5a2500b7 extends Twig_Template
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
        $__internal_c17d9f81f5a34b5464eba47189ded87d73f07dd89af684d2f6f6515179183923 = $this->env->getExtension("native_profiler");
        $__internal_c17d9f81f5a34b5464eba47189ded87d73f07dd89af684d2f6f6515179183923->enter($__internal_c17d9f81f5a34b5464eba47189ded87d73f07dd89af684d2f6f6515179183923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c17d9f81f5a34b5464eba47189ded87d73f07dd89af684d2f6f6515179183923->leave($__internal_c17d9f81f5a34b5464eba47189ded87d73f07dd89af684d2f6f6515179183923_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
