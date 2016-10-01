<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_de67eb134f7e40e6a5360655a0c9bbbd57ac380c07a4796bf7857c1d04627edb extends Twig_Template
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
        $__internal_346a03f805710bffe173034335d9752af1fd59bf0713a7813d5a65e443f487db = $this->env->getExtension("native_profiler");
        $__internal_346a03f805710bffe173034335d9752af1fd59bf0713a7813d5a65e443f487db->enter($__internal_346a03f805710bffe173034335d9752af1fd59bf0713a7813d5a65e443f487db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_346a03f805710bffe173034335d9752af1fd59bf0713a7813d5a65e443f487db->leave($__internal_346a03f805710bffe173034335d9752af1fd59bf0713a7813d5a65e443f487db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
