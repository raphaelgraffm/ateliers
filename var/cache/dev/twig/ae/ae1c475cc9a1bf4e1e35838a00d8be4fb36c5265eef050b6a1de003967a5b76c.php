<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0eba983ea627acae475441223add97590d53c9c02d97b04d6120d9d1691daca7 extends Twig_Template
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
        $__internal_5a39c68fa31385eb8a12cddefc5931665e34eee8da708d67ede870ed7cf63389 = $this->env->getExtension("native_profiler");
        $__internal_5a39c68fa31385eb8a12cddefc5931665e34eee8da708d67ede870ed7cf63389->enter($__internal_5a39c68fa31385eb8a12cddefc5931665e34eee8da708d67ede870ed7cf63389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5a39c68fa31385eb8a12cddefc5931665e34eee8da708d67ede870ed7cf63389->leave($__internal_5a39c68fa31385eb8a12cddefc5931665e34eee8da708d67ede870ed7cf63389_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
