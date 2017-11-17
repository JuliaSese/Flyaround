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
        $__internal_a94d6dec52d8ac77a96ab219db48b1dac50ceeb18f4ee29978d4c2234a34ea9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a94d6dec52d8ac77a96ab219db48b1dac50ceeb18f4ee29978d4c2234a34ea9f->enter($__internal_a94d6dec52d8ac77a96ab219db48b1dac50ceeb18f4ee29978d4c2234a34ea9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_0c11ba2e491d3eb4a8113811de8ae05dd2989b96017e942d41b22da4505de807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c11ba2e491d3eb4a8113811de8ae05dd2989b96017e942d41b22da4505de807->enter($__internal_0c11ba2e491d3eb4a8113811de8ae05dd2989b96017e942d41b22da4505de807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a94d6dec52d8ac77a96ab219db48b1dac50ceeb18f4ee29978d4c2234a34ea9f->leave($__internal_a94d6dec52d8ac77a96ab219db48b1dac50ceeb18f4ee29978d4c2234a34ea9f_prof);

        
        $__internal_0c11ba2e491d3eb4a8113811de8ae05dd2989b96017e942d41b22da4505de807->leave($__internal_0c11ba2e491d3eb4a8113811de8ae05dd2989b96017e942d41b22da4505de807_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4173676e04d98c04d00c5d28ebad942ff8d8cb1fd523b5aaffe6263099e5d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4173676e04d98c04d00c5d28ebad942ff8d8cb1fd523b5aaffe6263099e5d8e->enter($__internal_b4173676e04d98c04d00c5d28ebad942ff8d8cb1fd523b5aaffe6263099e5d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_101afb0c74dad966f8e7fb9ab88f1e36c4299ca36d4aee810a82a3d3231640ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_101afb0c74dad966f8e7fb9ab88f1e36c4299ca36d4aee810a82a3d3231640ca->enter($__internal_101afb0c74dad966f8e7fb9ab88f1e36c4299ca36d4aee810a82a3d3231640ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservations list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nbreservedseats</th>
                <th>Publicationdate</th>
                <th>Wasdone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_show", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "nbReservedSeats", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["reservation"], "publicationDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reservation"], "publicationDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
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
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_show", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
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
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_new");
        echo "\">Create a new reservation</a>
        </li>
    </ul>
";
        
        $__internal_101afb0c74dad966f8e7fb9ab88f1e36c4299ca36d4aee810a82a3d3231640ca->leave($__internal_101afb0c74dad966f8e7fb9ab88f1e36c4299ca36d4aee810a82a3d3231640ca_prof);

        
        $__internal_b4173676e04d98c04d00c5d28ebad942ff8d8cb1fd523b5aaffe6263099e5d8e->leave($__internal_b4173676e04d98c04d00c5d28ebad942ff8d8cb1fd523b5aaffe6263099e5d8e_prof);

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
        return array (  123 => 40,  116 => 35,  104 => 29,  98 => 26,  87 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
