<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_557ea21b1242354c44879f3d54f3baaa8ebedb80961b949704b96713831938d1 extends Twig_Template
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
        $__internal_d992641485b079a2a8b30129950b5c03752ea5e0c7609671eca3089aa9f15478 = $this->env->getExtension("native_profiler");
        $__internal_d992641485b079a2a8b30129950b5c03752ea5e0c7609671eca3089aa9f15478->enter($__internal_d992641485b079a2a8b30129950b5c03752ea5e0c7609671eca3089aa9f15478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d992641485b079a2a8b30129950b5c03752ea5e0c7609671eca3089aa9f15478->leave($__internal_d992641485b079a2a8b30129950b5c03752ea5e0c7609671eca3089aa9f15478_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
