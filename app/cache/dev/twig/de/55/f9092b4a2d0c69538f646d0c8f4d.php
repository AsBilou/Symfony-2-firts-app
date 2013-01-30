<?php

/* ::menu.html.twig */
class __TwigTemplate_de55f9092b4a2d0c69538f646d0c8f4d extends Twig_Template
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
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("greet", array("name" => "home")), "html", null, true);
        echo "\">Home</a> |
    <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("greet", array("name" => "about")), "html", null, true);
        echo "\">About</a> |
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("greet", array("name" => "contact")), "html", null, true);
        echo "\">Contact</a> |
</div>";
    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  24 => 2,  19 => 1,  87 => 14,  82 => 13,  77 => 6,  71 => 5,  64 => 20,  62 => 19,  58 => 17,  56 => 16,  53 => 15,  50 => 14,  48 => 13,  43 => 11,  35 => 7,  33 => 6,  23 => 1,  45 => 12,  40 => 6,  37 => 5,  32 => 4,  29 => 5,);
    }
}
