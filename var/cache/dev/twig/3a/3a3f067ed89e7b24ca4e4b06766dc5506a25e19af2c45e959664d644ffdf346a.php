<?php

/* :flight:index.html.twig */
class __TwigTemplate_96275ae6a94dc8f71e93b2f8557a3bd527f077d47745b6fdd2f51377e7ecc7c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":flight:index.html.twig", 1);
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
        $__internal_92f73a99a822c1437c403e5b32c18a177e7a749dcc208cb6c83024bba36cfd2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92f73a99a822c1437c403e5b32c18a177e7a749dcc208cb6c83024bba36cfd2e->enter($__internal_92f73a99a822c1437c403e5b32c18a177e7a749dcc208cb6c83024bba36cfd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":flight:index.html.twig"));

        $__internal_2398ddb05462f06df97538cc670683b473cee75b29ad5061cf9fba1f0090d617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2398ddb05462f06df97538cc670683b473cee75b29ad5061cf9fba1f0090d617->enter($__internal_2398ddb05462f06df97538cc670683b473cee75b29ad5061cf9fba1f0090d617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":flight:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92f73a99a822c1437c403e5b32c18a177e7a749dcc208cb6c83024bba36cfd2e->leave($__internal_92f73a99a822c1437c403e5b32c18a177e7a749dcc208cb6c83024bba36cfd2e_prof);

        
        $__internal_2398ddb05462f06df97538cc670683b473cee75b29ad5061cf9fba1f0090d617->leave($__internal_2398ddb05462f06df97538cc670683b473cee75b29ad5061cf9fba1f0090d617_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b89d7b0af6124ee6cee8348a8f84fa9961eca4b6f0fee659fc07fb78dfc8016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b89d7b0af6124ee6cee8348a8f84fa9961eca4b6f0fee659fc07fb78dfc8016->enter($__internal_8b89d7b0af6124ee6cee8348a8f84fa9961eca4b6f0fee659fc07fb78dfc8016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec80c36af9ce2e9a04ff38b4fa0bf12c8639f9120977c2d2c69b3c95f642e1ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec80c36af9ce2e9a04ff38b4fa0bf12c8639f9120977c2d2c69b3c95f642e1ca->enter($__internal_ec80c36af9ce2e9a04ff38b4fa0bf12c8639f9120977c2d2c69b3c95f642e1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Flights list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Nbfreeseats</th>
                <th>Seatprice</th>
                <th>Takeofftime</th>
                <th>Publicationdate</th>
                <th>Description</th>
                <th>Pilot</th>
                <th>Plane</th>
                <th>Wasdone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["flights"] ?? $this->getContext($context, "flights")));
        foreach ($context['_seq'] as $context["_key"] => $context["flight"]) {
            // line 25
            echo "            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_show", array("id" => $this->getAttribute($context["flight"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["flight"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["flight"], "departure", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["flight"], "arrival", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["flight"], "nbFreeSeats", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["flight"], "seatPrice", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            if ($this->getAttribute($context["flight"], "takeOffTime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["flight"], "takeOffTime", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["flight"], "publicationDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["flight"], "publicationDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["flight"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["flight"], "pilot", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["flight"], "plane", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            if ($this->getAttribute($context["flight"], "wasDone", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_show", array("id" => $this->getAttribute($context["flight"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_edit", array("id" => $this->getAttribute($context["flight"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_new");
        echo "\">Create a new flight</a>
        </li>
    </ul>
";
        
        $__internal_ec80c36af9ce2e9a04ff38b4fa0bf12c8639f9120977c2d2c69b3c95f642e1ca->leave($__internal_ec80c36af9ce2e9a04ff38b4fa0bf12c8639f9120977c2d2c69b3c95f642e1ca_prof);

        
        $__internal_8b89d7b0af6124ee6cee8348a8f84fa9961eca4b6f0fee659fc07fb78dfc8016->leave($__internal_8b89d7b0af6124ee6cee8348a8f84fa9961eca4b6f0fee659fc07fb78dfc8016_prof);

    }

    public function getTemplateName()
    {
        return ":flight:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 54,  153 => 49,  141 => 43,  135 => 40,  124 => 36,  120 => 35,  116 => 34,  112 => 33,  106 => 32,  100 => 31,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  78 => 26,  75 => 25,  71 => 24,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Flights list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Nbfreeseats</th>
                <th>Seatprice</th>
                <th>Takeofftime</th>
                <th>Publicationdate</th>
                <th>Description</th>
                <th>Pilot</th>
                <th>Plane</th>
                <th>Wasdone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for flight in flights %}
            <tr>
                <td><a href=\"{{ path('flight_show', { 'id': flight.id }) }}\">{{ flight.id }}</a></td>
                <td>{{ flight.departure }}</td>
                <td>{{ flight.arrival }}</td>
                <td>{{ flight.nbFreeSeats }}</td>
                <td>{{ flight.seatPrice }}</td>
                <td>{% if flight.takeOffTime %}{{ flight.takeOffTime|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if flight.publicationDate %}{{ flight.publicationDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ flight.description }}</td>
                <td>{{ flight.pilot }}</td>
                <td>{{ flight.plane }}</td>
                <td>{% if flight.wasDone %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('flight_show', { 'id': flight.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('flight_edit', { 'id': flight.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('flight_new') }}\">Create a new flight</a>
        </li>
    </ul>
{% endblock %}
", ":flight:index.html.twig", "/var/www/html/flyaround/app/Resources/views/flight/index.html.twig");
    }
}
