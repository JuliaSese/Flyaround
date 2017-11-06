<?php

/* terrain/index.html.twig */
class __TwigTemplate_8dfb3dbae39622e2aab3ac34697fd6454cbec687546f960ba98a54e4e86e74ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "terrain/index.html.twig", 1);
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
        $__internal_689ce932da4d13408c70a24beb89cacf9f8f584c878767f27dbaba5654f8bd76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_689ce932da4d13408c70a24beb89cacf9f8f584c878767f27dbaba5654f8bd76->enter($__internal_689ce932da4d13408c70a24beb89cacf9f8f584c878767f27dbaba5654f8bd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "terrain/index.html.twig"));

        $__internal_6a936edb4f67cc8b2e2b250d134063e5448cbbab908ac0c77c61cee92bedb530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a936edb4f67cc8b2e2b250d134063e5448cbbab908ac0c77c61cee92bedb530->enter($__internal_6a936edb4f67cc8b2e2b250d134063e5448cbbab908ac0c77c61cee92bedb530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "terrain/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_689ce932da4d13408c70a24beb89cacf9f8f584c878767f27dbaba5654f8bd76->leave($__internal_689ce932da4d13408c70a24beb89cacf9f8f584c878767f27dbaba5654f8bd76_prof);

        
        $__internal_6a936edb4f67cc8b2e2b250d134063e5448cbbab908ac0c77c61cee92bedb530->leave($__internal_6a936edb4f67cc8b2e2b250d134063e5448cbbab908ac0c77c61cee92bedb530_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_23503e568e8199475fb735fa1802157aa162239a05c10eabe00592fdd9fdfe3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23503e568e8199475fb735fa1802157aa162239a05c10eabe00592fdd9fdfe3c->enter($__internal_23503e568e8199475fb735fa1802157aa162239a05c10eabe00592fdd9fdfe3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84a9366d7c15accb51ca29a5d803fd10c3f51ae0db3bbbf9cbf665cc60037672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a9366d7c15accb51ca29a5d803fd10c3f51ae0db3bbbf9cbf665cc60037672->enter($__internal_84a9366d7c15accb51ca29a5d803fd10c3f51ae0db3bbbf9cbf665cc60037672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Terrains list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Icao</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Address</th>
                <th>City</th>
                <th>Zipcode</th>
                <th>Country</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["terrains"]) || array_key_exists("terrains", $context) ? $context["terrains"] : (function () { throw new Twig_Error_Runtime('Variable "terrains" does not exist.', 22, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["terrain"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("terrain_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["terrain"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["terrain"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["terrain"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["terrain"], "icao", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["terrain"], "latitude", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["terrain"], "longitude", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["terrain"], "address", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["terrain"], "city", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["terrain"], "zipcode", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["terrain"], "country", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("terrain_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["terrain"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['terrain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

    
";
        
        $__internal_84a9366d7c15accb51ca29a5d803fd10c3f51ae0db3bbbf9cbf665cc60037672->leave($__internal_84a9366d7c15accb51ca29a5d803fd10c3f51ae0db3bbbf9cbf665cc60037672_prof);

        
        $__internal_23503e568e8199475fb735fa1802157aa162239a05c10eabe00592fdd9fdfe3c->leave($__internal_23503e568e8199475fb735fa1802157aa162239a05c10eabe00592fdd9fdfe3c_prof);

    }

    public function getTemplateName()
    {
        return "terrain/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 42,  117 => 36,  110 => 32,  106 => 31,  102 => 30,  98 => 29,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  76 => 24,  73 => 23,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Terrains list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Icao</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Address</th>
                <th>City</th>
                <th>Zipcode</th>
                <th>Country</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for terrain in terrains %}
            <tr>
                <td><a href=\"{{ path('terrain_show', { 'id': terrain.id }) }}\">{{ terrain.id }}</a></td>
                <td>{{ terrain.name }}</td>
                <td>{{ terrain.icao }}</td>
                <td>{{ terrain.latitude }}</td>
                <td>{{ terrain.longitude }}</td>
                <td>{{ terrain.address }}</td>
                <td>{{ terrain.city }}</td>
                <td>{{ terrain.zipcode }}</td>
                <td>{{ terrain.country }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('terrain_show', { 'id': terrain.id }) }}\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    
{% endblock %}
", "terrain/index.html.twig", "/var/www/html/flyaround/app/Resources/views/terrain/index.html.twig");
    }
}
