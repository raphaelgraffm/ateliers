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
        $__internal_2a6705af96edcc479458da463a50f8238cd1a92c6fe5fcd3847e170fb095beb4 = $this->env->getExtension("native_profiler");
        $__internal_2a6705af96edcc479458da463a50f8238cd1a92c6fe5fcd3847e170fb095beb4->enter($__internal_2a6705af96edcc479458da463a50f8238cd1a92c6fe5fcd3847e170fb095beb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2a6705af96edcc479458da463a50f8238cd1a92c6fe5fcd3847e170fb095beb4->leave($__internal_2a6705af96edcc479458da463a50f8238cd1a92c6fe5fcd3847e170fb095beb4_prof);

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
