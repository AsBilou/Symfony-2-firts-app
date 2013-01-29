<?php

/* SensioTrainingBundle:Default:index.html.twig */
class __TwigTemplate_30496ce22d1e8767a86d37d96be7bd79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    Symfony 3000
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!<br/>
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("greet", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "<br/>
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("greet", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SensioTrainingBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  45 => 7,  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
