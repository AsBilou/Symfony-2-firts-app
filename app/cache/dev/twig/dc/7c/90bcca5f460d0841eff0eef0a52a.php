<?php

/* SensioTrainingBundle:Default:convert.html.twig */
class __TwigTemplate_dc7c90bcca5f460d0841eff0eef0a52a extends Twig_Template
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
        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<converter>
    <celsius>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["celsius"]) ? $context["celsius"] : $this->getContext($context, "celsius")), "html", null, true);
        echo "</celsius>
    <fahrenheit>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["fahrenheit"]) ? $context["fahrenheit"] : $this->getContext($context, "fahrenheit")), "html", null, true);
        echo "</fahrenheit>
</converter>";
    }

    public function getTemplateName()
    {
        return "SensioTrainingBundle:Default:convert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }
}
