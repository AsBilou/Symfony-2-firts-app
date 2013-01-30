<?php

/* ::base.html.twig */
class __TwigTemplate_bc1628c9777634b9a7de38762f2941a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"header\">
            ";
        // line 11
        $this->env->loadTemplate("::menu.html.twig")->display(array_merge($context, array("id" => "menu_top")));
        // line 12
        echo "        </div>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "        <div id=\"footer\">
            ";
        // line 16
        $this->env->loadTemplate("::menu.html.twig")->display(array_merge($context, array("id" => "menu_botom")));
        // line 17
        echo "        </div>
        <div style=\"float:right\">
            ";
        // line 19
        echo $this->env->getExtension('actions')->renderAction($this->env->getExtension('routing')->getUrl("live_counter"), array(), array());
        // line 20
        echo "        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 14,  82 => 13,  77 => 6,  71 => 5,  64 => 20,  62 => 19,  58 => 17,  56 => 16,  53 => 15,  50 => 14,  48 => 13,  43 => 11,  35 => 7,  33 => 6,  23 => 1,  45 => 12,  40 => 6,  37 => 5,  32 => 3,  29 => 5,);
    }
}
