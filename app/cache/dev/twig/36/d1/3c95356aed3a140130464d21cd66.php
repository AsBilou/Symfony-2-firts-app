<?php

/* SensioTrainingBundle:Contact:contact.html.twig */
class __TwigTemplate_36d13c95356aed3a140130464d21cd66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "    <form novalidate action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact"), "html", null, true);
        echo "\" novalidate method=\"post\">
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" name=\"submit\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "SensioTrainingBundle:Contact:contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  26 => 2,  20 => 1,);
    }
}
