<?php

/* ::menu.html.twig */
class __TwigTemplate_7245cc2bb15596231b93b094fa3c07da extends Twig_Template
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
        return array (  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
