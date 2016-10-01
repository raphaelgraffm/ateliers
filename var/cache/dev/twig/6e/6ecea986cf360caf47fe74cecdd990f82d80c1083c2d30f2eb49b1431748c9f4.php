<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_e373e5680de87eb596253fbb14530b16e7b8d6ad93c87a78c547d7b0f152b8cd extends Twig_Template
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
        $__internal_2bd74c6fb8ae5e108402a64c549065baf63c1c68eda818e535669a193481c6eb = $this->env->getExtension("native_profiler");
        $__internal_2bd74c6fb8ae5e108402a64c549065baf63c1c68eda818e535669a193481c6eb->enter($__internal_2bd74c6fb8ae5e108402a64c549065baf63c1c68eda818e535669a193481c6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2bd74c6fb8ae5e108402a64c549065baf63c1c68eda818e535669a193481c6eb->leave($__internal_2bd74c6fb8ae5e108402a64c549065baf63c1c68eda818e535669a193481c6eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
