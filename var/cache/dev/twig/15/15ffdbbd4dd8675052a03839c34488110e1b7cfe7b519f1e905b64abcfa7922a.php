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
        $__internal_205e135a8c7e3b7bc42334c329eacbeeb1663c0f6b6a55166ead14284aa88e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205e135a8c7e3b7bc42334c329eacbeeb1663c0f6b6a55166ead14284aa88e23->enter($__internal_205e135a8c7e3b7bc42334c329eacbeeb1663c0f6b6a55166ead14284aa88e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSCoavBundle:Default:index.html.twig"));

        $__internal_1cbfeb198c1e1d6405749319e725116d16659602842d559d88df55ec5dde3647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cbfeb198c1e1d6405749319e725116d16659602842d559d88df55ec5dde3647->enter($__internal_1cbfeb198c1e1d6405749319e725116d16659602842d559d88df55ec5dde3647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSCoavBundle:Default:index.html.twig"));

        // line 1
        echo "<h1>Routes disponibles :</h1>
    <ul>
        <li>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_index");
        echo "\">Voir les avions</a>
        </li>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
        echo "\">Voir les reservations</a>
        </li>
        <li>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_index");
        echo "\">Voir les vols</a>
        </li>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("terrain_index");
        echo "\">Voir les terrains</a>
        </li>
        <li>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_index");
        echo "\">Voir tous les avis utilisateurs</a>
        </li>
    </ul>
";
        
        $__internal_205e135a8c7e3b7bc42334c329eacbeeb1663c0f6b6a55166ead14284aa88e23->leave($__internal_205e135a8c7e3b7bc42334c329eacbeeb1663c0f6b6a55166ead14284aa88e23_prof);

        
        $__internal_1cbfeb198c1e1d6405749319e725116d16659602842d559d88df55ec5dde3647->leave($__internal_1cbfeb198c1e1d6405749319e725116d16659602842d559d88df55ec5dde3647_prof);

    }

    public function getTemplateName()
    {
        return "WCSCoavBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  48 => 13,  42 => 10,  36 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Routes disponibles :</h1>
    <ul>
        <li>
            <a href=\"{{ path('planemodel_index') }}\">Voir les avions</a>
        </li>
        <li>
            <a href=\"{{ path('reservation_index') }}\">Voir les reservations</a>
        </li>
        <li>
            <a href=\"{{ path('flight_index') }}\">Voir les vols</a>
        </li>
        <li>
            <a href=\"{{ path('terrain_index') }}\">Voir les terrains</a>
        </li>
        <li>
            <a href=\"{{ path('review_index') }}\">Voir tous les avis utilisateurs</a>
        </li>
    </ul>
", "WCSCoavBundle:Default:index.html.twig", "/var/www/html/flyaround/src/WCS/CoavBundle/Resources/views/Default/index.html.twig");
    }
}
