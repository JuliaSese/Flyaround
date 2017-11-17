<?php

/* WCSCoavBundle:Default:index.html.twig */
class __TwigTemplate_c8763cf63f5696531bcaf2c90800dfcbf2221d3e8a7de8b7e27130482d2541df extends Twig_Template
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
        $__internal_41116f6c2e968047232f4effa98b6468c268682d4fd41936b014f4fe81c4dac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41116f6c2e968047232f4effa98b6468c268682d4fd41936b014f4fe81c4dac3->enter($__internal_41116f6c2e968047232f4effa98b6468c268682d4fd41936b014f4fe81c4dac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSCoavBundle:Default:index.html.twig"));

        $__internal_69c3f8390384d97d94dbffcf55ddf0778c00125b549dbd25ed2d6361d9aba855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c3f8390384d97d94dbffcf55ddf0778c00125b549dbd25ed2d6361d9aba855->enter($__internal_69c3f8390384d97d94dbffcf55ddf0778c00125b549dbd25ed2d6361d9aba855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSCoavBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_41116f6c2e968047232f4effa98b6468c268682d4fd41936b014f4fe81c4dac3->leave($__internal_41116f6c2e968047232f4effa98b6468c268682d4fd41936b014f4fe81c4dac3_prof);

        
        $__internal_69c3f8390384d97d94dbffcf55ddf0778c00125b549dbd25ed2d6361d9aba855->leave($__internal_69c3f8390384d97d94dbffcf55ddf0778c00125b549dbd25ed2d6361d9aba855_prof);

    }

    public function getTemplateName()
    {
        return "WCSCoavBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "WCSCoavBundle:Default:index.html.twig", "/var/www/html/flyaround/src/WCS/CoavBundle/Resources/views/Default/index.html.twig");
    }
}
