<?php

/* :terrain:show.html.twig */
class __TwigTemplate_354a1fb1367048d05a9cbc3414dada6ccf227c9d324719de652105092990318f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":terrain:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc9be68fee2414905ce6c9d0de06d275d47e1f2c7d4804c8515795fa4cdf2091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc9be68fee2414905ce6c9d0de06d275d47e1f2c7d4804c8515795fa4cdf2091->enter($__internal_fc9be68fee2414905ce6c9d0de06d275d47e1f2c7d4804c8515795fa4cdf2091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":terrain:show.html.twig"));

        $__internal_66d787967cb3ef4ca15a5379651b9abfed9e263ce59b7db3667e697fc9f5793c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d787967cb3ef4ca15a5379651b9abfed9e263ce59b7db3667e697fc9f5793c->enter($__internal_66d787967cb3ef4ca15a5379651b9abfed9e263ce59b7db3667e697fc9f5793c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":terrain:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc9be68fee2414905ce6c9d0de06d275d47e1f2c7d4804c8515795fa4cdf2091->leave($__internal_fc9be68fee2414905ce6c9d0de06d275d47e1f2c7d4804c8515795fa4cdf2091_prof);

        
        $__internal_66d787967cb3ef4ca15a5379651b9abfed9e263ce59b7db3667e697fc9f5793c->leave($__internal_66d787967cb3ef4ca15a5379651b9abfed9e263ce59b7db3667e697fc9f5793c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b3525093f4f122c8f4b20cdaaa313eb917def159d316c3ea6b7baf9d2e83c85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b3525093f4f122c8f4b20cdaaa313eb917def159d316c3ea6b7baf9d2e83c85->enter($__internal_1b3525093f4f122c8f4b20cdaaa313eb917def159d316c3ea6b7baf9d2e83c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d08eb724f51cae5f6ad534a6a57bd7d6c27def7aea94dc8e812c1c2430f50b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d08eb724f51cae5f6ad534a6a57bd7d6c27def7aea94dc8e812c1c2430f50b1->enter($__internal_1d08eb724f51cae5f6ad534a6a57bd7d6c27def7aea94dc8e812c1c2430f50b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Terrain</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["terrain"] ?? $this->getContext($context, "terrain")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["terrain"] ?? $this->getContext($context, "terrain")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Icao</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["terrain"] ?? $this->getContext($context, "terrain")), "icao", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Latitude</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["terrain"] ?? $this->getContext($context, "terrain")), "latitude", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Longitude</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["terrain"] ?? $this->getContext($context, "terrain")), "longitude", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["terrain"] ?? $this->getContext($context, "terrain")), "address", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>City</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["terrain"] ?? $this->getContext($context, "terrain")), "city", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Zipcode</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["terrain"] ?? $this->getContext($context, "terrain")), "zipcode", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["terrain"] ?? $this->getContext($context, "terrain")), "country", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("terrain_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1d08eb724f51cae5f6ad534a6a57bd7d6c27def7aea94dc8e812c1c2430f50b1->leave($__internal_1d08eb724f51cae5f6ad534a6a57bd7d6c27def7aea94dc8e812c1c2430f50b1_prof);

        
        $__internal_1b3525093f4f122c8f4b20cdaaa313eb917def159d316c3ea6b7baf9d2e83c85->leave($__internal_1b3525093f4f122c8f4b20cdaaa313eb917def159d316c3ea6b7baf9d2e83c85_prof);

    }

    public function getTemplateName()
    {
        return ":terrain:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 49,  113 => 42,  106 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Terrain</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ terrain.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ terrain.name }}</td>
            </tr>
            <tr>
                <th>Icao</th>
                <td>{{ terrain.icao }}</td>
            </tr>
            <tr>
                <th>Latitude</th>
                <td>{{ terrain.latitude }}</td>
            </tr>
            <tr>
                <th>Longitude</th>
                <td>{{ terrain.longitude }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ terrain.address }}</td>
            </tr>
            <tr>
                <th>City</th>
                <td>{{ terrain.city }}</td>
            </tr>
            <tr>
                <th>Zipcode</th>
                <td>{{ terrain.zipcode }}</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>{{ terrain.country }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('terrain_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":terrain:show.html.twig", "/var/www/html/flyaround/app/Resources/views/terrain/show.html.twig");
    }
}
