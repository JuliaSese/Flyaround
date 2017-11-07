<?php

/* reservation/index.html.twig */
class __TwigTemplate_00cdc7d5e8551679353e455d86794ce97e4f9bc8ba6e548e5c34d02a90f09e30 extends Twig_Template
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
        $__internal_776d52c4db5cf0b8bf4b17c9cd46f226df15b947495e631256eee29e94766d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_776d52c4db5cf0b8bf4b17c9cd46f226df15b947495e631256eee29e94766d23->enter($__internal_776d52c4db5cf0b8bf4b17c9cd46f226df15b947495e631256eee29e94766d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_04a5947793e08e0eca0d9701f36caf2798c2a400eb6037d1c08e5d20315b4b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a5947793e08e0eca0d9701f36caf2798c2a400eb6037d1c08e5d20315b4b9c->enter($__internal_04a5947793e08e0eca0d9701f36caf2798c2a400eb6037d1c08e5d20315b4b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_776d52c4db5cf0b8bf4b17c9cd46f226df15b947495e631256eee29e94766d23->leave($__internal_776d52c4db5cf0b8bf4b17c9cd46f226df15b947495e631256eee29e94766d23_prof);

        
        $__internal_04a5947793e08e0eca0d9701f36caf2798c2a400eb6037d1c08e5d20315b4b9c->leave($__internal_04a5947793e08e0eca0d9701f36caf2798c2a400eb6037d1c08e5d20315b4b9c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bce8b759f0f1e3e9243b9f6cd10d8a2856f92d457944d2a4d9726dbb9ea15f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bce8b759f0f1e3e9243b9f6cd10d8a2856f92d457944d2a4d9726dbb9ea15f13->enter($__internal_bce8b759f0f1e3e9243b9f6cd10d8a2856f92d457944d2a4d9726dbb9ea15f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a74cbe7dbcc561e8bfe3ebbee22bf561f193e5376d9d318530fcd81c2655104c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74cbe7dbcc561e8bfe3ebbee22bf561f193e5376d9d318530fcd81c2655104c->enter($__internal_a74cbe7dbcc561e8bfe3ebbee22bf561f193e5376d9d318530fcd81c2655104c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_show", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "nbReservedSeats", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["reservation"], "publicationDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reservation"], "publicationDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "passenger", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "flight", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["reservation"], "wasDone", array())) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_show", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_edit", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
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
        
        $__internal_a74cbe7dbcc561e8bfe3ebbee22bf561f193e5376d9d318530fcd81c2655104c->leave($__internal_a74cbe7dbcc561e8bfe3ebbee22bf561f193e5376d9d318530fcd81c2655104c_prof);

        
        $__internal_bce8b759f0f1e3e9243b9f6cd10d8a2856f92d457944d2a4d9726dbb9ea15f13->leave($__internal_bce8b759f0f1e3e9243b9f6cd10d8a2856f92d457944d2a4d9726dbb9ea15f13_prof);

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
        return array (  133 => 44,  126 => 39,  114 => 33,  108 => 30,  97 => 26,  93 => 25,  89 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
                <td>{{ reservation.passenger }}</td>
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
", "reservation/index.html.twig", "/var/www/html/flyaround_seb/app/Resources/views/reservation/index.html.twig");
    }
}
