<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_5687ef9c3b53acc67100e9bd1bd372f13d84163997225adb3a482ac85e42339e extends Twig_Template
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
        $__internal_ac37f52eb2de13021a2cc264fb656df99be5afc5290082e35ce97b2ece116708 = $this->env->getExtension("native_profiler");
        $__internal_ac37f52eb2de13021a2cc264fb656df99be5afc5290082e35ce97b2ece116708->enter($__internal_ac37f52eb2de13021a2cc264fb656df99be5afc5290082e35ce97b2ece116708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_ac37f52eb2de13021a2cc264fb656df99be5afc5290082e35ce97b2ece116708->leave($__internal_ac37f52eb2de13021a2cc264fb656df99be5afc5290082e35ce97b2ece116708_prof);

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
