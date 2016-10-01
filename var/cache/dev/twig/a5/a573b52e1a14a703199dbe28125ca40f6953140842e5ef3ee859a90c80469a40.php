<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_de2c328b5d0a3b3630311fe88f1695fae9cdec4b941ee0ca05c6dcd96115a670 extends Twig_Template
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
        $__internal_57b0e9311daf3bfbea4f49bc0d9159c24e4e3122b32db857b1c5da9bd154dbb7 = $this->env->getExtension("native_profiler");
        $__internal_57b0e9311daf3bfbea4f49bc0d9159c24e4e3122b32db857b1c5da9bd154dbb7->enter($__internal_57b0e9311daf3bfbea4f49bc0d9159c24e4e3122b32db857b1c5da9bd154dbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_57b0e9311daf3bfbea4f49bc0d9159c24e4e3122b32db857b1c5da9bd154dbb7->leave($__internal_57b0e9311daf3bfbea4f49bc0d9159c24e4e3122b32db857b1c5da9bd154dbb7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
    }
}
