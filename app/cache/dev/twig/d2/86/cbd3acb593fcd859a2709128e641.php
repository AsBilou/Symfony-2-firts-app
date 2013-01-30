<?php

/* SensioTrainingBundle:Converter:celsius.json.twig */
class __TwigTemplate_d286cbd3acb593fcd859a2709128e641 extends Twig_Template
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
        echo "[
    \"celsius\":    ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["celsius"]) ? $context["celsius"] : $this->getContext($context, "celsius")), "html", null, true);
        echo ",
    \"fahrenheit\": ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["fahrenheit"]) ? $context["fahrenheit"] : $this->getContext($context, "fahrenheit")), "html", null, true);
        echo "
]";
    }

    public function getTemplateName()
    {
        return "SensioTrainingBundle:Converter:celsius.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
