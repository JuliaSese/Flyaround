<?php

/* reservation/index.html.twig */
class __TwigTemplate_300170054e273efe18fc9f13c728f15ba7d7fbd7657ac0c1a456be9a9dc8466b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/index.html.twig", 1);
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
        $__internal_047e898c09afbabb61ba4952b7d5d34e0a643c7886b07c9a954324510df0f761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_047e898c09afbabb61ba4952b7d5d34e0a643c7886b07c9a954324510df0f761->enter($__internal_047e898c09afbabb61ba4952b7d5d34e0a643c7886b07c9a954324510df0f761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_9497dd935f702ba627360ab0b60c2ec729a0469ab7cd0e920f462e8d3b3cefdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9497dd935f702ba627360ab0b60c2ec729a0469ab7cd0e920f462e8d3b3cefdd->enter($__internal_9497dd935f702ba627360ab0b60c2ec729a0469ab7cd0e920f462e8d3b3cefdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_047e898c09afbabb61ba4952b7d5d34e0a643c7886b07c9a954324510df0f761->leave($__internal_047e898c09afbabb61ba4952b7d5d34e0a643c7886b07c9a954324510df0f761_prof);

        
        $__internal_9497dd935f702ba627360ab0b60c2ec729a0469ab7cd0e920f462e8d3b3cefdd->leave($__internal_9497dd935f702ba627360ab0b60c2ec729a0469ab7cd0e920f462e8d3b3cefdd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6dffe3b686ee290e636fa5a19acb9b5b0e6372bbfa9398cc9408e714a259b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6dffe3b686ee290e636fa5a19acb9b5b0e6372bbfa9398cc9408e714a259b31->enter($__internal_f6dffe3b686ee290e636fa5a19acb9b5b0e6372bbfa9398cc9408e714a259b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8bc5ca0f121422785a95c273e322dfffcaa065a9ed640d5471a356071e2a38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8bc5ca0f121422785a95c273e322dfffcaa065a9ed640d5471a356071e2a38e->enter($__internal_f8bc5ca0f121422785a95c273e322dfffcaa065a9ed640d5471a356071e2a38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservations list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nbreservedseats</th>
                <th>Publicationdate</th>
                <th>Passenger</th>
                <th>Flight</th>
                <th>Wasdone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new Twig_Error_Runtime('Variable "reservations" does not exist.', 19, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "nbReservedSeats", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "publicationDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "publicationDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "passenger", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "userName", array()), "html", null, true);
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "flight", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "wasDone", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_new");
        echo "\">Create a new reservation</a>
        </li>
    </ul>
";
        
        $__internal_f8bc5ca0f121422785a95c273e322dfffcaa065a9ed640d5471a356071e2a38e->leave($__internal_f8bc5ca0f121422785a95c273e322dfffcaa065a9ed640d5471a356071e2a38e_prof);

        
        $__internal_f6dffe3b686ee290e636fa5a19acb9b5b0e6372bbfa9398cc9408e714a259b31->leave($__internal_f6dffe3b686ee290e636fa5a19acb9b5b0e6372bbfa9398cc9408e714a259b31_prof);

    }

    public function getTemplateName()
    {
        return "reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 44,  134 => 39,  122 => 33,  116 => 30,  105 => 26,  101 => 25,  89 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Reservations list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nbreservedseats</th>
                <th>Publicationdate</th>
                <th>Passenger</th>
                <th>Flight</th>
                <th>Wasdone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reservation in reservations %}
            <tr>
                <td><a href=\"{{ path('reservation_show', { 'id': reservation.id }) }}\">{{ reservation.id }}</a></td>
                <td>{{ reservation.nbReservedSeats }}</td>
                <td>{% if reservation.publicationDate %}{{ reservation.publicationDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{%for reservation in reservation.passenger %}{{reservation.userName}} {%endfor%}</td>
                <td>{{ reservation.flight }}</td>
                <td>{% if reservation.wasDone %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('reservation_show', { 'id': reservation.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('reservation_edit', { 'id': reservation.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('reservation_new') }}\">Create a new reservation</a>
        </li>
    </ul>
{% endblock %}
", "reservation/index.html.twig", "/var/www/html/flyaround/app/Resources/views/reservation/index.html.twig");
    }
}
