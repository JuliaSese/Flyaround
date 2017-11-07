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
        $__internal_85db264061b14ac9cace03fbb38d15131665ad4e58a33eae801c9395071f766e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85db264061b14ac9cace03fbb38d15131665ad4e58a33eae801c9395071f766e->enter($__internal_85db264061b14ac9cace03fbb38d15131665ad4e58a33eae801c9395071f766e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSCoavBundle:Default:index.html.twig"));

        $__internal_a5c2510a79845bec003850d4a9f83110f85297e08c8b23b05958f7e344d09e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c2510a79845bec003850d4a9f83110f85297e08c8b23b05958f7e344d09e53->enter($__internal_a5c2510a79845bec003850d4a9f83110f85297e08c8b23b05958f7e344d09e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSCoavBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_85db264061b14ac9cace03fbb38d15131665ad4e58a33eae801c9395071f766e->leave($__internal_85db264061b14ac9cace03fbb38d15131665ad4e58a33eae801c9395071f766e_prof);

        
        $__internal_a5c2510a79845bec003850d4a9f83110f85297e08c8b23b05958f7e344d09e53->leave($__internal_a5c2510a79845bec003850d4a9f83110f85297e08c8b23b05958f7e344d09e53_prof);

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
", "WCSCoavBundle:Default:index.html.twig", "/var/www/html/flyaround_seb/src/WCS/CoavBundle/Resources/views/Default/index.html.twig");
    }
}
